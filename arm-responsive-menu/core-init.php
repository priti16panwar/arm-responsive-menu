<?php 
/*
*
*	***** Aspire Responsive Menu *****
*
*	This file initializes all ARM Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('ARM_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('ARM_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('ARM_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('ARM_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function arm_register_core_css(){
	wp_enqueue_style('arm-component', ARM_CORE_CSS . 'arm-component.css',null,time(),'all');
	wp_enqueue_style('arm-default', ARM_CORE_CSS . 'arm-default.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'arm_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function arm_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('arm-modernizr.custom', ARM_CORE_JS . 'arm-modernizr.custom.js','jquery',time(),true);
wp_enqueue_script('arm-jquery.dlmenu', ARM_CORE_JS . 'arm-jquery.dlmenu.js','jquery',time(),true);

};
add_action( 'wp_enqueue_scripts', 'arm_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( ARM_CORE_INC . 'arm-core-functions.php' ) ) {
	require_once ARM_CORE_INC . 'arm-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( ARM_CORE_INC . 'arm-ajax-request.php' ) ) {
	require_once ARM_CORE_INC . 'arm-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( ARM_CORE_INC . 'arm-shortcodes.php' ) ) {
	require_once ARM_CORE_INC . 'arm-shortcodes.php';
}