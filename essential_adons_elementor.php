<?php
/**
 * Plugin Name: Elementor Contact Form 7
 * Description: The ultimate elements library for Elementor page builder plugin for WordPress.
 * Plugin URI: https://essential-addons.com/elementor/
 * Author: Codetic
 * Version: 1.0.0
 * Author URI: http://www.codetic.net
 *
 * Text Domain: elementor-contact-form-7
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'EAEL_CONTACT_FORM_7_URL', plugins_url( '/', __FILE__ ) );
define( 'EAEL_CONTACT_FORM_7_PATH', plugin_dir_path( __FILE__ ) );


require_once EAEL_CONTACT_FORM_7_PATH.'includes/elementor-helper.php';
require_once EAEL_CONTACT_FORM_7_PATH.'includes/queries.php';
require_once EAEL_CONTACT_FORM_7_PATH.'admin/settings.php';

/**
 * Load Elementor Contact Form 7
 */
function add_eael_contact_form_7() {

  if ( function_exists( 'wpcf7' ) ) {
    require_once EAEL_CONTACT_FORM_7_PATH.'includes/contact-form-7.php';
  }

}
add_action('elementor/widgets/widgets_registered','add_eael_contact_form_7');

/**
 * Load Eael Contact Form 7 CSS
 */
function eael_contact_form_7_enqueue() {

   wp_enqueue_style('essential_addons_elementor-css',EAEL_CONTACT_FORM_7_URL.'assets/css/elementor-contact-form-7.css');

}
add_action( 'wp_enqueue_scripts', 'eael_contact_form_7_enqueue' );