<?php
/**
 * Plugin Name: Contact Form 7 styler for Elementor
 * Description: Style your Contact Form 7 forms right from the Elementor visual editor.
 * Plugin URI: https://essential-addons.com/elementor/contact-form-7
 * Author: Essential Addons
 * Version: 1.0.0
 * Author URI: https://essential-addons.com/elementor/
 *
 * Text Domain: elementor-contact-form-7
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'EAEL_CONTACT_FORM_7_URL', plugins_url( '/', __FILE__ ) );
define( 'EAEL_CONTACT_FORM_7_PATH', plugin_dir_path( __FILE__ ) );


require_once EAEL_CONTACT_FORM_7_PATH.'includes/elementor-helper.php';
require_once EAEL_CONTACT_FORM_7_PATH.'includes/queries.php';
require_once EAEL_CONTACT_FORM_7_PATH.'admin/settings.php';


// Upsell
include_once dirname( __FILE__ ) . '/includes/eael-cf7-upsell.php';
new Eael_Upsell('');
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

   wp_enqueue_style('essential_addons_elementor-cf7-css',EAEL_CONTACT_FORM_7_URL.'assets/css/elementor-contact-form-7.css');

}
add_action( 'wp_enqueue_scripts', 'eael_contact_form_7_enqueue' );

/**
 * Admin Notices
 */
function eael_contact_from_7_admin_notice() {
	if( !function_exists( 'wpcf7' ) ) :
	?>
		<div class="error notice is-dismissible">
			<p><strong>Elementor Contact Form 7 styler</strong> needs <strong>Contact Form 7</strong> plugin to be installed. Please install the plugin now! <button id="eael-install-cf7" class="button button-primary">Install Now!</button></p>
		</div>
	<?php
	endif;
}
add_action( 'admin_notices', 'eael_contact_from_7_admin_notice' );
