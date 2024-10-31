<?php
/**
 * Plugin Name:       Post-Url-Redirect
 * Plugin URI:        https://wordpress.org/plugins/post-url-redirect/
 * Description:       Redirect any page to an internal or external URL
 * Version:           1.0.2
 * Requires at least: 3.8  
 * Requires PHP:      7.2
 * Author:            Haziq Khatri
 * Author URI:        https://www.linkedin.com/in/haziq-khatri-bb586b192/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
/**
 


/**
 * Security, checks if WordPress is running
 **/
if ( !function_exists( 'add_action' ) ) :
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
endif;



/**
 * Kickstart
 */
if ( is_admin() )
	require_once( 'classes/class.redirector.admin.php' );
else
	require_once( 'classes/class.redirector.php' );
