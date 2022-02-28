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

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/public/frontend.css?=1130'>


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

    <?php
        // include modals
        get_template_part('components/investscripts');
    ?>

<script>
            !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('C7S8A2DGL1ARI64QOCJ0');
            ttq.page();
            }(window, document, 'ttq');
        </script>

</head>

<body <?php body_class(); ?> id="investor">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LWZKR7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="main investorhead" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="psedo"></div>

        <div class="container">
            <div class="content">
                <div class="rlcontainer">
                    <div class="responsive-bar">
                        <a class="menu-icon-toggle" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="menu toggle">
                            <div class="txt">Menu</div>
                        </a>
                    </div>
                    <div class="linksmsall">
                        <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-nav buy-now w-button">
                            INVEST NOW
                        </a>
                    </div>
                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/" title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-tech-nowrx-logo.webp" class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="top">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">

                        <li itemprop="name">
                            <a itemprop="url" href="#highlights" title="See what customers are saying about NowRx Pharmacy.">
                                <div class="tk">
                                    Highlights
                                    <span class="sub">
                                        Highlights for NowRx investors
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="#how-it-works">
                                <div class="tk">
                                    How it Works
                                    <span class="sub">
                                        How NowRx works for customers
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#competetitive-advantage">
                                <div class="tk">
                                Competitive Advantage
                                    <span class="sub">
                                    What makes NowRx different
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#testimonials">
                                <div class="tk">
                                Testimonials
                                    <span class="sub">
                                    Real patient & doctor reviews
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a href="https://www.seedinvest.com/nowrx/series.c"  magic-link="invest-button" target="_blank" class="button button-nav buy-now w-button">
                                INVEST NOW
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <article>
            <section class="hero-home videodev invested">
                <div class="container">
                    <div class="content">
                        <!-- content -->
                        <div class="column-half content-col">
                            <div class="contentblock">
                                <span class="sub-headline ">
                                    <strong>
                                        Invest in NowRx
                                    </strong>
                                </span>
                                <h1>
                                    <span class="kd">Disrupting the <b>$480B</b> </span>
                                    <span class="kd">Pharmacy Industry</span>
                                </h1>
                                <p>
                                    With Amazing Service and Free Same Day Medication Delivery
                                </p>
                                <div class="mobilevideo">
                                    <video title="nowrx pharmacy delivery website video" preload="none" class="lvimage lozad" id="mobilelvc" poster="<?php echo get_template_directory_uri(); ?>/images/best-startup-to-invest-2021-nowrx-technology.webp">
                                        <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy The Way It Should Be (Series C Investor Video).mp4" type="video/mp4">
                                        Sorry, your browser doesn't support embedded videos.
                                        <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                                    </video>

                                    <video title="video overlay mobile" class="mobilevideooverlay lozad" id="mobvidov" muted autoplay loop   width="400" height="200">
                                        <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-investor-webpage-video-thumbnail-image-3mbps.mp4" type="video/mp4">
                                        Sorry, your browser doesn't support embedded videos.
                                    </video>

                                    <div class="plauft mobileplauft">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 263.374 263.374" style="enable-background:new 0 0 263.374 263.374;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.163,115.57l-68.127-39.741c-15.201-8.899-40.064-23.393-55.296-32.256L44.115,3.831    C28.919-5.067,13.974,2.07,13.974,19.698v224c0,17.567,14.945,24.735,30.147,15.872l69.376-39.741    c15.232-8.863,40.735-23.357,55.936-32.256l68.449-39.741C253.047,138.933,253.334,124.433,238.163,115.57z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="infk">
                                        <div id="fm16"></div>
                                    <script>
                                            hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "6",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                locale: 'en',
                                                target:'#fm16',
                                                translations: {
                                                    en: {
                                                        submitText: "Download Investor Brief",
                                                        fieldLabels: {
                                                            email: "Electronic mail"
                                                        }
                                                    }
                                                }
                                            });
                                    </script>
                                </div>
                            </div>
                            <div class="fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-2021-nowrx-sec-qualified-and-crowdcheck-approved1.webp" alt="">
                            </div>
                        </div>

                        <!-- image -->
                        <div class="column-half image-col videomain">
                            <video title="nowrx pharmacy delivery website video" preload="none" class="lvimage" id="lvc" poster="<?php echo get_template_directory_uri(); ?>/images/best-startup-to-invest-2021-nowrx-technology.webp"  >
                                <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy The Way It Should Be (Series C Investor Video).mp4" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                                <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                            </video>
                            <video title="video overlay" class="videooverlay" id="vidov" preload="none" muted autoplay loop width="560" height="300">
                                <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-investor-webpage-video-thumbnail-image.mp4" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <div class="plauft deskplauft">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 263.374 263.374" style="enable-background:new 0 0 263.374 263.374;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M238.163,115.57l-68.127-39.741c-15.201-8.899-40.064-23.393-55.296-32.256L44.115,3.831    C28.919-5.067,13.974,2.07,13.974,19.698v224c0,17.567,14.945,24.735,30.147,15.872l69.376-39.741    c15.232-8.863,40.735-23.357,55.936-32.256l68.449-39.741C253.047,138.933,253.334,124.433,238.163,115.57z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <figure class="image">
                                <picture class="lozad">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling.webp" class="pic limg " height="900px" width="1600px" alt="Pharmacy delivery employee from nowrx smiling">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="stl">
                    *NowRx has already raised over <strong>$15M</strong> from more than <strong>4,900</strong> investors in this round!
                </div>
            </section>


            <section class="infoslider">
                    <div  class="div-block-11">
                            <h3 class="fttitle">As Seen In</h3>
                            <span class="imgs">
                                <div class="swiper cnko">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <span class="m swiper-slide" id="1">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fortune.webp"
                                                alt="top investment nowrx featured in fortune" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="2">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-venture-beat.webp"
                                                alt="top investment nowrx featured in venture beat.webp" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="3">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-tech-crunch.webp"
                                                alt="top investment nowrx featured in tech crunch" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="4">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-entrepreneur.webp"
                                                alt="top investment nowrx featured in entrepreneur" width="400px" height="200px">
                                        </span>

                                        <span class="m swiper-slide" id="5">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-yahoo.webp"
                                                alt="top investment nowrx featured in yahoo" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="6">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-forbes.webp"
                                                alt="top investment nowrx featured in forbes" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="7">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-crunchbase.webp"
                                                alt="top investment nowrx featured in crunchbase" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="8">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fierce-healthcare.webp"
                                                alt="top investment nowrx featured in fierce healthcare" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="9">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-barrons.webp"
                                                alt="top investment nowrx featured in barrons" width="400px" height="200px">
                                        </span>

                                    </div>
                                </div>
                            </span>
                        </div>
            </section>






            <section class="companyhighlighta" id="highlights">
                <div class="container">
                    <figure class="image">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/medical-stock-nowrx-prescription-bag.webp" alt="" class="lozad">
                    </figure>
                    <div class="content">
                        <h2 class="title">Company <b>Highlights</b></h2>
                        <div class="blockitems">
                                   <!-- item -->
                                   <div class="item">
                                <div class="numb">
                                $26M

                                </div>
                                <div class="mnk">
                                Annualized
                                </div>
                                <div class="info">
                                Based on December 2021 revenue of $2.19M

                                </div>
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                90%
                                </div>
                                <div class="mnk">
                                YoY Growth
                                </div>
                                <div class="info">
                                  In 2020 and on pace to surpass $22M in 2021.
                                </div>
                            </div>
                              <!-- item -->
                              <div class="item">
                                <div class="numb">
                                1,200%
                                </div>
                                <div class="mnk">
                                    Revenue Growth
                                </div>
                                <div class="info">
                                NowRx Telehealth from Q1 to Q4 in 2021
                                </div>
                            </div>


                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                $15M

                                </div>
                                <div class="mnk">
                                Shares Sold
                                </div>
                                <div class="info">
                                To over 4,900 investors in the current round.

                                </div>
                            </div>



                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                8

                                </div>
                                <div class="mnk">
                                Pharmacies
                                </div>
                                <div class="info">
                                DEA licensed and delivering prescriptions.

                                </div>
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                2

                                </div>
                                <div class="mnk">
                                Patents Pending
                                </div>
                                <div class="info">
                                On QuickFilll’s award winning pharmacy tech.

                                </div>
                            </div>

                        </div>
                        <div class="callitem">
                            <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                Invest Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>






            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                        <div id="fm7"></div>

                        <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "7",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm7'
                                });
                        </script>
                    </div>
                </div>
            </div>





            <section id="how-it-works" class="section lozad section-bussiness hand-bg how-it-works" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div id="how" class="business-model model-1">

                            <header class="tl">
                                <h2 class="h2-box h2-op">How It <strong>Works</strong></h2>
                                <p class="p-sub p-short">
                                    NowRx is easy to use and transforms hours at a traditional pharmacy into minutes on the phone - here's how it works.
                                </p>
                            </header>

                            <div class="business-box">
                                <div class="invesments-list list-full hor">
                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px" class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                            loading="lazy" alt="1" class="image-10">
                                        </div>
                                        <h3 class="title">Send Us Your Prescription</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Doctors can send prescriptions to NowRx using their existing prescribing method or patients can use our mobile app and website for transfers/refills.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/doctor-writing-prescription-to-nowrx-investor.webp" alt="doctor writing prescription to nowrx copy" class="lozad">
                                    </figure>
                                </div>
                                <div class="invesments-list list-full hor">

                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px"
                                            class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                            loading="lazy" alt="2" class="image-10">
                                        </div>
                                        <h3 class="title">We Confirm Delivery</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Once NowRx receives the prescription, a pharmacy team member reaches out by phone to set up delivery, take payment, and answer any medication questions.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" alt="We Confirm Delivery" class="lozad">
                                    </figure>
                                </div>
                                <div class="invesments-list list-full hor">
                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px"
                                                class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                                loading="lazy" alt="3" class="image-10">
                                        </div>
                                        <h3 class="title">Medication is Delivered</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Finally, a HIPAA certified NowRx pharmacy employee delivers the prescription in hours for free! For refills, patients can opt for auto-refill for maximum convenience.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/prescription-delivery-car-nowrx-investor.webp" alt="Medication is Delivered" class="lozad">
                                    </figure>
                                </div>
                                <div class="button-wrapper">
                                    <a href="https://www.seedinvest.com/nowrx/series.c" target="_blank" magic-link="invest-button" class="button white-button button-menu buy-now w-button">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                            <div id="fm22"></div>
                    <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "22",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm22'
                                });
                        </script>

                    </div>
                </div>
            </div>

            <section class="section-competetive" id="competetitive-advantage">
                <div class="container">

                    <header class="title">
                        <h2 class="sec-title ">
                            Competitive <strong>Advantage</strong>
                        </h2>
                        <p>
                            NowRx has several competitive advantages over traditional pharmacy and mail order delivery options that provide a <strong>sustainable defense now and in the near future</strong>.
                        </p>
                    </header>

                    <div class="columns">

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">With Free Same Day Prescription Delivery
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                Award winning “QuickFill” software increases pharmacy efficiency and reduces dispensing costs while minimizing common retail pharmacy problems like insurance issues, medications out of stock, etc.
                                </p>
                            </div>
                            <div class="image-block">
                            <figure class="image-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/mechanical.webp" alt="Proprietary Pharmacy Software & Robotics" >
                            </figure>
                            <p>
                                Award winning “QuickFill” software increases pharmacy efficiency and reduces dispensing costs while minimizing common retail pharmacy problems like insurance issues, medications out of stock, etc.
                                </p>
                            </div>
                        </div>

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">Low Cost Microfulfillment Pharmacies
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                A single NowRx can service the same volume as up to 20 traditional pharmacies and free same day delivery removes the need for prime retail store front that maximizes walk-in traffic. As a result, NowRx’s fixed overhead is less than 1% of typical large retail chains.
                                </p>
                            </div>
                            <div class="image-block">
                            <figure class="image-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/cvs.webp" alt="Low Cost Microfulfillment Pharmacies">
                            </figure>
                            <p>
                                A single NowRx can service the same volume as up to 20 traditional pharmacies and free same day delivery removes the need for prime retail store front that maximizes walk-in traffic. As a result, NowRx’s fixed overhead is less than 1% of typical large retail chains.
                                </p>
                            </div>
                        </div>

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">Digital Based Service Model
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                NowRx can continue expanding within existing territories without the need for major capital expenditure. In addition, NowRx Telehealth is completely software based and requires zero capital expenditure.
                                </p>
                            </div>
                           <div class="image-block">
                            <figure class="image-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/doc-perscriptions.webp" alt="Digital Based Service Model">
                                </figure>
                             <p>
                                NowRx can continue expanding within existing territories without the need for major capital expenditure. In addition, NowRx Telehealth is completely software based and requires zero capital expenditure.
                                </p>
                           </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="quickfill-section">
                <div class="container">
                    <div class="content">

                        <div class="columns">
                            <div class="column main">
                            <header class="title">
                            <h2 class="sec-title">NowRx <strong>"QuickFill"</strong> System</h2>
                            <p>
                            Streamlines backend pharmacy operations while reducing bottlenecks and common pharmacy issues that result in bad customer experiences.
                            </p>
                        </header>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Invest-in-NowRx-QuickFill.webp" alt="Invest in NowRx QuickFill" width="460" height="250">
                                </figure>
                                <div class="content">

                                <p>
                                NowRx's QuickFill pharmacy technology won a White Coat Award for Highest Accuracy from SureScripts - <b>the leading health information network in the US.</b>
                                </p>
                                </div>
                            </div>
                            <div class="column side">
                                <h3 class="title">Features</h3>
                                <ul class="list">
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded89edac67851e60fc3c_Group%2057.svg"
                                            loading="lazy" width="66px" height="60px" alt="Intelligent Claim Adjudication" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Intelligent Claim Adjudication</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8bcd671550459ff14d_Group%2058.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Predictive Inventory System(ML)" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Predictive Inventory System(ML)</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8939123e236ce04fcc_Group%2014.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Chatbot-Assisted Call Center" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Chatbot-Assisted Call Center</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8839123ef5f5e04fcb_Group%2015.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Logistics & Automated Triage" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Logistics & Automated Triage</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8b9900f83fb124f372_Group%2060.svg"
                                            loading="lazy"  width="66px" height="60px" alt="End-to-End Robotic Dispensing" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">End-to-End Robotic Dispensing</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8a69891454acc1569c_Group%2059.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Automated Physician Comms" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Automated Physician Comms</span>
                                    </li>
                                </ul>
                                <div class="patents">
                                    <span class="patents-block">
                                        <h3 class="title">Patents</h3>
                                    </span>
                                    <ul>
                                        <li>
                                        Application (Pending) #: 16249899 – Method and System of an Automated Medication Dispensing and Delivery System
                                        </li>
                                        <li>
                                        Application (Pending) #: 17243575 - Systems, methods, and apparatuses for implementing machine learning model training and deployment for predictive inventory purchasing database
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                            <div id="fm2"></div>
                    <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "2",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm2'
                                });
                        </script>

                    </div>
                </div>
            </div>


            <section class="review-block" >

                <div class="container"><div id="testimonials"></div>
                    <header class="title">
                        <h2 class="title">NowRx <strong>Reviews</strong></h2>
                        <p>
                        NowRx's "QuickFill" system produces a significantly better experience - here's what doctors and patients are saying about the tech-powered pharmacy.
                        </p>
                    </header>
                    <div class="promote-scores">
                        <div class="score-item">
                            <div class="main-content">
                                <div class="number">
                                    91
                                </div>
                                <div class="text">
                                    <h3>Net Promoter <strong>Score</strong></h3>
                                    <p>
                                    Based on an ongoing survey of over 300 physician office staff. NPS is one of the most widely used metrics to measure the willingness of customers to recommend a company's products or services to others.
                                    </p>
                                </div>
                            </div>
                            <div class="star-rating">
                                <div class="title"><strong>[</strong> 5 Star Rating For All Locations <strong>]</strong></div>
                                <div class="stars">
                                    <div class="star">
                                    <img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad">
                                     </div>
                                    <div class="text">
                                        <a href="<?php echo get_site_url(); ?>/testimonials/" class="link-review">
                                            See All Reviews
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-item">
                            <blockquote>
                                <span class="text">
                                I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!
                                </span>
                                <cite>
                                    <figure class="image">
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/DrJamesETearseMD.webp" alt="" class="lozad">
                                    </figure>
                                    <div class="text-block">
                                    <div class="name">Dr. James E Tearse, MD</div>
                                    <div class="title">Ophthalmologist</div>
                                    <div class="handle">Redwood City, CA</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                    </div>

            <section  class="section section-bottom-padding lab">
                <div class=" testimonials">
                    <div class="team-intro labs-intro">
                        <div class="container-11">
                            <div id="loop" class="owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">

                                    <!-- Slider main container -->
                                    <div class="swiper owlswiper" style="width:100%;height:auto;">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">

                                    <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "Companies that <strong>ACTUALLY PROVIDE CUSTOMER SERVICE</strong> are so rare in this day and age. These guys are awesome!"</span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> <strong>Best pharmacy I have ever used!</strong> I have nothing but good things to say about them. Exemplary customer service, delivery right to your door with text updates, and great pricing. I will be using them for as long as I can! </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Best Pharmacy experience EVER</strong>! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer? You don't get better service than this." </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al"><strong>NowRx is the best pharmacy I've ever used.</strong>
                                                    They take all the work out of prescription management, they have
                                                    incredible communication (text and phone, whichever is your
                                                    preference), and they keep providing service at a level I never
                                                    expect.<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Super easy to use. <strong>Fast and WAY
                                                        cheaper</strong> than Costco or any other place I've ever
                                                    checked."<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"We have been using NowRx for the last year
                                                    and the service is great as well as all the staff we have talked to
                                                    in getting our prescriptions filled. <strong>They go the extra mile
                                                        in customer service!</strong>"<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"<strong>Best Pharmacy experience
                                                        EVER!</strong> These guys are like going to your old
                                                    neighborhood pharmacy, you know the one, where they deliver your
                                                    medications to you and actually care about the customer? You don't
                                                    get better service than this."<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Hands down best pharmacy you could ask for!</strong> I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!" </span>
                                                <br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                Responsible business. <strong>Actually the best pharmacy I've used so far.</strong> Delivery is always on time. Customer service is awesome and service is very reliable.
                                                <br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relnav">

                                    <div class="swiper-button-prev">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-left fa-w-10 fa-3x"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-3x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                    </div>
                                    </div>

                                    </div>

                                    </div>
                                </div>

                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>



            <!-- <div class="quote-section"><img
                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c983afd43a4f8ad190_image%2021-min.jpg"
                    loading="lazy" width="169px" height="212px" alt="" class="image-11 lozad">
                <blockquote class="block-quote"><em class="italic-text">“I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!”</em><br><br><strong>-Dr. James E Tearse, MD</strong></blockquote>
            </div> -->


            <section class="section section-bottom-padding team-sec">

                <div class="container">
                    <div class="team-intro less-m">
                        <h2 class="h2-box h2-op h2-center">We’re <strong>growing</strong></h2>
                        <p class="p-sub p-short p-center"><strong>NowRx Has Plans To Expand Nationwide</strong></p>
                    </div>
                    <div class="team">
                        <div class="w-layout-grid grid-5">
                            <div id="w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6140c92d117d8b068379aa99_Group%2075.svg"
                                    loading="lazy" width="400px" height="200px" alt="" class="image-13 lozad"></div>
                            <div id="w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                    loading="lazy" alt="" width="400px" height="200px" class="hide-m lozad"></div>

                            <div class="timeline-box">
                                <div class="year">2016</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Launch 1st micro-fulfillment location in Mountain View, CA</div>
                                    </div>
                                    <div class="year deatil">LAUNCH</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>

                            <div class="timeline-box">
                                <div class="year">2017</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Industry’s first modern Pharmacy Mgt System: QuickFill</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V1.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb5ee7de4b899a82f59_image%204.png"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2018</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Pharmacy-Optimized Logistics Solution:Wheelz</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V2.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/cvs-caremark-approves-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="cvs caremark approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2019</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Natural Language AI Chatbot and Predictive Inventory (ML)</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V3.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/controlled-substance-eprescribe-certification-for-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="controlled substance eprescribe certification for nowrx"></div>
                                    </div>
                                </div>
                            </div><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                loading="lazy" alt=""  width="400px" height="200px"  class="hide-m lozad hide-d">
                            <div class="timeline-box">
                                <div class="year blue">2020</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to 2nd state, Arizona</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil blue">MULTI-STATE</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/surescripts-whoite-coat-award-winner-nowrx.webp"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts whoite coat award winner nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year blue">2021-2022 E</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to top 15 metro areas across 10 states</div>
                                    </div>
                                    <div class="year deatil blue">NATIONAL</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="section white shadow no-pill">
                <div class="container">
                    <h2 class="h2-box h2-op center _2">Geographic <strong>Expansion</strong></h2><img
                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614a202469484c5b84e195a3_NowRX_WebsiteMap_091721%20(1).gif"
                        loading="lazy" alt="" class="image-8">
                </div>
                <div class="button-wrapper button-center"><a
                        href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button"
                        target="_blank" class="button white-button button-menu buy-now w-button">Invest Now</a>
                </div>
            </section>

            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg"
                >
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                                <div id="fm3"></div>
                        <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "3",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm3'
                                });
                        </script>

                    </div>
                </div>
            </div>

           <section id="opportunity" class="growth-section">
               <div class="container">
                   <header class="title">
                       <h2 class="title">Growth <strong>Strategy</strong></h2>
                       <p>
                       NowRx has been able to consistently grow its customer base and total revenue using a number of successful growth strategies.
                       </p>
                   </header>
                   <div class="content">
                       <div class="block">
                           <figure class="image">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/nowrx-physician-referral-meeting.webp" alt="">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>1</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Physician Referral Channel</h3>
                                   <p>NowRx’s sales team sets appointments with physicians to promote the benefits of NowRx for their patients. This strategy has been successful for the top pharma companies and is the top performing channel to date.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block reverse">
                           <figure class="image">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp" alt="">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>2</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Digital Marketing</h3>
                                   <p>NowRx promotes awareness through several proven digital marketing channels that will continue to become more effective and efficient as the company expands its nationwide footprint.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block">
                           <figure class="image">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-facility-.webp" alt="">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>3</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Nationwide Expansion</h3>
                                   <p>NowRx has plans to announce roughly 10 new facilities in 2022 which will more than double its number of existing facilities and provide rapid revenue growth.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block reverse">
                           <figure class="image">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/telehealth-doctor-for-nowrx.webp" alt="">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>4</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Additional Products & Services</h3>
                                   <p>NowRx will expand its telehealth service (1,200% growth in 2021) in addition to adding specialty pharmacy for complex conditions and non-prescription health products which offers tremendous opportunities for revenue growth.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>


            <section id="our-team" class="section section-bottom-padding team-sec">
                <section class="meetteam" id="execteam">
                    <div class="container">
                        <div class="header">
                            <h2 class="sec-title">Leadership <strong>Team</strong>
                            </h2>
                        </div>
                        <div class="contentprofile">
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Cary Breese">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">Cary Breese</h3>
                                    <div class="subtitle">
                                        CEO/Founder
                                    </div>
                                    <p>
                                        Successful, serial entrepreneur with expertise in technology, healthcare, and
                                        financial services. Former CEO of financial services startup acquired for 18x
                                        cash-on-cash. Led $100M product line as EVP, CIGNA. B.S. in Electrical
                                        Engineering from Drexel University and credentialed actuary.


                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Sumeet Sheokand">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Sumeet Sheokand

                                    </h3>
                                    <div class="subtitle">
                                        CTO/Founder


                                    </div>
                                    <p>
                                        15+ years of senior leadership in software and technology startups (CTO – Genie
                                        DB, VP Engineering – X1). Extensive expertise in building business line and
                                        enterprise grade software. Adept at utilizing Big Data techniques to solve real
                                        business problems.
                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Melissa Bostock">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Melissa Bostock
                                    </h3>
                                    <div class="subtitle">
                                        Director of Pharmacy


                                    </div>
                                    <p>
                                        Doctor of Pharmacy (Pharm D) from UCSF, Master's Degree in Public Health and
                                        B.S. in Microbiology, Immunology, & Molecular Genetics from UCLA. Former Target
                                        managing pharmacist trained in medication therapy management, diabetes
                                        screening, pain management, pediatrics, and immunizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>

            <section class="popupform lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
                <div class="content">
                    <div class="closebutton">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="348.333px" height="348.334px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;"
                xml:space="preserve">
                    <g>
                        <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85
                            c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563
                            c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85
                            l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554
                            L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
                    </g>
                    </svg>
                    </div>
                    <h2 class="title">Get the NowRx Investor Deck</h2>
                    <p>
                    Download the NowRx investor pitch deck and see what is driving record demand for shares of NowRx!
                    </p>
                    <div class="formcall">
                                    <div id="fm5"></div>
                                    <script>
                                            hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "5",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                target:'#fm5'
                                            });
                                    </script>
                    </div>
                </div>
            </section>



            <footer class="footer wf-section">
                <div class="footer-links">
                    <div class="container-10 footer-container w-container"><img
                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white.png"
                            height="200px" width="600"
                            alt="" class="logo-2 lozad">
                        <div class="footer-nav-wrapper">
                            <a href="#highlights" class="footer-nav-link">HIGHLIGHTS</a>
                            <a href="#how-it-works" class="footer-nav-link">HOW IT WORKS</a>
                            <a href="#our-team" class="footer-nav-link">OUR TEAM</a>
                        </div>
                    </div>
                    <div class="footer-top">
                        <div class="w-container">
                            <div class="footer-bottom-text"><strong class="bold-text">NowRx is offering securities
                                    through
                                    the use of an Offering Statement that has been qualified by the Securities and
                                    Exchange
                                    Commission under Tier II of Regulation A. A copy of the Final Offering Circular that
                                    forms a part of the Offering Statement may be obtained from: NowRx<br></strong><a
                                    target="_blank" href="https://www.seedinvest.com/nowrx" magic-link="invest-button" class="footer-link"><strong
                                        class="bold-text">https://www.seedinvest.com/nowrx</strong></a>You should read
                                the
                                Offering Circular before making any investment. This presentation contains offering
                                materials prepared solely by NowRx without the assistance of SI Securities, and not
                                subject
                                to FINRA Rule 2210. In addition, this presentation may contain forward-looking
                                statements
                                and information relating to, among other things, the company, its business plan and
                                strategy, and its industry. These statements reflect management’s current views with
                                respect
                                to future events based information currently available and are subject to risks and
                                uncertainties that could cause the company’s actual results to differ materially.
                                Investors
                                are cautioned not to place undue reliance on these forward-looking statements as they
                                are
                                meant for illustrative purposes and they do not represent guarantees of future results,
                                levels of activity, performance, or achievements, all of which cannot be made. Moreover,
                                no
                                person nor any other person or entity assumes responsibility for the accuracy and
                                completeness of forward-looking statements, and is under no duty to update any such
                                statements to conform them to actual results.<br><br>The statement regarding "share
                                price"
                                does not represent guarantees of future valuation growth and/or declines.</div>
                        </div>
                    </div>
            </footer>



        </article>
    </main>

    <?php wp_footer(); ?>

    </div> <!-- closes off canvas content -->

    <?php
        // include modals
        get_template_part('components/investfooterscripts');
    ?>




        <?php
        // Inlined Google Font loading
        get_template_part('components/font-load'); ?>
    </body>


</html> <!-- end of site. what a ride! -->