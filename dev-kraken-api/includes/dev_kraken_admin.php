<?php
/**
 * 
 * Add access page in admin dashboard with custom icon.
 * 
 */

function dev_kraken_options_panel()
{
    // Main page
    add_menu_page('Wordpress Lead API', 'WP Lead API', 'manage_options', 'dev_kraken-options', 'wps_dev_kraken_func', 'dashicons-dev_kraken');
    // Sub page (Dropmenu page)
    add_submenu_page('dev_kraken-options', 'How to Use', 'How to Use', 'manage_options', 'dev_kraken-op-settings', 'wps_dev_kraken_func_settings');
}
add_action('admin_menu', 'dev_kraken_options_panel');
/**
 * 
 * Main page Contant what showing in admin dasboard
 * 
 */

function wps_dev_kraken_func()
{
    $siteurl = site_url();
    // Plugin Dashboard Header
    echo "<div class='plugindash_header'>";
    echo "<img class='api_img' src=" . esc_url( plugins_url('../image/modeling.png', __FILE__)) .">";
    echo "<h1 class='wht_api'>What is an API? (Application Programming Interface)</h1>";
    echo "</div>";
    // end

    // APi Text Info What is API
    echo "<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');</style>";
    echo "<div class='wht_apiinfo'>";
    echo "<span class='para'>API is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other.<br> Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you’re using an API.</span>";
    echo "</div>";
    //end

    // Api Header | Link 
    echo "<div class='api_header_link'>";
    echo "<h1 class='your_api_link'>Here is your Data API</h1>";
    // icon link
    echo "<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css');</style>";
    // end
    echo "<a href='$siteurl/dev-kraken-api' class='apiurl' target='_blank'>$siteurl/dev-kraken-api</a>";
    echo "</div>";
    // end

    // API Button 
    echo "<div class='dev_kraken_button'>";
    echo "<button class='dev-kraken-btn clipboard'>Click to copy <b>API Url</b></button>
            <h5 class='copied_txt'>Have you already clicked?</h5>";
    $url1 = $siteurl . '/dev-kraken-api';
    echo "</div>";
    // end

    // Powered By Dev Kraken
    echo "<div class='footer_dev-kraken'>
    <img class='dev_kraken_logo' src=" . esc_url( plugins_url('../image/main_dev_kraken.png', __FILE__)) .">
    <h1 class='dev_kraken_txt'>By Web Panther</h1>
    </div>";
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
function wps_dev_kraken_func_settings()
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