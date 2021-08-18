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


    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



                <div class="rvls">
                    <span class="sub-headline">
                    An Easier Way to HIV PrEP
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                    <span class="k">HIV PrEP is Easy </span>
                        <span class="k">with NowPrEP</span>
                    </h1>
                </div>

                <div class="rvls">
                    <p>
                    NowPrEP prescribes HIV PrEP medication & delivers it to you. 99% of patients pay $0 - Tap below to get started!



                    </p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <!-- <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions">Join Watilist</a> -->
                        <a class="rx-btn " id="nowprep-gt-gt" data-toggle="waitlist" aria-controls="waitlist" aria-haspopup="true" id="getstarted-gt" tabindex="0"> <?php include('reg-arrow.php'); ?> Get Started</a>
                        <a class="rx-btn rx-green mrb" href="#howitwork"> <?php include('grn-arrow.php'); ?> How It
                            Works</a>
                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                     data-toggle-class="active">

                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hiv-prep-couple-using-descovy.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hiv-prep-couple-using-descovy.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/hiv-prep-couple-using-descovy.webp" class="orbit-image lozad" height="500px" width="650px" alt="hiv prep couple using descovy">
                </picture>
            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php
include('section-companies.php'); ?>



<section class="how-it-works panel--primary quatro" id="howitwork">
    <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <div class="rvl">
                    <p class="pre-headline">HIV PrEP Made Easy</p>
                </div>

                <div class="rvl">
                    <h2 class="headline">Here’s How It Works</h2>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x steps">

            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <div class="image quatroimg">
                        <img width="70px" height="70px" data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/prescription-delivery-sent-icon.webp"
                            alt="prescription delivery sent icon" class="pic lozad">
                    </div>
                    <h3 class="padding-bottom-3">1. Sign Up for NowPrep</h3>

                    <p class="txtcenter">
                        Sign up in seconds and fill out our health questionnaire to assess whether you are eligible for PrEP medication.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <div class="image quatroimg">
                        <img width="70px" height="70px" data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/prescription-delivery-confirmed-icon.webp"
                            alt="prescription delivery confirmed icon" class="pic lozad ">
                    </div>
                    <h3 class="padding-bottom-3">2. Complete an HIV Test</h3>

                    <p class="txtcenter">
                    Our prescriber will work with you to set up an in person lab test or mail you a home test kit.

                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <div class="image quatroimg">
                        <img width="70px" height="70px" data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/prescription-delivery-car-icon.webp"
                            alt="prescription delivery car icon" class="pic lozad">
                    </div>
                    <h3 class="padding-bottom-3">3. Get HIV PrEP Delivered</h3>

                    <p class="txtcenter">
                    If a NowPrEP physician decides HIV PrEP Medication is right for you, we will prescribe and deliver it in hours for FREE!
                    </p>
                </div>
            </div>



        </div>
    </div>
</section>



<section class="split-bubbles">
    <div class="container">


       <div class="addimage">
       <div class="pills">
       <div class="content">
                <p class="pre-headline">HIV PrEP from the privacy of your home</p>

                <h2 class="sec-title">Why Choose NowPrep</h2>

        </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                Affordable & Easy to Use
                </div>
                <div class="text">
                Sign up for free and get access to our NowPrEP physicians from the comfort and privacy of your home.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                Free Prescription Delivery
                </div>
                <div class="text">
                Have PrEP medication delivered right to your door for free on the same day your prescription is written.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                Insurance Approval Assistance
                </div>
                <div class="text">
                Get all your Descovy or Truvada PrEP medication covered with the help of our expert pharmacists.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                5 Star Customer Service
                </div>
                <div class="text">
                Receive the best customer service imaginable from our trained pharmacy and physician team members.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                At Home Test Kits
                </div>
                <div class="text">
                Test yourself from the comfort and convenience of your home with our NowPrEP Home Testing Kits.
                </div>
            </div>
        </div>
        <div class="imageblock imgslide">
                <img width="700px" height="700px" data-src="<?php echo get_template_directory_uri(); ?>/images/prep-hiv-pill-being-looked-at-by-couple.webp"
                    alt="prep hiv pill being looked at by couple" class="pic lozad">
            </div>
       </div>
    </div>
</section>




