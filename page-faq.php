<?php
/**
 *Template name: FAQ*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-FAQ ============================== -->
<section class="faq-section-content">
    <div class="subpage-wrapper-heading">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/banner3.jpg" alt="">
        <header>
            <h2>Pro Laser Clinic - <?php the_title();?></h2>
        </header>
    </div>
    <div class="section-wrapper">
        <?php prolaserclinic_faq_accordion_1();?>
        <?php prolaserclinic_faq_accordion_2();?>
    </div>
</section>

<?php
get_footer();