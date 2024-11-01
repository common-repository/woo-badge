<?php
/*
Plugin Name: Woo-Badge
Plugin URI: http://www.chefblogger.me
Description: Create simple Sold Out Badge for WooCommerce
Version: 0.2
Author: Eric-Oliver Mächler
Author URI: http://www.ericmaechler.com
Requires at least: 4.0.1
Tested up to: 4.9
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// add css JS -> includes/add-js-css.php
include ("includes/add-js-css.php");


//* Add sold out badge on archive pages
add_action( 'woocommerce_before_shop_loop_item_title', function() {
    global $product;
    if ( !$product->is_in_stock() ) {
        echo '<span class="woocommercebadge_soldout">Sold out</span>';
		
		 }
});


//* Add sold out badge on single product pages
add_action( 'woocommerce_before_single_product_summary', function() {
	global $product;
	if ( !$product->is_in_stock() ) {
	echo '<span class="woocommercebadge_soldout">Sold out</span>';
    }
});




?>