<!-- visit faq -->
<section class="visit-faq nwprepviti">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    HIV PrEP from the Comfort of Your Home
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Get Started With NowPrEP

                </h2>

            </div>
            <div class="rvl">
                <div class="btn-container">

                    <a class="rx-btn rx-dg" data-toggle="waitlist" aria-controls="waitlist" aria-haspopup="true"
                        tabindex="0">Get Started</a>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="faq-blocks prep" id="faq">
    <div class="container">
        <div class="topcontent content">
            <span class="sub-headline">
            Have Questions?
            </span>
            <h2 class="sec-title">
            NowPrEP HIV PrEP FAQs
            </h2>
        </div>
        <div class="content botcot">
            <div class="faq-blocks">

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            Common NowPrep FAQS
                            <span class="chevron-arrow">
                                <svg
                                     id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>


                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />




                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowPrEP?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is NowPrEP?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowPrEP is a telehealth platform that allows you to prep for HIV from
                                                the comfort and privacy of your own home.


                                            </p>
                                            <p>
                                                Receive a free doctor consultation, get your PrEP prescription, and have
                                                medication delivered right to your door for no additional charge.

                                            </p>
                                            NowPrEP is your one-stop-shop for HIV PrEP.
                                            <p></p>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Who is NowPrEP for?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Who is NowPrEP for?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowPrEP is for HIV negative adults who want to protect themselves and
                                                lower the chances of getting HIV through sex.

                                            </p>



                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does the NowPrEP process work?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does the NowPrEP process work?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                The NowPrEP process is simple and takes seconds to get started.
                                            </p>
                                            <p>
                                                First, sign up for the NowPrEP service and fill out our health
                                                questionnaire to assess whether HIV PrEP is right for you.

                                            </p>
                                            <p>
                                                Next, NowPrEP will order a full lab test and help you set up an
                                                appointment with one of our partner labs near you.

                                            </p>
                                            <p>
                                                Finally, if a NowPrEP physician decides a prescription is right for you,
                                                we will deliver your medication in hours for free.

                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowPrEP cost anything?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does NowPrEP cost anything?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            NowPrEP consultation, PrEP medication, and courier delivery are completely free for 99% of patients.
                                            </p>
                                            <p>
                                            You will also be required to provide a recent negative HIV test (last 3 months), which most insurance plans will cover free of charge.
                                            </p>
                                            <p>
                                            However, if you choose to request a home test kit from NowPrEP it will cost $75.                                            </p>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Is NowPrEP safe?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Is NowPrEP safe?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Yes. NowPrEP is held to the same rules and standards that any other
                                                medical facility or physician is held to in the United States.


                                            </p>
                                            <p>
                                                All of our physicians are licensed, heavily vetted, and highly
                                                qualified.
                                                We will only prescribe medication when it is safe to do so based on your
                                                test results and the information you provide to us in your health
                                                questionnaire - so be as truthful and honest as possible!

                                            </p>
                                            <p>
                                                Additionally, all payment and health-related data are kept private and
                                                confidential offline on a secure HIPAA compliant server.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is required to use NowPrEP?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is required to use NowPrEP?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                In order to use NowPrEP, you must sign up and complete our online health
                                                questionnaire as well as take a lab test for PrEP to determine whether
                                                it is safe to use. Additionally, a test may not be required if you can
                                                provide test results for PrEP taken in the last 3 months.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowPrEP protect my information?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowPrEP protect my information?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowPrEP takes our customer information extremely seriously. We employ a
                                                number of safeguards to ensure the security of the data we collect
                                                including but not limited to maintaining all health-related data offline
                                                on a secure HIPAA compliant server.

                                            </p>
                                            <p>
                                                To learn more, please take a look at our Privacy Policy and Privacy
                                                Practices.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Can NowPrEP help me if I already have a prescription?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Can NowPrEP help me if I already have a prescription?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Yes. If you already have an HIV PrEP prescription, NowPrEP can still
                                                help.

                                            </p>
                                            <p>
                                                We offer free same-day medication delivery for existing prescriptions,
                                                automatic refills, and much more for all of our customers!

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How long does it take for me to receive a PrEP prescription?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How long does it take for me to receive a PrEP prescription?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                The average timetable for receiving a NowPrEP prescription using NowPrEP
                                                is:


                                            </p>
                                            <p>
                                                Signup and Online Health Questionnaire: 3 min

                                            </p>
                                            <p>
                                                Test Kit Delivery and Lab Results: 3-10 business days

                                            </p>
                                            <p>
                                                Prescription and Medication Delivery: 2-4 hours

                                            </p>
                                            <p>
                                                Time table may vary depending on location and results.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is the difference between NowPrEP and NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is the difference between NowPrEP and NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowPrEP and NowRx Pharmacy are both owned and run by the same company -
                                                NowRx, Inc.


                                            </p>
                                            <p>
                                                NowPrEP is a telehealth platform that specializes in HIV prevention.

                                            </p>
                                            <p>
                                                NowRx Pharmacy is a retail pharmacy that specializes in free same-day
                                                delivery of ALL prescription medications including Pre Exposure
                                                Prophylaxis (PrEP).

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Can NowPrEP share information with my primary care physician?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Can NowPrEP share information with my primary care physician?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Yes. If you want us to share information with your primary care
                                                physician, just let us know through your NowPrEP portal and we will be
                                                happy to do so. We will not share any information without your approval.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            Pre Exposure Prophylaxis (PrEP) FAQs
                            <span class="chevron-arrow">
                                <svg
                                     id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>


                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />




                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is Pre Exposure Prophylaxis (PrEP)?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is Pre Exposure Prophylaxis (PrEP)?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Pre-exposure prophylaxis (or PrEP) is a once-daily pill for people who
                                                do not have HIV but who are at very high risk of getting HIV to prevent
                                                HIV infection.

                                            </p>
                                            <p>
                                                You may be at high risk for HIV if:

                                            </p>
                                            <ul>
                                                <li>
                                                    Don't always use condoms

                                                </li>
                                                <li>
                                                    Had or currently have an STI
                                                </li>
                                                <li>
                                                    Have sexual partner(s) who don't know their HIV status

                                                </li>
                                                <li>
                                                    Have sex in a geographic area or sexual network where HIV is
                                                    prevalent

                                                </li>
                                            </ul>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Is Pre Exposure Prophylaxis (PrEP) safe?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Is Pre Exposure Prophylaxis (PrEP) safe?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                No significant adverse health effects have been seen in people using
                                                PrEP who are HIV negative for up to 5 years.



                                            </p>
                                            <p>
                                                Some side effects have occurred in people taking PrEP, like nausea, but
                                                these side effects are usually not serious and will go away over time.

                                            </p>
                                            <p>
                                                Tell your NowPrEP physician if you are having any side effects that
                                                bother you or do not go away.

                                            </p>
                                            <p>
                                                Source: hiv.gov

                                            </p>





                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Is Pre Exposure Prophylaxis (PrEP) right for me?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Is Pre Exposure Prophylaxis (PrEP) right for me?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                HIV PrEP is for HIV negative adults who want to protect themselves and
                                                lower the chances of getting HIV through sex.


                                            </p>
                                            <p>
                                                HIV PrEP is NOT for everyone including but not limited to anyone who is
                                                living with HIV.

                                            </p>
                                            <p>
                                                Talk with a NowPrEP healthcare professional to find out if PrEP is right
                                                for you.

                                            </p>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does Pre Exposure Prophylaxis (PrEP) work?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does Pre Exposure Prophylaxis (PrEP) work?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                PrEP works by blocking an enzyme called HIV reverse transcriptase. By
                                                blocking this enzyme, HIV is prevented from replicating itself inside
                                                the body.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I get Pre Exposure Prophylaxis (PrEP) through NowPrEP?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I get Pre Exposure Prophylaxis (PrEP) through NowPrEP?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Getting HIV PrEP medication through NowPrEP is simple.



                                            </p>
                                            <p>
                                            First, sign up for the NowPrEP service and fill out our health questionnaire to assess whether HIV PrEP is right for you.

                                            </p>
