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
 

// Remove woocommerce breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// Remove shop page result count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
// Remove shop page catalog ordering
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Remove shop loop item title
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

// Remove shop loop after_shop_loop_item_title
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

// Remove shop loop after_shop_loop_item add to cart
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Remove single produst page related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Remove single produst page data tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// Remove single prodict meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Remove single prodict short description
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


// Remove single product price 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

// Hide shop page title
add_filter('woocommerce_show_page_title', 'hide_shop_page_title');

function hide_shop_page_title(){
	return false;
}

// Remove Woocommersce sidebar from product page
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// shop page wrapper 
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', 'tn_output_content_wrapper', 10 );

function tn_output_content_wrapper() {

	echo '<div id="primary" class="container-fluid content-area"><main id="main" class="site-main" role="main">';
	echo '<div class="products_wrapper row justify-content-center"><div id="we_need_back"></div> <div id="we_need_you" class="col-md-8 col-sm-10 col-12">';
	echo '<img class="img-fluid" src="' .  get_site_url() . '/wp-content/themes/technoir/img/shop-title.png"></div></div>';
}

add_action( 'woocommerce_after_main_content', 'tn_output_content_wrapper_end', 10 );

function tn_output_content_wrapper_end() {

	echo '</main></div>';

}
// cart page wrapper
function tn_output_cart_wrapper() {

	echo '<div id="primary" class="container-fluid content-area"><main id="main" class="site-main" role="main">';
	echo '<div class="products_wrapper row justify-content-center"><div id="we_need_back"></div> <div id="we_need_you" class="col-md-8 col-sm-10 col-12">';
	echo '<img class="img-fluid" src="' .  get_site_url() . '/wp-content/themes/technoir/img/cart_title.png"></div></div>';
	echo '<div class="row"><div class="tn_cart_form col-10 offset-1"><div class="row">';
}
function tn_output_cart_wrapper_end() {

	echo '</div></div></div></main></div>';

}
add_action( 'woocommerce_before_cart', 'tn_output_cart_wrapper', 20 );
add_action( 'woocommerce_after_cart', 'tn_output_cart_wrapper_end', 20 );

// checkout page wrapper

function tn_output_checkout_wrapper() {

	echo '<div id="primary" class="container-fluid content-area"><main id="main" class="site-main" role="main">';
	echo '<div class="products_wrapper row justify-content-center"><div id="we_need_back"></div> <div id="we_need_you" class="col-md-8 col-sm-10 col-12">';
	echo '<img class="img-fluid" src="' .  get_site_url() . '/wp-content/themes/technoir/img/checkout_title.png"></div></div>';
	echo '<div class="row"><div class="tn_checkout_form col-10 offset-1">';
}
function tn_output_checkout_wrapper_end() {

	echo '</div></div></main></div>';

}
add_action( 'woocommerce_before_checkout_form', 'tn_output_checkout_wrapper', 20 );
add_action( 'woocommerce_after_checkout_form', 'tn_output_checkout_wrapper_end', 20 );

// change product post class
add_filter('woocommerce_post_class', 'tn_add_product_post_class');

function tn_add_product_post_class($classes) {
	$classes_new[] = 'tn_product col-lg-4 col-md-6 col-sm-12 col-12';

	return $classes_new;

}
// change variation default option
add_filter('woocommerce_dropdown_variation_attribute_options_args', 'tn_change_default_option');

function tn_change_default_option($options) {
	if (is_array($options)) {
		$options['show_option_none'] = 'Kies een maat';//'Kiezen';
	}	
	return $options;
}