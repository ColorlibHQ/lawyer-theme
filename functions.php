<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'LAWYER_DIR_URI' ) ) {
	define( 'LAWYER_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'LAWYER_DIR_ASSETS_URI' ) ) {
	define( 'LAWYER_DIR_ASSETS_URI', LAWYER_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'LAWYER_DIR_CSS_URI' ) ) {
	define( 'LAWYER_DIR_CSS_URI', LAWYER_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'LAWYER_DIR_JS_URI' ) ) {
	define( 'LAWYER_DIR_JS_URI', LAWYER_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'LAWYER_DIR_IMGS_URI' ) ) {
	define( 'LAWYER_DIR_IMGS_URI', LAWYER_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'LAWYER_DIR_ICON_IMG_URI' ) ) {
	define( 'LAWYER_DIR_ICON_IMG_URI', LAWYER_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'LAWYER_DIR_PATH' ) ) {
	define( 'LAWYER_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'LAWYER_DIR_PATH_INC' ) ) {
	define( 'LAWYER_DIR_PATH_INC', LAWYER_DIR_PATH . 'inc/' );
}

//Lawyer Libraries Folder Directory
if ( ! defined( 'LAWYER_DIR_PATH_LIBS' ) ) {
	define( 'LAWYER_DIR_PATH_LIBS', LAWYER_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'LAWYER_DIR_PATH_CLASSES' ) ) {
	define( 'LAWYER_DIR_PATH_CLASSES', LAWYER_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'LAWYER_DIR_PATH_HOOKS' ) ) {
	define( 'LAWYER_DIR_PATH_HOOKS', LAWYER_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function lawyer_admin_script(){
    wp_enqueue_style( 'lawyer-admin', get_template_directory_uri().'/assets/css/lawyer-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'lawyer_admin', get_template_directory_uri().'/assets/js/lawyer-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'lawyer_admin_script' );



/**
 * Include File
 *
 */
require_once( LAWYER_DIR_PATH_INC . 'lawyer-breadcrumbs.php' );
require_once( LAWYER_DIR_PATH_INC . 'lawyer-widgets-reg.php' );
require_once( LAWYER_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( LAWYER_DIR_PATH_INC . 'post-like.php' );
require_once( LAWYER_DIR_PATH_INC . 'lawyer-functions.php' );
require_once( LAWYER_DIR_PATH_INC . 'lawyer-commoncss.php' );
require_once( LAWYER_DIR_PATH_INC . 'support-functions.php' );
require_once( LAWYER_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( LAWYER_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( LAWYER_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( LAWYER_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( LAWYER_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( LAWYER_DIR_PATH_HOOKS . 'hooks.php' );
require_once( LAWYER_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( LAWYER_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( LAWYER_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Lawyer object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Lawyer = new Lawyer();