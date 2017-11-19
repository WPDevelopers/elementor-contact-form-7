<?php
/**
 * Get Contact Form 7 [ if exists ]
 */
if ( function_exists( 'wpcf7' ) ) {
    function eael_select_contact_form_stand_alone(){
        $wpcf7_form_list = get_posts(array(
            'post_type' => 'wpcf7_contact_form',
            'showposts' => 999,
        ));
        $posts = array();

        if ( ! empty( $wpcf7_form_list ) && ! is_wp_error( $wpcf7_form_list ) ){
        foreach ( $wpcf7_form_list as $post ) {
            $options[ $post->ID ] = $post->post_title;
        }
        return $options;
        }
    }
}
