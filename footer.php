<?php   
// include modals
get_template_part('footer-modals');
?>

<section class="footer">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-2 cell small-order-2 medium-order-1">
                <p><a href="<?= get_site_url(); ?>/"><img class="logo"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png"
                            alt="NowRx"></a></p>
                <p class="text-small">&copy; 2019 NowRx.com  <br>All rights reserved. <br><a
                        href="<?= get_site_url(); ?>/privacy-policy/">Privacy Policy</a><br><a href="<?= get_site_url(); ?>/hipaa-privacy/">HIPAA Privacy</a>
                </p>
            </div>
            <div class="large-10 cell small-order-1 medium-order-2">
                <div class="grid-x grid-padding-x">
                    <div class="large-3 small-6 cell">
                        <h6>COMPANY</h6>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a href="<?= get_site_url(); ?>/how-it-works/">How It Works</a></li>
                            <li><a href="<?= get_site_url(); ?>/faqs/">FAQs</a></li>
                            <li><a href="<?= get_site_url(); ?>/about-us/">About NowRx</a></li>
                            <li><a href="<?= get_site_url(); ?>/locations/">Locations</a></li>
                            <li><a href="https://www.indeed.com/cmp/Nowrx" target="_blank">Careers</a></li>
                            <li><a href="<?= get_site_url(); ?>/blog/">Blog</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h6>CONTACT US</h6>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a data-toggle="modal-example">Chat With A Pharmacist</a></li>
                            <li><a href="https://try.nowrxpharmacy.com">Transfer Your Prescription</a></li>
                            <li><a href="<?= get_site_url(); ?>/for-doctors/">For Doctors</a></li>
                            <li><a href="<?= get_site_url(); ?>/contact-us/">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h6>FOLLOW US</h6>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a target="_blank" href="http://facebook.com/nowrx">Facebook</a></li>
                            <li><a target="_blank" href="https://twitter.com/nowrx">Twitter</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/nowrxpharmacy/">Instagram</a>
                            </li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/nowrx/">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h6>DOWNLOAD APP</h6>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a target="_blank"
                                    href="https://itunes.apple.com/us//app/nowrx-pharmacy-on-demand/id1066924988"><img
                                        style="max-width: 140px;"
                                        src="<?php echo get_template_directory_uri(); ?>/library/images/app-apple-store-button.png"
                                        alt=""></a></li>
                            <li><a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.nowrx.client"><img
                                        style="max-width: 140px;"
                                        src="<?php echo get_template_directory_uri(); ?>/library/images/app-google-store-button.png"
                                        alt=""></a></li>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x disclaimer">
            <div class="large-12 cell">
                <hr>
                <p class="text-center"><em>*Limit $100 per customer. Offer not valid under Medicare, Medicaid, any
                        other federal or state program, or medication previously filled by NowRx.</em></p>
            </div>
        </div>
    </div>
</section>

<div class="calltoaction">
    <div class="container">
        <div class="content">
            <a href="<?= get_site_url(); ?>/get-started/" class="rx-btn">Get Started</a>
            <a href="tel:844-466-6979" class="rx-btn rx-line ml">(844) 466-6979</a>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</div> <!-- closes off canvas content -->

<script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js?v=<?php echo time(); ?>" defer async></script>

<!-- tracking code -->
<script type="text/javascript">
! function() {
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !0, e.src =
        "//www.rtb123.com/tags/8C8A25EF-0A8E-C2ED-C88A-3EE04DBC1211/btp.js";
    var t = document.getElementsByTagName("head")[0];
    t ? t.appendChild(e, t) : (t = document.getElementsByTagName("script")[0]).parentNode.insertBefore(e, t)
}();
</script>

</body>

</html> <!-- end of site. what a ride! -->