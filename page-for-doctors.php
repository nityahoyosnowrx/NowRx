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


<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.5",
        "reviewCount": "11"
    },
    "description": "Free Prescription Delivery in Hours",
    "name": "NowRx Pharmacy",
    "image": "<?= IMG; ?>/library/images/NowRx-Logo-Pharmacy.png",

    "review": [{
            "@type": "Review",
            "author": "Dr. Ann Jayaram",
            "datePublished": "2021-04-01",
            "reviewBody": " NowRx Pharmacy is great for my staff. Their prices are the lowest around and they deliver for free. Try them out, your patients and staff will thank you.",
            "name": "Better Pricing",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "5",
                "worstRating": "1"
            }
        },
        {
            "@type": "Review",
            "author": "Lucas",
            "datePublished": "2020-04-25",
            "reviewBody": "NowRx Pharmacy has been instrumental for my practice in providing timely medication delivery, transparent pricing, and excellent customer service.",
            "name": "Dr. Inna Yaskin",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "4.5",
                "worstRating": "1"
            }
        },
        {
            "@type": "Review",
            "author": "Tony M.",
            "datePublished": "2015-09-23",
            "reviewBody": "They really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy. I could not be happier with NowRx!",
            "name": "Dr. James Tearse",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "4",
                "worstRating": "1"
            }
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is NowRx?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in to pick up medication, we bring them to you."
            }
        },
        {
            "@type": "Question",
            "name": "Is NowRx a mail-order pharmacy?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NO. NowRx Pharmacy has physical locations in all of our service areas. We accept walk-ins and our pharmacists are always available to chat in person or over the phone."
            }
        },
        {
            "@type": "Question",
            "name": "How can you afford to provide free same-day delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The proprietary tech inside our pharmacy increases efficiency and reduces our cost to about 1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery."
            }
        },
        {
            "@type": "Question",
            "name": "How do you make money?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We make money like every pharmacy or healthcare service – reimbursement from insurance and copays from the patient."
            }
        },
        {
            "@type": "Question",
            "name": "Do you charge more to offset the cost of delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NO. Prices are lower than or competitive with all pharmacies. We also automatically search for and apply available coupons to offer the lowest price possible (over $1M saved!)."
            }
        },
        {
            "@type": "Question",
            "name": "How do you handle special requests?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Special requests (e.g. blister packs, medication sorting, etc.) are available upon request. Just let our pharmacist know when they reach out to schedule your delivery!"
            }
        },
        {
            "@type": "Question",
            "name": "Can I manage prescriptions for a family member?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. You can set a head of household if a single person will be managing a family member or loved one’s prescriptions."
            }
        },
        {
            "@type": "Question",
            "name": "Do you deliver controlled & refrigerated medication?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor before delivery. These meds also require a signature & proper ID."
            }
        },
        {
            "@type": "Question",
            "name": "What insurance plans do you take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some of the lowest out of pocket prices in the areas we serve."
            }
        },
        {
            "@type": "Question",
            "name": "How long does delivery take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "asadasdadasdasd"
            }
        },
        {
            "@type": "Question",
            "name": "aaaa",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Typically, your prescription will arrive 2-4 hours after we have confirmed your prescription. We also offer 1hr delivery option for a $5 fee."
            }
        }
            
        
    ]
}
</script>


<!-- hero -->
<section class="hero-home">
    <div class="rvl">


        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) " data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px" alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) ">
        </picture>

    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



            <div class="rvls">
                    <span class="sub-headline">
                        A Better Local Pharmacy for doctors Staff
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                    See Why 4,500+ Docs Use NowRx
                    </h1>
                </div>
                <div class="rvls">
                    <p>
                        We help your staff save time and energy by reducing callbacks and working with insurance to get your patients covered.
                    </p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <a  class="rx-btn" data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true" tabindex="0">
                        <?php include('reg-arrow.php'); ?>
                        Learn More</a>
                        <a class="rx-btn rx-green mrb" href="#howitworks-doctors">
                        <?php include('grn-arrow.php'); ?>
                        How it Works</a>
                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                    data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="Pharmacist Ready to Provide Medication" data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.jpeg">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                        class="orbit-image lozad" height="500px" width="650px" alt="Pharmacist Ready to Provide Medication"> 
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<section class="how-it-works panel--primary" id="howitworks-doctors">
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
                            alt="Prescription Icon" class="pic lozad">
                    </div>

                    <p>
                        Call, fax, or ePrescribe to us like any other pharmacy. We are in all EMRs under NowRx.

                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png"
                            alt="prescription delivery confirmation check mark icon" class="pic lozad ">
                    </div>

                    <p>We will reach out to your patient via phone to set up delivery, collect a copay and provide a consultation.</p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Medication is Delivered</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png"
                            alt="Prescription Delivery Car Icon" class="pic lozad">
                    </div>

                    <p>A NowRx Pharmacy employee will deliver the patient's medication in a few hours or as requested.</p>
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
                    <a data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true" tabindex="0" class="rx-btn rx-dg">
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
                        <div class="block" itemscope itemtype="http://schema.org/Review">

                            <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                                <meta itemprop="name" content="NowRx Pharmacy">
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Pricing</h2>

                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                    "
                                    NowRx Pharmacy is great for my staff. Their prices are the lowest around and they deliver for free. Try them out, your patients and staff will thank you."


                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/DrJayaram-1.png" class="lozad" alt="Dr. Ann Jayaram giving testimonial for nowrx pharmacy">
                                </div>

                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <h3 class="name" itemprop="name">Dr. Ann Jayaram</h3>
                                    <div class="usertitle">
                                    Cosmetic Surgeon
                                    </div>
                                </span>

                            </blockquote>
                        </div>
                    </div>

                    <!-- block -->
                    <div class="rvl">
                        <div class="block" itemscope itemtype="http://schema.org/Review">

                            <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                                <meta itemprop="name" content="NowRx Pharmacy">
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Service</h2>

                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                    “NowRx Pharmacy has been instrumental for my practice in providing timely medication delivery, transparent pricing, and excellent customer service.”
                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" width="150px" height="150px;" style="max-height:120px" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/Inna-Yaskin.png" class="lozad" alt="Dr. Inna Yaskin giving testimonial for nowrx pharmacy">
                                </div>

                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <h3 class="name" itemprop="name ">
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
                        <div class="block" itemscope itemtype="http://schema.org/Review">

                            <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                                <meta itemprop="name" content="NowRx Pharmacy">
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Convenience</h2>
                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                    "They really are as good as advertised. They accept standing orders which has saved my office staff significant time and energy. I could not be happier with NowRx!"


                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/Dr.-Tearse.png" class="lozad" alt="Dr. James Tearse giving testimonial for nowrx pharmacy">
                                </div>

                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <h3 class="name" itemprop="name ">Dr. James Tearse </h3>
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
                    Join the NowRx Pharmacy Doctor Feedback Program
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Take Our Survey - Recieve $40
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a data-toggle="for-doctors-learnmore-second" aria-controls="for-doctors-learnmore-second" aria-haspopup="true" tabindex="0" class="rx-btn rx-dg">
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
                                The proprietary tech inside our pharmacy increases efficiency and reduces our cost to about
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