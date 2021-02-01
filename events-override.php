<?php
/**
 * @package TE Override
 * @version 1.0
 */
/*
Plugin Name: Tribe Events Overrides
Plugin URI: https://bellaworksweb.com
Description: Overrides some core functionaliy for the Events Calendar.
Author: Austin Crane
Version: 1.0
Author URI: https://bellaworksweb.com
*/
/**
 * Dequeue tribe-events.min.js file. 
 * Date: 11/20/17
 */

add_action( 'wp_enqueue_scripts', 'deregister_tribe_styles' );
 
add_action('wp_enqueue_scripts', 'custom_tribe_bellaworks_style');

function custom_tribe_bellaworks_style() {
	wp_register_style( 'calendar-styles',  plugin_dir_url( __FILE__ ) . 'calendar-styles.css' );
    wp_enqueue_style( 'calendar-styles' );
}