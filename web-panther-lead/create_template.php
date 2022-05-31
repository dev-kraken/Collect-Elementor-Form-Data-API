<?php
/**
 *  Load template from specific page
 */
add_filter('page_template', 'web_panther_page_template');
function web_panther_page_template($page_template)
{
    if (get_page_template_slug() == 'web_panther_api.php') {
        $page_template = dirname(__FILE__) . '/templates/web_panther_api.php';
    }
    return $page_template;
}
/**
 * Add "Custom" template to page attirbute template section.
 */
add_filter('theme_page_templates', 'web_panther_add_template_to_select', 10, 4);
function web_panther_add_template_to_select($post_templates, $wp_theme, $post, $post_type)
{

    // Add custom template named template-custom.php to select dropdown
    $post_templates['web_panther_api.php'] = __('Web Panther Api');

    return $post_templates;
}
