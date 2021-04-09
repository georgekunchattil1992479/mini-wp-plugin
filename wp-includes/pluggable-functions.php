<?php 

/*
Plugin Name: Pluggable Functions
Description: Basic example demonstrating pluggable functions.
Plugin URI: https:// plugin-planet.com
Author: George Jacob
Version: 1.0
*/


/*Pluggable functions helps to customize WordPress core functions wit custom functionalities*/

function wp_logout() {
	wp_destroy_current_session();
	wp_clear_auth_cookie();
	myplugin_custom_logout();


	/**
	 * Fires after a user is logged-out.
	 *
	 * @since 1.5.0
	 */
	do_action('wp_logout');
}



// customize logout function
function myplugin_custom_logout() {

	//do something when the user logs out..

}
