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
    "@context": "https://www.schema.org/",
    "@type": "LocalBusiness",
    "name": "<?= __(the_title()); ?>",
    "alternateName": ["NowRx", "NowRx Pharmacy", "Now Rx", "Now Rx Pharmacy"],
    "url": "<?php the_title(); ?>",
    "@id": "<?php the_title(); ?>#LocalBusiness",
    "image": "<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png",
    "telephone": "844-466-6979",
    "sameAs": [
        "https://twitter.com/NowRx?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
        "https://www.facebook.com/NowRx/"
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
    "areaServed": [{
        "@type": "City",
        "name": ["<?= $mapd['city']; ?>"]
    }]
}
</script>


<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is NowRx?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in to pick up medication, we bring them to you."
            }
        },
        {
            "@type": "Question",
            "name": "Is NowRx a mail-order pharmacy?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NO. NowRx Pharmacy has physical locations in all of our service areas. We accept walk-ins and our pharmacists are always available to chat in person or over the phone."
            }
        },
        {
            "@type": "Question",
            "name": "How can you afford to provide free same-day delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proprietary tech inside our pharmacy increases efficiency and reduces our cost to about 1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery."
            }
        },
        {
            "@type": "Question",
            "name": "How do you make money?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We make money like every pharmacy or healthcare service – reimbursement from insurance and copays from the patient."
            }
        },
        {
            "@type": "Question",
            "name": "Do you charge more to offset the cost of delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NO. Prices are lower than or competitive with all pharmacies. We also automatically search for and apply available coupons to offer the lowest price possible (over $1M saved!)."
            }
        },
        {
            "@type": "Question",
            "name": "How do you handle special requests?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Special requests (e.g. blister packs, medication sorting, etc.) are available upon request. Just let our pharmacist know when they reach out to schedule your delivery!"
            }
        },
        {
            "@type": "Question",
            "name": "Can I manage prescriptions for a family member?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. You can set a head of household if a single person will be managing a family member or loved one’s prescriptions."
            }
        },
        {
            "@type": "Question",
            "name": "Do you deliver controlled & refrigerated medication?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor before delivery. These meds also require a signature & proper ID."
            }
        },
        {
            "@type": "Question",
            "name": "What insurance plans do you take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some of the lowest out of pocket prices in the areas we serve."
            }
        },
        {
            "@type": "Question",
            "name": "How long does does delivery take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Typically, your prescription will arrive 2-4 hours after we have confirmed your prescription. We also offer 1hr delivery option for a $5 fee."
            }
        }

    ]
}
</script>



<main id="main" class="main-class singleloc">

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


    <article class="article-block location-item">

        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <div class="breadcrumb">
                <?php
// if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
// }
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
                            Pharmacy Delivery from NowRx
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