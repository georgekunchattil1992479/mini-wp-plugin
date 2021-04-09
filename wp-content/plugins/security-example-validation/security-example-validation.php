<?php 

/*
Plugin Name: Security Example Vaidation
Description: Basic example demonstrating  Validation plugin with security
Plugin URI: https:// plugin-planet.com
Author: George Jacob
Version: 1.0
*/


//validate phone number
function myplugin_is_phone_number($phone_number) {

	// check if empty
	if (empty($phone_number))  return false;

	// check format. check phone number is valid or not. Validtion is checked using WP function preg_match()
	if (!preg_match("/^\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})$/", $phone_number)) return false;

	// all good!  
	return true;
}


// display form
function myplugin_form_phone_number() {
	?>

	<form method="post">
		<p><label for="phone">Please enter your phone number:</label></p>
		<p><input id="phone" type="tel" name="myplugin-phone-number"></p>
		<p><input type="submit" value="Submit Form"></p>
	</form>

<?php

}


// process submitted form
function myplugin_process_phone_number() {
	if (isset($_POST['myplugin-phone-number'])) {
		$phone_number = $_POST['myplugin-phone-number'];

		if (myplugin_is_phone_number($phone_number)) {
			echo '<p>Thank you for your phone number!</p>';
		}

		else {
			echo '<p>Please provide a valid phone number!</p>';
		}
	}
}

