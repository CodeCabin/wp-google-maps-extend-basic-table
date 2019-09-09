<?php
/*
Plugin Name: WP Google Maps - Extend Advanced Table
Description: This plugin provides an example of how to extend the Advanced Table marker listing using the factory method. This example shows how to swap the address and description columns.
Version: 1.0
*/

add_action('init', function() {
	
	require_once(plugin_dir_path(__FILE__) . 'class.my-custom-advanced-table.php');
	
});
