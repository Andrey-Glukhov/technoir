<?php
/*
* Technoir functions and definitions  (technoir)
*/

function technoir_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
  }
  add_action('init', 'technoir_theme_setup');

if ( ! function_exists( 'technoir_setup' ) ) :

function technoir_setup() {
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'audio',
		'gallery',
		'image',
		'link',
		'quote',
		'status',
		'video',
	) );
}
endif;
add_action( 'after_setup_theme', 'technoir_setup' );



/**
 * Enqueue scripts and styles.
 */
function technoir_scripts() {

	 // unregister jQuery
	 wp_deregister_script('jquery-core');
	 wp_deregister_script('jquery');
   
	 // register
	 wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	 wp_register_script( 'jquery', false, array('jquery-core'), null, true );
   
	 // enqueue
	 wp_enqueue_script( 'jquery' );
	 // Bootstrap
 	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );

	wp_enqueue_style( 'technoir-style', get_template_directory_uri() . '/css/tn_css.css' );


	wp_enqueue_script( 'technoir-javascript', get_template_directory_uri() . '/js/tn_js.js', array( 'jquery' ), '20210606', true );

	
}
add_action( 'wp_enqueue_scripts', 'technoir_scripts' );


 // Add Woocommerce support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
  }
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
 

