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
    $cachever = 112123111111111111111111;
    ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/public/frontend.css?v=1'>



    <?php
    // load script in header on these pages
    if ( is_page( 'refill-and-transfer-prescriptions' ) || is_page( 'telehealth' ) || is_page('contact-us') ): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js"></script>
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
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js?vcc=<?= $cachever; ?>"></script> -->
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
    gtag('event', 'conversion', {
        'send_to': 'AW-875503484/PrfHCJq2m40CEPy-vKED'
    });
    </script>
    <?php endif; ?>
    <?php
                // https://nowrx.com/prescription-transfer-thank-you/
            if ( is_page(925 ) ): ?>
    <!-- Event snippet for Form Completion conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-875503484/Bj1NCMmPzboBEPy-vKED'
    });
    </script>
    <?php endif; ?>
    <?php endif; ?>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script async type=“text/javascript” src=“https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=HcMd6f”></script>



<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>

<body <?php body_class(); ?> id="investor">
    <header class="main investorhead" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div class="container">
            <div class="content">
                <div class="rlcontainer">

                    <div class="responsive-bar">

                        <a class="menu-icon-toggle">

                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" class="lozad"
                                alt="">

                            <div class="txt">Menu</div>
                        </a>
                    </div>
                    <div class="linksmsall">
                        <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                            target="_blank" class="button button-nav buy-now w-button">INVEST&nbsp;NOW</a>
                    </div>
                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/"
                            title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b09677c2ab411f2fbe4_NowRx-Logo-900px-p-500.png"
                                    class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="top">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">

                        <li itemprop="name">
                            <a itemprop="url" href="#highlights"
                                title="See what customers are saying about NowRx Pharmacy.">

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
                            <a itemprop="url" href="#competitor">

                                <div class="tk">
                                Competitors
                                    <span class="sub">
                                    NowRx vs "next gen" competitors
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="#our-team">

                                <div class="tk">
                                    Our Team
                                    <span class="sub">
                                    Meet the founders of NowRx
                                    </span>
                                </div>
                            </a>
                        </li>


                        <li itemprop="name">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                                target="_blank" class="button button-nav buy-now w-button">INVEST&nbsp;NOW</a>

                        </li>



                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