<p>
Next, NowPrEP will send you a home test kit, or if you prefer order a lab at a testing facility near you.
</p>
                                            <p>
                                                Finally, if a NowPrEP physician decides a prescription is right for you,
                                                we will deliver your medication in hours for free.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How much does Pre Exposure Prophylaxis (PrEP) cost?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How much does Pre Exposure Prophylaxis (PrEP) cost?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                PrEP is free for most through the NowPrEP platform.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How effective is Pre Exposure Prophylaxis (PrEP)?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How effective is Pre Exposure Prophylaxis (PrEP)?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                When taken daily, PrEP is highly effective for preventing HIV.



                                            </p>
                                            <p>
                                                Studies have shown that PrEP reduces the risk of getting HIV from sex by
                                                about 99% when taken daily. Among people who inject drugs, PrEP reduces
                                                the risk of getting HIV by at least 74% when taken daily.

                                            </p>
                                            <p>
                                                As PrEP only protects against HIV, condoms are important for the
                                                protection against other STDs.

                                            </p>
                                            <p>
                                                Source: cdc.gov
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How quickly does Pre Exposure Prophylaxis (PrEP) work?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How quickly does Pre Exposure Prophylaxis (PrEP) work?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                When starting PrEP and taking it daily, it takes at least seven days to
                                                reach high levels of protection against HIV.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does Pre Exposure Prophylaxis (PrEP) prevent other STDs?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does Pre Exposure Prophylaxis (PrEP) prevent other STDs?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                No. Although PrEP protects you against HIV, it does not protect against
                                                other sexually transmitted infections (STIs) or other types of
                                                infections.

                                            </p>
                                            <p>
                                                Combining PrEP with condoms will help reduce your risk of getting other
                                                STIs.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Is Pre Exposure Prophylaxis (PrEP) safe to take with other prescription drugs?
                                <span class="question-svg">
                                    <svg
                                         id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">

                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />


                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="cancel icon" class="lozad">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Is Pre Exposure Prophylaxis (PrEP) safe to take with other prescription
                                            drugs?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">

                                            <p>
                                                PrEP is generally safe to take with most other medications.

                                            </p>
                                            <p>
                                                However, if you are taking other medications, ALWAYS consult with your
                                                doctor, NowPrep physician, or NowRx pharmacist first to make sure it is
                                                safe to do so. This includes over the counter medication.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="faq-block">
                    <div class="clickmodal" data-opentab="0">
                        <h2 class="sec-title">

                            <span class="tiltelink" data-toggle="submitaquestion" aria-controls="submitaquestion"
                                aria-haspopup="true" tabindex="0">Submit a Question</span>

                            <span class="chevron-arrow">
                                <svg
                                     id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>


                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />




                                </svg>
                            </span>
                        </h2>
                    </div>
                </div>

                <div class="faq-block">
                <div class="disclaim">
                Have questions about NowPrEP or an HIV PrEP pill? Email us at <a href="">telehealth@nowrx.com</a>
            </div>
                </div>

            </div>

        </div>
        <div class="faq-image">
            <img width="700px" height="700px" data-src="<?php echo get_template_directory_uri(); ?>/images/HIV-PrEP-doctor-getting-ready-to-prescribe-truvada-or-descovy.webp"
                alt="HIV PrEP doctor getting ready to prescribe truvada or descovy" class="pic lozad">
        </div>
    </div>

