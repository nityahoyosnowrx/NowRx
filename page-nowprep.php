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
                    <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                    <img class="orbit-image " height="500px" width="650px" alt="hiv prep couple using descovy">
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
            <h2 class="title">HIV PrEP With NowPrEP</h2>
            <p>
            Get HIV PrEP medication prescribed online and delivered with NowPrEP. Here's how it works.
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
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/prep-online-free-being-checked.webp" height="92" width="92" alt="prep online free being checked" class="lozad">
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
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/prep-online-delivered.webp" height="92" width="92" alt="prep online delivered" class="lozad">
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
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-driver-bringing-prescriptions-to-a-house-mobile.webp" height="92" width="92" alt="Set Up Auto-Refill" class="lozad">
                </figure>
                <h3 class="title">Set Up Auto-Refill</h3>
                <p>Get your PrEP medication automatically delivered each month and an auto-reminder when a new lab order is needed.</p>
            </div>

        </div>
        <div class="btn-container">
            <a class="rx-button" id="nowprep-gt-gt" href="#nowprep-getstarted"> Get Started</a>
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
                <img width="700px" height="700px" data-src="<?php echo get_template_directory_uri(); ?>/images/prep-hiv-pill-being-looked-at-by-couple.webp" alt="prep hiv pill being looked at by couple" class="pic lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg" alt="cancel icon" class="lozad">
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
                    <div class="disclaim">
                        Have questions about NowPrEP or an HIV PrEP pill? Email us at <a href="mailto:telehealth@nowrx.com">telehealth@nowrx.com</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="faq-image">
            <img width="700px" height="700px" data-src="<?php echo get_template_directory_uri(); ?>/images/HIV-PrEP-doctor-getting-ready-to-prescribe-truvada-or-descovy.webp" alt="HIV PrEP doctor getting ready to prescribe truvada or descovy" class="pic lozad">
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
            <h2 class="sec-title">HIV PrEP Resources</h2>
        <div class="subtitle">Learn more about the HIV PrEP pill and other options for HIV prevention.</div>
            <div class="contentslider">
                <!-- Slider main container -->
                <div class="swiper-container nowprepslider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">



                        <?php
                        // Example argument that defines three posts per page.
                        // $args = array( 'posts_per_page' => 3  );
                        $args = array('posts_per_page' => 6, 'tag' => 'hiv-prep',);

                        // Variable to call WP_Query.
                        $trendloop = new WP_Query($args);

                        if ($trendloop->have_posts()) :
                            // Start the Loop
                            while ($trendloop->have_posts()) : $trendloop->the_post();

                        ?>


                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="cont">
                                        <figure class="image">
                                            <a href="<?php the_permalink(); ?>" class="image-link">
                                                <?php if (has_post_thumbnail($post->ID)) : ?>

                                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                                    if ($image) :
                                                    ?>
                                                        <img width="400px" height="200px" class="MostPopular-thumbnail transition-fade-appear-active lozad" data-src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>" />
                                                    <?php
                                                    endif;
                                                    else :
                                                    ?>

                                                    <img width="400px" height="200px" class="MostPopular-thumbnail transition-fade-appear-active lozad" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php the_title();  ?>" />

                                                <?php endif; ?>
                                            </a>

                                        </figure>
                                        <div class="spac">
                                            <h3 class="sec-title">
                                                <a href="<?php the_permalink(); ?>" class="title-link"><?php the_title();  ?></a>
                                            </h3>
                                            <p class="txt">
                                                <?php
                                                echo substr(get_post_meta($post->ID, '_yoast_wpseo_metadesc', true), 0, 999);

                                                 ?>

                                            </p>
                                            <div class="databot">
                                                <div class="data">
                                                    <a href="<?php the_permalink(); ?>" class="readlink">
                                                        <?php echo get_the_date('F j Y - h:i a'); ?>
                                                    </a>
                                                </div>
                                                <div class="wd">
                                                    <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        <?php
                            // End the Loop
                            endwhile;
                        else :
                            // If no posts match this query, output this text.
                            _e('Sorry, no posts matched your criteria.', 'textdomain');
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