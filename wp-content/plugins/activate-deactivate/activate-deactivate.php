<?php

/*
Plugin Name: Deactivation & Activation
Description: Example demonstrating activation, deactivation, and uninstall hooks.
Plugin URI: https://plugin-planet.com
Author: George Jacob
Version: 1.0
*/


//do stuff on activation. Activate hook function used for activate plugin
function myplugin_onactivation() {
	if(!current_user_can('activate_plugins')) return;

	add_option('myplugin_posts_per_page', 10); //10 posts shown per page
	add_option('myplugin_show_welcome_page', true); //show welcome message
}
register_activation_hook(_FILE_, 'myplugin_onactivation'); // _FILE _ --> means path to current file



// do stuff on deactivation. deactivate hook function used for deactivate the plugin
function myplugin_on_deactivation() {

	// wp_die('The plugin has been deactivated!');

	if (!current_user_can('activate_plugins')) return; 

    //this function used like custom post types. flush_rewrite_rules() removes functionality while clicking deactivate option
	flush_rewrite_rules(); 
}

register_deactivation_hook(_FILE_, 'myplugin_on_deactivation');



//do stuff on uninstall. uninstall hook function used to uninstall plugin
function myplugin_on_uninstall() { 

	if (!current_user_can('activate_plugins'))  return;

	delete_option('myplugin_posts_per_page', 10);
	delete_option('myplugin_show_welcome_page', true);
}

//remove options and functionality in plugin when click "Delete" button of that WordPress plugin
register_uninstall_hook(_FILE_, 'myplugin_on_uninstall'); 