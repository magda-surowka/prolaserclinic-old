<?php
/**
 *Template name: O nas*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-ABOUT ============================== -->
<section class="about-section-content hide" data-hide="100" data-removeClass="hide">
    <div class=" subpage-wrapper-heading">
        <?php prolaserclinic_main_image_subpage(); ?>
        <header>
            <h2>Pro Laser Clinic - <?php the_title();?></h2>
        </header>
    </div>
    <div class="section-wrapper">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/background/AdobeStock_405832892_Preview-removebg-preview 1.png"
            alt="" class="img-absolute">
        <div class="wrapper-description">
            <?php prolaserclinic_text_block(); ?>
        </div>
        <div class="wrapper-gallery">
            <div class="gallery-heading">
                <header class="center">
                    <h2>
                        Galeria zdjęć
                    </h2>
                </header>
            </div>
            <div class="gallery-content">
                <?php 
                    if ( have_posts() ) { 
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    } 
                ?>
            </div>
        </div>
        <div class="wrapper-testimonials">
            <div class="owl-carousel owl-carousel-testimonials">
                <div class="item">
                    <div class="item-image">
                        <img loading="lazy"
                            src="<?php echo get_template_directory_uri();?>/assets/images/pictures/thumbnail-person.jpg"
                            alt="">
                    </div>
                    <div class="item-description">
                        <p>Profesjonalizm, szybkie terminy, dokładność oraz przystępne ceny - to najważniejsze cechy Pro
                            Laser Clinic. Polecam serdecznie każdemu, kto chce wyjść zadowolony z gabinetu!</p>
                        <span>Magda Nowak</span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-image">
                        <img loading="lazy"
                            src="<?php echo get_template_directory_uri();?>/assets/images/pictures/thumbnail-person.jpg"
                            alt="">
                    </div>
                    <div class="item-description">
                        <p>Profesjonalizm, szybkie terminy, dokładność oraz przystępne ceny - to najważniejsze cechy Pro
                            Laser Clinic. Polecam serdecznie każdemu, kto chce wyjść zadowolony z gabinetu!</p>
                        <span>Magda Nowak</span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-image">
                        <img loading="lazy"
                            src="<?php echo get_template_directory_uri();?>/assets/images/pictures/thumbnail-person.jpg"
                            alt="">
                    </div>
                    <div class="item-description">
                        <p>Profesjonalizm, szybkie terminy, dokładność oraz przystępne ceny - to najważniejsze cechy Pro
                            Laser Clinic. Polecam serdecznie każdemu, kto chce wyjść zadowolony z gabinetu!</p>
                        <span>Magda Nowak</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-cta">
            <?php prolaserclinic_cta(); ?>
        </div>
    </div>
</section>

<?php
get_footer();