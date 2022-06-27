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

<script type="application/ld+json" defer>
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
                <?php the_content(); ?>
            </div>

            <div class="map-block">
                <div class="map-tem">
                    <!-- <div id="map"></div> -->
                    <?php
                        $image;
                        if(is_single('irvine')){
                            $imageAlt = 'Irvine Pharmacy Delivery Area';
                            $image = 'Irvine-Pharmacy-Delivery-Area.webp';
                            $imageM = 'Irvine-Pharmacy-Delivery-Area-m.webp';
                        }
                        if(is_single('van-nuys')){
                            $imageAlt = 'van nuys pharmacy delivery area';
                            $image = 'van-nuys-pharmacy-delivery-area.webp';
                            $imageM = 'van-nuys-pharmacy-delivery-area-m.webp';
                        }
                        if(is_single('san-jose')){
                            $imageAlt = 'San Jose Pharmacy Delivery Area';
                            $image = 'San-Jose-Pharmacy-Delivery-Area.webp';
                            $imageM = 'San-Jose-Pharmacy-Delivery-Area-m.webp';
                        }
                        if(is_single('pleasanton')){
                            $imageAlt = 'Pleasanton pharmacy delivery area';
                            $image = 'Pleasanton-pharmacy-delivery-area.webp';
                            $imageM = 'Pleasanton-pharmacy-delivery-area-m.webp';
                        }
                        if(is_single('mountain-view')){
                            $imageAlt = 'Mountain View Pharmacy Delivery Area';
                            $image = 'Mountain-View-Pharmacy-Delivery-Area.webp';
                            $imageM = 'Mountain-View-Pharmacy-Delivery-Area-m.webp';
                        }
                        if(is_single('hayward')){
                            $imageAlt = 'hayward pharmacy delivery area';
                            $image = 'hayward-pharmacy-delivery-area.webp';
                            $imageM = 'hayward-pharmacy-delivery-area-m.webp';
                        }
                        if(is_single('burlingame')){
                            $imageAlt = 'Burlingame pharmacy delivery area';
                            $image = 'Burlingame-pharmacy-delivery-area.webp';
                            $imageM = 'Burlingame-pharmacy-delivery-area-m.webp';
                        }
                        if(is_single('mesa')){
                            $imageAlt = 'Phoenix pharmacy delivery area';
                            $image = 'Phoenix-pharmacy-delivery-area.webp';
                            $imageM = 'Phoenix-pharmacy-delivery-area-m.webp';
                        }

                    ?>
                    <picture class="border-styled " style="display: block; min-height: 1rem ;border-radius:5px; overflow: hidden;">
                        <source srcset="<?php echo get_template_directory_uri() ."/images/".$image; ?>" media="(min-width: 700px)">
                        <source srcset="<?php echo get_template_directory_uri() ."/images/".$imageM; ?>" media="(max-width: 700px)">
                        <img src="data:image/jpeg;base64,/some_lqip_in_base_64==" width="766" height="430" alt="<?php echo $imageAlt; ?>">
                    </picture>
                </div>
                <div class="map-locations">
                    <?php echo get_field('info'); ?>
                </div>
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php include('section-visitblock.php'); ?>

    <!-- FAQ -->
    <?php get_template_part('components/section-faq-flip'); ?>

    <?php
    // include('section-visitfaq.php'); ?>
</main>

<?php
// include('components/locations-singlemap.php'); ?>

<?php
get_footer();