<?php

/******************************
* script control
******************************/

function dmq_load_scripts() {
	wp_enqueue_style( 'diagnostic', plugins_url( 'css/diagnostic.css', __FILE__ ) );
    wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); 

	// $script = get_template_directory_uri() . '/library/myscript.js';

	$script = plugins_url( 'js/hide-show.js', __FILE__ );
	wp_enqueue_script( 'hide-show', 
						$script, 
						array ( 'jquery', 'jquery-ui'), 
						false,
						false
					);
	// if ( is_singular() ) {
		// wp_enqueue_style( 'dmq-styles', plugin_dir_url( __FILE__ ) . 'css/media-query.css' );
	// }
}
add_action( 'wp_enqueue_scripts', 'dmq_load_scripts' );

add_action( 'wp_head', 'one2_show_template' );
function one2_show_template() {
	global $template;
	// $current_user = wp_get_current_user();
	// if ( 3 == $current_user->ID ) {

		echo '<div class="the-debug-bar"><button id="clickme" class="the-debug-button">Debug</button><div id="the-debug-bar"></div></div>';

	// }
}
