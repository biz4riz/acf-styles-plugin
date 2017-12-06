<?php

/*
Plugin Name: Advanced Custom Fields Styles
Plugin URI: http://thinkbigfish.com
Description: Custom plugin to overwrite some of the default field styles of the Advanced Custom Fields plugin
Author: Bigfish Creative Group
Version: 1.0
Author URI: http://thinkbigfish.com
*/

function acf_styles() {
    wp_enqueue_style('acf-styles', plugins_url('acf-styles.css', __FILE__));

}

add_action('admin_enqueue_scripts', 'acf_styles');

function add_acf_scripts() {
wp_register_script('acf_script', plugins_url('acf-scripts.js', __FILE__), array('jquery'),'1.1', false);
wp_enqueue_script('acf_script');
}

add_action( 'admin_enqueue_scripts', 'add_acf_scripts' );