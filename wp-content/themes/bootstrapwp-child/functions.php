<?php


// Include the Redux theme options Framework
if ( !class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/redux/framework.php' );
}

// Register all the theme options
require_once( get_stylesheet_directory() . '/inc/redux-config.php' );


// Theme options functions
require_once(  get_template_directory() . '/inc/bswp-options.php' );


