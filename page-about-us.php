<?php
/*
 Template Name: About Us
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
        <h1 class="headline"><?php the_field('large_page_title'); ?></h1>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle">
      <div class="large-8 large-offset-2 cell">
        <?php the_field('page_intro'); ?>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="grid-container">
    <div class="grid-x grid-padding-x text-center">
      <div class="large-12 cell">
        <h2 class="handwriting"><?php the_field('handwriting'); ?></h2>
      </div>
    </div>
    <div class="grid-x grid-padding-x padded-section switch-back">
      <div class="large-4 large-offset-1 small-3 cell switch-back-image">
        <img class="border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg" alt="cary breese ceo of nowrx pharmacy facing camera smiling">
      </div>
      <div class="large-5 large-offset-1 small-9 cell">
        <?php the_field('cary_breese'); ?>
      </div>
    </div>

    <div class="grid-x grid-padding-x padded-section switch-back">
      <div class="large-4 large-offset-1 small-3 small-order-1 medium-order-2 cell switch-back-image">
        <img class="border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg" alt="sumeet sheokand cto of nowrx pharmacy facing camera smiling">
      </div>
      <div class="large-5 large-offset-1 small-9 small-order-2 medium-order-1 cell">
        <?php the_field('sumeet_sheokand'); ?>
      </div>
    </div>



  </div>
</section>

<section class="how-it-works panel--primary panel--cta">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell text-center cell">
        <p class="pre-headline">Switch Today & Save</p>
        <h2 class="headline">Get a $20 Visa <br>Gift Card</h2>
        <p>For a limited time only, get a $20 Visa Gift Card for <br>every prescription you transfer to NowRx.*</p>
        <a href="/refill-and-transfer-prescriptions/" class="button">Switch to a Better Pharmacy Today</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="grid-container padded-section">
    <div class="grid-x grid-padding-x text-center">
      <div class="large-12 cell">
        <h2 class="handwriting"><?php the_field('handwriting_2'); ?></h2>
      </div>
    </div>
    <div class="grid-x grid-padding-x padded-section switch-back">
      <div class="large-2 large-offset-1 small-3 cell switch-back-image">
        <img class="border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg" alt="melissa bostock director of pharmacy for nowrx pharmacy facing camera smiling">
      </div>
      <div class="large-6 large-offset-1 small-9 cell">
        <?php the_field('melissa_bostock'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x padded-section switch-back">
      <div class="large-2 large-offset-1 small-3 cell switch-back-image">
        <img class="border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/laemsing-root.jpg" alt="laemsing root pharmacist in charge of nowrx pharmacy facing camera smiling">
      </div>
      <div class="large-6 large-offset-1 small-9 cell">
        <?php the_field('laemsing_root'); ?>
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
        <a href="/refill-and-transfer-prescriptions/" class="button">Switch to a Better Pharmacy Today</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
