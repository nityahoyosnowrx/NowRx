<?php   
// include modals
get_template_part('footer-modals');
?>

<section class="footer">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-2 cell small-order-2 medium-order-1">
                <p><a href="<?= get_site_url(); ?>/"><img class="logo lozad"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png"
                            alt="NowRx Pharmacy Logo"></a></p>
                <p class="text-small">&copy; 2019 NowRx.com  <br>All rights reserved. <br><a
                        href="<?= get_site_url(); ?>/privacy-policy/">Privacy Policy</a><br><a href="<?= get_site_url(); ?>/hipaa-privacy/">HIPAA Privacy</a>
                </p>
            </div>
            <div class="large-10 cell small-order-1 medium-order-2">
                <div class="grid-x grid-padding-x">
                    <div class="large-3 small-6 cell">
                        <h4>COMPANY</h4>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a href="<?= get_site_url(); ?>/nowprep/">NowPrEP</a></li>
                            <li><a href="<?= get_site_url(); ?>/faqs/">FAQs</a></li>
                            <li><a href="<?= get_site_url(); ?>/about-us/">About NowRx</a></li>
                            <li><a href="<?= get_site_url(); ?>/locations/">Locations</a></li>
                            <li><a href="https://www.indeed.com/cmp/Nowrx" target="_blank">Careers</a></li>
                            <li><a href="<?= get_site_url(); ?>/blog/">Blog</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h4>CONTACT US</h4>
                        <ul class="footer-menu-col vertical menu text-small">
                            <!-- <li><a data-toggle="modal-example">Chat With A Pharmacist</a></li> -->
                            <li><a href="<?= get_site_url(); ?>/get-started/">Transfer Your Prescription</a></li>
                            <li><a href="<?= get_site_url(); ?>/for-doctors/">For Doctors</a></li>
                            <li><a href="<?= get_site_url(); ?>/contact-us/">Chat With A Pharmacist</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h4>FOLLOW US</h4>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a target="_blank" href="http://facebook.com/nowrx">Facebook</a></li>
                            <li><a target="_blank" href="https://twitter.com/nowrx">Twitter</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/nowrxpharmacy/">Instagram</a>
                            </li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/nowrx/">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="large-3 small-6 cell">
                        <h4>DOWNLOAD APP</h4>
                        <ul class="footer-menu-col vertical menu text-small">
                            <li><a target="_blank"
                                    href="https://itunes.apple.com/us//app/nowrx-pharmacy-on-demand/id1066924988"><img
                                        class="lozad"    
                                    style="max-width: 140px;"
                                        data-src="<?php echo get_template_directory_uri(); ?>/library/images/app-apple-store-button.png"
                                        alt="Download NowRx Pharmacy on the App Store"></a></li>
                            <li><a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.nowrx.client"><img
                                        class="lozad"    
                                    style="max-width: 140px;"
                                        data-src="<?php echo get_template_directory_uri(); ?>/library/images/app-google-store-button.png"
                                        alt="Get the NowRx Pharmacy app on Google Play"></a></li>
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


<?php if(!is_page('nowprep')): ?>

<div class="calltoaction">
    <div class="container">
        <div class="content">
            <a href="<?= get_site_url(); ?>/get-started/" class="rx-btn" id="firstbutton">
            <span class="arrow">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 384 512" class="svg-inline--fa fa-file-prescription fa-w-12 fa-2x">
                                        <path fill="currentColor"
                                            d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm68.53 179.48l11.31 11.31c6.25 6.25 6.25 16.38 0 22.63l-29.9 29.9L304 409.38c6.25 6.25 6.25 16.38 0 22.63l-11.31 11.31c-6.25 6.25-16.38 6.25-22.63 0L240 413.25l-30.06 30.06c-6.25 6.25-16.38 6.25-22.63 0L176 432c-6.25-6.25-6.25-16.38 0-22.63l30.06-30.06L146.74 320H128v48c0 8.84-7.16 16-16 16H96c-8.84 0-16-7.16-16-16V208c0-8.84 7.16-16 16-16h80c35.35 0 64 28.65 64 64 0 24.22-13.62 45.05-33.46 55.92L240 345.38l29.9-29.9c6.25-6.25 16.38-6.25 22.63 0zM176 272h-48v-32h48c8.82 0 16 7.18 16 16s-7.18 16-16 16zm208-150.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"
                                            class=""></path>
                                    </svg>
                            </span>
            Get Started                   

        </a>
            <a href="sms:213-263-4391" class="rx-btn rx-green ml" id="secondbutton">
          <span class="arrow">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment fa-w-16 fa-2x"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z" class=""></path></svg>
          </span>
            Text NowRx
        
        </a>
        </div>
    </div>
</div>
<?php endif; ?>


<?php wp_footer(); ?>

</div> <!-- closes off canvas content -->
 

<script async >
    var script = document.createElement('script');
    script.src = "<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js";
    document.getElementsByTagName('head')[0].appendChild(script); 

</script>

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