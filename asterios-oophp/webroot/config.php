<?php
/**
* Config-file for Asterios. Change settings here to affect installation.
*
*/

/**
* Set the error reporting.
*
*/
error_reporting(-1);    //Report all type of errors
ini_set('display_errors', 1);	//Display all errors
ini_set('output_buffering', 0); //Do not buffer outputs, write directly
/**
*	Define Astrios paths.
*
*/
define('ANAX_INSTALL_PATH', __dir__. '/..');
define('ANAX_THEME_PATH', ANAX_INSTALL_PATH . '/theme/render.php');

/**
*	Include bootstrapping functions.
*
*/
include(ANAX_INSTALL_PATH.'/src/bootstrap.php');

/**
* Start the session.
*
*/
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/**
* Create the Asterios variable.
*
*/

$asterios=array();

/**
*	Site wide settings.
*
*/

$asterios['lang']='sv';
$asterios['title_append']=' | Asterios an webbtemplate';

/**
 * Theme related settings.
 *
 */
$asterios['stylesheet'] = 'css/style.css';
$asterios['favicon']    = 'favicon.ico';

/**
 * Google analytics.
 *
 */
$anax['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics