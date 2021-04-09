<?php

/*
Plugin Name: Security Example: Data Sanitization
Description: Example demonstrating data sanitization.
Plugin URI: https://plugin-planet.com
Author: George Jacob
Version: 1.0

*/

// display form
function myplugin_form_favorite_movie() {
	?>

	<form method="post">
		<p><label for="movie">What is your favourite movie?</label></p>
	</form>

<?php

}
add_action('form_movie', 'myplugin_form_favorite_movie');



// process submitted form
function myplugin_process_favorite_movie() {

	if (isset($_POST['myplugin-favorite-movie'])) {
		$fav_movie = sanitize_text_field($_POST['myplugin-favorite-movie']);

		if (!empty($fav_movie)) {
			echo '<p>Your favorite movie is '.$fav_movie .'.</p>';
		}
		else {
			echo '<p>Please enter your favorite movie!</p>';
		}
	}
}
add_action('process_movie', 'myplugin_process_favorite_movie');
