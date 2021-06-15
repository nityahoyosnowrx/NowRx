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
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-prescription fa-w-12 fa-2x">
                                <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm68.53 179.48l11.31 11.31c6.25 6.25 6.25 16.38 0 22.63l-29.9 29.9L304 409.38c6.25 6.25 6.25 16.38 0 22.63l-11.31 11.31c-6.25 6.25-16.38 6.25-22.63 0L240 413.25l-30.06 30.06c-6.25 6.25-16.38 6.25-22.63 0L176 432c-6.25-6.25-6.25-16.38 0-22.63l30.06-30.06L146.74 320H128v48c0 8.84-7.16 16-16 16H96c-8.84 0-16-7.16-16-16V208c0-8.84 7.16-16 16-16h80c35.35 0 64 28.65 64 64 0 24.22-13.62 45.05-33.46 55.92L240 345.38l29.9-29.9c6.25-6.25 16.38-6.25 22.63 0zM176 272h-48v-32h48c8.82 0 16 7.18 16 16s-7.18 16-16 16zm208-150.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z" class=""></path>
                            </svg>
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

                <video title="nowrx pharmacy delivery website video" class="lazy orbit-image" muted  playsinline autoplay loop poster="<?php echo get_template_directory_uri(); ?>/images/<?= $items[array_rand($items)] ?>">
                    <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-website-video.mp4" type="video/mp4">
                    <source type="video/webm" data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-delivery-website-video.webm" type="video/webm">
                    Sorry, your browser doesn't support embedded videos.
                    <track default
                    kind="metadata"
                    srclang="en"
                    src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                </video>

                <!-- $itemsLowRes[array_rand($itemsLowRes)] -->

                <figure class="image">
                    <!-- <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo get_template_directory_uri(); ?>/images/">
                        <source media="(min-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/images/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/" alt="nowrx pharmacy delivery website" width="1600px" height="900px" class="pic limg">
                    </picture> -->
                    <picture class="lozad">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-local-team-member-watching-camera.webp" class="pic limg" height="900px" width="1600px" alt="nowrx pharmacy local team member watching camera">
                    </picture>
                </figure>
            </div>
        </div>
    </div>
</section>

<?php include('section-quotes.php'); ?>

<?php include('section-companies.php'); ?>

<?php include('section-how-it-works.php'); ?>

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