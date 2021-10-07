<?php get_header(); ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "VideoObject",
        "name": "Pharmacy Delivery Online Video for NowRx Website",
        "description": "NowRx is a new kind of local pharmacy that uses modern technology to provide a better pharmacy experience. This better pharmacy experiences includes things like free same-day prescription delivery, discounted or otherwise low drug prices, and unrivaled customer service. Rated best prescription delivery service in 2021 for Orange County and Northern California by CNET, NowRx delivers a better local pharmacy experience.",
        "thumbnailUrl": [
            "<?= get_site_url(); ?>/NowRx-Pharmacist.png",
            "<?= get_site_url(); ?>/NowRx-Pharmacy-Driver-Delivering-Pharmacy-Bag-to-Customer.png",
            "<?= get_site_url(); ?>/NowRx-Pharmacy-Delivery-Car.png"
        ],
        "uploadDate": "2021-03-24T08:00:00+08:00",
        "duration": "PT15S",
        "contentUrl": "<?= get_site_url(); ?>/Pharmacy-Delivery-Online-Video-for-NowRx-Website.mp4",
        "embedUrl": "<?= get_site_url(); ?>",
        "interactionStatistic": {
            "@type": "InteractionCounter",
            "interactionType": {
                "@type": "http://schema.org/WatchAction"
            },
            "userInteractionCount": 5647018
        },
        "regionsAllowed": "US,NL"
    }
</script>
<!-- hero -->
<section class="hero-home videodev">
    <div class="container">
        <div class="content">
            <!-- content -->
            <div class="column-half content-col">
                <div class="contentblock">
                <span class="sub-headline ">
                    <strong>DELIVERING A BETTER LOCAL PHARMACY</strong>
                </span>
                <h1>
                    <span class="k">Free Same Day</span>
                    <span class="k">Pharmacy Delivery</span>
                </h1>
                <p>
                    NowRx is a local pharmacy that offers free same day delivery. Tap get started to request a prescription delivery today!
                </p>
                <div class="btn-container">
                    <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">
                        <span class="arrow">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/calltoaction.svg" class="pic limg" height="100" width="100" alt="nowrx pharmacy Get Started">
                        </span>
                        Get Started
                    </a>
                    <a class="rx-btn rx-green mrb" href="<?= get_site_url(); ?>/how-it-works/">
                        <span class="arrow">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-question-circle fa-w-16 fa-2x">
                                <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z" class=""></path>
                            </svg>


                        </span>
                        How it Works
                    </a>
                </div>
                </div>
            </div>
            <!-- image -->
            <div class="column-half image-col">

                <?php
                $itemsLowRes = array(
                    'nowrx-a-better-pharmacy-image-1.webp',
                    'nowrx-pharmacy-delivery-bag-on-door-image-1.webp',
                    'nowrx-pharmacy-delivery-car-image-1.webp',
                    'nowrx-pharmacy-delivery-technician-working-image-1.webp',
                    'nowrx-pharmacy-delivery-licensed-pharmacist-working-on-robot-image-1.webp'
                );
                $itemsHighRes = array(
                    'nowrx-a-better-pharmacy-image-1.webp',
                    'nowrx-pharmacy-delivery-bag-on-door-image-1.webp',
                    'nowrx-pharmacy-delivery-car-image-1.webp',
                    'nowrx-pharmacy-delivery-technician-working-image-1.webp',
                    'nowrx-pharmacy-delivery-licensed-pharmacist-working-on-robot-image-1.webp'
                );
                ?>


                <video title="nowrx pharmacy delivery website video" class="lazy orbit-image" muted  playsinline autoplay loop >
                    <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy delivery website video MP4.mp4" type="video/mp4">
                    <source type="video/webm" data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy delivery website video.webm" type="video/webm">
                    Sorry, your browser doesn't support embedded videos.
                    <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                </video>

                <!-- $itemsLowRes[array_rand($itemsLowRes)] -->

                <figure class="image">
                    <!-- <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo get_template_directory_uri(); ?>/images">
                        <source media="(min-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/images">
                        <img src="<?php echo get_template_directory_uri(); ?>/images" alt="nowrx pharmacy delivery website" width="1600px" height="900px" class="pic limg">
                    </picture> -->
                    <picture class="lozad">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling.webp" class="pic limg " height="900px" width="1600px" alt="Pharmacy delivery employee from nowrx smiling">
                    </picture>
                </figure>
            </div>
        </div>
    </div>
</section>
<?php include('section-quotes.php'); ?>
<?php include('section-companies.php'); ?>
<?php include('section-how-it-works.php'); ?>
<section class="reviewstree">
<div class="flo">
    <div class="floatpoint">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/shield.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy shield icon">
    </div>
    <div class="floatpoint">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/shield.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy shield icon">
    </div>
    <div class="floatpoint">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/shield.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy shield icon">
    </div>
    <div class="floatpoint">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/shield.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy shield icon">
    </div>
    <div class="floatpoint">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/shield.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy shield icon">
    </div>
