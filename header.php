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

        <?php if(is_front_page()): ?>
             <link rel="preload" as="image" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" >
             <link rel="preload" as="image" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.jpeg" >
        <?php endif; ?>
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css" as="style">
        <!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js" as="script"> -->



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

    <?php wp_head(); ?>

    <!-- tracking code -->
    <?php 
    get_template_part('analytics-head'); ?>

    <!-- <link rel="stylesheet" rel="dns-prefetch" href="https://use.typekit.net/nng5acr.css"> -->

    <link rel="preload" href="https://use.typekit.net/nng5acr.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://use.typekit.net/nng5acr.css">
    </noscript>

    <meta name="p:domain_verify" content="3f36cac4340da88df6ca76c1a431cd53" />
    <!-- ?v=<?php echo time(); ?> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css?v=<?php echo time(); ?>">

     <meta name="facebook-domain-verification" content="51y4k3ncdot6d21810cxa2yfje7xzg" />

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LWZKR7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                                    <path fill="#1c172c" d="M1,3h14c0.552,0,1-0.447,1-1s-0.448-1-1-1H1C0.448,1,0,1.447,0,2C0,2.553,0.448,3,1,3z">
                                    </path>
                                    <path data-color="color-2" d="M1,9h14c0.552,0,1-0.447,1-1s-0.448-1-1-1H1C0.448,7,0,7.447,0,8C0,8.553,0.448,9,1,9z">
                                    </path>
                                    <path fill="#1c172c" d="M1,15h8c0.552,0,1-0.447,1-1s-0.448-1-1-1H1c-0.552,0-1,0.447-1,1C0,14.553,0.448,15,1,15z">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png" class="orbit-image" alt="NowRx Pharmacy Logo" height="60px" width="150px">

                        </a>
                    </div>
                    <!-- nav -->
                    <nav class="top">
                        <ul class="nav">
                            <li><a href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/for-doctors/">For Doctors</a></li>
                            <!-- 		<li><a href="/referral/">Refer a Friend</a></li> -->
                            <li><a href="<?php echo get_site_url(); ?>/faqs/">FAQs</a></li>
                            <li class="buttonfill"><a class="button secondary rounded shadow" href="<?= get_site_url(); ?>/get-started/">Transfer or Refill Prescriptions</a></li>
                            <!-- <li class=""><a class="button secondary rounded shadow" style="background-color:#008ed8;" href="<?= get_site_url(); ?>/get-started/">Transfer Prescriptions</a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </header>