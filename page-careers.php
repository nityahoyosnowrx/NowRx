<?php
/*
 Template Name: Careers
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
<section class="" id="hero" style="margin: 0px;">
  <div class="grid-container">
    <div class="grid-x grid-padding-x" style="margin-bottom: 40px;">
      <div class="large-10 large-offset-1 cell">
        <h2 class="text-center"><?php the_field('current_openings'); ?></h2>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="large-10 large-offset-1 cell">
        <?php if(get_field('job_openings')): ?>
        <ul class="accordion" data-accordion="kbzh6i-accordion" data-allow-all-closed="true" role="tablist">
          <?php while(has_sub_field('job_openings')): ?>
          <li class="accordion-item" data-accordion-item="" role="presentation">
            <a href="#" class="accordion-title" aria-controls="oe4sd5-accordion" role="tab" id="oe4sd5-accordion-label" aria-expanded="false" aria-selected="false"><?php the_sub_field('job_title'); ?></a>
            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="oe4sd5-accordion-label" aria-hidden="true" id="oe4sd5-accordion" style="display: none;">
              <?php the_sub_field('job_details'); ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include('section-companies.php'); ?>

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
                      <p>“We have been using NowRX for the last year and the service is great. NowRx handles our refills and they coordinate with the doctor's office. They go the extra mile in customer service!”</p>
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

<?php endwhile; endif; ?>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>
	$(document).ready(function () {
		$('.orbit-container').slick({
			autoplay: true,
  autoplaySpeed: 3000,
		});
	});
</script>

<?php get_footer(); ?>
