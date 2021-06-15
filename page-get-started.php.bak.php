<?php
/*
 Template Name: Old Get Started
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
        <h1 class="headline">Switch To NowRx</h1>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="large-8 large-offset-2 cell text-center">
        <p>Get a <strong>$20 Visa Gift Card</strong> for every prescription you transfer to NowRx* and have your prescription delivered right to your door.</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="grid-x grid-padding-x" style="text-align: center;">
      <div class="large-4 cell">
        <div class="" style="margin-bottom: 2rem; box-shadow: 10px 0px 50px 0px rgba(0,0,0,0.15); padding: 50px 30px; border-radius: 0 60px;">
          <h4>New Prescription?</h4>
          <p>Simply tell your doctor that your pharmacy is NowRx and they'll automatically send your prescription to us.</p>
          <p>— or —</p>
          <p>Text a picture of your paper prescription to (844) 466-6979.</p>
        </div>
      </div>
      <div class="large-4 cell">
        <div class="" style="margin-bottom: 2rem; box-shadow: 10px 0px 50px 0px rgba(0,0,0,0.15); padding: 50px 30px; border-radius: 0 60px;">
          <h4>Transfer Your Prescription</h4>
          <p>It is easy to transfer your existing prescription for free to NowRx.</p>
          <p>Call us at <br>(844) 466-6979.</p>
          <p>— or —</p>
          <p>Text us a picture of your prescription label to <br>(844) 466-6979.</p>
        </div>
      </div>
      <div class="large-4 cell">
        <div class="" style="margin-bottom: 2rem; box-shadow: 10px 0px 50px 0px rgba(0,0,0,0.15); padding: 50px 30px; border-radius: 0 60px;">
          <h4>No Active Prescription?</h4>
          <p>If you don't have a prescription yet, but want to use NowRx when you get your next one? Just click the link below, fill out the form and we'll let your Doctor know to fill your next prescription with NowRx.</p>
          <a style="margin-top: 20px;" data-toggle="make-nowrx-my-pharmacy" class="button">Switch To NowRx</a>
        </div>
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

<?php get_footer(); ?>
