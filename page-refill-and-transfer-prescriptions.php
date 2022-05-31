<?php
/*
 Template Name: Refill and Transfer Prescriptions
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


<section class="fold-block">
    <div class="container fluid">

        <div class="content">
            <header>
                <h1 class="title">
                    <span class="title-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
                    </span>
                    Get Started
                </h1>
                <p>Thank you for choosing NowRx. To set up a prescription delivery we just need a little bit of contact information. Please ensure that all information you submit is correct and up to date in order to avoid delays.</p>
            </header>
            <?php include('components/refill-slider.php'); ?>
        </div>

        <div class="main-form">
            <!--[if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js" ></script>
            <![endif]-->
            <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->

            <div id="register-form"></div>
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
                    portalId: "5952677",
                                    formId: "bfc2a11c-c87f-4d3b-ad5e-9fc5878ede37",
                    css: '',
                    target: "#register-form"
                    })
                    }, 10);

                    // your callback's code
                    setTimeout(() => {
                    // console.log('loaded')
                    hbspt.forms.create({
                            region: "na1",
                            portalId: "5952677",
                                    formId: "bfc2a11c-c87f-4d3b-ad5e-9fc5878ede37",
                            css: '',
                            target: "#register-form"

                            })
                    }, 300);

                }, true);


                </script>

        </div>

        </div>
    </div>
</section>

<?php include('components/component-logo-slider.php'); ?>



<section class="block-frequent-questions registration-page">


    <div class="container fluid">
        <div class="content">
            <h2 class="title">Frequently Asked Questions</h2>
            <p>
                Get answers to NowRx’s most frequently asked questions or give one of our local pharmacies a call and we will be happy to assist you.
            </p>
            <div class="btn-container desktop">
                <a href="<?php echo get_site_url(); ?>/faqs/" class="rx-button rx-light">View all FAQs
                    <div class="icon">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-right fa-w-14 fa-9x">
                            <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <section class="faq-block">
            <div class="container ">

                <div class="faq-content">
                    <ul class="list">
                        <li class="list-item">
                            <div class="list-title">
                                <div class="list-question">
                                    How long does delivery take from NowRx?
                                </div>
                                <div class="list-action" data-view="false">
                                    <div class="open">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10 fa-9x">
                                            <path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="list-answer">
                                <div class="content">
                                   <p>  Medication delivery from NowRx will arrive at your house within 3-4 hours of us receiving the prescription from your doctor. If you are transferring or refilling a prescription from another pharmacy, we will deliver the prescription within 3-4 hours of receiving the transfer from your current pharmacy.</p>
                                    <p>If we receive a prescription outside of our normal business hours, we will deliver it the following business day.</p>
                                    <p>In some cases, there may be delays if your insurance company requires prior authorization or if you require a rare medication that we do not typically carry in stock. In these situations, we will notify you as soon as possible and do everything we can to find a solution!</p>
                                </div>
                             </div>

                        </li>
                        <li class="list-item">
                            <div class="list-title">
                                <div class="list-question">
                                    Does NowRx charge more to cover free delivery?

                                </div>
                                <div class="list-action" data-view="false">
                                    <div class="open">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10 fa-9x">
                                            <path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="list-answer">
                            <span class="content"> <p> No, NowRx never raises the cost of your medication to offset delivery costs. </p> <p> For prescriptions paid for through insurance, your copay is set by the insurance company and will generally be the same regardless of the pharmacy you use. </p> <p> For prescriptions paid for without insurance, our cash pricing is competitive with or lower than competing pharmacies. </p> <p> Additionally, anytime we receive a prescription our software automatically searches for drug coupons and applies them if it will lower your out of pocket costs, which has saved NowRx customers over $1.5M in the past year. </p> </span>
                            </div>

                        </li>
                        <li class="list-item">
                            <div class="list-title">
                                <div class="list-question">
                                    How does NowRx make money?

                                </div>
                                <div class="list-action" data-view="false">
                                    <div class="open">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10 fa-9x">
                                            <path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="list-answer">
                            <span class="content"> <p> NowRx makes money like all pharmacies and healthcare services – reimbursement from insurance and copays from the patient. </p> </span>
                             </div>

                        </li>
                        <li class="list-item">
                            <div class="list-title">
                                <div class="list-question">
                                    How is NowRx different than mail pharmacy?

                                </div>
                                <div class="list-action" data-view="false">
                                    <div class="open">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10 fa-9x">
                                            <path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="list-answer">
                            <span class="content"> <p> Unlike mail order pharmacies: </p> <ul> <li> NowRx has physical pharmacies local to every area we service. </li> <li> NowRx employees deliver all medications (opposed to using 3rd parties like USPS) </li> <li> NowRx deliveries arrive within hours as opposed to mail services which can take 3-14 days. </li> <li>&nbsp;NowRx delivers both controlled and refrigerated medications for no additional charge</li> <li> NowRx always has a live pharmacy team member available to answer your questions. </li> </ul> </span>
                            </div>

                        </li>
                        <li class="list-item">
                            <div class="list-title">
                                <div class="list-question">
                                    What insurance plans does NowRx take?
                                </div>
                                <div class="list-action" data-view="false">
                                    <div class="open">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10 fa-9x">
                                            <path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="list-answer">
                            <span class="content"> <p> NowRx Pharmacy accepts all major insurance plans except Kaiser Permanente. We also offer non-insurance pricing that is competitive with or lower than even leading discount drug cards like GoodRx. </p> </span>
                             </div>

                        </li>


                    </ul>
                </div>
            </div>
        </section>
        <div class="btn-container mobile">
            <a href="<?php echo get_site_url(); ?>/faqs/" class="rx-button rx-light">View all FAQs
                <div class="icon">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-right fa-w-14 fa-9x">
                        <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>




<?php get_footer(); ?>