<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
global $wpdb;
/**
 *     Delete Page which one plugin created
 **/
$wpdb->query("DELETE FROM wp_post WHERE post_name = 'web-panther-api'");
/**
 *     Delete SQL database [db] which one plugin created
 **/
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}sb_wordpress_lead");
