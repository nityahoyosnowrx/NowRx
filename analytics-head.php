
  <?php // drop Google Analytics Here
  ?>


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


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LWZKR7');</script>
<!-- End Google Tag Manager -->




  <!-- bing -->
  <script async>
    (function(w, d, t, r, u) {
      var f, n, i;
      w[u] = w[u] || [], f = function() {
        var o = {
          ti: "56297167"
        };
        o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
      }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
        var s = this.readyState;
        s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
      }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
    })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    //   !function(_window, _document) {
    // var OB_ADV_ID='00823c7bca4d0fcee5add72e3a165bf2bd';
    // if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
    // var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
    // obApi('track', 'PAGE_VIEW');
  </script>

<?php if(is_page('nowprep') || is_page(1410)): ?>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2367951633519977');
  fbq('track', 'PageView');
  </script>
  <noscript>
  <img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2367951633519977&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->


  <?php
  endif;
  ?>



<?php



  ?>

  <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "name": "NowRX Pharmacy",
  "url": "<?php echo get_site_url(); ?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Logo.webp",
  "sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]

}
</script>
  <?php

if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
<?php $author_id = get_the_author_meta( 'ID' ); ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

$id = get_the_ID();
$yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );

?>

<script type="application/ld+json">{
"@context": "http://schema.org",
"@type": "WebSite",
"name": "Prescription Delivery in Hours Now Rx for Free | NowRx Pharmacy",
        "description": "Prescription Delivery in Hours for Free | NowRx Pharmacy",
"url": "<?php the_permalink(); ?>",
"sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]


}</script>



<script type="application/ld+json">
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
        "description": "<?php echo $yoast_desc; ?>",
        "inLanguage": "en-US"
}
</script>

<?php endwhile; endif;


?>