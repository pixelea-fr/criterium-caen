<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'criterium_register_nav_menu' ) ) {

	function criterium_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'criterium' ),
	    	'footer_menu'  => __( 'Footer Menu', 'criterium' ),
		) );
	}
	add_action( 'after_setup_theme', 'criterium_register_nav_menu', 0 );
}