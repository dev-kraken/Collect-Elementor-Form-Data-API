<?php
/*
 *Plugin Name:        Dev Kraken Lead
 *Plugin URI:         https://github.com/somanbandesha
 *Description:        This Plugin helps you to collect your Contact Form data and save in your SQL/DB and make API call for you, so you can access your data with any Platform!
 *Version:            1.1.0
 *Requires at least:  5.2
 *Requires PHP:       5.2.4
 *Author:             Dev Kraken (Soman Bandesha)
 *Author URI:         https://somanbandesha.netlify.app/
 *License:            GPL-2.0+
 *License URI:        http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Calling Important Files for Plugin

/**
 *
 * Create Template ( Dev Kraken API )
 *
 **/
require_once plugin_dir_path(__FILE__) . './create_template.php';
/**
 *
 * Script & Css Exceute
 *
 **/
require_once plugin_dir_path(__FILE__) . '/includes/cssjsregistered.php';
/**
 *
 * Admin Dashboard Showing Plugin in list, Like (Pages)
 *
 **/
require_once plugin_dir_path(__FILE__) . '/includes/dev_kraken_admin.php';
/**
 *
 * Elementor Function Graph Submission information
 *
 **/
require_once plugin_dir_path(__FILE__) . '/elementor/elementor_dev-kraken.php';

///////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/**
 *
 * Creating Database[db] || When Plugin Activate
 *
 **/
function devkrakenlead_activation()
{
    // create the custom table
    global $wpdb;

    $table_name = $wpdb->prefix . 'dev_kraken_lead';
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
register_activation_hook(__FILE__, 'devkrakenlead_activation');
/**
 *
 * Add Custom ICON for Plugin; Like (dashicon)
 *
 **/
function dev_kraken_icon()
{
    echo '
      <style>
      .dashicons-dev_kraken::before{
          content: "";
          background-image: url("' . esc_url( plugins_url('/image/dev_kraken_gray.png', __FILE__)) .'");
          background-repeat: no-repeat;
          background-position: center;
          background-size: 20px 21px;
      }
      #adminmenu .wp-has-current-submenu div.wp-menu-image.dashicons-before.dashicons-dev_kraken::before{
        content: "";
        background-image: url("'. esc_url( plugins_url('/image/dev_kraken_white.png', __FILE__)) .'");
    }
      </style>
  ';
}
// Add Css in Header for ICON (dashicon)
add_action('admin_head', 'dev_kraken_icon');

/**
 *
 * Add Custom ICON for Plugin; Like (dashicon)
 *
 **/
function devkraken_custompage()
{
    $page_title1 = 'Dev Kraken API';
    if (get_page_by_title($page_title1) == null) {
        $API_URL = array(
            'post_title' => $page_title1,
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'dev_kraken_api.php',
        );
        $insert_page = wp_insert_post($API_URL);
        update_option('dev_kraken_api', $insert_page);
    }
}
// Resgister Activation Funtion
register_activation_hook(__FILE__, 'devkraken_custompage');
