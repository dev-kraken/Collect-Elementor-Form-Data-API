<?php
/*
 *Plugin Name:        Web Panther Lead
 *Plugin URI:         https://github.com/somanbandesha
 *Description:        This Plugin helps you to collect your Contact Form data and save in your SQL/DB and make API call for you, so you can access your data with any Platform!
 *Version:            1.1.0
 *Requires at least:  5.2
 *Requires PHP:       5.2.4
 *Author:             Web Panther (Soman Bandesha)
 *Author URI:         https://somanbandesha.netlify.app/
 *License:            GPL-2.0+
 *License URI:        http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Calling Important Files for Plugin

/**
 *
 * Create Template ( Web Panther API )
 *
 **/
require_once plugin_dir_path(__FILE__) . './create_template.php';
/**
 *
 * Script & Css Exceute
 *
 **/
require_once plugin_dir_path(__FILE__) . '/includes/style-script.php';
/**
 *
 * Admin Dashboard Showing Plugin in list, Like (Pages)
 *
 **/
require_once plugin_dir_path(__FILE__) . '/includes/web_panther_admin.php';
/**
 *
 * Elementor Function Graph Submission information
 *
 **/
require_once plugin_dir_path(__FILE__) . '/elementor/elementor_web-panther.php';

///////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/**
 *
 * Creating Database[db] || When Plugin Activate
 *
 **/
function sbwordpreslead_on_activation()
{
    // create the custom table
    global $wpdb;

    $table_name = $wpdb->prefix . 'sb_wordpress_lead';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        full_name varchar(80) NOT NULL,
        email varchar(50) NOT NULL ,
        phone varchar(50) NOT NULL,
        date_time DATETIME  NOT NULL default CURRENT_TIMESTAMP) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
// Resgister Activation Funtion
register_activation_hook(__FILE__, 'sbwordpreslead_on_activation');
/**
 *
 * Add Custom ICON for Plugin; Like (dashicon)
 *
 **/
function web_panther_icon()
{
    echo '
      <style>
      .dashicons-web_panther::before{
          content: "";
          background-image: url("' . esc_url( plugins_url('/image/web_panther_gray.png', __FILE__)) .'");
          background-repeat: no-repeat;
          background-position: center;
          background-size: 20px 21px;
      }
      #adminmenu .wp-has-current-submenu div.wp-menu-image.dashicons-before.dashicons-web_panther::before{
        content: "";
        background-image: url("'. esc_url( plugins_url('/image/web_panther_white.png', __FILE__)) .'");
    }
      </style>
  ';
}
// Add Css in Header for ICON (dashicon)
add_action('admin_head', 'web_panther_icon');

/**
 *
 * Add Custom ICON for Plugin; Like (dashicon)
 *
 **/
function web_panther_page()
{
    $page_title1 = 'WEB PANTHER API';
    if (get_page_by_title($page_title1) == null) {
        $API_URL = array(
            'post_title' => $page_title1,
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'web_panther_api.php',
        );
        $insert_page = wp_insert_post($API_URL);
        update_option('web_panther_api', $insert_page);
    }
}
// Resgister Activation Funtion
register_activation_hook(__FILE__, 'web_panther_page');
