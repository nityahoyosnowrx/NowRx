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
                            contact us </a>
                        <a class="rx-btn rx-green mrb" href="#contactus-faqs">
                            <?php include('grn-arrow.php'); ?>
                            View FAQs</a>
                    </div>

            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="doctor considering a local nowrx pharmacy for prescription delivery"
                    data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/Pharmacist.jpeg">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp" class="orbit-image "
                        height="500px" width="650px"
                        alt="doctor considering a local nowrx pharmacy for prescription delivery">
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



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
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                        portalId: "5952677",
                        formId: "c3096955-bd03-4e37-a266-c4fc4cc523a7"
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


<!-- visit faq -->
<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    No Signup Required. No Hidden Fees
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Just a Better Pharmacy
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true"
                        tabindex="0" class="rx-btn rx-dg">
                        Request a NowRx Doctor Kit
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    Still have questions about how to get started with NowRx Pharmacy? Email us at <a
                        href="maito:info@nowrx.com" class="alink">info@nowrx.com </a>and we will be happy to help.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq -->
<section class="faq-section" id="contactus-faqs">
    <div class="container">
        <div class="content">
            <div class="titleblock">
                <div class="rvl">
                    <span class="sub-headline">
                        NowRx Pharmacy Delivery
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Frequently Asked Questions
                    </h2>
                </div>
            </div>
            <div class="faq-content">

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What is NowRx?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in to
                                pick up medication, we bring them to you.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Is NowRx a mail-order pharmacy?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NO. NowRx Pharmacy has physical locations in all of our service areas. We accept
                                walk-ins and our pharmacists are always available to chat in person or over the phone.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How can you afford to provide free same-day delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Proprietary tech inside our pharmacy increases efficiency and reduces our cost to about
                                1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How do you make money?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                We make money like every pharmacy or healthcare service – reimbursement from insurance
                                and copays from the patient.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Do you charge more to offset the cost of delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NO. Prices are lower than or competitive with all pharmacies. We also automatically
                                search for and apply available coupons to offer the lowest price possible (over $1M
                                saved!).
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How do you handle special requests?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Special requests (e.g. blister packs, medication sorting, etc.) are available upon
                                request. Just let our pharmacist know when they reach out to schedule your delivery!


                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Can I manage prescriptions for a family member?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Yes. You can set a head of household if a single person will be managing a family member
                                or loved one’s prescriptions.
                            </span>
                        </div>
                    </div>
                </div>


                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Do you deliver controlled & refrigerated medication?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor
                                before delivery. These meds also require a signature & proper ID.
                            </span>
                        </div>
                    </div>
                </div>




                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What insurance plans do you take?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some of
                                the lowest out of pocket prices in the areas we serve.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How long does does delivery take?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Typically, your prescription will arrive 2-4 hours after we have confirmed your
                                prescription. We also offer 1hr delivery option for a $5 fee.
                            </span>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</section>




<?php include('section-visitfaq.php'); ?>




<?php get_footer(); ?>