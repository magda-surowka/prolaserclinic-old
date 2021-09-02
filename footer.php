<?php
/**
 * Footer template
 *
 * @package prolaserclinic
 
 */
?>

</div> <!-- end of body-wrapper -->

<a href="javascript:void(0)" id="return-to-top">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 447.243 447.243" style="enable-background:new 0 0 447.243 447.243;" xml:space="preserve">
        <path
            d="M409.217,172.662c-0.844-1.152-1.764-2.247-2.754-3.276l-160-160C233.973-3.119,213.712-3.13,201.209,9.36c-0.008,0.008-0.017,0.017-0.025,0.025l-160,160c-12.479,12.514-12.451,32.775,0.063,45.255c0.985,0.982,2.033,1.899,3.137,2.745c13.381,8.971,31.276,7.013,42.4-4.64l88.64-88.32c4.7-4.695,8.641-10.093,11.68-16l4.32-9.6v314.24c-0.607,16.347,10.812,30.689,26.88,33.76c17.445,2.829,33.881-9.019,36.71-26.465c0.297-1.83,0.434-3.682,0.41-5.535V99.305l3.2,6.88c3.183,6.725,7.515,12.843,12.8,18.08l88.48,88.48c11.124,11.653,29.019,13.611,42.4,4.64C416.563,206.944,419.658,186.921,409.217,172.662z" />
    </svg>
</a>

<!-- ============================== SECTION-FOOTER ============================== -->
<footer class="section-footer" id="footer">
    <div class="footer-top-cta">
        <div class="section-wrapper">
            <h2>ZAREZERWUJ ON-LINE DOGODNY TERMIN </h2>
            <div class="btn-wrapper">
                <a href="" class="btn btn-color">Zarezerwuj wizytę</a>
                <a href="" class="btn btn-color">Nasza lokalizacja</a>
            </div>
        </div>
    </div>
    <div class="section-wrapper">
        <div class="wrapper-links">
            <a class="logo" href="">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo-white.png" alt="">
            </a>
            <ul class="list-unstyled links-social-media">
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/facebook.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/instagram.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/pinterest.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/youtube.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-inner">
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Siedziba</li>
                </ul>
                <address>
                    AVETE Centrum Medyczne II piętro<br>
                    (Stadion Widzewa - wejście nr 2)<br>
                    Al. Piłsudskiego 138, 92-230 Łódź
                </address>
                <p>Pn - Pt 8:00 - 21:00 <br>
                    Sob 9:00 - 15:00
                </p>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Kontakt</li>
                    <li>Rezerwacja konsultantka <br>
                        <a class="link-color" href="tel:+667 990 990">667 990 990</a>
                    </li>
                    <li>Rezerwacja recepcja <br>
                        <a class="link-color" href="tel:+512 335 214">512 335 214</a>
                    </li>
                </ul>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Usługi</li>
                    <?php
                        wp_nav_menu( array(
                            'menu'				=>	'Menu Główne - oferta - stopka',
                            'theme_location'	=>	'prolaserclinic-main-menu-offer-footer',
                            'depth'             =>  0,
                            'container'         => 	'',
                        ));
                    ?>
                </ul>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Nie przegap</li>
                </ul>
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('/cennik') ?>">Cennik</a></li>
                    <li><a href="<?php echo site_url('/promocje') ?>">Promocje</a></li>
                    <li><a href="<?php echo site_url('/kup-voucher') ?>">Kup voucher</a></li>
                    <li><a href="<?php echo site_url('/metamorfozy') ?>">Metamorfozy</a></li>
                </ul>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Pozostałe</li>
                </ul>
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('/klinika-pro-laser-clinic') ?>">O Klinice</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="<?php echo site_url('/faq') ?>">FAQ</a></li>
                    <li><a href="<?php echo site_url('/kontakt') ?>">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-credits">
        <div class="section-wrapper">
            <div class="credits-copyright">
                <p><?php echo date("Y"); ?> &copy; Pro Laser Clinic. All Rights Reserved.</p>
            </div>
            <div class="credits-copyright">
                <a href="">Polityka prywatności</a>
                <span class="divider"></span>
                <a href="">Polityka cookies</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>