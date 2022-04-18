<?php get_header(); ?>


<script type="application/ld+json" defer>
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


<section class="landing-block">
    <div class="container fluid">
        <div class="content">
            <h1 class="title">
                <strong class="bold">Pharmacy Delivery.</strong>
                <span>Same Day, Free</span>
                <span>Right to <span class="underline">Your Door</span></span>
            </h1>
            <p>NowRx is a local pharmacy that provides customers with 5-star service and <strong>free same day prescription delivery</strong>. Get started today and enjoy a better pharmacy experience.</p>
            <div class="btn-container">
                <a href="<?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/" class="rx-button">Get Started</a>
            </div>
        </div>
        <div class="media video-content">
            <video title="nowrx pharmacy delivery website video" class="lazy orbit-image" muted playsinline autoplay loop>
                <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-delivery-pharmacy-website-cover-video-5mpbs.mp4" type="video/mp4">
                <source type="video/webm" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-delivery-pharmacy-website-video.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
                <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
            </video>
            <figure class="image">
                <picture>
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling-320.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling-320.webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling-320.webp" class="pic limg " height="900" width="1600" alt="Pharmacy delivery employee from nowrx smiling">
                </picture>
            </figure>
        </div>
    </div>
</section>

<?php include('components/component-logo-slider.php'); ?>

<?php include('components/component-how-it-works.php'); ?>


<section class="firt-step-block">
    <div class="container">
        <header class="main-header">
            <h2 class="title">
                <span class="block">
                How To Send a
                </span>
                 Prescription to NowRx
            </h2>
            <p>It’s easy to setup a new prescription or transfer/refill your current prescription with NowRx.</p>
        </header>
        <div class="setup-slide">
            <div class="header-block">
                <div class="click current" data-tab="0">
                    <span class="block">Send New</span> Prescription
                </div>
                <div class="click" data-tab="1">
                    <span class="block">Transfer or Refill a</span> Prescription
                </div>
            </div>
            <div class="sliding-items">
                <div class="slider-main">
                    <div class="slide">
                    <div class="float-icon-ri">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-New-Rx.svg" class="lozad" alt="ICO New Rx">
                        </div>
                        <span class="inline-title">Initiated By</span>
                        <div class="context-de">
                        <span class="icon">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Doctor.svg" class="pic limg lozad" height="26" width="26" alt="ICO Doctor">
                            </span>
                            Doctor
                        </div>
                        <span class="inline-title">HOW YOU CAN SEND</span>
                        <div class="context">
                            <span class="line starred">
                                <div class="star-float">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Star.svg" alt="ICO Star" class="lozad">
                                </div>
                                <span class="icon">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Web.svg" class="pic limg lozad" height="26" width="26" alt="ICO Web">
                                </span>
                                <span class="txt"><strong>ePrescribe</strong> - Tell your doctor to electronically prescribe to NowRx.</span>
                            </span>
                            <span class="line">
                                <span class="icon">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Fax.svg" class="pic limg lozad" height="26" width="26" alt="ICO Fax">
                                </span>
                                <span class="txt"><strong>Fax</strong> - They can also fax the prescription to the closest <a href="<?php echo get_site_url(); ?>/locations" class="link">NowRx location</a>.</span>
                            </span>

                        </div>
                    </div>
                    <div class="slide">
                        <div class="float-icon-ri">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Transfer-Rx.svg" class="lozad" alt="ICO Transfer Rx">
                        </div>
                        <span class="inline-title">Initiated By</span>
                        <div class="context-de">
                            <span class="icon">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Doctor.svg" class="pic limg lozad" height="26" width="26" alt="ICO Doctor">
                            </span>
                            You
                        </div>
                        <span class="inline-title">HOW YOU CAN SEND</span>
                        <div class="context">
                            <span class="line starred">
                            <div class="star-float">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Star.svg" class="lozad" alt="ico star">
                                </div>
                                <span class="icon">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Web.svg" class="pic lozad limg " height="26" width="26" alt="ICO Web">
                                </span>
                                <span class="txt"><strong>Online Form</strong> - <a href="<?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/" class="link">Use our online form</a> to request a prescription delivery.</span>
                            </span>
                            <span class="line">

                                <span class="icon">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-Call-Text.svg" class="pic lozad limg " height="26" width="26" alt="ICO Call Text">
                                </span>
                                <span class="txt"><strong>Call or Text</strong> - You can also call or text your local NowRx to get started.</span>
                            </span>
                            <span class="line">
                                <span class="icon">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/rx-icons/ICO-App.svg" class="pic lozad limg " height="26" width="26" alt="ICO App">
                                </span>
                                <span class="txt"><strong>Mobile App</strong> - Lastly, you can download the NowRx Pharmacy app.</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('components/frontpage-reviews.php'); ?>

<?php include('components/section-faq-flip.php'); ?>


<?php get_footer(); ?>