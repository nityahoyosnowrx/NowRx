<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <?php // force Internet Explorer to use the latest rendering engine available
    ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <?php // mobile meta (hooray!)
    $cachever = '0';
    ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/public/frontend.css'>
    <?php
    // load script in header on these pages
    if ( is_page( 'refill-and-transfer-prescriptions' ) || is_page( 'telehealth' ) || is_page('contact-us') || is_singular('post') ): ?>
        <script defer src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js"></script>
    <?php endif; ?>

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
    <?php // or, set /favicon.ico for IE10 win
    ?>

    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    <meta name="p:domain_verify" content="3f36cac4340da88df6ca76c1a431cd53" />
    <meta name="facebook-domain-verification" content="51y4k3ncdot6d21810cxa2yfje7xzg" />
    <?php if ( is_page( 'refill-and-transfer-prescriptions' ) || is_page( 'telehealth' ) ): ?>

    <?php else: ?>
        <!-- <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.j></script> -->
    <?php endif; ?>

    <?php if ( is_page(925 ) ||is_page(1410) ): ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117353738-1"> </script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-117353738-1');
                gtag('config', 'AW-875503484');
            </script>
            <?php
                // https://nowrx.com/prep/register-for-nowprep/thank-you/
            if ( is_page(1410 ) ): ?>
                <!-- Event snippet for NowPrEP Contact Form Submission (Thank You Page) conversion page -->
                <script>
                gtag('event', 'conversion', {'send_to': 'AW-875503484/PrfHCJq2m40CEPy-vKED'});
                </script>
            <?php endif; ?>
            <?php
                // https://nowrx.com/prescription-transfer-thank-you/
            if ( is_page(925 ) ): ?>
            <!-- Event snippet for Form Completion conversion page -->
            <script>
            gtag('event', 'conversion', {'send_to': 'AW-875503484/Bj1NCMmPzboBEPy-vKED'});
            </script>
            <?php endif; ?>
<?php endif; ?>



</head>

<body <?php body_class(); ?> >
    <header class="main header-main" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <?php if(!is_page('nowprep')): ?>
            <section class="banner">
                <div class="container">
                    <div class="content">
                        <a href="https://nowrx.com/invest/" target="_blank" class="link">
                            <span class="mk">
                                <span class="tx">Invest in NowRx</span>
                                <div class="small"><sup>*</sup> Limited Availability</div>
                            </span>
                            <span class="btn">Learn More</span>
                        </a>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <div class="container">
            <div class="content">
                <div class="rlcontainer">
                    <?php if(!is_page('refill-and-transfer-prescriptions')): ?>
                        <div class="tablet-links">
                            <a href="<?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/" class="linksmal">Get Started</a>
                        </div>
                    <?php endif; ?>
                    <div class="responsive-bar">
                        <a class="menu-icon-toggle">
                            <div class="bars">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                        </a>
                    </div>

                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/"
                            title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/nowrx-free-same-day-pharmacy-delivery-logo.webp"
                                    class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="top main-menu">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">

                        <li itemprop="name" class="hidm bold-mobile">
                            <a itemprop="url" href="<?php echo get_site_url(); ?>/" title="See what customers are saying about NowRx Pharmacy.">
                                <div class="tk">Home</div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="<?php echo get_site_url(); ?>/resources/" class="">
                                <div class="tk">For Patients</div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="<?php echo get_site_url(); ?>/blog/">
                                <div class="tk">Blog</div>
                            </a>
                        </li>

                        <li itemprop="name" class="">
                            <a itemprop="url" href="<?php echo get_site_url(); ?>/faqs/">
                                <div class="tk smalltk">FAQs</div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="<?php echo get_site_url(); ?>/testimonials/" title="See what customers are saying about NowRx Pharmacy.">
                                <div class="tk">Reviews</div>
                            </a>
                        </li>
                        <li itemprop="name" class="item-button">
                            <a class="button-mmenu" itemprop="url" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Get Started</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>

<?php
// if('post' == get_post_type() || is_archive('post') ||  'locations' == get_post_type() ):
    // if(!is_page('resources')):
    // else:
?>
<!-- <main> -->
    <!-- <article> -->
<?php
    // endif;
// endif;

if ( is_single() && 'post' == get_post_type() ) {
} else {
    if(is_home()){
    } else {
        if('locations' == get_post_type()){
        } else {
            echo "<main><article>";
        }
    }

}
?>