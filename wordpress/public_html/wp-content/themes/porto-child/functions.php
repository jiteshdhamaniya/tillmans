<?php

/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}


function displayProductName($id) {
    $productName = get_the_title($id);
    return $productName;
}
add_shortcode('product_name', 'displayProductName');

if ( function_exists( 'wc_yotpo_show_widget' ) ) { add_action( 'woocommerce_after_single_product', 'wc_yotpo_show_widget', 15 ); }
if ( function_exists( 'wc_yotpo_show_buttomline' ) ) { add_action( 'woocommerce_single_product_summary', 'wc_yotpo_show_buttomline', 15 ); }
add_shortcode('yotpostars', 'wc_yotpo_show_buttomline');



?>