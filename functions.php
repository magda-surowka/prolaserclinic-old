<?php
/**
 * Prolaserclinic functions and definitions
 *
 * @package prolaserclinic
 */


/**
 * Enqueue scripts and styles.
*/

function prolaserclinic_scripts() {
    // Scripts 
    wp_enqueue_script('prolaserclinic-bootstrap-scripts', get_template_directory_uri() . '/libraries/bootstrap-4.4.1/js/bootstrap.bundle.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script('prolaserclinic-owlcarousel-scripts', get_template_directory_uri() . '/libraries/owl-carousel-2-beta.2.4/owl.carousel.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script('prolaserclinic-scripts', get_template_directory_uri() . '/assets/js/jquery.functions.js', array ('jquery'), 1.1, true);
    
    // Styles
    wp_enqueue_style('prolaserclinic-owlcarousel-styles', get_template_directory_uri() . '/libraries/owl-carousel-2-beta.2.4/assets/owl.carousel.css', false, '1.1', 'all');
    wp_enqueue_style('prolaserclinic-bootstrap-styles', get_template_directory_uri() . '/libraries/bootstrap-4.4.1/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('prolaserclinic-styles', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
}

add_action( 'wp_enqueue_scripts', 'prolaserclinic_scripts' );