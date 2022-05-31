<?php
// By Somandeep Singh
//Copyright: Kraken (SB)
// Enqueue  Scripts & Css
function sb_add_scripts()
{
    // CSS Stylesheet
    wp_enqueue_style('sb-main-style', plugins_url( '../assets/css/main.css', __FILE__ ), array(), '1.0', 'all');
    // jQuery Stylesheet
    wp_enqueue_script('sb-main-script', plugins_url( '../assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sb_add_scripts');
// End

// Admin Enqueue  Scripts & Css
function sb_sb_scripts()
{
    // CSS Stylesheet
    wp_enqueue_style('sb-main-style', plugins_url( '../assets/css/main.css', __FILE__ ), array(), '1.0', 'all');
    // jQuery Stylesheet
    wp_enqueue_script('sb-main-script', plugins_url( '../assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true);
    // Image Upload
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'sb_sb_scripts');
?>