if ( 'post' == get_post_type()  || is_archive('post') ||  'locations' == get_post_type() ):
else:
?>
    <main>
        <article>
            <?php endif; ?>


            <section data-ix="display-nav" id="company" class="hero-section centered landingpage7 wf-section">
                <div class="container container-main">
                    <div class="heading">

                        <h1 class="h1">Disrupting the <strong>$480B </strong><span class="text-span-10">Retail
                                Pharmacy Industry</span></h1>
                        <div class="text-block-24 cap"><strong>With Same Day Telehealth & Pharmacy Delivery</strong>
                        </div>
                        <div class="hero-buttons button-home">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                                target="_blank" class="button white-button buy-now w-button">INVEST&nbsp;NOW</a>
                            <a href="https://www.youtube.com/channel/UCk50FgUjUrddyWKG3ajxdGA" target="_blank"
                                class="button play play-first w-inline-block w-lightbox">
                                <div>Watch Video</div>
                                <div class="play-div"><img
                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5d56675dd893de68cc1c08_play-2.svg"
                                        alt=""></div>

                            </a>
                        </div>
                    </div>

                </div>
                <div class="blue-bg"
                    style="background-image: url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da44fcc16e1ccac834a8f_pill.svg');">
                </div>
                <div class="main-image">
                    <div data-poster-url="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-poster-00001.jpg"
                        data-video-urls="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.mp4,https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.webm"
                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                        class="background-video-3 w-background-video w-background-video-atom"><video autoplay="" loop=""
                            style="background-image:url(&quot;https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-poster-00001.jpg&quot;)"
                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.mp4"
                                data-wf-ignore="true">
                            <source
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.webm"
                                data-wf-ignore="true">
                        </video>

                    </div>
                </div>
                <div class="red-bg red-2"></div>
                <div class="red-bg"></div>
            </section>


            <section class="section section-bottom-padding blue-sec">
                <div class="container">
                    <div class="w-layout-grid grid-6">
                        <div class="div-block-10">
                            <h2 class="h2-box white-t">
                                <span class="red">Previous Round <b>Oversubscribed</b> </span> on
                                SeedInvest!
                            </h2>
                            <span class="tx">
                                NowRx’s oversubscribed $20M Series B was a SeedInvest record. Don’t miss your chance to
                                invest in this rapidly growing startup that is rebuilding healthcare the way it should
                                be!
                                </p>
                            </span>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                        <img src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613e07b60881072cf102a129_Group%2069-min.png"
                            loading="lazy" id="w-node-_376c93d4-a4fa-b178-991c-5c443d70786f-a3cc193b" alt=""
                            class="image-7">
                        <div id="w-node-_3ada1b61-094f-4770-3e0b-ef0521fc1e5d-a3cc193b" class="div-block-11">
                            <h3 class="fttitle">Featured In:</h3>
                            <span class="imgs">



                                <div class="swiper cnko">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <span class="m swiper-slide" id="1">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Crunchbase_wordmark_dark_blue.svg/1280px-Crunchbase_wordmark_dark_blue.svg.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/VentureBeat_VB_Logo.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Forbes_logo.svg/1391px-Forbes_logo.svg.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="4">
                                            <img src="https://software-advice.imgix.net/managed/other_pages/logo-fierce-healthcare.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="1">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Crunchbase_wordmark_dark_blue.svg/1280px-Crunchbase_wordmark_dark_blue.svg.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/VentureBeat_VB_Logo.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Forbes_logo.svg/1391px-Forbes_logo.svg.png"
                                                alt="">
                                        </span>
                                        <span class="m swiper-slide" id="4">
                                            <img src="https://software-advice.imgix.net/managed/other_pages/logo-fierce-healthcare.png"
                                                alt="">
                                        </span>

                                    </div>



                                </div>

                            </span>
                        </div>

                    </div>
                </div>
            </section>

            <script>
            const cnko = new Swiper('.cnko', {
                // Optional parameters
                direction: 'vertical',
                slidesPerView: 4,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 2000,
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 2,
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 3,
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 4,

                    }
                }


            });
            </script>
            <style>
            .swiper {
                width: 300px;
                height: 300px;
            }

            @media screen and (max-width:992px) {
                .swiper {
                    width: 300px;
                    height: 150px;
                }
            }
            </style>


            <div class="cta"
                style="background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(209, 16, 56, 0.8)),to(rgba(209, 16, 56, 0.8))),url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-image: linear-gradient(180deg, rgba(209, 16, 56, 0.8), rgba(209, 16, 56, 0.8)), url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-position: 0px 0px, 100% 50%;">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5952677",
                            formId: "df2a6935-1139-426a-b373-0917788189ad"
                        });
                        </script>


                    </div>
                </div>
            </div>

            <section class="rapid" id="highlights">
                <div class="container">
                    <div class="header">
                        <h2 class="title">Rapid <b>Growth</b> & Raving <b>Customers</b></h2>
                        <p>
                            NowRx is growing rapidly as patients and doctors are raving about the pharmacy's amazing
                            service and free same day prescription delivery.
                        </p>
                    </div>
                    <div class="content">
                        <div class="listblock">
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    35K+
                                </div>
                                <div class="til">
                                    NowRx Customers
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    365K+
                                </div>
                                <div class="til">
                                    Prescriptions Delivered
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    8
                                </div>
                                <div class="til">
                                    DEA Licensed Pharmacies
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    $2.8M
                                </div>
                                <div class="til">
                                    Prescription Savings (2020)
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    70%
                                </div>
                                <div class="til">
                                    NowRx Telehealth Average MoM Growth Since Launching
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    5 Stars
                                </div>
                                <div class="til">
                                    Average NowRx Patient & Doctor Rating on Yelp
                                </div>
                            </div>
                        </div>
                        <figure class="list">
                            <video src="<?php echo get_template_directory_uri(); ?>/images/Chart-10.mp4" muted></video>
                        </figure>
                        <div class="callitem">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" target="_blank" class="button button-mobile buy-now w-button">
                                Invest Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <div class="quote-section"><img
                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c983afd43a4f8ad190_image%2021-min.jpg"
                    loading="lazy" width="169" alt="" class="image-11">
                <blockquote class="block-quote"><em class="italic-text">“I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!”</em><br><br><strong>-Dr. James E Tearse, MD</strong></blockquote>
            </div>


            <section id="how-it-works" class="section section-bussiness hand-bg"
                style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg), url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg);">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div class="business-model model-2"
                            style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9e57d43911225f442dcca_nowrx-blue-left-2.png);">
                        </div>
                        <div id="how" class="business-model model-1">
                            <h2 class="h2-box h2-op">How <strong>NowRx</strong> Works</h2>
                            <p class="p-sub p-short">
                                Sending a prescription to NowRx is just like sending it to any other retail pharmacy.
                            </p>
                            <div class="business-box">
                                <div class="invesments-list list-full hor"><img
                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">
                                        When a doctor writes a prescription and asks where to send it, tell them NowRx.
                                        The doctor can then use fax, ePrescribe, or paper to send the prescription.
                                        <br>
                                    </p>
                                </div>
                                <div class="invesments-list list-full hor"><img
                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">Once NowRx receives the
                                        prescription, the patient is contacted to schedule a delivery and then a HIPAA
                                        certified NowRx employee will deliver in hours for FREE!
                                        <br>
                                    </p>
                                </div>
                                <div class="invesments-list list-full hor"><img
                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">Refills and transfers can be
                                        requested online, by phone, or through the NowRx app. Patients can even set up
                                        automatic refills each month for maximum convenience.<br></p>
                                </div>
                                <div class="button-wrapper"><a
                                        href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                                        target="_blank"
                                        class="button white-button button-menu buy-now w-button">INVEST&nbsp;NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section blue-section">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div class="cl-80">
                            <h2 class="h2-box h2-op">NowRx’s Pharmacy Tech Creates a <strong>Better Experience</strong>
                                for
                                Customers<br></h2>
                            <p class="p-sub mar-b">In comparison to antiquated legacy software used by most pharmacies,
                                NowRx incorporates modern, full stack technology that produces a simple, frictionless
                                experience for customers.</p>
                            <div class="text-block-27">Our Technology Stack</div>
                            <div class="rows row-new _2">
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded89edac67851e60fc3c_Group%2057.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>Inventory System</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8bcd671550459ff14d_Group%2058.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>Automated Adjudication</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8939123e236ce04fcc_Group%2014.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>Chatbots</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8839123ef5f5e04fcb_Group%2015.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>Robotics Processing</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8b9900f83fb124f372_Group%2060.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>2-Way Msg Physician (EMR)</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#" target="_blank"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8a69891454acc1569c_Group%2059.svg"
                                            loading="lazy" width="66" alt="" class="icon-b nom">
                                        <div>Logistics</div>
                                    </a></div>
                            </div>
                        </div>
                        <div class="image right"
                            style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613df231d23ae1d3e4ccdcf3_Group%2061-min.jpeg);">
                        </div>
                    </div>
                </div>
                <div class="container"></div>
            </section>
            <section class="comptiv">
                <div class="container">
                    <div class="header">
                        <h2 class="title">NowRx Pharmacy is Driven By a <strong>Powerful Technology Stack</strong></h2>
                        <p>
                            NowRx's propietary "QuickFill" software provides a competitive advantage for NowRx by
                            enabling a number of customer benefits.
                        </p>
                    </div>
                    <div class="contentx">
                        <div class="phone">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/stock-to-invest-in-nowrx-mobile-app.webp"
                                    alt="stock to invest in nowrx mobile app">
                            </figure>
                        </div>
                        <div class="blocks">
                            <!-- block -->
                            <div class="block">
                                <div class="nm">1</div>
                                <div class="txt">
                                    <h3 class="title">FREE Same Day Delivery</h3>
                                    <p>Better efficiency & automated processes allow NowRx to provide FREE same day
                                        delivery profitably!</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">2</div>
                                <div class="txt">
                                    <h3 class="title">Reduced Insurance Rejections</h3>
                                    <p>Intelligent claims adjudication features help the pharmacy process insurance more
                                        effectively.</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">3</div>
                                <div class="txt">
                                    <h3 class="title">Reduced Out of Stock Issues</h3>
                                    <p>Machine earning algorithms help automate purchases & maintain proper inventory
                                        levels.</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">4</div>
                                <div class="txt">
                                    <h3 class="title">Lower Out of Pocket Costs</h3>
                                    <p>Discount search features find & apply discounts automatically ($2.8M saved in
                                        2020)</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">5</div>
                                <div class="txt">
                                    <h3 class="title">5 Star Customer Service</h3>
                                    <p>Optimized workflows & automated processes free pharmacist time for what matters -
                                        customer!</p>
                                </div>
                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="cta"
                style="background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(209, 16, 56, 0.8)),to(rgba(209, 16, 56, 0.8))),url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-image: linear-gradient(180deg, rgba(209, 16, 56, 0.8), rgba(209, 16, 56, 0.8)), url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-position: 0px 0px, 100% 50%;">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5952677",
                            formId: "df2a6935-1139-426a-b373-0917788189ad"
                        });
                        </script>

                    </div>
                </div>
            </div>

            <section class="section padding-m quickf" id="competitor">

                <div class="container">
                    <div class="flex hor-mo margin">
                        <div class="col-left">
                            <h2 class="blocktitle h2-box h2-op center">
                                NowRx vs "Next-Gen" Pharmacy <strong>Competitors</strong>
                            </h2>
                            <p class="txtuncder">
                                NowRx's proprietary pharmacy software and robotics provide and unrivaled pharmacy
                                experience for customers.
                            </p>

                            <img src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min.jpg"
                                loading="lazy"
                                sizes="(max-width: 479px) 98vw, (max-width: 991px) 100vw, (max-width: 1439px) 54vw, 705.09765625px"
                                srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-1080.jpeg 1080w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min.jpg 1380w"
                                alt="" class="image-12">

                            <p class="txtunder">
                                The Net Promoter Score measures the willingness of customers to recommend a company's
                                products or services to others. It is used as a proxy for gauging the customer’s overall
                                satisfaction and loyalty to the brand.
                            </p>

                        </div>
                        <div class="business-box right-box white shadow">
                            <div class="w-layout-gridgrid-8d"><img
                                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min.jpg"
                                    loading="lazy" id="w-node-_89d1b09f-28ec-4318-e2ea-5e98f9bda998-a3cc193b"
                                    sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min.jpg 830w"
                                    alt=""><img
                                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min.jpg"
                                    loading="lazy" sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min.jpg 830w"
                                    alt=""><img
                                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min.jpg"
                                    loading="lazy" sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min.jpg 830w"
                                    alt=""></div>
                        </div>
                    </div>
                </div>

            </section>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


            <!-- <section class="section blue-section">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div class="cl-80">
                            <h2 class="h2-box h2-op">Pharmacy The <strong>Way</strong> It Should Be.</h2>
                            <p class="p-sub p-short">How NowRx offers a better pharmacy experience for patients.</p>
                            <div class="business-box">
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        Provides FREE same day delivery to
                                        patients. All patients pay is their regular insurance copay.</p>
                                </div>
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        Automatically resolve insurance coverage
                                        errors and applies coupons when there’s no coverage</p>
                                </div>
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        End-to-end robotic dispensing system to
                                        automatically sort, count, bottle and label is less than 30 seconds without
                                        human intervention</p>
                                </div>
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        2-way electronic communication with
                                        physician’s EMR system to automatically manage refills and quickly resolve
                                        errors</p>
                                </div>
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        Micro-fulfillment strategy and
                                        cutting-edge tech makes free delivery profitable</p>
                                </div>
                                <div class="invesments-list list-left">
                                    <p class="p-sub p-short p-margin small-dot"
                                        style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5fe725c701de9beb2b68ee_dot.svg) !important;">
                                        Predictive inventory management using
                                        machine learning (patent pending). Out of stock errors reduced to &lt;1%</p>
                                </div>
                            </div>
                        </div><img
                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61376529930cb04ab1cd5e15_red-doc.jpg"
                            loading="lazy" alt="" class="image">
                    </div>
                </div>
            </section> -->



            <section id="testimonials" class="section section-bottom-padding lab">
                <div class="container testimonials">
                    <div class="team-intro">
                        <h2 class="h2-box h2-op h2-center">What People Are Saying <strong>About NowRx</strong></h2>
                        <p class="p-sub p-short p-center">NowRx has delivered more than 365K prescriptions to over 35K
                            customers – see what they are saying about NowRx!<br></p>
                    </div>
                    <div class="team-intro labs-intro">
                        <div class="container-11">
                            <div id="loop" class="owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transition: all 0.8s ease-in-out 0s; width: 7688px; transform: translate3d(-3843px, 0px, 0px);">
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">NowRx is the best pharmacy I've ever used.
                                                    They take all the work out of prescription management, they have
                                                    incredible communication (text and phone, whichever is your
                                                    preference), and they keep providing service at a level I never
                                                    expect.<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Kate P.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Super easy to use. <strong>Fast and WAY
                                                        cheaper</strong> than Costco or any other place I've ever
                                                    checked."<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Bruce B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"We have been using NowRx for the last year
                                                    and the service is great as well as all the staff we have talked to
                                                    in getting our prescriptions filled. <strong>They go the extra mile
                                                        in customer service!</strong>"<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Neil C.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"<strong>Best Pharmacy experience
                                                        EVER!</strong> These guys are like going to your old
                                                    neighborhood pharmacy, you know the one, where they deliver your
                                                    medications to you and actually care about the customer? You don't
                                                    get better service than this."<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>- Mark C.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Companies that <strong>ACTUALLY PROVIDE
                                                        CUSTOMER SERVICE</strong> are so rare in this day and age. These
                                                    guys are awesome!"<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Tanya S.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al"><strong>Best pharmacy I have ever
                                                        used!</strong> I have nothing but good things to say about them.
                                                    Exemplary customer service, delivery right to your door with text
                                                    updates, and great pricing. I will be using them for as long as I
                                                    can!-Sarah S.NowRx Pharmacy Customer<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Sarah S.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active center" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">NowRx is the best pharmacy I've ever used.
                                                    They take all the work out of prescription management, they have
                                                    incredible communication (text and phone, whichever is your
                                                    preference), and they keep providing service at a level I never
                                                    expect.<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Kate P.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Super easy to use. <strong>Fast and WAY
                                                        cheaper</strong> than Costco or any other place I've ever
                                                    checked."<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Bruce B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"We have been using NowRx for the last year
                                                    and the service is great as well as all the staff we have talked to
                                                    in getting our prescriptions filled. <strong>They go the extra mile
                                                        in customer service!</strong>"<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Neil C.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"<strong>Best Pharmacy experience
                                                        EVER!</strong> These guys are like going to your old
                                                    neighborhood pharmacy, you know the one, where they deliver your
                                                    medications to you and actually care about the customer? You don't
                                                    get better service than this."<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>- Mark C.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Companies that <strong>ACTUALLY PROVIDE
                                                        CUSTOMER SERVICE</strong> are so rare in this day and age. These
                                                    guys are awesome!"<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Tanya S.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al"><strong>Best pharmacy I have ever
                                                        used!</strong> I have nothing but good things to say about them.
                                                    Exemplary customer service, delivery right to your door with text
                                                    updates, and great pricing. I will be using them for as long as I
                                                    can!-Sarah S.NowRx Pharmacy Customer<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Sarah S.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 487.5px; margin-right: 25px;">
                                            <div class="slider1" style="background-image:url('https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg');">
                                                <div class="reviews"><img
                                                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section section-bottom-padding team-sec">

                <div class="container">
                    <div class="team-intro less-m">
                        <h2 class="h2-box h2-op h2-center">We’re <strong>growing</strong></h2>
                        <p class="p-sub p-short p-center"><strong>NowRx Has Plans To Expand Nationwide</strong></p>
                    </div>
                    <div class="team">
                        <div class="w-layout-grid grid-5">
                            <div id="w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b"><img
                                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6140c92d117d8b068379aa99_Group%2075.svg"
                                    loading="lazy" width="702" alt="" class="image-13"></div>
                            <div id="w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b"><img
                                    src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                    loading="lazy" alt="" class="hide-m"></div>
                            <div class="timeline-box">
                                <div class="year">2016</div>
                                <div>
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
                                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb5ee7de4b899a82f59_image%204.png"
                                                loading="lazy" width="122" alt=""></div>
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
                                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb501ad810607c60a0a_image%205.png"
                                                loading="lazy" width="98" alt=""></div>
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
                                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb639123e8f9de023cf_image%206.png"
                                                loading="lazy" width="62" alt=""></div>
                                    </div>
                                </div>
                            </div><img
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                loading="lazy" alt="" class="hide-d">
                            <div class="timeline-box">
                                <div class="year blue">2020</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to 2nd state, Arizona</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil blue">MULTI-STATE</div>
                                        <div class="logo-wrapper"><img
                                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb5e34aaf83a28aba1a_image%207.png"
                                                loading="lazy" width="65" alt=""></div>
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
                        href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                        target="_blank" class="button white-button button-menu buy-now w-button">INVEST&nbsp;NOW</a>
                </div>
            </section>

            <div class="cta"
                style="background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(209, 16, 56, 0.8)),to(rgba(209, 16, 56, 0.8))),url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-image: linear-gradient(180deg, rgba(209, 16, 56, 0.8), rgba(209, 16, 56, 0.8)), url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-position: 0px 0px, 100% 50%;">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5952677",
                            formId: "df2a6935-1139-426a-b373-0917788189ad"
                        });
                        </script>

                    </div>
                </div>
            </div>

            <section id="Opportunity" class="section white growth"
                style="background-image: url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c69feb3f181cc73117_Rectangle%2085-min.jpg);">
                <div class="container">
                    <h2 class="h2-box h2-op center _2">Growth <strong>Strategy</strong></h2>
                    <div class="business-box _2">
                        <div class="invesments-list list-full hor"><img
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                loading="lazy" alt="" class="image-10">
                            <p class="p-sub p-short p-margin small-dot no-dot"><strong>96% of new customers come from
                                    physician referral</strong> and 4% of new customers from digital. We will scale
                                digital once the physician referral channel is established.<br></p>
                        </div>
                        <div class="invesments-list list-full hor"><img
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                loading="lazy" alt="" class="image-10">
                            <p class="p-sub p-short p-margin small-dot no-dot">New territories to be launched with
                                resulting exponential increase in total annual orders. West coast expansion underway
                                now, and <strong>nationwide expansion planned as the next phase.</strong><br></p>
                        </div>
                        <div class="invesments-list list-full hor"><img
                                src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                loading="lazy" alt="" class="image-10">
                            <p class="p-sub p-short p-margin small-dot no-dot"><strong>Additional opportunities for
                                    growth include non-prescription health and wellness products,</strong> telehealth
                                and specialty pharmacies for complex conditions.<br></p>
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
                                            <img data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9e12b8555ba56b11efcb6_e_carry-min.png"
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
                                            <img data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9e1667721ae6a8d7f7730_Summet-min-p-800.png"
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
                                            <img data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6148a97ea84c5b73fc158fe0_Group%2089-min.png"
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
            <div class="cta"
                style="background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(209, 16, 56, 0.8)),to(rgba(209, 16, 56, 0.8))),url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-image: linear-gradient(180deg, rgba(209, 16, 56, 0.8), rgba(209, 16, 56, 0.8)), url(https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg); background-position: 0px 0px, 100% 50%;">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5952677",
                            formId: "df2a6935-1139-426a-b373-0917788189ad"
                        });
                        </script>

                    </div>
                </div>
            </div>

            <footer class="footer wf-section">
                <div class="footer-links">
                    <div class="container-10 footer-container w-container"><img
                            src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white.png"
                            height="0" width="600" sizes="(max-width: 479px) 92vw, 150px"
                            srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white-p-500.png 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white-p-800.png 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white.png 900w"
                            alt="" class="logo-2">
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
                                    target="_blank" href="https://www.seedinvest.com/nowrx" class="footer-link"><strong
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


            <?php
