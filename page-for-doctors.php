<?php
/*
 Template Name: For Doctors
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
      <div class="large-8 large-offset-2 cell" style="">
        <?php the_field('page_intro'); ?>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="grid-container">
    <div class="grid-x grid-padding-x text-center">
      <div class="large-8 large-offset-2 cell">
        <h4 class="text-center" style="margin-bottom: 2rem; margin-top:-2em; color: #008ed8;"><?php the_field('page_intro_cta_text'); ?></h4>
        <p class="text-center"><a data-toggle="for-doctors" class="button" style="background-color: #33a532;">Learn More About NowRx Pharmacy</a></p>
        <p class="handwriting" style="font-size: 3em; margin-top:1em;"><?php the_field('handwritten_text_under_button'); ?></p>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-for-doctors.jpg" alt="">
      </div>
      <div class="large-5 large-offset-1 cell">
        <h2><?php the_field('benefits_for_nowrx_doctors'); ?></h2>
        <?php the_field('benefits_for_nowrx_doctors_bullets'); ?>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-middle padded-section switch-back">
      <div class="large-4 large-offset-1 small-order-1 medium-order-2 cell switch-back-image">
        <img class="border-styled" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-for-patients.jpg" alt="">
      </div>
      <div class="large-5 large-offset-1 small-order-2 medium-order-1 cell">
        <h2><?php the_field('benefits_for_nowrx_patients'); ?></h2>
        <?php the_field('benefits_for_nowrx_patients_bullets'); ?>
      </div>
    </div>
  </div>
</section>

<!--
<section class="testimonials-section-2">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-8 large-offset-2 cell">
        <div class="orbit" role="region" aria-label="NowRx Testimonials" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <div class="orbit-wrapper">
            <div class="orbit-container">
              <div class="is-active orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-victoria-howard.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“NowRx rocks! I have all my prescriptions delivered straight to my office. The customer service is excellent, they are really fast, and the cost is the same as getting my prescriptions filled at CVS or Walgreens. Thanks NowRx!”</p>
                      <cite>Victoria H.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-danna-y.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“My husband and I have been using NowRx since early this year and I wish we knew about this pharmacy earlier. It's fast (same day delivery), convenient and their customer service people are very friendly. No more driving to the pharmacy and waiting for medications to be filled.”</p>
                      <cite>Danna Y.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-christene-m.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“I cannot say strongly enough how much better it is to have prescriptions delivered to my door, mostly within hours, as opposed to endlessly waiting at my local drug store. I would never go back. NowRx is the best.”</p>
                      <cite>Christene M.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-tony-m.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“NowRx is great. Huge time saver... no more standing in line or sitting in your idling car waiting for next available teller... They deliver the prescription to your address within a 3 hour time window. They can handle both regular prescriptions and controlled substance prescriptions.”</p>
                      <cite>Tony M.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-neil-c.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“We have been using NowRx for the last year and the service is great. NowRx handles our refills and they coordinate with the doctor's office. They go the extra mile in customer service!”</p>
                      <cite>Neil C.</cite>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="4"><span class="show-for-sr">Second slide details.</span></button>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<section class="featured-in-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell text-center">
        <p>
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-cnbc.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-fortune.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-forbes.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-abc-7.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-business-insider.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-sfc2.svg" alt="">
        </p>
      </div>
    </div>
  </div>
</section>

<section class="how-it-works panel--primary panel--cta--doctors">
  <div class="grid-container text-center">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <p class="pre-headline">Learn More</p>
        <h2 class="headline">See For Yourself Why NowRx is <br>A Better Pharmacy!</h2>
        <a style="margin-top: 20px; background-color: #33a532;" data-toggle="for-doctors" class="button">Contact NowRx Today</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