</div>
    <div class="container">
                <div class="header">
                    <h2 class="sec-title">What People Are Saying</h2>
                    <div class="logotitle">
                        <div class="pcer">5.0</div>
                    </div>
                    <div class="stars">
                        <div class="st">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy star review">
                        </div>
                        <div class="st">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy star review">                        </div>
                        <div class="st">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy star review">                        </div>
                        <div class="st">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy star review">                        </div>
                        <div class="st">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy star review">                        </div>
                    </div>
                    <div class="nim">Based on over 300 Yelp reviews.</div>
                </div>
                <div class="rtree">
                    <!-- quote -->
                    <div class="quote">
                        <blockquote class="item">
                            <span class="txt">
                                <div class="quotefimg">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/quoteicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy quote icon">
                                </div>
                                "Companies that <b>ACTUALLY PROVIDE CUSTOMER SERVICE</b> are so rare in this day and age. These guys are awesome!"
                            </span>
                            <cite class="cita">
                            <div class="name">Tanya S.</div> <div class="title"> NowRx Pharmacy Customer</div>
                            </cite>
                        </blockquote>
                    </div>
                    <!-- quote -->
                    <div class="quote">
                        <blockquote class="item">
                            <span class="txt">
                                <div class="quotefimg">
                                     <img data-src="<?php echo get_template_directory_uri(); ?>/images/quoteicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy quote icon">
                                </div>
                                "<b>Best Pharmacy experience EVER</b>! These guys are like going to your
                                                old neighborhood pharmacy, you know the one, where they deliver your
                                                medications to you and actually care about the customer? You don't get
                                                better service than this."
                             </span>
                            <cite class="cita">
                            <div class="name">Mark C.</div> <div class="title"> NowRx Pharmacy Customer</div>
                            </cite>
                        </blockquote>
                    </div>
                    <!-- quote -->
                    <div class="quote">
                        <blockquote class="item">
                            <span class="txt">
                                <div class="quotefimg">
                                     <img data-src="<?php echo get_template_directory_uri(); ?>/images/quoteicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy quote icon">
                                </div>
                                <b>Best pharmacy I have ever used!</b> I have nothing but good things to say about them. Exemplary customer service, delivery right to your door with text updates, and great pricing. I will be using them for as long as I can!

</span>
                            <cite class="cita">
                            <div class="name">Sarah S.</div> <div class="title"> NowRx Pharmacy Customer</div>
                            </cite>
                        </blockquote>
                    </div>
                    <!-- quote -->
                    <div class="quote">
                        <blockquote class="item">
                            <span class="txt">
                                <div class="quotefimg">
                                     <img data-src="<?php echo get_template_directory_uri(); ?>/images/quoteicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy quote icon">
                                </div>
                                This is my new pharmacy. <b> Not only was their price lower, but they do same day delivery</b> to my neighborhood. And when you call it's easy to reach a real person. My kind of store!
                            </span>
                            <cite class="cita">
                            <div class="name">Julie B.</div> <div class="title"> NowRx Pharmacy Customer</div>
                            </cite>
                        </blockquote>
                    </div>
                </div>
    </div>
</section>

<section class="resource-sections hrline mainhead frontgres">
        <div class="container">
            <div class="content">
                <div class="context">
                    <h1 class="title">Pharmacy Delivery Resources</h1>
                    <p>
                        Your resources to a better local pharmacy delivered with NowRx.
                    </p>
                </div>
                <div class="blocks">
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">
                                <figure>

                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/getstartedicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy get started">
                                </figure>
                                <h2 class="title">

                                    Get Started
                                </h2>
                                <p>
                                    Get started with your first pharmacy delivery from NowRx Pharmacy.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/locations/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/locationsicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Locations
                                </h2>
                                <p>
                                    Find a local NowRx near you for free same day pharmacy delivery.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/faqs/">

                                <figure>

                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/faqimg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Frequently Asked Questions
                                </h2>
                                <p>
                                    View frequently asked questions or submit a question to our pharmacists.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/pricing/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pricingsvg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Pricing
                                </h2>
                                <p>
                                    Check a medication price to see what you could save with NowRx.
                                </p>
                            </a>

                        </div>
                    </div>

                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/about-us/">

                                <figure>

                                   <img data-src="<?php echo get_template_directory_uri(); ?>/images/aboutimage.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    About Us
                                </h2>
                                <p>
                                    Learn more about the NowRx team and our company's vision for healthcare.
                                </p>
                            </a>

                        </div>
                    </div>

                    <!-- block -->
                    <div class="block  ">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/contact-us/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/contentsvg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Contact NowRx
                                </h2>
                                <p>
                                    Submit our online form or talk with a live NowRx pharmacy team member.
                                </p>
                            </a>
                        </div>
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
<?php include('section-visitfaq.php'); ?>
<?php get_footer(); ?>