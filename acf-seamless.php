<?php
/*
Plugin Name: ACF Seamless
Description: Restore the seamless style to ACF Field Groups when using the Gutenberg editor.
Version:     1.0.0
Author:      Chris Yee
Author URI:  https://chrisyee.ca
License:     MIT
Text Domain: cmyee-acf-seamless
*/

/**
 * Register JS
 */

function cmyee_acf_seamless_js( $hook ) {
    wp_enqueue_script( 'cmyee-acf-seamless', plugins_url( 'js/acf-seamless.js', __FILE__ ) );
}

add_action( 'admin_enqueue_scripts', 'cmyee_acf_seamless_js' );
