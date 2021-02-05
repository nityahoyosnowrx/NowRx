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
            data-alt="prescription being delivered to mother" data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px">
        </picture>

    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



                <div class="rvls">
                    <span class="sub-headline">
                        A Better Pharmacy for Your Office Staff
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                         Join 4,500 Doctors Using NowRx
                    </h1>
                </div>

                <div class="rvls">
                    <p>
                        We help your staff save time and energy by reducing callbacks and working with your insurance to get your patients covered.
                    </p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <a class="rx-btn" href="<?= get_site_url(); ?>/get-started/">Learn More</a>
                        <a data-toggle="for-doctors" class="rx-btn mrb" aria-controls="for-doctors" aria-haspopup="true" tabindex="0">How It Works</a>
                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                    data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="Free Prescription Delivery in Hours" data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.jpeg">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                        class="orbit-image " height="500px" width="650px">
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<section class="how-it-works panel--primary">
    <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <div class="rvl">
                    <p class="pre-headline">Using NowRx Pharmacy is Simple</p>
                </div>

                <div class="rvl">
                    <h2 class="headline">Here’s How It Works</h2>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x steps">

            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">1. Send Us Your Prescription</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png"
                            alt="end Us Your Prescription" class="pic lozad">
                    </div>

                    <p>
                        <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
                        <strong>Existing Prescription: </strong>Text <a href="tel:844-466-6979" class="tellink">(844)
                            466-6979</a> or <a href="https://nowrx.com/get-started/" style="color:#fff;">Transfer Online
                            Here</a>.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png"
                            alt="We Confirm Delivery" class="pic lozad ">
                    </div>

                    <p>We will reach out to you via phone to collect your insurance copay confirm your address and set
                        up a
                        delivery time.</p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Medication is Delivered</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png"
                            alt="Medication is Delivered" class="pic lozad">
                    </div>

                    <p>A NowRx employee will deliver your medication in hours from your local NowRx Pharmacy for free.
                        All you pay is your normal copay.</p>
                </div>
            </div>


        </div>
    </div>
</section>




<section class="split-image">
  <div class="imagefull">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" alt="" class="pic"> -->

    <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" data-alt="Why Doctors Love NowRx!" data-toggle-class="active">
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp">
            <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.jpeg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Why-Doctors-Love-NowRx.webp" class="pic doctorspage" height="100px" width="450px">
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
                      Increases prescription medication adherence and accessiblity.
                  </p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Insurance Approval & Prior Authorization Assitance</h3>
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
                  <h3 class="title">Refrigeredted & Controlled Medication Delivery</h3>
                </div>
                <div class="rvl">
                  <p>We will even pick up triplicate forms from your office.</p>
                </div>
              </div>

            </div>

            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/get-started/" class="rx-btn rx-dg">
                        Get Started
                    </a>
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
                    <a href="<?= get_site_url(); ?>/faqs/" class="rx-btn rx-dg">
                        Request a NowRx Doctor Kit
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="maito:info@nowrx.com" class="alink">info@nowrx.com </a>and we will be happy to help.
                </div>
            </div>
        </div>
    </div>
</section>


<!-- what doctor saying -->


    <section class="testimonials-block doctorquotes">

        <div class="container">
            <div class="content">
                <div class="rvl">
                    <div class="subtitle">A BETTER LOCAL PHARMACY FOR YOUR OFFICE STAFF</div>
                </div>
                <div class="rvl">
                    <h2 class="main-title">See Why 4,500+ Docs Use NowRx</h2>
                </div>
                
            </div>
            <!-- end content -->
            <div class="content sliderfordoctors">
                <div class="main-slider">
                    <div class="slide">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                             
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Ann-Jayaram-1604618219345.png" alt="Dr.-Ann-Jayaram" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Daniel-Quon.png" alt="Dr.-Daniel-Quon" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Inna-Yaskin.JPG" alt="Dr.-Inna-Yaskin" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-James-Tearse.png" alt="Dr.-James-Tearse" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Jerry-Manoukian.png" alt="Dr.-Jerry-Manoukian" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Peter-Bullock.png" alt="Dr.-Peter-Bullock" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Sherna-Madan.png" alt="Dr.-Sherna-Madan" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="info">
                                            <!-- profile -->
                                            <div class="img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Vicki-Lin.jpg" alt="Vicki-Lin" class="pic">
                                            </div>
                                            <div class="name">
                                                <h2 class="sec-title">Dr. Inna Yaskin</h2>
                                            </div>
                                            <div class="title">
                                                <span class="li">NowRx Customer</span>
                                            </div>

                                        </div>
                                        <div class="quote">
                                            <blockquote>
                                                <span class="title">"Instrumental for my practice.</span>
                                                <span class="fullquote">
                                                 I highly recommend NowRx Pharmacy. I use them professionally as well as personally for my own prescriptions and they really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy in addition to accurately applying drug coupons to lower out of pocket costs for my patients. I could not be happier with NowRx!  You can use this as a reference point.
                                                </span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

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
                    Join the NowRx Pharmacy Doctor Feedback Program
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Take Our Survery - Recieve $40
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/get-started/" class="rx-btn rx-dg">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    *Some restrictions may apply. Must be employed by a licensed and approved medical office.
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
                        Top Doctor Questions about NowRx
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Your Questions Answered
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