<?php
/**
 * Plugin Name:     Ze Woo Modify Shipping Fields
 * Plugin URI:      https://hoseabaker.com
 * Description:     WooCommerce plugin to modify shipping fields
 * Author:          Hosea Baker
 * Author URI:      https://hoseabaker.com
 * Text Domain:     ze-woo-modify-shipping-fields
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ze_Woo_Modify_Shipping_Fields
 */

// HOOK INTO THE WOOCOMMERCE CHECKOUT FIE
add_filter( 'woocommerce_checkout_fields' , 'ze_woo_override_checkout_fields' );

// OUR FUNCTION TO MODIFY SHIPPING FIELDS ($fields is passed via the filter)
function ze_woo_override_checkout_fields( $fields ) {
     $fields['shipping']['shipping_postcode']['label'] = 'Zipcode';
     return $fields;
}