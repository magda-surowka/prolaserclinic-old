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

// Register Gutenberg

    function register_gutenberg(){
        add_theme_support('wp-block-styles');
    }
    
    add_action ('after_setup_theme','register_gutenberg');

    add_action('init', function() {
        register_block_style('core/heading', [
            'name' => '.custom-table',
            'label' => __('Custom style for table', 'txtdomain'),
            'isDefault' => true
        ]);
    });

// Custom Post Types

    //Offer (oferta)

    function prolaserclinic_offer_post_types() {
        $labels = array(
            'name'                => 'Oferta',
            'singular_name'       => 'Oferta',
            'menu_name'           => 'Oferta',
            'all_items'           => 'Wszystkie oferty',
            'view_item'           => 'Zobacz ofertę',
            'add_new_item'        => 'Dodaj ofertę',
            'add_new'             => 'Dodaj nową',
            'edit_item'           => 'Edytuj ofertę',
            'update_item'         => 'Aktualizuj',
            'search_items'        => 'Szukaj ofert',
            'not_found'           => 'Nie znaleziono',
            'not_found_in_trash'  => 'Nie znaleziono'
        ); 

        $args = array(
            'label' => 'offer',
            'rewrite' => array(
                'slug' => 'oferta'
            ),
            'description'         => 'Oferta',
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail'),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true, 
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'       => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-id-alt',
            'can_export'          => true,
            'has_archive'         => false,
            'capability_type'     => 'post',
            "supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes" ),
        );

        register_post_type( 'offer', $args );
    } 
    
    add_action( 'init', 'prolaserclinic_offer_post_types');

    // Promotion (promocje)

    function prolaserclinic_promotion_post_types() {
        $labels = array(
            'name'                => 'Promocje',
            'singular_name'       => 'Promocje',
            'menu_name'           => 'Promocje',
            'all_items'           => 'Wszystkie promocje',
            'view_item'           => 'Zobacz promocję',
            'add_new_item'        => 'Dodaj promocję',
            'add_new'             => 'Dodaj nową',
            'edit_item'           => 'Edytuj promocję',
            'update_item'         => 'Aktualizuj',
            'search_items'        => 'Szukaj promocji',
            'not_found'           => 'Nie znaleziono',
            'not_found_in_trash'  => 'Nie znaleziono'
        ); 

        $args = array(
            'label' => 'promotion',
            'rewrite' => array(
                'slug' => 'promocja'
            ),
            'description'         => 'Promocje',
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail'),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true, 
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'       => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-star-filled',
            'can_export'          => true,
            'has_archive'         => false,
            'capability_type'     => 'post',
            "supports" => array( "title", "thumbnail", "custom-fields", "page-attributes" ),
        );

        register_post_type( 'promotion', $args );
    } 
    
    add_action( 'init', 'prolaserclinic_promotion_post_types');

    
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

       /** CTA section */

        function prolaserclinic_cta() {
            $heading = get_field_object('cta_heading');
            $description = get_field_object('cta_description');
            $image = get_field_object('cta_image');
            $button_link = get_field_object('cta_button_link');
            
            if(!empty($heading['value'])){

                echo '
                <div class="cta-description">
                    <header>
                        '.$heading['value'].'
                        <p>'.$description['value'].'</p>
                    </header>
                    <a href="'.$button_link['value'].'" class="btn btn-color">Czytaj więcej</a>
                </div>
                <div class="cta-image">
                    <img src="'.$image['value'].'" alt="">
                </div>  ';
            }
        }

        /** Main image/banner on subpages */

          function prolaserclinic_main_image_subpage() {
            $image = get_field_object('subpage_main_image');
            
            if(!empty($image['value'])){

                echo 
                '<img src="'.$image['value'].'" alt="">';
            }
        }

        /** Block of text */

          function prolaserclinic_text_block() {
            $text = get_field_object('block_description');
            
            if(!empty($text['value'])){

                echo $text['value'];
            }
        }

        /** Live text below slider - main page */

        function prolaserclinic_live_text() {
            $text = get_field_object('live_text');
            
            if(!empty($text['value'])){

                echo 
                '<p class="welcome-live">
                    <span> '.$text['value'].' </span>
                </p>';
            }
        }