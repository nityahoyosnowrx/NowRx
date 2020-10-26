<?php
/*
 Template Name: How It Works
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
<p style="font-size:1.25em; text-align: center; color: #008ed8; text-shadow: .1px .1px .1px #000000;"><strong>NowRx uses modern technology to provide a simpler, more customer friendly <br>pharmacy experience. Here's how it works!</strong></p>
    <div class="grid-x grid-padding-x align-middle">
      <div class="large-8 large-offset-2 cell">
        <?php the_field('page_intro'); ?>
      </div>
    </div>
  </div>

<div class="grid-container">

	<div class="grid-x grid-margin-x" style="padding:3.5rem 0px 2.5rem 0px;">
		<div class="cell large-12 text-center">
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-1.png" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="pills icon">
			<h5 style="color: #274e85;">Send Us Your Prescription</h5>
			<p style="text-align: left;"><strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br><strong>Existing Prescription: </strong><a href="https://try.nowrxpharmacy.com/prescription-delivery">Click Here</a></p>
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-2.svg" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="checkmark icon">
			<h5 style="color: #274e85;">We Confirm Delivery</h5>
			<p>We will reach out to you via phone to confirm delivery address, insurance, and collect the prescription copy.</p>
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-3.svg" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="delivery car icon">
			<h5 style="color: #274e85;">Medication is Delivered</h5>
			<p>A HIPAA certified NowRx driver will deliver your medicine in under 5 hours or as requested for no additional charge.</p>
		</div>


	</div>
</div>

</section>
<section>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <p class="handwriting text-center"><?php the_field('handwriting'); ?></p>
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-switch.jpg" alt="prescription bottle">
      </div>
      <div class="large-5 large-offset-1 cell">
        <p class="about-us--team-member-title">CURRENT PRESCRIPTION</p>
        <?php the_field('current_prescription'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell small-order-1 medium-order-2 switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-1.jpg" alt="doctor writing prescription for patient">
      </div>
      <div class="large-5 large-offset-1 cell small-order-2 medium-order-1">
        <p class="about-us--team-member-title">NEW PRESCRIPTION</p>
        <?php the_field('new_prescription'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-pharmacist.jpg" alt="pharmacist">
      </div>
      <div class="large-5 large-offset-1 cell">
        <p class="about-us--team-member-title">PRESCRIPTION QUESTIONS?</p>
        <?php the_field('prescription_questions'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back margin-bottom">
      <div class="large-4 large-offset-1 cell small-order-1 medium-order-2 switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-robots.jpg" alt="robot dispensing prescription">
      </div>
      <div class="large-5 large-offset-1 cell small-order-2 medium-order-1">
        <p class="about-us--team-member-title">ROBOTICS</p>
        <?php the_field('robotics'); ?>
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
        <a href="https://try.nowrxpharmacy.com/prescription-delivery" class="button">Switch to a Better Pharmacy Today</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle padded-section switch-back margin-top">
      <div class="large-4 large-offset-1 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-delivered.jpg" alt="NowRx prescription delivery car">
      </div>
      <div class="large-5 large-offset-1 cell">
        <p class="about-us--team-member-title">DELIVERY</p>
        <?php the_field('delivery'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell small-order-1 medium-order-2 switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-relax.jpg" alt="mother with her baby">
      </div>
      <div class="large-5 large-offset-1 cell small-order-2 medium-order-1">
        <p class="about-us--team-member-title">RELAX</p>
        <?php the_field('relax'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-refill.jpg" alt="prescription being delivered to a woman">
      </div>
      <div class="large-5 large-offset-1 cell">
        <p class="about-us--team-member-title">REFILLS</p>
        <?php the_field('refills'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back margin-bottom">
      <div class="large-4 large-offset-1 small-order-1 medium-order-2 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/how-it-works-step-download-app.jpg" alt="NowRx mobile app">
      </div>
      <div class="large-5 large-offset-1 small-order-2 medium-order-1 cell">
        <p class="about-us--team-member-title">DOWNLOAD THE APP</p>
        <?php the_field('download_the_app'); ?>
        <p style="margin-top: 1rem;"><a target="_blank" href="https://itunes.apple.com/us//app/nowrx-pharmacy-on-demand/id1066924988"><img style="max-width: 140px;" src="<?php echo get_template_directory_uri(); ?>/library/images/app-apple-store-button.png" alt="apple App Store icon"></a> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nowrx.client"><img style="max-width: 140px;" src="<?php echo get_template_directory_uri(); ?>/library/images/app-google-store-button.png" alt="google play store icon"></a></p>
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
        <a href="https://try.nowrxpharmacy.com/prescription-delivery" class="button">Switch to a Better Pharmacy Today</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
