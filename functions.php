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
	echo '<div class="row"><div class="tn_cart_form col-10 offset-1"><div class="row justify-content-center">';
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

if ( ! function_exists( 'tn_cart_link' ) ) {
	/**
	 * Get  cart link including number of items and sum
	 *
	 */
	function tn_cart_link() {
		if ( ! tn_cart_available() ) {
			return;
		}
		?>

<div id="menu-item-999" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-999">
  <a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" aria-current="page">
    <svg class="svg-inline--fa fa-shopping-basket fa-w-18 dashicons after-menu-image-icons" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path></svg><!-- <span class="dashicons fas fa-shopping-basket after-menu-image-icons"></span> Font Awesome fontawesome.com -->
    <span class="menu-image-title-after menu-image-title">Cart</span>
    <?php if (WC()->cart->get_cart_contents_count() > 0) { ?>
                <span class="count"> <?php echo wp_kses_data( sprintf( '%d', WC()->cart->get_cart_contents_count())  ); ?></span>
    <?php } ?>
  </a>
	</div>
<?php
	}
}
if ( ! function_exists( 'tn_cart_available' ) ) {
	/**
	 * Check if  Woo Cart instance is available
	 */
	function tn_cart_available() {
		$woo = WC();
		return $woo instanceof \WooCommerce && $woo->cart instanceof \WC_Cart;
	}
}
// add menu cart fragment
add_filter('woocommerce_add_to_cart_fragments', 'tn_add_refreshed_fragments');

function tn_add_refreshed_fragments($fragments) {
  /**
	 * Get Html fragments to update cart icon
	 */
  ob_start();

  tn_cart_link();

  $cart_part = ob_get_clean();
  $new_fragments = [];
  //$new_fragments['a.cart-contents'] = $cart_part;
  $new_fragments['div#menu-item-999'] = $cart_part;
  return $new_fragments;
}

add_filter( 'woocommerce_checkout_fields', 'tn_remove_fields', 9999 );

function tn_remove_fields( $woo_checkout_fields_array ) {
	
	// she wanted me to leave these fields in checkout
	// unset( $woo_checkout_fields_array['billing']['billing_first_name'] );
	// unset( $woo_checkout_fields_array['billing']['billing_last_name'] );
	// unset( $woo_checkout_fields_array['billing']['billing_phone'] );
	// unset( $woo_checkout_fields_array['billing']['billing_email'] );
	// unset( $woo_checkout_fields_array['order']['order_comments'] ); // remove order notes
	
	// and to remove the billing fields below
	//unset( $woo_checkout_fields_array['billing']['billing_company'] ); // remove company field
	//unset( $woo_checkout_fields_array['billing']['billing_country'] );
	unset( $woo_checkout_fields_array['billing']['billing_address_1'] );
	unset( $woo_checkout_fields_array['billing']['billing_address_2'] );
	unset( $woo_checkout_fields_array['billing']['billing_city'] );
	unset( $woo_checkout_fields_array['billing']['billing_state'] ); // remove state field
	unset( $woo_checkout_fields_array['billing']['billing_postcode'] ); // remove zip code field

	return $woo_checkout_fields_array;
}
