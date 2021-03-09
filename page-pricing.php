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
<section class="hero-home">
    <div class="rvl">


        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) " data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px"
                alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) ">
        </picture>

    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



                <div class="rvls">
                    <span class="sub-headline">
                    FREE SAME-DAY PHARMACY DELIVERY
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                        All You Pay is Your Normal Copay
                    </h1>
                </div>
                <div class="rvls">
                    <p>
                        With NowRx you get free same-day delivery for any medication plus the best pricing or we will
                        transfer it to another pharmacy.
                    </p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <a class="rx-btn" data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore"
                            aria-haspopup="true" tabindex="0">
                            <?php include('reg-arrow.php'); ?>
                            Get Started</a>
                        <a class="rx-btn rx-green mrb" href="#howitworks-doctors">
                            <?php include('grn-arrow.php'); ?>
                            Learn More</a>
                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="Pharmacist Ready to Provide Medication" data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.jpeg">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                        class="orbit-image lozad" height="500px" width="650px"
                        alt="Pharmacist Ready to Provide Medication">
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>





<section class="pp-section pp-section--payments">
    <div class="section-inner pp-inner--split">
        <div class="pp-split-mod pp-txt-mod">
            <p class="section-subh">How pricing works</p>
            <h2 class="section-h">Our service and shipping are free</h2>
        </div>
        <div class="pp-txt-mod--secondary">
            <h3 class="note-h">You’re only responsible for:</h3>
            <div class="inline-items-mod no-break">
            <svg id="Prescription" viewBox="0 0 31 33"><g fill="#0AF" fill-rule="evenodd"><path d="M11.954 8.95v1.115H9.461v2.493H8.346v-2.493H5.853V8.95h2.493V6.458h1.115V8.95h2.493zM7.096 5.208V7.7H4.603v3.615h2.493v2.493h3.615v-2.493h2.493V7.7h-2.493V5.208H7.096zM5.228 18.357h11.784v-1.25H5.228zM5.229 21.56h8.208v-1.25H5.229zM5.229 24.764h10.208v-1.25H5.229z"></path><path d="M18.861 2.918l3.391 3.392h-3.39V2.918zm-.697 27.95H1.886V2.034h15.725V7.56h5.525v3.458a.626.626 0 0 0 1.25 0V6.676L18.496.784H.635v31.334h17.528a.625.625 0 0 0 0-1.25z"></path><path d="M20.501 17.721h8.559v-2.964h-8.559v2.964zm-1.25 1.25H30.31v-5.464H19.251v5.464zM21.758 30.868h6.045v-2.115h-6.045v2.115zm6.67-10.483a.625.625 0 0 0-.625.625v6.493h-6.045V21.01a.625.625 0 0 0-1.25 0v11.108h8.545V21.01a.625.625 0 0 0-.625-.625z"></path></g></svg>
                <p class="section-p"><strong>Your monthly medications</strong> You’ll pay your insurance copay or any
                    out-of-pocket expenses (if applicable).</p>
            </div>
            <div class="inline-items-mod no-break"> 
            <svg id="PillBottle" viewBox="0 0 28 34"><g fill="#0AF" fill-rule="evenodd"><path d="M3.937 17.949h10.972v-1.25H3.937zM3.937 21.076h7.643v-1.25H3.937zM5.665 3.985h9.243V1.86H5.665v2.125zm-1.25 1.25h11.743V.61H4.415v4.625z"></path><path d="M16.717 32.317H2.748a1.166 1.166 0 0 1-1.165-1.165v-3.544H8.28a.625.625 0 0 0 0-1.25H1.583V13.99h17.408v1.47a.626.626 0 0 0 1.25 0v-3.979a4.023 4.023 0 0 0-4.018-4.018c-1.31 0-1.566-.697-1.65-.925a.622.622 0 0 0-.8-.373.623.623 0 0 0-.373.8c.411 1.127 1.414 1.748 2.823 1.748a2.771 2.771 0 0 1 2.768 2.768v1.26H1.583v-1.26A2.77 2.77 0 0 1 4.35 8.713c1.41 0 2.411-.62 2.823-1.745A.624.624 0 1 0 6 6.54c-.083.228-.338.924-1.649.924a4.022 4.022 0 0 0-4.017 4.018v19.671a2.417 2.417 0 0 0 2.415 2.415h13.97a.625.625 0 0 0 0-1.25M23.206 32.743a2.637 2.637 0 0 1-2.634-2.634 2.637 2.637 0 0 1 2.634-2.634 2.637 2.637 0 0 1 2.634 2.634 2.637 2.637 0 0 1-2.634 2.634m0-6.518a3.889 3.889 0 0 0-3.884 3.884 3.888 3.888 0 0 0 3.884 3.884 3.888 3.888 0 0 0 3.884-3.884 3.889 3.889 0 0 0-3.884-3.884"></path><path d="M21.922 21.154c0 .563-.22 1.094-.618 1.492l-2.685 2.686-2.985-2.985 2.685-2.684c.399-.4.929-.618 1.493-.618.563 0 1.093.218 1.492.618.398.397.618.928.618 1.491zm-6.873 7.747a2.115 2.115 0 0 1-2.984 0 2.095 2.095 0 0 1-.62-1.492c0-.564.22-1.094.62-1.49l2.686-2.687 2.983 2.984-2.685 2.685zm2.387-10.123l-6.255 6.255a3.337 3.337 0 0 0-.985 2.376c0 .897.35 1.742.985 2.377a3.351 3.351 0 0 0 2.376.981c.86 0 1.72-.327 2.376-.98l6.255-6.256c.634-.635.984-1.48.984-2.377 0-.897-.35-1.74-.984-2.376-1.27-1.27-3.483-1.27-4.752 0z"></path></g></svg>
                <p class="section-p"><strong>Any vitamins and over-the-counter&nbsp;meds</strong> You’ll pay for any
                    non-prescription medications you add to your service.</p>
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
<section class="faq-section">
    <div class="container">
        <div class="content">
            <div class="titleblock">
                <div class="rvl">
                    <span class="sub-headline">
                        Pharmacy Delivery from NowRx
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
                                The proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                about
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
                                How long does delivery take?
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
<!-- visit faq -->
<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    Have additional questions about NowRx Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Visit our FAQ Page
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/faqs/#faqblock" class="rx-btn rx-dg">
                        Frequently Asked Questions
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    You can also text us at (844) 466-6979 or send an email to info@nowrx.com and we will get back to
                    you as soon as possible.
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>