<?php
/**
 *Template name: Promocje - pojedyncza promocja*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-SINGLE-PROMOTION ============================== -->
<section class="promotion-section-content  hide" data-hide="100" data-removeClass="hide">
    <div class="subpage-wrapper-heading">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/banner3.jpg" alt="">
        <header>
            <h2>Pro Laser Clinic - <?php the_title();?></h2>
        </header>
    </div>
    <div class="section-wrapper">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/background/AdobeStock_405832892_Preview-removebg-preview 1.png"
            alt="" class="img-absolute">
        <div class="wrapper-content">
            <div class="content-description">
                <?php while ( have_posts() ) : the_post(); ?>

                <?php the_field('promotion_description'); ?>

                <img src="<?php the_field('promotion_image'); ?>" />

                <p><?php the_content(); ?></p>

                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();