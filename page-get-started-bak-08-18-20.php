<?php
/*
 Template Name: Get Started
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

<?php if (has_post_thumbnail($post->ID)) : ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="hero--sub-page get-started-hero">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
          <div class="large-12 cell text-center" style="padding-bottom: 1em;">
            <h1 class="get-started-headline">
              <?php the_field('large_page_title'); ?>
            </h1>
            <h2 class="get-started-post-headline" style="color: #274e85;">
              <!-- <em><?php the_field('NEW PAGE TITLE HERE'); ?></em> -->
              <em>You’re minutes away from a better pharmacy experience. Get started by filling out the provided form and our pharmacist will reach out to you!</em>
            </h2>
          </div>
        </div>
        <div class="grid-x grid-padding-x testimonials-main">
          <div class="large-5 cell">
            <div class="testimonials-area sign-up-form-heading">
              <h4 style="color: #274e85;">Get Started</h4>
              <p class="form-fill">Please fill out the form below to get started.</p>
              <!--[if lte IE 8]>
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
              <![endif]-->
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
              <script>
                hbspt.forms.create({
                  portalId: "5952677",
                  formId: "07939729-ecdf-4ea3-8cd5-56e0d491b44b"
                });
              </script>
            </div>
          </div>

          <div class="large-6 large-offset-1 cell">
            <div class="testimonials-area testimonials-carousel-title">
              <h4 style="color: #274e85;">What NowRx Customers are Saying</h4>
              <!-- <p class="text-small text-left">
                <?php the_field('transfer_your_prescription'); ?>
              </p> -->
              <div class="orbit" role="region" aria-label="NowRx Testimonials" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                <div class="orbit-wrapper">
                  <div class="orbit-container">
                    <div class="is-active orbit-slide testimonial">
                      <div class="grid-x grid-padding-x">
                        <div class="small-3 cell">
                          <div class="testimonial-image-wrapper">
                            <img class="testimonial-image small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-victoria-howard.jpg" alt="First Lastname">
                            <div class="testimonial-image-background"></div>
                          </div>
                        </div>
                        <div class="small-9 cell">
                          <div class="testimonial-copy text-left">
                            <p>“NowRx rocks! I have all my prescriptions delivered straight to my office. The customer service is excellent, they are really fast, and the cost is the same as getting my prescriptions filled at CVS or Walgreens. Thanks NowRx!”</p>
                            <cite>Victoria H.</cite>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="orbit-slide testimonial">
                      <div class="grid-x grid-padding-x">
                        <div class="small-3 cell">
                          <div class="testimonial-image-wrapper">
                            <img class="testimonial-image small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-danna-y.jpg" alt="First Lastname">
                            <div class="testimonial-image-background"></div>
                          </div>
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
                          <div class="testimonial-image-wrapper">
                            <img class="testimonial-image small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-christene-m.jpg" alt="First Lastname">
                            <div class="testimonial-image-background"></div>
                          </div>
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
                          <div class="testimonial-image-wrapper">
                            <img class="testimonial-image small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-tony-m.jpg" alt="First Lastname">
                            <div class="testimonial-image-background"></div>
                          </div>
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
                          <div class="testimonial-image-wrapper">
                            <img class="testimonial-image small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-neil-c.jpg" alt="First Lastname">
                            <div class="testimonial-image-background"></div>
                          </div>
                        </div>
                        <div class="small-9 cell">
                          <div class="testimonial-copy">
                            <p>“We have been using NowRX for the last year and the service is great. NowRx handles our refills and they coordinate with the doctor's office. They go the extra mile in customer service!”</p>
                            <cite>Neil C.</cite>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <nav id="get-started-carousel" class="orbit-bullets">
                  <button class="is-active get-started-bullets" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                  <button class="get-started-bullets" data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                  <button class="get-started-bullets" data-slide="2"><span class="show-for-sr">Second slide details.</span></button>
                  <button class="get-started-bullets" data-slide="3"><span class="show-for-sr">Second slide details.</span></button>
                  <button class="get-started-bullets" data-slide="4"><span class="show-for-sr">Second slide details.</span></button>
                </nav>
              </div>
              <div class="testimonial-copy">
                <p class="">If you have any questions about NowRx pharmacy, please visit our <a href="/faqs">Frequently Asked Questions Page</a> or contact us at <a href="mailto:info@nowrx.com">info@nowrx.com</a>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-x grid-padding-x disclaimer-main">
          <div class="large-12 cell text-center">
            <p class="get-started-disclaimer">*Gift card offer not valid under Medicare, Medicaid, any other federal or state program, or medication previously filled by NowRx. Limit $100 per customer.</p>
            <!-- <p class="get-started-disclaimer">
                <?php the_field('page_intro'); ?>
              </p> -->
          </div>
        </div>
      </div>
    </section>
    <section class=" featured-in-section">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell text-center">
            <p class="text-small" style="margin-bottom: 30px;">NowRx Has Been Featured In:</p>
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
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
