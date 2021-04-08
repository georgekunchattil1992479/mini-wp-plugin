<?php

/*
Plugin Name: Deactivation & Activation
Description: Example demonstrating activation, deactivation, and uninstall hooks.
Plugin URI: https://plugin-planet.com
Author: George Jacob
Version: 1.0
*/


//do stuff on activation
function myplugin_onactivation() {
	if(!current_user_can('activate_plugins')) return;

	add_option('myplugin_posts_per_page', 10); //10 posts shown per page
	add_option('myplugin_show_welcome_page', true); //show welcome message
}
register_activation_hook(_FILE_, 'myplugin_onactivation'); // _FILE _ --> means path to current file