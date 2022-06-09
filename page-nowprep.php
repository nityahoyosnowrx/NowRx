<?php get_header(); ?>

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>

<section class="landing-block nowprep-landingblock" id="nowprep-getstarted">
    <div class="container fluid">
        <div class="content">
            <div class="text-content prep-text">
                <span class="sub-headline">An Easier Way to PrEP for HIV</span>
                <h1 class="title"><strong>HIV PrEP</strong> is Easy With NowPrEP</h1>
                <p>Get <strong>HIV PrEP medication</strong> prescribed and delivered right to your front door - enter your email below to get started.</p>
            </div>
            <div class="form-nowprep">
                <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->

                <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->

                <div id="prep-form">

                </div>

                <script defer async>

                    var $document = document.querySelector("body");

                    document.addEventListener('load', function(evt) {

                        var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                        if (!evt.target.isEqualNode($script)) {
                            return;
                        }

                        setTimeout(() => {
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "5952677",
                                formId: "ded00596-ad7a-46b6-9069-bb3552b72735",
                                formInstanceId: "main1",
                                css: '',
                                cssClass: 'dynamic-prep-form',
                                target: "#prep-form",
                                translations: {
                                    en: {
                                        submitText: "Get Started",
                                    }
                                }
                            })
                        }, 0);

                        setTimeout(() => {
                            let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

                            if (formDisplayed.length > 0) {
                                // console.log('exists', formDisplayed.length);

                            } else {

                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formId: "ded00596-ad7a-46b6-9069-bb3552b72735",
                                    formInstanceId: "main1",
                                    css: '',
                                    target: "#prep-form",
                                    translations: {
                                        en: {
                                            submitText: "Get Started",
                                        }
                                    }
                                })
                            }

                        }, 4400);

                    }, true);
                </script>
            </div>
        </div>
        <div class="media">
            <figure class="image">
                <picture>
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hiv-prep-couple-using-descovy.webp">
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hiv-prep-online-couple-for-nowprep-mobile-400.webp">
                    <img  class="orbit-image " height="500px" width="650px" alt="hiv prep couple using descovy">
                </picture>
            </figure>
        </div>
    </div>
</section>



<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>

<section class="columns-work columns-prep" id="howitwork">
    <div class="container">
        <header class="title">
            <h2 class="title">Here’s How It Works</h2>
            <p>
            HIV PrEP Made Easy
            </p>
        </header>
        <div class="row-columns">
            <div class="column-item">
                <figure class="image">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/prep-online-sign-up.webp" height="92" width="92" alt="prep online sign up" class="lozad">
                </figure>
                <h3 class="title">Sign Up for NowPrep</h3>
                <p>
                Sign up in seconds and fill out our health questionnaire to see if pre exposure prophylaxis (PrEP) is right for you.

                </p>
            </div>
            <div class="line-position">
                <div class="lines">
                    <span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
            <div class="column-item">
                <figure class="image">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/prep-online-free-being-checked.webp"  height="92" width="92"  alt="prep online free being checked" class="lozad">
                </figure>
                <h3 class="title">Complete a PrEP Lab</h3>
                <p>
                Upload a recent test result or our prescriber will work with you to set up an in person lab test at a nearby facility.
                </p>
            </div>
            <div class="line-position">
                <div class="lines">
                    <span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
            <div class="column-item">
                <figure class="image">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/prep-online-delivered.webp"  height="92" width="92"  alt="prep online delivered" class="lozad">
                </figure>
                <h3 class="title">Get HIV PrEP Delivered</h3>
                <p>If HIV PrEP medication is right for you, our physician will prescribe it online and we will deliver it in hours for FREE!</p>
            </div>
            <div class="line-position">
                <div class="lines">
                    <span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
            <div class="column-item">
                <figure class="image">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-driver-bringing-prescriptions-to-a-house-mobile.webp"  height="92" width="92"  alt="Set Up Auto-Refill" class="lozad">
                </figure>
                <h3 class="title">Set Up Auto-Refill</h3>
                <p>Get your PrEP medication automatically delivered each month and an auto-reminder when a new lab order is needed.</p>
            </div>

        </div>
        <div class="btn-container">
            <a class="rx-button" id="nowprep-gt-gt" href="#nowprep-getstarted">  Get Started</a>
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
                    <a class="rx-btn rx-dg" href="#nowprep-getstarted">Get Started</a>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="faq-blocks prep docprep" id="faq">
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
                                    <img src="data:image/svg+xml;base64,IDxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gcG9pbnRzPSI3OS4wOTMsMCA0OC45MDcsMzAuMTg3IDE0Ni43MiwxMjggNDguOTA3LDIyNS44MTMgNzkuMDkzLDI1NiAyMDcuMDkzLDEyOCAgICIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3ZnPg==" alt="arrow">
                                </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowPrEP?
                                <span class="question-svg">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                                Receive a doctor consultation, get your PrEP prescription, and have
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                            You will also be required to provide a recent negative PrEP test (last 3 months), which most insurance plans will cover.
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                    <img src="data:image/svg+xml;base64,IDxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gcG9pbnRzPSI3OS4wOTMsMCA0OC45MDcsMzAuMTg3IDE0Ni43MiwxMjggNDguOTA3LDIyNS44MTMgNzkuMDkzLDI1NiAyMDcuMDkzLDEyOCAgICIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3ZnPg==" alt="arrow">
                                </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is Pre Exposure Prophylaxis (PrEP)?
                                <span class="question-svg">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