</section>



<section class="nowprepnews">
    <div class="container">
        <div class="content">
            <h2 class="sec-title">Learn More About PrEP</h2>

            <div class="contentslider">
                <!-- Slider main container -->
                <div class="swiper-container nowprepslider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">



                    <?php
							// Example argument that defines three posts per page.
							// $args = array( 'posts_per_page' => 3  );
                            $args = array( 'posts_per_page' => 3 ,'tag' => 'PrEP',  );

							// Variable to call WP_Query.
							$trendloop = new WP_Query( $args );

							if ( $trendloop->have_posts() ) :
								// Start the Loop
								while ( $trendloop->have_posts() ) : $trendloop->the_post();

							?>


                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="cont">
                                        <figure class="image">
                                        <?php if ( has_post_thumbnail( $post->ID ) ): ?>

                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>

                                        <img width="400px" height="200px" class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                            data-src="<?php echo $image[0]; ?>"
                                            alt="<?php echo get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true ); ?>" />

                                        <?php else: ?>

                                        <img width="400px" height="200px" class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                            data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                            alt="<?php  the_title();  ?>" />

                                        <?php endif; ?>

                                        </figure>
                                        <div class="spac">
                                        <h3 class="sec-title"><?php  the_title();  ?></h3>
                                        <p class="txt">
                                        <?php echo wp_trim_words( get_the_content(), 14); ?>

                                        </p>
                                        <div class="btn-container">
                                            <a href="<?php the_permalink(); ?>" class="link">Read More</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>


                                    <?php
								// End the Loop
								endwhile;
							else:
							// If no posts match this query, output this text.
								_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
							endif;

							wp_reset_postdata();
							?>







                </div>

            </div>



        </div>

    </div>
</section>


<?php get_footer(); ?>