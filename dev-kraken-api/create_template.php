<?php
/**
 *  Load template from specific page
 */
add_filter('page_template', 'dev_kraken_page_template');
function dev_kraken_page_template($page_template)
{
    if (get_page_template_slug() == 'dev_kraken_api.php') {
        $page_template = dirname(__FILE__) . '/templates/dev_kraken_api.php';
    }
    return $page_template;
}
/**
 * Add "Custom" template to page attirbute template section.
 */
add_filter('theme_page_templates', 'dev_kraken_add_template_to_select', 10, 4);
function dev_kraken_add_template_to_select($post_templates, $wp_theme, $post, $post_type)
{

    // Add custom template named template-custom.php to select dropdown
    $post_templates['dev_kraken_api.php'] = __('Dev Kraken Api');

    return $post_templates;
}
