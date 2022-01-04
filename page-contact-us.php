<?php
/*
 Template Name: How It Works
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<!-- hero -->
<section class="hero-home contactpage">


    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">
                    <span class="sub-headline">
                        Contact Nowrx pharmacy support
                    </span>
                    <h1 class="hiw-title">
                        Talk to a Live Person
                    </h1>
                <p>
                    Contact us by filling out the form below or calling your local NowRx. To refill or transfer a prescription,  <b><a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Tap Here</a></b>.
                </p>
                <div class="btn-container">
                        <a class="rx-btn" href="#contactus">
                            <?php include('reg-arrow.php'); ?>
                            contact us
                        </a>
                        <a class="rx-btn rx-green mrb" href="#contactus-faqs">
                            <?php include('grn-arrow.php'); ?>
                            View FAQs
                        </a>
                    </div>
            </div>

            <!-- image -->
            <div class="column-half image-col">
                <picture class="lozad"
                     data-toggle-class="active">

                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-pharmacist-pulling-prescription-delivery-from-parata-robot.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-pharmacist-pulling-prescription-delivery-from-parata-robot.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx-pharmacist-pulling-prescription-delivery-from-parata-robot.webp" class="orbit-image lozad" height="500px" width="650px" alt="NowRx pharmacist pulling prescription delivery from parata robot">
                </picture>
            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>
<?php include('section-visitblock.php'); ?>




<section class="form-and-locations" id="contactus">
    <div class="container">
        <div class="content">
            <div class="form-item">
                <div class="containerform">
                    <h2 class="sec-title">Get in Touch</h2>
                    <p>For medication refills, transfers, or new prescriptions please use our online transfer form at <a
                            href="https://nowrx.com/refill-and-transfer-prescriptions/">nowrx.com/refill-and-transfer-prescriptions/</a>
                    </p>
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script charset="utf-8" type="text/javascript" defer src="//js.hsforms.net/forms/v2.js"></script>
                    <script defer>
                        window.addEventListener('load', function() {
                            hbspt.forms.create({
                                portalId: "5952677",
                                formId: "c3096955-bd03-4e37-a266-c4fc4cc523a7"
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="locations-list">
                <h2 class="sec-title">
                    View NowRx Pharmacy Location
                </h2>
                <span class="clockview">
                    (Click to View a Location)
                </span>
                <span class="items">
                    <div class="locatios-mainblock">
                        <div class="location-item"> <a
                                href="<?= get_site_url(); ?>/locations/california/mountain-view/">
                                <h2 class="sec-title">Mountain View, CA</h2>
                            </a>
                            <div class="btn-block"> <a
                                    href="<?= get_site_url(); ?>/locations/california/mountain-view/" class="rx-btn">
                                    View More Info
                                <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                </a> </div>
                        </div>
                        <div class="location-item"> <a href="<?= get_site_url(); ?>/locations/california/irvine/">
                                <h2 class="sec-title">Irvine, CA</h2>
                            </a>
                            <div class="btn-block"> <a href="<?= get_site_url(); ?>/locations/california/irvine/"
                                    class="rx-btn"> View More Info
                                <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                </a> </div>
                        </div>
                        <div class="location-item"> <a
                                href="<?= get_site_url(); ?>/locations/california/burlingame/">
                                <h2 class="sec-title">Burlingame, CA</h2>
                            </a>
                            <div class="btn-block"> <a href="<?= get_site_url(); ?>/locations/california/burlingame/"
                                    class="rx-btn"> View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                </a>
                            </div>
                        </div>
                            <div class="location-item"> <a href="<?= get_site_url(); ?>/locations/california/mesa/">
                                    <h2 class="sec-title">Mesa, AZ</h2>
                                </a>
                                <div class="btn-block"> <a href="<?= get_site_url(); ?>/locations/california/mesa/"
                                        class="rx-btn"> View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                    </a> </div>
                            </div>
                            <div class="location-item"> <a
                                    href="<?= get_site_url(); ?>/locations/california/san-jose/">
                                    <h2 class="sec-title">San Jose, CA</h2>
                                </a>
                                <div class="btn-block"> <a
                                        href="<?= get_site_url(); ?>/locations/california/san-jose/" class="rx-btn">
                                        View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                    </a> </div>
                            </div>
                            <div class="location-item">
                                 <a
                                    href="<?= get_site_url(); ?>/locations/california/pleasanton/">
                                    <h2 class="sec-title">Pleasanton, CA</h2>
                                </a>
                                <div class="btn-block"> <a
                                        href="<?= get_site_url(); ?>/locations/california/pleasanton/"
                                        class="rx-btn"> View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                    </a>
                                    </div>
                            </div>
                            <div class="location-item"> <a
                                    href="<?= get_site_url(); ?>/locations/california/van-nuys/">
                                    <h2 class="sec-title">Van Nuys, CA</h2>
                                </a>
                                <div class="btn-block">
                                    <a
                                        href="<?= get_site_url(); ?>/locations/california/van-nuys/" class="rx-btn">
                                        View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                    </a> </div>
                            </div>
                            <div class="location-item">
                                <a
                                    href="<?= get_site_url(); ?>/locations/california/hayward/">
                                    <h2 class="sec-title">Hayward, CA</h2>
                                </a>
                                <div class="btn-block"> <a
                                        href="<?= get_site_url(); ?>/locations/california/hayward/" class="rx-btn">
                                        View More Info
                                    <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                </span>
                                    </a>
                                    </div>
                            </div>

                        </div>
                </span>
            </div>
        </div>
    </div>
</section>


<?php include('section-visitblock.php'); ?>

<!-- FAQ -->
<?php get_template_part('components/section-faq-flip'); ?>





<?php include('section-visitfaq.php'); ?>




<?php get_footer(); ?>