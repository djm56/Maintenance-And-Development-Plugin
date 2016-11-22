<?php

/**
 *
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           wpza-maintenance
 */

/**
 * WPZA Maintenance Mode Page
 *
 * Displays the template maintenance-template.php in the template folder
 * This plugin allows you to still login.
 *
 * @return void
 */
function wpza_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
            
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
                
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'custom/template.php' ) ) {
                    require_once( plugin_dir_path( __FILE__ ) . 'custom/template.php' );
		} else {
                    require_once( plugin_dir_path( __FILE__ ) . 'default/template.php' );
                }
		die();
	}
}

add_action( 'wp_loaded', 'wpza_maintenance_mode' );