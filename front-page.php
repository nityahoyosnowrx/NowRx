<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),''); ?>
<section class="hero" style="background: #000 url('<?php echo $image[0]; ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; padding: 4rem 0px; color: #fff;">
<?php endif; ?>

</section>

<section class="hero-home">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="large-6 cell small-order-2 medium-order-1">
        <p class="pre-headline" style="padding-bottom: .2em;">A Better Pharmacy Delivered</p>
        <h1 style="padding-bottom: .2em;">Free Prescription Delivery in Hours</h1>
        <div class="benefits">
          	<p><img class="icon-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-right-arrow.svg" alt=""> Free Medication Delivery – Same Copay</p>
		<p><img class="icon-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-right-arrow.svg" alt=""> Streamlined Insurance Approval Process</p>
          	<p><img class="icon-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-right-arrow.svg" alt=""> Deliver Controlled & Refrigerated Medications</a></p>
	</div>

        <p><a class="button shadow" style="background-color:#33a532;" href="https://try.nowrxpharmacy.com/prescription-delivery">Get Started</a></p>
	<p style="color: #008ed8; font-size:.8em;">*Receive up to a $100 bonus with your first prescription delivery!</p>
      </div>
      <div class="large-6 cell small-order-1 medium-order-2">
	      <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-home-slider-2.jpg" alt="prescription being delivered to mother">
<!--
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <ul class="orbit-container">
            <li class="orbit-slide is-active">
              <figure class="orbit-figure">
                <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-home-slider-1.jpg" alt="prescription being delivered to family">
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-home-slider-2.jpg" alt="prescription being delivered to mother">
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-home-slider-3.jpg" alt="NowRx prescription delivery car with family in background">
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/library/images/hero-home-slider-4.jpg" alt="NowRx prescription delivery car">
              </figure>
            </li>
          </ul>
        </div>
      </div>
-->
    </div>
  </div>
</section>



<section class="how-it-works panel--primary">
  <div class="grid-container">
    <div class="grid-x grid-padding-x text-center">
      <div class="large-12 cell">
        <p class="pre-headline">Switching Is Simple</p>
        <h2 class="headline">Here’s How It Works</h2>
      </div>
    </div>
    <div class="grid-x grid-padding-x steps">

    <div class="hiw-cell cell large-4 text-center">
      <h3 class="padding-bottom-3"><span class="step">1</span> Send Us Your Prescription</h3>
			<p style="text-align: left;"><strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br><strong>Existing Prescription: </strong><a href="https://try.nowrxpharmacy.com/prescription-delivery" style="color:#fff;">Click Here</a></p>
		</div>


		<div class="hiw-cell cell large-4 text-center">
      <h3 class="padding-bottom-3"><span class="step">2</span> We Confirm Delivery</h3>
			<p>We will reach out to you via phone to confirm delivery address, insurance, and collect the prescription copy.</p>
		</div>


		<div class="hiw-cell cell large-4 text-center">
      <h3 class="padding-bottom-3"><span class="step">3</span> Medication is Delivered</h3>
			<p>A HIPAA certified NowRx driver will deliver your medicine in under 5 hours or as requested for no additional charge.</p>
		</div>


    </div>
  </div>
</section>

<section class="featured-in-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell text-center">
        
        <p>
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-cnbc.svg" alt="CNBC logo">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-fortune.svg" alt="Fortune logo">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-forbes.svg" alt="Forbes logo">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-abc-7.svg" alt="ABC 7 logo">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-business-insider.svg" alt="Business Insider logo">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-sfc2.svg" alt="San Francisco Chronicle logo">
        </p>
      </div>
    </div>
  </div>
</section>
<!--
<section class="testimonials-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-8 large-offset-2 cell">
        <div class="orbit" role="region" aria-label="NowRx Testimonials" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <div class="orbit-wrapper">
            <div class="orbit-container">
              <div class="is-active orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-victoria-howard.jpg" alt="Image of Victoria Howard giving testimonial of her prescription delivery with NowRx">
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
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-danna-y.jpg" alt="Image of Danna Y giving testimonial of her NowRx delivery">
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
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-christene-m.jpg" alt="Picture of Christene M giving testimonial of her prescription delivery with NowRx">
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
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-tony-m.jpg" alt="Tony M giving prescription delivery testimonial">
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
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-neil-c.jpg" alt="Neil C giving pharmacy delivery testimonial">
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

<section style="padding: 5rem 0px; background: #e5f3fa; border-radius: 0 80px 0 0;">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h2 class="text-center" style="padding-bottom: 1em;">Here’s Why People Love NowRx</h2>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <div class="grid-x grid-padding-x">
          <div class="large-6 cell">
            <h5>No wasting time in pharmacy lines</h5>
            <p>Free prescription delivery right to your door.  No more standing in line at the pharmacy with a bunch of sick people.</p>
            <h5>We take all major insurance plans</h5>
            <p>NowRx is electronically connected with your insurance provider. All you do is pay the same co-pay as at a traditional pharmacy.</p>
            <h5>No more waiting to speak to a pharmacist</h5>
            <p>Our Local Pharmacists are only 2 rings away. No more waiting on hold for 20 minutes. Or try our pharmacist video chat in the NowRx app. Customer Service is our number one priority!</p>
          </div>
          <div class="large-6 cell">
            <h5>Easily transfer existing refills</h5>
            <p>Just call us. Or Text us. Or tell your Doctor’s office. <br>It is super easy!</p>
            <h5>Automated full access to all manufacturer drug coupons</h5>
            <p>Once we process your prescription our system automatically checks for and applies any manufacturer coupons that might be available, helping you save money.</p>
            <h5>Professional, courteous NowRx drivers</h5>
            <p>All of our drivers work for NowRx and are certified and trained. Plus they drive around in cute little electric NowRx cars!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<div style="background: #e5f3fa; border-radius: 0 0 80px 0;">
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
</div>

<section class="in-the-news padded-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <div class="text-center">
          <h2>In The News</h2>
        </div>
        <div class="grid-x grid-padding-x">
          <?php query_posts($query_string.'&posts_per_page=3&cat=2&order=DESC'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="large-4 cell">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),''); ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="border-styled" style="margin-bottom: 1rem;" src="<?php echo $image[0]; ?>" alt=""></a>
            <?php endif; ?>
            <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
