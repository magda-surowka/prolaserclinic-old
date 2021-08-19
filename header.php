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
                                    <a class="dropdown-toggle" href="" id="offer-desktop" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta
                                    </a>
                                    <div class="dropdown-menu mt-0 w-100 animate slideIn"
                                        aria-labelledby="offer-desktop">
                                        <div class="offer-wrapper">
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/12_depilacja-laserowa.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Depilacja laserowa <br> Lightsheer</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/106_modelowanie-sylwetki-onda.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Modelowanie sylwetki <br> ONDA</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/6_modelowanie-sylwetki.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Nowoczesna <br> kosmetologia</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/144191450_703210650266791_3021640722631563648_n.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Laserowe usuwanie <br> tatuażu</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/106_modelowanie-sylwetki-onda.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Nazwa <br> usługi</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                            <div class="dropdown-item">
                                                <div class="item-bg">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/236183130_809015229686332_6501702576155402198_n.jpg"
                                                        alt="">
                                                    <div class="item-text">
                                                        <h2>Nazwa <br> usługi</h2>
                                                        <div class="btn btn-color">Pełna oferta</div>
                                                    </div>
                                                </div>
                                                <a href="" class="item-border"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="cennik">Cennik</a>
                                </li>
                                <li>
                                    <a href="promocje" class="color-link">Promocje</a>
                                </li>
                                <li>
                                    <a href="voucher">Kup voucher</a>
                                </li>
                            </ul>
                            <a class="logo-dark" href="">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo.svg"
                                    alt="">
                            </a>
                            <a class="logo-white" href="">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo-white.png"
                                    alt="">
                            </a>
                            <ul class="flexbox-nav list-unstyled">
                                <li>
                                    <a href="o-nas">Klinika Pro Laser Clinic</a>
                                </li>
                                <li>
                                    <a href="blog">Blog</a>
                                </li>
                                <li>
                                    <a href="faq">FAQ</a>
                                </li>
                                <li>
                                    <a href="kontakt">Kontakt</a>
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