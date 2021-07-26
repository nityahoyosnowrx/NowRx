<?php
/*
 Template Name: Test Page
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

<div class="grid-container">
<p style="text-align: center; color: #008ed8; text-shadow: .1px .1px .1px #000000;">Going to the pharmacy has become a nightmare: long lines, high prices, and terrible customer service. <br>NowRx is using modern technology to change that &amp; provide a simpler, more customer friendly pharmacy experience.</p>

	<div class="grid-x grid-margin-x" style="padding:3.5rem 0px 2.5rem 0px;">
		<div class="cell large-12 text-center">
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-1.png" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="">
			<h5 style="color: #274e85;">Send Us Your Prescription</h5>
			<p style="text-align: left;"><strong>New Prescriptions: </strong>Tell your doctor to fax us or ePrescribe to NowRx.<br> <strong>Existing Prescriptions: </strong><a href="https://try.nowrxpharmacy.com">Click Here</a></p>
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-2.svg" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="">
			<h5 style="color: #274e85;">We Confirm Delivery</h5>
			<p>We will reach out to you via phone to confirm delivery address, insurance, and collect the prescription copy.</p>
		</div>


		<div class="cell large-4 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-3.svg" style="height: auto; width: auto; max-width: 100%; max-height: 100px; padding-bottom: 25px;" alt="">
			<h5 style="color: #274e85;">Medication is Delivered</h5>
			<p>A HIPAA certified NowRx driver will deliver your medicine in under 5 hours or as requested for no additional charge.</p>
		</div>


	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
