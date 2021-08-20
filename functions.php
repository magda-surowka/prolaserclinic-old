<?php
/**
 * Prolaserclinic functions and definitions
 *
 * @package prolaserclinic
 */


// Enqueue scripts and styles

function prolaserclinic_scripts() {
    // Scripts 
    wp_enqueue_script('prolaserclinic-bootstrap-scripts', get_template_directory_uri() . '/libraries/bootstrap-4.4.1/js/bootstrap.bundle.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script('prolaserclinic-owlcarousel-scripts', get_template_directory_uri() . '/libraries/owl-carousel-2-beta.2.4/owl.carousel.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script('prolaserclinic-fancybox-scripts', get_template_directory_uri() . '/libraries/fancybox-3.3.5/jquery.fancybox.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script('prolaserclinic-scripts', get_template_directory_uri() . '/assets/js/jquery.functions.js', array ('jquery'), 1.1, true);
    
    // Styles
    wp_enqueue_style('prolaserclinic-owlcarousel-styles', get_template_directory_uri() . '/libraries/owl-carousel-2-beta.2.4/assets/owl.carousel.css', false, '1.1', 'all');
    wp_enqueue_style('prolaserclinic-bootstrap-styles', get_template_directory_uri() . '/libraries/bootstrap-4.4.1/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('prolaserclinic-fancybox-styles', get_template_directory_uri() . '/libraries/fancybox-3.3.5/jquery.fancybox.min.css', false, '1.1', 'all');
    wp_enqueue_style('prolaserclinic-styles', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
}

add_action( 'wp_enqueue_scripts', 'prolaserclinic_scripts' );

// Register nav

    function prolaserclinic_theme_nav(){
        register_nav_menus( array( 
            'prolaserclinic-main-menu-offer' => 'Menu Główne - oferta',
            'prolaserclinic-main-menu-offer-footer' => 'Menu Główne - oferta - stopka',
        ));
    }
    add_action ('after_setup_theme' , 'prolaserclinic_theme_nav');
    
// ACF functions

    /** FAQ - 1 accordion */
    function prolaserclinic_faq_accordion_1() {
        $shortcode = get_field_object('accordion_1');
            if(!empty($shortcode['value'])){
            echo do_shortcode(''.$shortcode['value'].'');
}
}

    /** FAQ - 2 accordion */
    function prolaserclinic_faq_accordion_2() {
        $shortcode = get_field_object('accordion_2');
            if(!empty($shortcode['value'])){
            echo do_shortcode(''.$shortcode['value'].'');
}
}