Next, NowPrEP will order a lab at a testing facility near you.
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjY2MSA0OTAuNjYxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0OTAuNjYxIDQ5MC42NjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTQ1My4zNTIsMjM2LjA5MUw0OC4wMTksMS40MjRjLTMuMjg1LTEuODk5LTcuMzYtMS44OTktMTAuNjg4LDBjLTMuMjg1LDEuODk5LTUuMzMzLDUuNDE5LTUuMzMzLDkuMjM3djQ2OS4zMzMgICAgYzAsMy44MTksMi4wNDgsNy4zMzksNS4zMzMsOS4yMzdjMS42NDMsMC45MzksMy40OTksMS40MjksNS4zMzMsMS40MjljMS44NTYsMCwzLjY5MS0wLjQ2OSw1LjM1NS0xLjQyOWw0MDUuMzMzLTIzNC42NjcgICAgYzMuMjg1LTEuOTIsNS4zMTItNS40NCw1LjMxMi05LjIzN1M0NTYuNjM3LDIzNy45ODksNDUzLjM1MiwyMzYuMDkxeiIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+" alt="">
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
                            <span class="tiltelink" data-toggle="submitaquestion" aria-controls="submitaquestion" aria-haspopup="true" tabindex="0">Submit a Question</span>
                            <span class="chevron-arrow tiltelink" data-toggle="submitaquestion" aria-controls="submitaquestion" aria-haspopup="true" tabindex="0">
                            <img src="data:image/svg+xml;base64,IDxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gcG9pbnRzPSI3OS4wOTMsMCA0OC45MDcsMzAuMTg3IDE0Ni43MiwxMjggNDguOTA3LDIyNS44MTMgNzkuMDkzLDI1NiAyMDcuMDkzLDEyOCAgICIgLz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3ZnPg==" alt="arrow">

                            </span>
                        </h2>
                    </div>
                </div>

                <div class="faq-block">
                <div class="disclaim">
                Have questions about NowPrEP or an HIV PrEP pill? Email us at <a href="mailto:telehealth@nowrx.com">telehealth@nowrx.com</a>
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


<section class="storybox nowprep" id="ourstory">
    <div class="container">
        <div class="content">

            <div class="col txcl">
                <h2 class="sec-title">
                Pre Exposure Prophylaxis - HIV Prevention Pill Explained
                </h2>
                <p>
                Pre-exposure prophylaxis (also known as PrEP) is a medication taken to reduce the risk of contracting HIV. It is for individuals who do not have HIV but are at high risk for contracting the disease. Truvada and Descovy are the most common HIV PrEP pills used today.


                </p>
                <p>
                Studies have shown that PrEP is highly effective for preventing HIV when taken as prescribed.
                </p>
                <p>
                According to the CDC website, pre exposure prophylaxis:
                </p>
                <ul>
                    <li>Reduces the risk of getting HIV from sex by about 99%</li>
                    <li>Reduces the risk of getting HIV from injection drug use by at least 74%</li>
                </ul>
                <p>
To maximize the effectiveness of the PrEP pill you should take the medication as prescribed. Additionally, PrEP only protects against HIV so condom use is still important to maintain good sexual health and defend against other STDs.
                </p>
            </div>
            <div class="col">

                <figure>
                    <picture>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/pre-exposure-prophylaxis-pills-for-hiv-prevention-against-blue-background.webp" class="orbit-image lozad" height="500" width="650" alt="pre exposure prophylaxis pills for hiv prevention against blue background">
                    </picture>
                </figure>
            </div>
        </div>
    </div>
</section>


<section class="nowprepnews">
    <div class="container">
        <div class="content">
            <h2 class="sec-title">Learn More About HIV PrEP</h2>

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
                                            <a href="<?php the_permalink(); ?>/" class="link">Read More</a>
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



<div class="reveal twentyone nowprep-modal" id="waitlist" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
    <div class="content">
        <h2 class="title">
            <span class="title-image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" class="lozad" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
            </span>
            Get Started
        </h2>
        <div class="form-content">
            <div id="prep-form-footer"></div>
            <script defer>
                var $document = document.querySelector("body");

                document.addEventListener('load', function(evt) {
                    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                    if (!evt.target.isEqualNode($script)) {
                        return;
                    }

                    // Callback code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',
                            portalId: "5952677",
                            target: "#prep-form-footer",
                            formId: "ded00596-ad7a-46b6-9069-bb3552b72735"
                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',
                            portalId: "5952677",
                            target: "#prep-form-footer",
                            formId: "ded00596-ad7a-46b6-9069-bb3552b72735"

                        })
                    }, 4000);

                }, true);
            </script>


        </div>
    </div>
    <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

 <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- faq -->
    <!-- nowprep -->
    <div class="reveal" id="submitaquestion" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">Submit a Question</h3>
        <div class="subheading">
            <p class="center">Please enter your question below and a NowRx Pharmacy Team member will respond as soon as possible.</p>
        </div>
        <div id="question-form-submitdd"></div>
        <script defer>
            var $document = document.querySelector("body");

            document.addEventListener('load', function(evt) {
                var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                if (!evt.target.isEqualNode($script)) {
                    return;
                }

                // Callback code
                setTimeout(() => {
                    // console.log('loaded')
                    hbspt.forms.create({
                        region: "na1",
                        css: '',
                        portalId: "5952677",
                        formId: "aa3d3838-6464-4e9f-911f-d2096f43433c",
                        target: "#question-form-submitdd",
                    })
                }, 3000);

                // your callback's code
                setTimeout(() => {
                    // console.log('loaded')
                    hbspt.forms.create({
                        region: "na1",
                        css: '',
                        portalId: "5952677",
                        formId: "aa3d3838-6464-4e9f-911f-d2096f43433c",
                        target: "#question-form-submitdd",

                    })
                }, 4000);

            }, true);
        </script>

        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>





<?php get_footer(); ?>