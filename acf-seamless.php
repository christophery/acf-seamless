<?php
/*
Plugin Name: ACF Seamless
Description: Restore the seamless style to ACF Field Groups when using the Gutenberg editor.
Version:     1.1
Author:      Chris Yee
Author URI:  https://chrisyee.ca
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Text Domain: acf-seamless
*/

/*
* Register CSS
*/

function acf_seamless_register_css(){
	wp_register_style( 'acf-seamless', plugins_url( 'css/acf-seamless.css', __FILE__ ) );
	wp_enqueue_style( 'acf-seamless' );
}

add_action('init', 'acf_seamless_register_css');

/**
 * Register JS
 */

function acf_seamless_register_js() {
    wp_enqueue_script( 'acf-seamless', plugins_url( 'js/acf-seamless.js', __FILE__ ) );
}

add_action( 'admin_enqueue_scripts', 'acf_seamless_register_js' );
