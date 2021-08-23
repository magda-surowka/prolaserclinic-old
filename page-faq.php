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
        <img src="<?php echo get_template_directory_uri();?>/assets/images/background/AdobeStock_405832892_Preview-removebg-preview 1.png"
            alt="" class="img-absolute">
        <header class="center">
            <h2>Najczęściej zadawane pytania</h2>
            <p>Na tej stronie zamieszczone zostały najczęściej zadawane pytania z zakresu oferowanych usług przez
                Klinikę Pro Laser Clinic. To ogromna baza wiedzy i mnóstwo ciekawych tematów. Jeśli zamieszczone w
                niniejszej
                sekcji pytania i odpowiedzi nie do końca rozwieją Twoich wątpliwości - <a
                    href="tel:+667 990 990">zadzwoń do nas!</a></p>
        </header>
        <?php prolaserclinic_faq_accordion_1();?>
        <?php prolaserclinic_faq_accordion_2();?>
        <?php prolaserclinic_faq_accordion_3();?>
        <?php prolaserclinic_faq_accordion_4();?>
    </div>
</section>

<?php
get_footer();