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



<section class="how-it-works panel--primary">
  <div class="grid-container">
    <div class="grid-x grid-padding-x text-center">
      <div class="large-12 cell">
        <p class="pre-headline">Using NowRx Pharmacy is Simple</p>
        <h2 class="headline">Here’s How It Works</h2>
      </div>
    </div>
    <div class="grid-x grid-padding-x steps">

    <div class="hiw-cell cell large-4 text-center">
    <h3 class="padding-bottom-3">1. Send Us Your Prescription</h3>
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png" alt="end Us Your Prescription" class="pic">
      </div>
      
      <p>
      <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
      <strong>Existing Prescription: </strong>Text us at <a href="tel:844-466-6979" class="tellink">(844) 466-6979</a> or submit our online transfer form (<a href="https://nowrx.com/get-started/" style="color:#fff;">Click Here</a>)</p>
		</div>


		<div class="hiw-cell cell large-4 text-center">
    <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png" alt="We Confirm Delivery" class="pic">
      </div>
      
			<p>We will reach out to you via phone to collect your insurance copay confirm your address and set up a delivery time.</p>
		</div>


		<div class="hiw-cell cell large-4 text-center">
    <h3 class="padding-bottom-3">3. Medication is Delivered</h3>
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png" alt="Medication is Delivered" class="pic">
      </div>
      
			<p>At NowRX Pharmacy employee will deliver your medication in hours or as requested completely free. Just pay your normal copay.</p>
		</div>


    </div>
  </div>
</section>

<!-- 
<div itemscope itemtype="http://schema.org/Review">
    <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
        <span itemprop="name">23d2qwe3d</span><br>
    </div>
    <div itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        Reviewed by <span itemprop="name">d3cewc2d</span>
    </div>

    on <time itemprop="datePublished" datetime="32d23d"></time><br>
    
    <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
        <span itemprop="description">323e3dd23</span><br>
        Rating: <span itemprop="ratingValue">5</span><img itemprop="image" src="https://example.com/photos/1x1/seafood-restaurant.jpg" alt="Legal Seafood"/>
    </div>
</div> -->



<section class="testimonials-block" >
<meta itemprop="name" content="NowRx Pharmacy">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
<meta itemprop="address" content="1641 Kaiser Ave, Irvine, CA 92614">
<meta itemprop="priceRange" content="$">
<meta itemprop="telephone" content="(949) 619-6000">
  <div class="container">
    <div class="content" >
      <div class="subtitle">A Better Local Pharmacy Delivered</div>
      <h2 class="main-title">What Customers are Saying</h2>
      <div class="blocks" >

        <!-- block -->
        <div class="block" itemscope itemtype="http://schema.org/Review">

          <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
            <meta itemprop="name" content="NowRx Pharmacy">
            <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
            <meta itemprop="priceRange" content="$">
            <meta itemprop="telephone" content="(844) 466-6979">
          </div>

          <h2 class="title">Better Pricing</h2>

          <blockquote >

            <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
              <p itemprop="description">
                “There's a reason every single review is five stars - This pharmacy is AMAZING! They actually look for discounts and coupons to offer the best rate possible.”
              </p>
              <meta itemprop="ratingValue" content="5"></meta>
            </div>
           
            <div class="imageblock">
              <img itemprop="image" src="<?php echo get_template_directory_uri(); ?>/library/images/3.png" alt="Lina W.">
            </div>

              <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                <h3 class="name" itemprop="name">Lina W.</h3>
                <div class="usertitle">
                  NowRX Customer
                </div>
              </span>
            
          </blockquote>
        </div>

        <!-- block -->
        <div class="block" itemscope itemtype="http://schema.org/Review">
          
          <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
            <meta itemprop="name" content="NowRx Pharmacy">
            <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
            <meta itemprop="priceRange" content="$">
            <meta itemprop="telephone" content="(844) 466-6979">
          </div>

          <h2 class="title">Better Service</h2>

          <blockquote>

            <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
              <p itemprop="description">
              "I am just gilding the lily with my 5 star review but companies that ACTUALLY PROVIDE CUSTOMER SERVICE are so rare in this day and age. These guys are awesome!"
              </p>
              <meta itemprop="ratingValue" content="5"></meta>
            </div>

            <div class="imageblock">
              <img itemprop="image" src="<?php echo get_template_directory_uri(); ?>/library/images/2.png" alt="Tanya S.">
            </div>

            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
              <h3 class="name" itemprop="name ">Tanya S.</h3>
              <div class="usertitle">
                NowRX Customer
              </div>
            </span>
          </blockquote>
        </div>

        <!-- block -->
        <div class="block" itemscope itemtype="http://schema.org/Review">

          <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
            <meta itemprop="name" content="NowRx Pharmacy">
            <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
            <meta itemprop="priceRange" content="$">
            <meta itemprop="telephone" content="(844) 466-6979">
          </div>

          <h2 class="title">Better Convenience</h2>
          <blockquote>

            <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
              <p itemprop="description">
                “Huge time saver. They deliver the prescription to your address within a 3 hour time window. No more standing in line or sitting in your idling car waiting.""
              </p>
              <meta itemprop="ratingValue" content="5"></meta>
            </div>    

            <div class="imageblock">
              <img itemprop="image" src="<?php echo get_template_directory_uri(); ?>/library/images/1.png" alt="Tony M.">
            </div>

            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
              <h3 class="name" itemprop="name ">Tony M.</h3>
              <div class="usertitle">
                NowRX Customer
              </div>
            </span>
            
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<div style="background: #e5f3fa; border-radius: 0 0 80px 0;">
  <section class="how-it-works panel--primary panel--cta">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="large-12 cell text-center prescription">
	        <p class="pre-headline">Transfer Prescription to NowRX Pharmacy</p>
	        <h2 class="headline"><div>Get a $20 Visa Card with</div> Your First Prescription Delivery</h2>
	        
          <a href="https://nowrx.com/get-started/" class="button">Transfer  My Prescriptions</a>
          
        </div>
        <div class="large-12 cell text-center ">
        <p>
            <small>
            *Valid while supplies last, limit $100 per customer. Offer not valid under Medicare, Medicaid, or medication previously filled by NowRx.
            </small>
          </p>
        </div>
	    </div>
	  </div>
	</section>
</div>

<section class="in-the-news padded-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x cellblock">
      <div class="large-12 cell">
        <div class="text-center">
          <h2>NowRx Pharmacy Delivery Blog</h2>
        </div>
        <div class="grid-x grid-padding-x">
          <?php query_posts($query_string.'&posts_per_page=3&order=DESC'); ?>
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
