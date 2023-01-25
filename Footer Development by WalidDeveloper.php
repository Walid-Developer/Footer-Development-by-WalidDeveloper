<?php
/*
Plugin Name: Footer Development by WalidDeveloper.com
Plugin URI: https://www.waliddeveloper.com/footer-development-plugin
Description: This plugin adds custom content to the footer of your WordPress site.
Author: WalidDeveloper.com
Version: 1.0
Author URI: https://www.waliddeveloper.com
*/

function custom_footer_content() {
    echo '<p>Copyright © ' . date('Y') . ' <a href="https://www.waliddeveloper.com">WalidDeveloper.com</a></p>';
}
add_action('wp_footer', 'custom_footer_content');
?>