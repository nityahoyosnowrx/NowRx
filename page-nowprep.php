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
            data-alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy)" data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px" alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy)">
        </picture>

    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



                <div class="rvls">
                    <span class="sub-headline">
                    HIV PREVENTION TELEHEALTH
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                        HIV PrEP is Easy with NowPrEP
                    </h1>
                </div>

                <div class="rvls">
                    <p>
                    NowPrEP is a telehealth service that connects you with doctors and delivers HIV prevention medication in hours for free!
                    </p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <!-- <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Join Watilist</a> -->
                        <a class="rx-btn " data-toggle="waitlist" aria-controls="waitlist"
                            aria-haspopup="true" tabindex="0"> <?php include('reg-arrow.php'); ?> Get Started</a>
                        <a class="rx-btn rx-green mrb" href="#howitwork"> <?php include('grn-arrow.php'); ?> How It Works</a>
                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                    data-iesrc="<?php echo get_template_directory_uri(); ?>/images/HIV-Prep-Banner-Image.jpeg"
                    data-alt="couple on couch looking at camera" data-toggle-class="active">

                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/HIV-Prep-Banner-Image.jpeg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/HIV-Prep-Banner-Image.jpeg"
                        class="orbit-image" height="500px" width="650px" alt="couple on couch looking at camera">
                </picture>
            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<section class="how-it-works panel--primary quatro" id="howitwork">
    <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <div class="rvl">
                    <p class="pre-headline">Using NowPrep is Simple</p>
                </div>

                <div class="rvl">
                    <h2 class="headline">Here’s How It Works</h2>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x steps">

            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">1. Sign Up for NowPrep</h3>
                    <div class="image quatroimg">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/HIV-Prep-Sign-Up-Icon.png"
                            alt="end Us Your Prescription" class="pic lozad">
                    </div>

                    <p>
                    Sign up in seconds and fill out our health questionnaire to assess whether NowPrEP is right for you.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. Complete an HIV Test</h3>
                    <div class="image quatroimg">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/HIV-PrEP-Test-Icon.png"
                            alt="We Confirm Delivery" class="pic lozad ">
                    </div>

                    <p>
                    We will order a full lab test and help you set up an appointment with one of our partner labs near you.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Get HIV PrEP Delivered</h3>
                    <div class="image quatroimg">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/images/HIV-Prep-Prescription-Icon.png"
                            alt="Medication is Delivered" class="pic lozad">
                    </div>

                    <p>
                    If a NowPrEP physician decides a prescription is right for you, we will deliver your medication in hours for free.
                    </p>
                </div>
            </div>
         


        </div>
    </div>
</section>



<section class="split-bubbles" >
    <div class="container">
        <div class="content">
            <div class="rvl">
                <p class="pre-headline">HIV PrEP from the privacy of your home</p>
            </div>

            <div class="rvl">
                <h2 class="headline">Why Choose NowPrep</h2>
            </div>
            <div class="imageblock imgslide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/prepimage.jpeg" alt="couple reading information about nowprep on laptop" class="pic">
            </div>
        </div>
        <div class="pills">
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                    Convenient & Easy to Use
                </div>
                <div class="text">
                    Sign up in minutes and get a physician consultation from the comfort and privacy of your home.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                    Free Prescription Delivery
                </div>
                <div class="text">
                    If Prep is right for your, NowRx will deliver your medication for free within 5 hours.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                    Insurance Approval Assistance
                </div>
                <div class="text">
                    We help you navigate the insurance approval process to make sure your medications are covered.
                </div>
            </div>
            <!-- pill -->
            <div class="pill reganim">
                <div class="title">
                    5 Star Rated Customer Service
                </div>
                <div class="text">
                    Rated 5 stars on Yelp & Google, our staff does everything to provide the best service imaginable.
                </div>
            </div>
        </div>
    </div>
</section>




<!-- visit faq -->
<section class="visit-faq nwprepviti" >
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

                    <a class="rx-btn rx-dg" data-toggle="waitlist" aria-controls="waitlist"
                        aria-haspopup="true" tabindex="0">Get Started</a>
                </div>
            </div>
           
        </div>
    </div>
</section>




