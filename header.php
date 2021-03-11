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
    ?>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) 
    ?>

    <?php if (is_front_page()) : ?>
    <link rel="preload" as="image" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp">
    <!-- <link rel="preload" as="image" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.jpeg"> -->

    <!-- <link rel="preload" as="image" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410mobile.jpeg"> -->

    <?php endif; ?>
    
    <!-- preload main css -->
    <!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css" as="style"> -->

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

    <!-- mainc css -->
    <!-- ?v=<?php echo time(); ?> -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css?vs=<?php echo mktime(); ?>"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css">

    <!-- WP HEAD -->
    <?php wp_head(); ?>

    <meta name="p:domain_verify" content="3f36cac4340da88df6ca76c1a431cd53" />

    <meta name="facebook-domain-verification" content="51y4k3ncdot6d21810cxa2yfje7xzg" />
<!-- <link rel="dns-prefetch" href="//fonts.googleapis.com"> -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- tracking code -->
    <?php get_template_part('analytics-head'); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">



    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LWZKR7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- promobar -->
    <!-- <div class="promo-bar">
            <div class="item-container">
                <a href="<?= get_site_url(); ?>/get-started/">
                    <span class="hide-for-small-only">
                        Receive up to a $100 bonus with your prescription delivery!*
                        <span class="button hollow small">Let's Go</span>
                    </span>
                    <span class="show-for-small-only">
                        Get up to $100 to Try NowRx Risk-Free*
                    </span>
                </a>
                <span class="phone hide-for-small-only">
                    <a href="tel:844-466-6979">(844) 466-6979</a>
                </span>
            </div>
        </div> -->

    <!-- main menu -->

    <header class="main" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="content">

                <div class="responsive-bar">
                    <a class="menu-icon-toggle">
                        <svg version="1.1" viewBox="0 0 16 16" xml:space="preserve" width="16" height="16">
                            <title>Menu</title>
                            <g fill="#1c172c">
                                <path fill="#1c172c"
                                    d="M1,3h14c0.552,0,1-0.447,1-1s-0.448-1-1-1H1C0.448,1,0,1.447,0,2C0,2.553,0.448,3,1,3z">
                                </path>
                                <path data-color="color-2"
                                    d="M1,9h14c0.552,0,1-0.447,1-1s-0.448-1-1-1H1C0.448,7,0,7.447,0,8C0,8.553,0.448,9,1,9z">
                                </path>
                                <path fill="#1c172c"
                                    d="M1,15h8c0.552,0,1-0.447,1-1s-0.448-1-1-1H1c-0.552,0-1,0.447-1,1C0,14.553,0.448,15,1,15z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- logo -->
                <div class="logo-block">
                    <a class="main-nav-logo" href="<?php echo get_site_url(); ?>">

                        <!-- <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png" data-toggle-class="active" class="lozad" alt="NowRx"> -->

                        <!-- <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png" data-alt="NowRx" data-toggle-class="active">
                                <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacylowrez.jpg" class="orbit-image" height="60px" width="150px">
                            </picture> -->
                        <figure class="sk">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png"
                                class="orbit-image" alt="NowRx Pharmacy Logo" height="60px" width="150px">
                        </figure>

                    </a>
                </div>
                <!-- nav -->
                <nav class="top">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <li itemprop="name"><a itemprop="url" href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
                        <li itemprop="name"><a itemprop="url" href="<?php echo get_site_url(); ?>/testimonials/">Testimonials</a></li>
                        <li itemprop="name"><a itemprop="url" href="<?php echo get_site_url(); ?>/pricing/">Pricing</a></li>

                        <li itemprop="name"><a itemprop="url" href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
                        <!-- 		<li itemprop="name"><a itemprop="url" href="/referral/">Refer a Friend</a></li> -->

                        <li itemprop="name"><a itemprop="url" href="<?php echo get_site_url(); ?>/faqs/">FAQs</a></li>
                        <li itemprop="name" class="buttonfill buttonglimmer">
                            <a class="button secondary rounded shadow rx-btn"
                                itemprop="url" href="<?= get_site_url(); ?>/get-started/">
                                <span class="arrow">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 384 512" class="svg-inline--fa fa-file-prescription fa-w-12 fa-2x">
                                        <path fill="currentColor"
                                            d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm68.53 179.48l11.31 11.31c6.25 6.25 6.25 16.38 0 22.63l-29.9 29.9L304 409.38c6.25 6.25 6.25 16.38 0 22.63l-11.31 11.31c-6.25 6.25-16.38 6.25-22.63 0L240 413.25l-30.06 30.06c-6.25 6.25-16.38 6.25-22.63 0L176 432c-6.25-6.25-6.25-16.38 0-22.63l30.06-30.06L146.74 320H128v48c0 8.84-7.16 16-16 16H96c-8.84 0-16-7.16-16-16V208c0-8.84 7.16-16 16-16h80c35.35 0 64 28.65 64 64 0 24.22-13.62 45.05-33.46 55.92L240 345.38l29.9-29.9c6.25-6.25 16.38-6.25 22.63 0zM176 272h-48v-32h48c8.82 0 16 7.18 16 16s-7.18 16-16 16zm208-150.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"
                                            class=""></path>
                                    </svg>
                                </span>
                                Transfer or Refill Prescriptions</a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>