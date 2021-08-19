<?php
/**
 * Footer template
 *
 * @package prolaserclinic
 
 */
?>

</div> <!-- end of body-wrapper -->
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
                    <li><a href="">Depilacja laserowa Light Sheer</a></li>
                    <li><a href="">Modelowanie sylwetki ONDA</a></li>
                    <li><a href="">Nowoczesna kosmetologia</a></li>
                    <li><a href="">Laserowe usuwanie tatuażu</a></li>
                </ul>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Nie przegap</li>
                </ul>
                <ul class="list-unstyled">
                    <li><a href="">Cennik</a></li>
                    <li><a href="">Promocje</a></li>
                    <li><a href="">Kup voucher</a></li>
                    <li><a href="">Metamorfozy</a></li>
                </ul>
            </div>
            <div class="inner-service">
                <ul class="list-unstyled">
                    <li class="heading">Pozostałe</li>
                </ul>
                <ul class="list-unstyled">
                    <li><a href="">O Klinice</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Kontakt</a></li>
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