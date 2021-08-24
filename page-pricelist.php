<?php
/**
 *Template name: Cennik*
 *
 * @package prolaserclinic
 */

get_header();
?>

<!-- ============================== SECTION-PRICELIST ============================== -->
<section class="pricelist-section-content hide" data-hide="100" data-removeClass="hide">
    <div class="subpage-wrapper-heading">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/banner-cennik.png" alt="">
    </div>
    <div class="section-wrapper">
        <div class="wrapper-content">
            <div class="content-navigation">
                <a href="#cennik-1" data-scroll="smooth-scroll" class="btn btn-color btn-color-promotion"
                    type="button">Promocje</a>
                <a href="#cennik-2" data-scroll="smooth-scroll" class="btn btn-color" type="button">Kosmetologia</a>
                <a href="#cennik-3" data-scroll="smooth-scroll" class=" btn btn-color" type="button">Depilacja
                    laserowa Light
                    Sheer</a>
                <a href="#cennik-4" data-scroll="smooth-scroll" class=" btn btn-color" type="button">Modeowanie
                    sylwetki ONDA</a>
                <a href="#cennik-5" data-scroll="smooth-scroll" class=" btn btn-color" type="button">Usuwanie
                    tatuażu</a>
                <a href="#cennik-6" data-scroll="smooth-scroll" class="btn btn-color" type="button">Laser frakcyjny
                    eCO2</a>
                <a href="#cennik-7" data-scroll="smooth-scroll" class="btn btn-color" type="button">Zabieg
                    phFormula</a>
            </div>
            <table id="cennik-1">
                <h2>Promocje</h2>
                <tr>
                    <th>Nazwa usługi</th>
                    <th>Cena</th>
                    <th>Rezerwacja</th>
                </tr>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
            </table>
            <table id="cennik-2">
                <h2>Kosmetologia</h2>
                <tr>
                    <th>Nazwa usługi</th>
                    <th>Cena</th>
                    <th>Rezerwacja</th>
                </tr>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
                <?php prolaserclinic_pricelist_promotion();?>
            </table>
        </div>
        <div class="content-cta">
            <div class="cta-description">
                <header>
                    <h2>
                        Nie zwlekaj
                        <span>sprawdź aktualne promocje</span>
                    </h2>
                    <p>Jeżeli znasz już regularne ceny naszych usług to tym
                        bardziej zachęcamy do zapoznania się z naszymi wspaniałymi promocjami.
                    </p>
                </header>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>promocje" class="btn btn-color">Promocje w Pro Laser
                    Clinic</a>
            </div>
            <div class="cta-image">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/pictures/female-hands-with-pink-rose-femininity-concept.jpg"
                    alt="">
            </div>
        </div>
    </div>
</section>

<?php
get_footer();