<?php
/**
 *Template name: Promocje*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-PROMOTION ============================== -->
<section class="promotion-section-content hide" data-hide="100" data-removeClass="hide">
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
            <div class="content-navigation">
                <?php dynamic_sidebar("prolaserclinic-promotion"); ?>
            </div>
            <div class="content-description">
                <?php prolaserclinic_promotion_1();?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();