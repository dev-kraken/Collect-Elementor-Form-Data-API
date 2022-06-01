<?php
// By Somandeep Singh
//Copyright: Kraken (SB)

// Admin Enqueue  Scripts & Css
function devkraken_scripts()
{
    // CSS Stylesheet
    wp_enqueue_style('sb-main-style', plugin_dir_url( __FILE__ ) . '../assets/css/main.css', array(), '1.0', 'all');
    // jQuery Stylesheet
    wp_enqueue_script('sb-main-script', plugin_dir_url( __FILE__ ) . '../assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'devkraken_scripts');
?>