if ( 'post' == get_post_type()  || is_archive('post') ||  'locations' == get_post_type() ):
else:
?>
        </article>
    </main>
    <?php endif; ?>

    <?php if(is_single()): ?>
    <section class="popblog">
        <div class="container">
            <div class="closeicon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="content">
                <div class="title">
                    <div class="logo">
                        <img class="logo lozad"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Pharmacy-Delivery-Logo.webp"
                            alt="NowRx Pharmacy Logo" width="122px" height="28px">



                    </div>
                    <div class="txt">
                        <b>"Best prescription delivery services in 2021" (CNET)</b>
                    </div>
                </div>
                <div class="points">
                    <!-- point -->
                    <div class="point">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" viewBox="0 0 19.481 19.481" enable-background="new 0 0 19.481 19.481">
                                <g>
                                    <path
                                        d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt">
                            Unrivaled 5 Star Customer Service
                        </div>
                    </div>
                    <!-- point -->
                    <div class="point">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 25.848 25.848"
                                style="enable-background:new 0 0 25.848 25.848;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M25.839,4.958c0,3.927-1.712,6.78-1.784,6.899c-0.145,0.237-0.396,0.367-0.655,0.367   c-0.136,0-0.273-0.036-0.397-0.111c-0.362-0.22-0.478-0.691-0.259-1.053c0.016-0.026,1.561-2.623,1.561-6.102   c0-1.984-1.29-3.424-3.068-3.424c-1.692,0-3.068,1.376-3.068,3.069c0,0.721,0.349,2.553,0.483,3.198   c0.087,0.415-0.18,0.821-0.595,0.908c-0.415,0.085-0.821-0.18-0.907-0.594c-0.053-0.253-0.517-2.502-0.517-3.512   C16.633,2.065,18.698,0,21.237,0C23.86,0,25.839,2.131,25.839,4.958z M21.367,6.165c0.305,2.549,0.747,7.516,0.239,8.022   L10.46,25.334c-0.685,0.686-1.798,0.686-2.484-0.001l-7.453-7.452c-0.686-0.685-0.686-1.798,0-2.484L11.67,4.251   c0.177-0.177,2.105-0.185,4.273-0.072C15.931,4.322,15.9,4.457,15.9,4.603c0,0.556,0.123,1.418,0.252,2.176   c-0.227,0.337-0.36,0.742-0.36,1.179c0,1.164,0.944,2.108,2.108,2.108s2.108-0.944,2.108-2.108c0-0.717-0.359-1.349-0.906-1.729   C18.99,5.562,18.9,4.918,18.9,4.603c0-0.068,0.014-0.131,0.02-0.198c0.267,0.028,0.53,0.057,0.779,0.088   C21.172,4.674,21.187,4.671,21.367,6.165z M15.426,14.507c-0.173-0.481-0.461-1.058-1.086-1.722l0.846-0.847l-0.942-0.941   l-0.913,0.914c-1.222-0.837-2.482-0.769-3.337,0.086c-0.932,0.932-0.712,2.115-0.028,3.49c0.47,0.952,0.556,1.5,0.191,1.865   c-0.375,0.375-0.98,0.212-1.529-0.336c-0.624-0.624-0.99-1.395-1.172-2.02l-1.414,0.838c0.164,0.566,0.606,1.373,1.23,2.037   L6.35,18.794l0.941,0.942l0.991-0.99c1.307,0.922,2.625,0.798,3.48-0.057c0.875-0.877,0.952-1.857,0.202-3.414   c-0.52-1.116-0.645-1.664-0.337-1.971c0.27-0.27,0.75-0.347,1.375,0.278c0.693,0.693,0.923,1.366,1.048,1.722L15.426,14.507z" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt">
                            Great Pricing on All Medication
                        </div>
                    </div>
                    <!-- point -->
                    <div class="point">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.998 511.998"
                                style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M414.498,188.525h-32.234l9.712-111.509c0.018-0.202,0.021-0.401,0.022-0.6c0-0.017,0.002-0.033,0.002-0.05    c0-0.003,0-0.005,0-0.008c0-3.035-1.831-5.71-4.522-6.873c-0.023-0.01-0.045-0.022-0.068-0.032c-0.167-0.07-0.34-0.13-0.514-0.188    c-0.065-0.021-0.127-0.047-0.192-0.067c-0.142-0.043-0.288-0.077-0.433-0.112c-0.102-0.024-0.2-0.053-0.303-0.073    c-0.127-0.025-0.259-0.041-0.389-0.06c-0.122-0.018-0.242-0.039-0.365-0.05c-0.021-0.002-0.04-0.006-0.061-0.008    c-0.132-0.012-0.262-0.01-0.393-0.015c-0.088-0.003-0.174-0.013-0.262-0.013h-0.094c-0.008,0-0.016,0-0.023,0H231.01    c-4.14,0-7.5,3.36-7.5,7.5c0,4.13,3.36,7.5,7.5,7.5h145.313l-14.926,171.375c-0.002,0.013-0.002,0.026-0.004,0.039l-3.766,43.241    H97.018l4.359-44.998h49.621c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-48.167l9.204-94.995h78.975    c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-77.521l4.328-44.662h83.193c4.13,0,7.5-3.37,7.5-7.5    c0-4.14-3.37-7.5-7.5-7.5h-90c-0.004,0-0.007,0.001-0.011,0.001c-3.523-0.001-6.579,2.479-7.318,5.917    c-0.005,0.025-0.014,0.049-0.019,0.074c-0.038,0.187-0.063,0.378-0.088,0.57c-0.007,0.061-0.02,0.119-0.026,0.18    c-0.001,0.012-0.004,0.023-0.005,0.035l-5.124,52.885H7.5c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h89.465    l-9.204,94.995H61.002c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.306l-5.012,51.721    c-0.001,0.008-0.001,0.016-0.002,0.023l-7.749,79.979c-0.001,0.009-0.002,0.019-0.003,0.027l-0.003,0.029    c-0.01,0.104-0.009,0.206-0.015,0.31c-0.007,0.138-0.021,0.273-0.021,0.413c0,0.006,0.001,0.012,0.001,0.019    c0,0.193,0.014,0.383,0.028,0.573c0.006,0.061,0.004,0.123,0.011,0.183c0.02,0.194,0.053,0.385,0.088,0.575    c0.01,0.056,0.015,0.113,0.026,0.168c0.029,0.144,0.07,0.283,0.108,0.424c0.026,0.099,0.047,0.2,0.077,0.297    c0.009,0.027,0.021,0.053,0.029,0.081c0.363,1.116,0.979,2.118,1.783,2.936c0.015,0.015,0.027,0.032,0.042,0.046    c0.08,0.08,0.167,0.152,0.251,0.228c0.517,0.474,1.101,0.876,1.74,1.191c0.133,0.066,0.264,0.135,0.4,0.192    c0.041,0.018,0.085,0.03,0.127,0.046c0.188,0.075,0.377,0.147,0.572,0.208c0.018,0.005,0.035,0.008,0.053,0.014    c0.222,0.066,0.446,0.124,0.675,0.171c0.03,0.006,0.061,0.008,0.09,0.014c0.218,0.041,0.437,0.076,0.66,0.098    c0.005,0,0.009,0.001,0.014,0.002c0.246,0.024,0.49,0.036,0.732,0.036c0.003,0,0.007-0.001,0.011-0.001h33.388    c3.687,27.953,27.652,49.603,56.597,49.603c28.943,0,52.908-21.65,56.595-49.603H347.9c3.688,27.953,27.652,49.603,56.596,49.603    c28.943,0,52.91-21.65,56.598-49.603h33.396c0.005,0,0.011,0.001,0.016,0.001c0.25,0,0.496-0.015,0.74-0.039    c0.044-0.004,0.086-0.013,0.13-0.018c0.195-0.023,0.389-0.05,0.579-0.088c0.082-0.016,0.161-0.038,0.242-0.057    c0.147-0.034,0.295-0.07,0.439-0.113c0.098-0.029,0.193-0.063,0.289-0.096c0.123-0.042,0.246-0.086,0.367-0.135    c0.104-0.041,0.203-0.086,0.304-0.131c0.11-0.051,0.22-0.103,0.327-0.158c0.102-0.052,0.2-0.106,0.298-0.162    c0.103-0.06,0.205-0.122,0.306-0.186c0.094-0.06,0.188-0.121,0.278-0.185c0.102-0.071,0.199-0.146,0.298-0.222    c0.082-0.065,0.165-0.129,0.245-0.197c0.103-0.087,0.2-0.178,0.298-0.271c0.068-0.065,0.139-0.129,0.205-0.197    c0.104-0.106,0.203-0.218,0.302-0.331c0.053-0.061,0.108-0.12,0.159-0.182c0.11-0.136,0.21-0.276,0.31-0.417    c0.034-0.049,0.072-0.095,0.105-0.145c0.122-0.183,0.237-0.371,0.343-0.565c0.008-0.012,0.016-0.023,0.021-0.036    c0.113-0.208,0.217-0.421,0.31-0.641c0.026-0.063,0.046-0.128,0.071-0.191c0.061-0.155,0.121-0.31,0.172-0.471    c0.033-0.104,0.057-0.211,0.086-0.316c0.033-0.125,0.068-0.249,0.096-0.376c0.025-0.113,0.041-0.229,0.06-0.344    c0.017-0.101,0.039-0.2,0.052-0.303c0.318-2.548,6.191-49.667,8.814-80.135c0.003-0.029,0.004-0.059,0.007-0.088    c0.755-8.783,1.239-16.179,1.239-20.707C511.998,232.264,468.26,188.525,414.498,188.525z M380.957,203.527h30.683l-3.919,44.996    h-30.683L380.957,203.527z M171.008,428.129c-23.217,0-42.105-18.888-42.105-42.104s18.889-42.104,42.105-42.104    s42.104,18.888,42.104,42.104S194.224,428.129,171.008,428.129z M404.496,428.129c-23.216,0-42.103-18.888-42.103-42.104    s18.888-42.104,42.103-42.104c23.217,0,42.105,18.888,42.105,42.104S427.713,428.129,404.496,428.129z M487.863,378.522h-26.767    c-3.686-27.955-27.652-49.606-56.598-49.606c-28.944,0-52.91,21.652-56.596,49.606H227.604    c-3.686-27.955-27.651-49.606-56.596-49.606s-52.912,21.652-56.598,49.606H89.266l6.299-65.004H364.5v0.004    c0.004,0,0.007,0,0.011,0c0.251,0,0.5-0.014,0.746-0.039c0.046-0.004,0.091-0.014,0.137-0.02c0.196-0.023,0.391-0.051,0.583-0.089    c0.083-0.017,0.164-0.04,0.246-0.06c0.15-0.036,0.3-0.071,0.446-0.115c0.1-0.03,0.195-0.066,0.292-0.1    c0.126-0.044,0.252-0.087,0.374-0.137c0.105-0.043,0.206-0.091,0.308-0.139c0.111-0.051,0.222-0.102,0.329-0.158    c0.102-0.054,0.202-0.112,0.303-0.17c0.103-0.06,0.205-0.121,0.305-0.185c0.097-0.063,0.189-0.129,0.282-0.195    c0.099-0.07,0.195-0.142,0.291-0.217c0.086-0.069,0.171-0.14,0.255-0.213c0.095-0.082,0.188-0.166,0.278-0.253    c0.076-0.073,0.152-0.148,0.226-0.225c0.09-0.094,0.177-0.191,0.263-0.29c0.067-0.078,0.133-0.156,0.197-0.236    c0.083-0.105,0.162-0.213,0.24-0.322c0.059-0.082,0.116-0.164,0.172-0.248c0.073-0.113,0.143-0.229,0.21-0.347    c0.051-0.088,0.103-0.176,0.149-0.266c0.063-0.118,0.117-0.238,0.174-0.359c0.044-0.097,0.089-0.192,0.129-0.292    c0.049-0.118,0.09-0.239,0.133-0.36c0.037-0.107,0.076-0.214,0.109-0.324c0.033-0.116,0.06-0.235,0.09-0.353    c0.029-0.119,0.061-0.237,0.084-0.358c0.023-0.118,0.037-0.238,0.055-0.358c0.018-0.124,0.039-0.246,0.051-0.372    c0.002-0.018,0.006-0.035,0.007-0.053l3.759-43.15h38.762c22.979,0,33.343,11.906,44.314,24.512    c9.053,10.401,19.16,22.006,36.34,24.837C492.968,335.938,489.441,365.554,487.863,378.522z M496.432,297.838    c-11.145-2.272-18.002-10.107-26.309-19.651c-10.389-11.935-23.072-26.5-47.385-29.214l3.88-44.548    c39.764,5.881,70.38,40.229,70.38,81.602C496.998,288.838,496.788,292.922,496.432,297.838z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M171.008,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C198.508,370.861,186.171,358.524,171.008,358.524z M171.008,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S177.9,398.524,171.008,398.524z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M404.496,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C431.996,370.861,419.659,358.524,404.496,358.524z M404.496,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S411.389,398.524,404.496,398.524z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M71,188.527H34.334c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5H71c4.143,0,7.5-3.358,7.5-7.5    C78.5,191.885,75.143,188.527,71,188.527z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="txt">
                            Free Same-Day Prescription Delivery
                        </div>
                    </div>
                </div>
                <div class="btn-container">
                    <a href="/refill-and-transfer-prescriptions" class="btn rx-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <?php wp_footer(); ?>
    </div> <!-- closes off canvas content -->
    <?php
