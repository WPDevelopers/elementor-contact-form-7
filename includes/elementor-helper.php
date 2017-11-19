<?php
namespace Elementor;

function eael_contact_form_7_init(){
    Plugin::instance()->elements_manager->add_category(
        'elementor-contact-form-7',
        [
            'title'  => 'Elementor Contact Form 7',
            'icon' => 'font'
        ],
        1
    );
}
add_action( 'elementor/init','Elementor\eael_contact_form_7_init' );



