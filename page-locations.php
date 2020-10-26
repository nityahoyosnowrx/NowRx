<?php
/*
 Template Name: Locations
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); ?>

<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero--sub-page">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="large-12 cell text-center">
        <p class="pre-headline"><?php the_title(); ?></p>
        <h1 class="headline">Our NowRx Pharmacies</h1>
      </div>
    </div>
  </div>
</section>
<section class="locations" style="margin-bottom: 50px;">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 cell">
        <h4>Northern California Service Area</h4>
        <div class="location-area-map" style="margin-bottom: 50px;">
          <img class="border-styled" style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/library/images/locations-sillicon-valley-area.jpg" alt="">
        </div>
        <div class="location" style="margin-bottom: 40px;">
          <h5>NowRx Mountain View</h5>
          <p>2224 Old Middlefield Way, Suite J, <br>Mountain View, California 94043 <br><a href="tel:650-499-3000">(650) 499-3000</a></p>
        </div>
        <div class="location" style="margin-bottom: 40px;">
          <h5>NowRx San Jose</h5>
          <p>1310 Tully Rd, Suite 101, <br>San Jose, California, 95122 <br>
          <a href="tel:650-499-3000">(650) 499-3000</a></p>
        </div>
        <div class="location" style="margin-bottom: 40px;">
          <h5>NowRx Burlingame</h5>
          <p>800 Burlway Rd, <br>Burlingame, California 94010 <br>
          <a href="tel:650-499-3000">(650) 499-3000</a></p>
        </div>
      </div>
      <div class="large-6 cell">
        <h4>Orange County Service Area</h4>
        <div class="location-area-map" style="margin-bottom: 50px;">
          <img class="border-styled" style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/library/images/locations-orange-county-area.jpg" alt="">
        </div>
        <div class="location" style="margin-bottom: 40px;">
          <h5>NowRx Irvine</h5>
          <p>1641 Kaiser Ave, <br>Irvine, California 92614 <br>
          <a href="tel:949-619-6000">(949) 619-6000</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="how-it-works panel--primary panel--cta">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell text-center">
        <p class="pre-headline">Switch Today & Save</p>
        <h2 class="headline">Get a $20 Visa <br>Gift Card</h2>
        <p>For a limited time only, get a $20 Visa Gift Card for <br>every prescription you transfer to NowRx.*</p>
        <a href="/get-started/" class="button">Switch to a Better Pharmacy Today</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