if(is_front_page()):
?>
    <!-- video code -->
    <script async>
    // console.log(window.innerWidth);
    let windowW = window.innerWidth;
    if (windowW > 992) {
        document.addEventListener('DOMContentLoaded', function() {
            var lazyVideos = [].slice.call(document.querySelectorAll('video.lazy'));
            if ('IntersectionObserver' in window) {
                var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(video) {
                        if (video.isIntersecting) {
                            for (var source in video.target.children) {
                                var videoSource = video.target.children[source];
                                if (typeof videoSource.tagName === 'string' && videoSource
                                    .tagName === 'SOURCE') {
                                    videoSource.src = videoSource.dataset.src;
                                }
                            }
                            video.target.load();
                            video.target.classList.remove('lazy');
                            video.target.play();
                            lazyVideoObserver.unobserve(video.target);
                        }
                    });
                });
                lazyVideos.forEach(function(lazyVideo) {
                    lazyVideoObserver.observe(lazyVideo);
                });
            }
        });
    }
    </script>
    <?php endif; ?>

    <?php if ( is_page( 'refill-and-transfer-prescriptions' ) || is_page( 'telehealth' ) || is_page('contact-us') ): ?>
    <?php else: ?>
    <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js?vcc=<?= $cachever; ?>"></script>
    <?php endif; ?>

    <?php
// include modals
get_template_part('footer-modals');
?>
    <!-- tracking code -->
    <?php get_template_part('analytics-head'); ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script>$('#loop').owlCarousel({

        autoplay:true,
        autoplaySpeed:800,
        nav:true,
        navText:["<img src='https://assets.website-files.com/5d2a7a40b9b05dd3c13ea7e7/5d52e91ed4a630a0f23d2a7d_prev-2.svg'>","<img src='https://assets.website-files.com/5d2a7a40b9b05dd3c13ea7e7/5d52e91e48c1ac639ca0f932_next-2.svg'>"],
        dots:true,
        center: true,
        items:2,
        loop:true,
          callbacks: true,
        margin:25,
        slideTransition:'ease-in-out',
          responsive:{
                 1300:{
                items:2
            },

            768:{
                items:2
            },
            480:{
                items:1
            },
            240:{
                  margin:10,
                items:1,
            }
        }
    });

    </script>

</body>

</html> <!-- end of site. what a ride! -->