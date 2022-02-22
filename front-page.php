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

<?php include('components/frontpage-reviews.php'); ?>

<?php include('components/section-faq-flip.php'); ?>


<?php get_footer(); ?>