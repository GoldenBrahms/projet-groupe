<?php
/**
 * Plugin Name: Custom Login
 * Description: This plugin lets you add the custom login  feature on any post or page by using shortcodes.
 * Plugin URI: https://websiteguider.com
 * Author: WebsiteGuider
 * Author URI: https://websiteguider.com
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: custom-login
 * 
 */

 /**
 * Enqueue scripts
 *
 * == main.js ==  This file adds client side checking to our login and register pages.
 */

 function custom_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
     wp_enqueue_scripts('main-js', plugins_url() . '/custom-plugin/js/main.js', array('jquery'), false, false); 

 }
 add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts');

 // Define constants so we can use them as shortcuts
 define("SHORTCODES_PATH", plugin_dir_path( __FILE__ ). 'shortcodes');
 define("FUNCTIONS_PATH", plugin_dir_path( __FILE__ ). 'functions');
 
 // Include the required Files
require_once SHORTCODES_PATH . '/login-shortcode.php';
require_once FUNCTIONS_PATH . '/login-functions.php';
require_once FUNCTIONS_PATH . '/custom-login-functions.php';