<section class="faq-blocks prep"  id="faq">
    <div class="container">
        <div class="topcontent content">
                <span class="sub-headline">
                    A better local pharmacy delivered
                </span>
                <h2 class="sec-title">
                    How can we help you today?
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                            Receive a free doctor consultation, get your PrEP prescription, and have medication delivered right to your door for no additional charge.

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                            First, sign up for the NowPrEP service and fill out our health questionnaire to assess whether HIV PrEP is right for you.

                                            </p>
                                            <p>
                                            Next, NowPrEP will order a full lab test and help you set up an appointment with one of our partner labs near you.

                                            </p>
                                            <p>
                                            Finally, if a NowPrEP physician decides a prescription is right for you, we will deliver your medication in hours for free.

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                                NowPrep and NowRx pride themselves on price transparency. Below is a
                                                breakdown of the costs that you can expect while using NowPrEP:


                                            </p>
                                            <p>
                                                Signup and Health Questionnaire: Free

                                            </p>
                                            <p>
                                                
                                                Lab Test: $119 (most health insurance will cover)
                                            </p>
                                            <p>
                                                Medication: Free

                                            </p>
                                            <p>
                                                Same-Day Prescription Delivery: Free

                                            </p>
                                            <p>
                                                Same-day delivery typically takes 2-3 hours from the time the
                                                prescription is written. We also offer a 1 hour expedited delivery for a
                                                $5 fee.

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                                All of our physicians are licensed, heavily vetted, and highly qualified.
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                            In order to use NowPrEP, you must sign up and complete our online health questionnaire as well as take a lab test for PrEP to determine whether it is safe to use. Additionally, a test may not be required if you can provide test results for PrEP taken in the last 3 months.
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                                Signup and Online Health Questionnaire: 30 min

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                                living with HIV or people who were assigned female at birth because its
                                                effectiveness has not been studied.

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                            PrEP works by blocking an enzyme called HIV reverse transcriptase. By blocking this enzyme, HIV is prevented from replicating itself inside the body.
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                                First, sign up for the NowPrEP service and fill out our health
                                                questionnaire to assess whether HIV PrEP is right for you.

                                            </p>
                                            <p>
                                                Next, NowPrEP will send you a home test kit or, if you prefer, we will
                                                set up an in-person HIV test appointment near you.

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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
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

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            HIV Related Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                       
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How common is HIV?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How common is HIV?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            There were approximately 38 million people across the globe with HIV/AIDS in 2019. Of these, 36.2 million were adults and 1.8 million were children (< 15 years old).
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
                                How is HIV transmitted?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How is HIV transmitted?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            HIV can only be spread through specific activities, the most common of which are:

                                            </p>
                                            <ul>
                                                <li>
 Having vaginal or anal sex with someone who has HIV without using a condom or taking medicines to prevent or treat HIV

                                                </li>
                                                <li>
 Sharing injection drug equipment, for example, needles, with someone who has HIV

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
                                Do condoms prevent HIV?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Do condoms prevent HIV?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            Studies suggest that when used correctly, condoms are highly effective at preventing HIV.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is usually the first sign of HIV?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is usually the first sign of HIV?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            The first signs of HIV are usually flu-like symptoms including but not limited to fever, chills, rash, night sweats, muscle aches, sore throat, fatigue, swollen lymph nodes, and mouth ulcers.

                                            </p>
                                            <p>
These symptoms may last anywhere from a few days to a few weeks. If you think you may have been exposed to HIV you should get tested immediately.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How long does it take to show symptoms of HIV?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How long does it take to show symptoms of HIV?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            According to the CDC, flu-like symptoms may begin to show up 2-4 weeks after initial exposure.

                                            </p>
                                            <p>
