<?php

//* ADD CSS
add_action( 'wp_enqueue_scripts', 'woocommerce_badge_css_style_include' );
 
function woocommerce_badge_css_style_include() {
	wp_register_style( 'woocommerce_badge_style', plugins_url('../css/woocommerce_badge_style.css', __FILE__) );
	wp_enqueue_style( 'woocommerce_badge_style' );
	
	wp_register_style( 'font-awesome', plugins_url('../css/font-awesome.min.css', __FILE__ ));
	wp_enqueue_style( 'font-awesome' );

	
	
	
}

?>