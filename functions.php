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
            'prolaserclinic-offer-promotion' => 'Menu Promocje',
        ));
    }
    add_action ('after_setup_theme' , 'prolaserclinic_theme_nav');

    //Register widgets

    function prolaserclinic_widget_promotion_nav() {
        register_sidebar( array(
             'name'          => 'Promocje - nawigacja',
             'id'            => 'prolaserclinic-promotion',
             'before_widget' => ' ',
             'after_widget'  => ' ',
             'before_title'  => ' ',
             'after_title'   => ' ',
         ));
    }
    
    add_action( 'widgets_init', 'prolaserclinic_widget_promotion_nav');
    
    
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

    /** FAQ - 3 accordion */
    function prolaserclinic_faq_accordion_3() {
        $shortcode = get_field_object('accordion_3');
            if(!empty($shortcode['value'])){
            echo do_shortcode(''.$shortcode['value'].'');
        }
    }

      /** FAQ - 4 accordion */
      function prolaserclinic_faq_accordion_4() {
        $shortcode = get_field_object('accordion_4');
            if(!empty($shortcode['value'])){
            echo do_shortcode(''.$shortcode['value'].'');
        }
    }

    //** Pricelist tables */

   function prolaserclinic_pricelist_promotion(){
        $field_group_key = 'group_6123653991989';
        $fields = acf_get_fields($field_group_key);
    
        
        $field_name = get_field('pricelist_promotion_name');
        $field_price = get_field('pricelist_promotion_price');
        $field_link = get_field('pricelist_promotion_link');

        echo 
        '<tr>
            <td>'.$field_name.'</td>
            <td>'.$field_price.' %</td>
            <td>
                <a href="'.$field_link.'" class="btn btn-color">Zarezerwuj wizytę</a>
            </td>
        </tr>';

        // echo var_dump( $fields);
    }

      /** Promotion 1 */
      function prolaserclinic_promotion_1() {
        $text = get_field_object('text');
        if(!empty($text['value'])){
            echo '<p>'.$text['value'].'</p>';
        }
    }