<?php // drop Google Analytics Here ?>

<script async type="application/ld+json" defer>
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "NowRX Pharmacy",
  "url": "<?php echo get_site_url(); ?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Logo.webp",
  "sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]

}
</script>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
<?php $author_id = get_the_author_meta( 'ID' ); ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
$id = get_the_ID();
$yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );
?>

<script async type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Prescription Delivery in Hours Now Rx for Free | NowRx Pharmacy",
  "description": "Prescription Delivery in Hours for Free | NowRx Pharmacy",
  "url": "<?php the_permalink(); ?>",
  "sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]
}
</script>

<script async type="application/ld+json">
{
    "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "<?php the_permalink(); ?>#webpage",
        "url": "<?php the_permalink(); ?>",
        "name": "Prescription Delivery in Hours for Free | NowRx Pharmacy",
        "isPartOf": {
            "@id": "<?php the_permalink(); ?>#website"
        },
        "datePublished": "<?php echo get_the_date( 'D, M d Y - h:i a' ); ?>",
        "dateModified": "<?php echo get_the_modified_date(); ?>",
        "description": "<?php   echo htmlentities($yoast_desc); ?>",
        "inLanguage": "en-US"
}
</script>

<?php endwhile; endif; ?>


<?php
// load everywhere except thank you page
if ( is_page(925 ) ||is_page(1410)): ?>
<?php else: ?>
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
<?php endif; ?>
