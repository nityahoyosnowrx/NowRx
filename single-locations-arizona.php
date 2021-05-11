<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

<main id="main" class="main-class mainlocation" role="main" itemscope itemprop="mainContentOfPage"
    itemtype="http://schema.org/Blog">

    <div class="rvl">

        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy)"
            data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy)"
                height="100px" width="450px">
        </picture>

    </div>


    <article class="article-block location-item statelocation">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

            <div class="map-block">

                <div class="map-locations">

                    <div class="locatios-mainblock">

                        <div class="location-item">
                            <a href="<?= get_site_url(); ?>/locations/california/mesa/">
                                <h2 class="sec-title">Mesa, AZ</h2>
                            </a>
                            <div class="btn-block">
                                <a href="<?= get_site_url(); ?>/locations/california/mesa/" class="rx-btn">
                                    View Location Information
                                    <span class="arrow">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-2x">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                                class=""></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->







    <!-- visit faq -->
    <section class="visit-faq">
        <div class="container">
            <div class="content">
                <div class="rvl">
                    <span class="sub-headline">
                        Have additional questions about NowRx Pharmacy
                    </span>
                </div>
                <div class="rvl">
                    <h2 class="sec-title">
                        Visit our FAQ
                    </h2>
                </div>
                <div class="rvl">
                    <div class="btn-container">
                        <a href="<?= get_site_url(); ?>/faqs/#faqblock" class="rx-btn rx-dg">
                            Frequently Asked Questions
                        </a>
                    </div>
                </div>
                <div class="rvl">
                    <div class="small-block">
                        You can also text us at (844) 466-6979 or send an email to info@nowrx.com and we will get back
                        to
                        you as soon as possible.
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>


<?php include('components/locations-singlemap.php'); ?>

<?php
get_footer();