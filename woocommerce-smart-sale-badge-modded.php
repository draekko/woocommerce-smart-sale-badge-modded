<?php
/*
 * Plugin Name: WooCommerce Smart Sale Badge Modded
 * Version: 1.0.1
 * Plugin URI: http://github.com/draekko/woocommerce-smart-sale-badge-modded
 * Description: Enhances the WooCommerce sale badge by displaying the total saving a customer will receive
 * Author: Hugh Lashbrooke, Draekko
 * Author URI: http://draekko.com
 * Requires at least: 3.9.1
 * Tested up to: 3.9.1
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once( 'classes/class-woocommerce-smart-sale-badge.php' );

global $wc_smart_sale_badge;
$wc_smart_sale_badge = new WooCommerce_Smart_Sale_Badge( __FILE__ );