<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php wp_title(''); ?></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php // or, set /favicon.ico for IE10 win ?>
    <!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->

    <meta name="theme-color" content="#121212">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php
    // WP HEAD
    wp_head(); ?>

    <?php // facebook ?>
    <meta name="p:domain_verify" content="3f36cac4340da88df6ca76c1a431cd53" />
    <meta name="facebook-domain-verification" content="51y4k3ncdot6d21810cxa2yfje7xzg" />

    <?php
    // Google Analytics
    if ( is_page(925 ) ||is_page(1410) ): ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117353738-1"></script>
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

    <?php get_template_part('/components/critical-css'); ?>

    <?php
    if(is_singular('post')):
        if (have_posts()) : while (have_posts()) : the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
            // var_dump($image);
            ?>
            <link rel="preload" as="image" href="<?php echo $image[0]; ?>">
    <?php
            endwhile;
        endif;
    endif;
    ?>

</head>

<body <?php body_class(); ?>>

    <header class="main header-main" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div class="container">
            <div class="content <?php if(is_page('nowprep')){ echo "header-nowprep"; } ?>">
                <div class="rlcontainer">
                    <?php  if(!is_page('nowprep')):  ?>
                    <div class="tablet-links">
                        <a href="<?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/" class="linksmal">Get Started</a>
                    </div>

                    <div class="responsive-bar">
                        <a class="menu-icon-toggle">
                            <div class="bars">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                        </a>
                    </div>

                    <?php endif; ?>

                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/"
                            title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="data:image/webp;base64,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" class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">

                            </figure>
                        </a>
                    </div>

                </div>
                <?php  if(!is_page('nowprep')):  ?>
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
                <?php endif; ?>
            </div>
        </div>
    </header>


<!-- Critical CSS -->

<?php
// Conditional Main tag
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