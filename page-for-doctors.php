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



<section class="landing-block">
    <div class="container fluid">
        <div class="content">
            <div class="text-content">
                <span class="sub-headline">A BETTER LOCAL PHARMACY DELIVERED</span>
                <h1 class="title">See Why <strong>Doctors Trust NowRx</strong></h1>
                <p>We help your staff save time and energy by reducing callbacks and working with insurance to get your patients covered.</p>
            </div>
            <div class="btn-container">
                <a class="rx-btn" data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true" tabindex="0">
                    <?php include('reg-arrow.php'); ?>
                    Learn More
                </a>
                <a class="rx-btn rx-green mrb" href="#howitworks-doctors">
                    <?php include('grn-arrow.php'); ?>
                    How it Works
                </a>
            </div>
        </div>
        <div class="media">
            <figure class="image">
            <picture class="lozad"
                    data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/doctor-evaluating-best-pharmacy-delivery-for-patients.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/doctor-evaluating-best-pharmacy-delivery-for-patients.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/doctor-evaluating-best-pharmacy-delivery-for-patients.webp"
                        class="orbit-image lozad" height="500px" width="650px" alt="doctor evaluating best pharmacy delivery for patients">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>

<div id="howitworks-doctors">
    <?php include('components/component-how-it-works.php'); ?>
</div>

<section class="split-image">
  <div class="imagefull">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" alt="" class="pic"> -->

    <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" data-alt="Why Doctors Love NowRx!" data-toggle-class="active">
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp">
            <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.jpeg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" class="pic doctorspage" alt="Doctor pointing to reasons why doctors love nowrx pharmacy" height="100px" width="450px">
        </picture>

  </div>
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    Going Above and Beyond For Our Customers
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                   Why Doctors Love NowRx!
                </h2>
            </div>

            <div class="itemlist">
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Free Prescription Delivery for Patients.</h3>
                </div>
                <div class="rvl">
                  <p>
                      Increases prescription medication adherence and accessibility.
                  </p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Insurance Approval & Prior Authorization Assistance</h3>
                </div>
                <div class="rvl">
                  <p>Helps explain the process and get medications covered.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Industry Leading Accuracy (SureScripts Finalist 2020)</h3>
                </div>
                <div class="rvl">
                  <p>Minimizes medication errors and improves patient safety.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Automatic Coupon Search & Application</h3>
                </div>
                <div class="rvl">
                  <p>Fields savings to lower patient out of pocket costs.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Out of Pocket Price Match Guarantee</h3>
                </div>
                <div class="rvl">
                  <p>Ensures you do not pay more for medication being delivered.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Refrigerated & Controlled Medication Delivery</h3>
                </div>
                <div class="rvl">
                  <p>We will even pick up triplicate forms from your office.</p>
                </div>
              </div>

            </div>

            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/" class="rx-btn rx-dg">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include('section-visitblock.php'); ?>



<!-- what doctor saying -->




    <section class="testimonials-block triples">

        <div class="container">
            <div class="content">
            <div class="rvl">
                    <div class="subtitle">A BETTER LOCAL PHARMACY DELIVERED</div>
                </div>
                <div class="rvl">
                    <h2 class="main-title">What Doctors Are Saying</h2>
                </div>
                <div class="blocks">

                    <!-- block -->
                    <div class="rvl">
                        <div class="block" >

                            <h3 class="title">Better Pricing</h3>

                            <blockquote>

                                <div class="review">
                                    <p >
                                    "
                                    NowRx Pharmacy is great for my staff. Their prices are the lowest around and they deliver for free. Try them out, your patients and staff will thank you."
                                    </p>
                                </div>

                                <div class="imageblock">
                                    <img  data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/DrJayaram-1.png" class="lozad" alt="Dr. Ann Jayaram giving testimonial for nowrx pharmacy">
                                </div>

                                <span >
                                    <h3 class="name">Dr. Ann Jayaram</h3>
                                    <div class="usertitle">
                                        Cosmetic Surgeon
                                    </div>
                                </span>

                            </blockquote>
                        </div>
                    </div>

                    <!-- block -->
                    <div class="rvl">
                        <div class="block" >

                            <h3 class="title">Better Service</h3>

                            <blockquote>

                                <div class="review">
                                    <p >
                                    “NowRx Pharmacy has been instrumental for my practice in providing timely medication delivery, transparent pricing, and excellent customer service.”
                                    </p>
                                </div>

                                <div class="imageblock">
                                    <img  width="150px" height="150px;" style="max-height:120px" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/Inna-Yaskin.png" class="lozad" alt="Dr. Inna Yaskin giving testimonial for nowrx pharmacy">
                                </div>

                                <span >
                                    <h3 class="name" >
                                    Dr. Inna Yaskin
                                    </h3>
                                    <div class="usertitle">
                                    Internal Medicine
                                    </div>
                                </span>
                            </blockquote>
                        </div>
                    </div>

                    <!-- block -->
                    <div class="rvl">
                        <div class="block" >



                            <h3 class="title">Better Convenience</h3>
                            <blockquote>

                                <div class="review">
                                    <p >
                                    "They really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy. I could not be happier with NowRx!"


                                    </p>
                                </div>

                                <div class="imageblock">
                                    <img  data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Tearse.png" class="lozad" alt="Dr. James Tearse giving testimonial for nowrx pharmacy">
                                </div>

                                <span >
                                    <h3 class="name" >Dr. James Tearse </h3>
                                    <div class="usertitle">
                                    Opthamology
                                    </div>
                                </span>

                            </blockquote>
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
                HELP US IMPROVE NOWRX PHARMACY DELIVERY
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                NowRx Doctor Feedback Program
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a data-toggle="for-doctors-learnmore-second" aria-controls="for-doctors-learnmore-second" aria-haspopup="true" tabindex="0" class="rx-btn rx-dg">
                        Learn More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- FAQ -->

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

<?php include('section-visitfaq.php'); ?>




<?php get_footer(); ?>