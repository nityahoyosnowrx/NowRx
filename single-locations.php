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




<?php
$mapd = get_field('address');
?>
<script type="application/ld+json">
{
    "@context": "https://www.schema.org",
    "@type": "LocalBusiness",
    "name": "<?= __(the_title()); ?>",
    "alternateName": ["NowRx", "NowRx Pharmacy", "Now Rx", "Now Rx Pharmacy"],
    "url": "<?php the_title(); ?>",
    "@id": "<?php the_title(); ?>#LocalBusiness",
    "image": "<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png",
    "telephone": "<?php if(get_field('phone')){ echo get_field('phone'); } else { echo '""';} ?>",
    "sameAs": [
        "https://twitter.com/NowRx?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
        "https://www.facebook.com/NowRx"
    ],
    "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
        ],
        "opens": "09:00",
        "closes": "17:00"
    }],
    "priceRange": "$",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $mapd['name']; ?>",
        "addressLocality": "<?= $mapd['city']; ?>",
        "addressRegion": "<?= $mapd['state']; ?>",
        "postalCode": "<?= $mapd['post_code']; ?>",
        "addressCountry": "<?= $mapd['country']; ?>"
    },
    "review": {
        "@type": "Review",
        "reviewRating": {
            "@type": "Rating",
            "ratingValue": "1",
            "bestRating": "5"
        },
        "author": {
            "@type": "Person",
            "name": "Lina W."
        }
    },
    "location": {
        "@type": "Place",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "<?= $mapd['lat']; ?>",
            "longitude": "<?= $mapd['lng']; ?>"
        }
    },
    "areaServed": <?php if(get_field('differentlocations')){echo get_field('differentlocations');}else{echo '""';} ?>
}
</script>

<main id="main" class="main-class singleloc">

    <article class="article-block location-item">

        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <div class="breadcrumb">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content mapplace">

            <div class="mapcontent">

                <?php
            the_content(); ?>
            </div>
            <div class="map-block">


                <div class="maphours">
                    <span class="hourtitle">Hours of Operation</span>
                    <span class="time">
                        Monday - Friday | 9am - 5pm
                    </span>
                </div>

                <div class="map-tem">
                    <div id="map"></div>
                </div>

                <div class="map-locations">

                    <?php echo get_field('info'); ?>
                </div>
            </div>


        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->


    <section class="searchbar">
        <div class="map-searchbar">
            <div class="box">
                <label for="pac-input" class="enter">Please enter your address below to see if NowRx delivers.</label>
                <input id="pac-input" class="controls" type="text" placeholder="e.g. 123 Baker St, Sunnyvale CA">
                <div class="results-map"></div>
            </div>
        </div>
    </section>


    <section class="visit-faq">
        <div class="container">
            <div class="content">
                <div class="rvl">
                    <span class="sub-headline">
                        No Signup Required. No Hidden Fees.
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Just a Better Pharmacy
                    </h2>
                </div>
                <div class="rvl">
                    <div class="btn-container">
                        <a class="rx-btn rx-dg" data-toggle="suggestalocation" aria-controls="suggestalocation"
                            aria-haspopup="true" tabindex="0">Request a Location</a>
                    </div>
                </div>
                <div class="rvl">
                    <div class="small-block">
                        Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="mailto:info@nowrx.com">info@nowrx.com</a> and
                        we will be happy to help.
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                    NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in
                                    to
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
                                    walk-ins and our pharmacists are always available to chat in person or over the
                                    phone.
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
                                    Proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                    about
                                    1/100th that of a traditional pharmacy like CVS. This enables free same-day
                                    delivery.
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
                                    We make money like every pharmacy or healthcare service – reimbursement from
                                    insurance
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
                                    Yes. You can set a head of household if a single person will be managing a family
                                    member
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
                                    YES. If you have a paper copy, a NowRx driver will pick it up from you or your
                                    doctor
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
                                    NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some
                                    of
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
                                    How long does does delivery take?
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



</main>


<?php include('components/locations-singlemap.php'); ?>

<?php
get_footer();