<?php 

/*
Plugin Name: Karks Session Expiration
Plugin URI: https://www.karks.com
Description: A custom plugin that reduces the life of WordPress user sessions for administrators. It trades a tiny bit of convenience for increased security.
Version: 1.0
Author: Eric Karkovack
Author URI: https://www.karks.com
Text Domain: karksessionexp
*/

add_filter( 'auth_cookie_expiration', 'karks_session_cookie_expiration', 10, 3 );

function karks_session_cookie_expiration( $expiration, $user_id, $remember ) {
	
	if ( current_user_can('activate_plugins') ): // Is the user an administrator?
	
		// Set the expiration time to 2 hours from now
		$expiration = 2 * HOUR_IN_SECONDS;

		// Return the modified expiration time
		return $expiration;
	
	endif;
}