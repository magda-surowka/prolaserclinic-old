<?php
/**
 * Header template
 *
 * @package prolaserclinic
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php wp_head(); ?>

</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;800&display=swap" rel="stylesheet">

<body <?php body_class(); ?>>
    <?php
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        }
    ?>

    <div class="body-wrapper">
        <!-- ============================== SECTION-HEADER ============================== -->
        <nav class="section-header">
            <div class="header-top">
                <div class="section-wrapper">
                    <div class="top-inner">
                        <ul class="list-unstyled top-information">
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/clock.svg"
                                    alt="">
                                <span>pon - pt: 8:00 - 21:00, sob 9:00 - 15:00</span>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/phone.svg"
                                    alt="">
                                <span>
                                    <a href="tel:+667990990">667-990-990</a>
                                </span>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/pin.svg"
                                    alt="">
                                <span>al. Piłsudskiego 138, Łódź</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled top-social-media">
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/facebook.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/instagram.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/pinterest.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/youtube.svg"
                                        alt="">
                                </a>
                            </li>
                            <li class="btn-cta">
                                <a href="" class="btn btn-color">Rezerwuj on-line</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="header-flexbox">
                    <div class="flexbox-nav-wrapper">
                        <div class="nav-button-close">
                            <div class="container">
                                <button type="button" id="nav-button-close">
                                    <span class="button-bar"></span>
                                    <span class="button-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="flexbox-nav-inner">
                            <ul class="flexbox-nav list-unstyled">
                                <li class="dropdown">
                                    <a class="dropdown-toggle list-item" href="" id="offer-desktop" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta
                                    </a>
                                    <?php
                                        wp_nav_menu( array(
                                            'menu'				=>	'Menu Główne - oferta',
                                            'theme_location'	=>	'prolaserclinic-main-menu-offer',
                                            'depth'             =>  0,
                                            'container'         => 	'',
                                            'menu_class'     	=> 	'dropdown-menu mt-0 w-100 animate slideIn',
                                            'link_after' 		=> 	'<div class="item-border"></div><div class="btn btn-color">Pełna oferta</div>'
                                        ));
                                    ?>
                                </li>
                                <li>
                                    <a class="list-item" href="<?php echo site_url('/cennik') ?>">Cennik</a>
                                </li>
                                <li>
                                    <a class="list-item color-link"
                                        href="<?php echo site_url('/promocje') ?>">Promocje</a>
                                </li>
                                <li>
                                    <a class="list-item" href="<?php echo site_url('/kup-voucher') ?>">Kup voucher</a>
                                </li>
                            </ul>
                            <a class="logo-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo.svg"
                                    alt="">
                            </a>
                            <a class="logo-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo-white.png"
                                    alt="">
                            </a>
                            <ul class="flexbox-nav list-unstyled">
                                <li>
                                    <a class="list-item"
                                        href="<?php echo site_url('/klinika-pro-laser-clinic') ?>">Klinika Pro Laser
                                        Clinic</a>
                                </li>
                                <li>
                                    <a class="list-item" href="blog">Blog</a>
                                </li>
                                <li>
                                    <a class="list-item" href="<?php echo site_url('/faq') ?>">FAQ</a>
                                </li>
                                <li>
                                    <a class="list-item" href="<?php echo site_url('/kontakt') ?>">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="nav-button" id="nav-button">
                        <span class="button-bar"></span>
                        <span class="button-bar"></span>
                        <span class="button-bar"></span>
                    </button>
                </div>
            </div>
        </nav>

        <?php get_template_part( 'template-parts/fixed', 'button' ); ?>