These symptoms may last anywhere from a few days to a few weeks. If you think you may have been exposed to HIV you should get tested immediately.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Can you get HIV from oral sex?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Can you get HIV from oral sex?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            Typically, there is little to no risk of getting or transmitting HIV from oral sex although it is possible if an HIV-positive man ejaculates in his partner's mouth during oral sex.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Is HIV curable?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Is HIV curable?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            According to the CDC, there is no effective cure for HIV but with proper medical care, the condition can be managed. If you have been diagnosed with HIV, talk with your healthcare professional to discuss your options.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can I reduce my risk of getting HIV?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can I reduce my risk of getting HIV?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            One of the most effective ways to reduce your risk of getting HIV through sex is by using Pre Exposure Prophylaxis (PrEP). Studies have shown that PrEP reduces the risk of getting HIV from sex by about 99% when taken daily. Other ways to reduce the risk of contracting HIV include using proper safe sex practices like wearing a condom and not sharing injection drug equipment.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How often should I be tested for HIV and other STIs?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How often should I be tested for HIV and other STIs?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                            According to the CDC, sexually active adults and adolescents should be tested at least once a year for HIV and other STIs. Those who have multiple or anonymous partners should be tested more frequently (i.e. at 3-6 month intervals).
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
                            NowRx Pharmacy Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy is a retail pharmacy just like any CVS or Walgreens,
                                                except instead of customers coming into the store to pick up their
                                                medications, we deliver it in hours free of charge. We have physical
                                                locations local to every area we service and offer the same services as
                                                a traditional retail pharmacy.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx prescription delivery work?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx prescription delivery work?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                The prescription delivery process is simple with NowRx Pharmacy.

                                            </p>

                                            <ol>
                                                <li> You or your doctor sends a prescription to NowRx (we accept
                                                    ePrescribe, fax, or calls)</li>
                                                <li> We call you to confirm the prescription, collect your copay, and
                                                    set up a delivery time.</li>
                                                <li> A pharmacy employee delivers the prescription in a few hours free
                                                    of charge.</li>
                                            </ol>








                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How is NowRx different than a mail-order pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How is NowRx different than a mail-order pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Unlike mail-order pharmacies:
                                            </p>

                                            <ul>
                                                <li>
                                                     NowRx has physical pharmacies local to every area we service.

                                                </li>
                                                <li>
                                                     NowRx employees deliver all medications (opposed to using 3rd
                                                    parties like USPS)

                                                </li>
                                                <li>
                                                     NowRx deliveries arrive within hours as opposed to mail services
                                                    which can take 3-14 days.

                                                </li>
                                                <li>
                                                     NowRx delivers both controlled and refrigerated medications for no
                                                    additional charge

                                                </li>
                                                <li>
                                                     NowRx always has a live pharmacy team member available to answer
                                                    your questions."

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
                                How does NowRx make money?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx make money?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx makes money like all pharmacies and healthcare services –
                                                reimbursement from insurance and copays from the patient.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowRx charge more to cover delivery costs?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does NowRx charge more to cover delivery costs?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                No, NowRx never raises the cost of your medication to offset delivery
                                                costs.



                                            </p>

                                            <p>
                                                For prescriptions paid for through insurance, your copay is set by the
                                                insurance company and will generally be the same regardless of the
                                                pharmacy you use.

                                            </p>
                                            <p>
                                                For prescriptions paid for without insurance, our cash pricing is
                                                competitive with or lower than competing pharmacies.

                                            </p>
                                            <p>
                                                Additionally, anytime we receive a prescription our software
                                                automatically searches for drug coupons and applies them if it will
                                                lower your out of pocket costs, which has saved NowRx customers over
                                                $1.5M in the past year.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can NowRx afford to deliver in hours for free?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can NowRx afford to deliver in hours for free?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx has proprietary software and technology inside each pharmacy which
                                                increases efficiency and reduces costs considerably. This allows nowrx
                                                to operate at about 1/100th the cost of a traditional retail pharmacy
                                                like CVS or Walgreens.

                                            </p>

                                            <p>
                                                We then use these savings to provide customer benefits like free
                                                delivery in hours, better customer service, and better cash pricing.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What insurance plans does NowRx accept?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What insurance plans does NowRx accept?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy accepts all major insurance plans except Kaiser
                                                Permanente. We also offer non-insurance pricing that is competitive with
                                                or lower than even leading discount drug cards like GoodRx.
                                            </p>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Where does NowRx Pharmacy offer prescription delivery?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Where does NowRx Pharmacy offer prescription delivery?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy has physical pharmacy locations throughout California
                                                and Arizona. We offer free prescription delivery in hours to these
                                                cities and surrounding areas.


                                            </p>

                                            <p>
                                                Customers and doctors are also more than welcome to stop by these
                                                physical locations to fill a prescription or ask our pharmacist a
                                                question.

                                            </p>
                                            <p>
                                                To view our locations and service area maps please visit <a
                                                    href="https://nowrx.com/locations">https://nowrx.com/locations</a>

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What medications does NowRx Pharmacy deliver?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What medications does NowRx Pharmacy deliver?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy offers delivery of over 250 prescriptions including
                                                controlled and refrigerated medications. We also offer delivery of
                                                common over the counter medications and supplements like Tylenol,
                                                Vitamin D, etc. We do not offer compounding at this time.
                                            </p>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Can I manage a family member or loved one’s prescriptions?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Can I manage a family member or loved one’s prescriptions?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx allows you to set a head of household or caregiver if one person
                                                will be managing a family member or loved one's prescriptions. Just give
                                                us a call at (844) 466-6979 or email us at info@nowrx.com and we will be
                                                happy to get you set up.
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <title>Close icon</title>
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                </div>

            </div>
            
        </div>
    <div class="faq-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/HIV-PrEP-Doctor-Image.png" alt=" transgender woman looking up"
                    class="pic">
            </div>
    </div>

</section>




<?php get_footer(); ?>