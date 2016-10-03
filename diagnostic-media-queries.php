<?php
/*
** Plugin Name: Diagnostic Media Queries
Plugin URI: http:///paul.barthmaier.rocks
Description: This plugin shows breakpoints on the frontend which are helpful when refining media queries.
Author URI: http://paul.barthmaier.rocks
Version: 1.2
*/


/******************************
* global variables
******************************/

$dmq_prefix = 'dmq_';
$dmq_plugin_name = 'Diagnostic Media Queries';

// retrieve our plugin settings from the options table
$dmq_options = get_option( 'dmq_settings' );

/******************************
* includes
******************************/

include( 'inc/display-functions.php' );
