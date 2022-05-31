<?php
/**
 * 
 * Add access page in admin dashboard with custom icon.
 * 
 */

function web_panther_options_panel()
{
    // Main page
    add_menu_page('Wordpress Lead API', 'WP Lead API', 'manage_options', 'web_panther-options', 'wps_web_panther_func', 'dashicons-web_panther');
    // Sub page (Dropmenu page)
    add_submenu_page('web_panther-options', 'How to Use', 'How to Use', 'manage_options', 'web_panther-op-settings', 'wps_web_panther_func_settings');
}
add_action('admin_menu', 'web_panther_options_panel');
/**
 * 
 * Main page Contant what showing in admin dasboard
 * 
 */
function wps_web_panther_func()
{
    $siteurl = site_url();
    echo "<img class='api_img' src=" . esc_url( plugins_url('../image/api_img.png', __FILE__)) .">";
    echo "<h1 class='wht_api'>What is an API? (Application Programming Interface)</h1>
    <span class='para'>API is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other.<br> Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you’re using an API.</span>";
    echo "<h1 class='wht_api 1'>Here is your API</h1>";
    echo "<h1 class='apiurl'>$siteurl/web-panther-api</h1>";
    echo '<button class="clipboard">Click me to copy current Url</button>
            <h5 class="copied_txt">Have you already clicked?</h5>';
    $url1 = $siteurl . '/web-panther-api';
    echo "<div class='img_txt'><img class='web_panther_main' src=" . esc_url( plugins_url('../image/web_panther_bg.png', __FILE__)) ."><h1 class='web_panther_txt'>By Web Panther</h1></div>";
    ?>
    <script type="text/javascript">
        var $url = '<?php echo esc_url($url1); ?>';
    </script>
<?php
}
/**
 * 
 * Sub page Contant what showing in admin dasboard
 * 
 */
function wps_web_panther_func_settings()
{
    echo '<div class="wrap"><h2>Make Sure you use the same Shotcode for Elementor Form</h2></div>';
    echo "<h1 class='step_txt'>Here is all Shortcode for form</h1>";
    echo '<p>For name = [field id="name"]</p>';
    echo  '<p>For email = [field id="email"]</p>';
    echo '<p>For phone = [field id="phone"]</p>';

    echo "<h1>Here is some Example Where you can your Shortcode</h1>";

    echo "<h1 class='step_txt'>Step 1</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step1.png', __FILE__)) .">";
    echo "<h1 class='step_txt'>Step 2</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step2.png', __FILE__)) .">";
    echo "<h1 class='step_txt'>Step 3</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step3.png', __FILE__)) .">";
    echo "<h1 class='step_txt'>Step 4</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step4.png', __FILE__)) .">";
    echo "<h1 class='step_txt'>Step 5</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step5.png', __FILE__)) .">";
    echo "<h1 class='step_txt'>Step 6</h1>";
    echo "<img class='help_img' src=" . esc_url( plugins_url('../image/help/step6.png', __FILE__)) .">";
}
?>