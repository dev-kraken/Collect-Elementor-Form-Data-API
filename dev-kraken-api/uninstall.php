<?php
// Kraken
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
global $wpdb;
/**
 *     Delete Page which one plugin created
 **/
$wpdb->query("DELETE FROM wp_posts WHERE post_name = 'dev-kraken-api'");
/**
 *     Delete SQL database [db] which one plugin created
 **/
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}dev_kraken_lead");
