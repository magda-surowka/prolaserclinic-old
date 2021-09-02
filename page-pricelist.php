<?php
/**
 *Template name: Cennik*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-PRICELIST ============================== -->
<section class="offer-section-content hide" data-hide="100" data-removeClass="hide">
    <div class=" subpage-wrapper-heading">
        <?php prolaserclinic_main_image_subpage(); ?>
        <header>
            <h2>Pro Laser Clinic - <?php the_title();?></h2>
        </header>
    </div>
    <div class="section-wrapper">
        <div class="content-tables">
            <?php 
                if ( have_posts() ) { 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                } 
            ?>
        </div>
        <div class="content-cta">
            <?php prolaserclinic_cta(); ?>
        </div>
    </div>
</section>

<?php
get_footer();