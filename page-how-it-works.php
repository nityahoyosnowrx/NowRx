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


<section class="landing-block">
    <div class="container fluid">
        <div class="content">
            <div class="text-content prep-text">
                <span class="sub-headline">DELIVERING PHARMACY IN 3 EASY STEPS</span>
                <h1 class="title"><strong>Pharmacy Delivery</strong> Made Easy</h1>
                <p>Get started by filling out our <strong>online prescription delivery</strong> form and get your prescription delivered same day!</p>
             </div>
            <div class="btn-container">
            <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions">
                        <?php include('reg-arrow.php'); ?>
                            Get Started</a>
                        <a class="rx-btn rx-green mrb" href="#howitworks">
                            <?php include('grn-arrow.php'); ?>
                            How it Works</a>
            </div>
        </div>
        <div class="media">
            <figure class="image">
            <picture class="lozad" data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-being-prepared-by-nowrx-pharmacist-m.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-being-prepared-by-nowrx-pharmacist.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-being-prepared-by-nowrx-pharmacist.webp" class="orbit-image lozad" height="500px" width="650px" alt="pharmacy delivery being prepared by nowrx pharmacist">
                </picture>
            </figure>
        </div>
    </div>
</section>


<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>
<?php include('components/component-how-it-works.php'); ?>

<div id="howitworks">

<!-- FAQ -->
<?php get_template_part('components/section-faq-flip'); ?>
</div>



<?php include('section-visitfaq.php'); ?>





<section class="split-image">
  <div class="imagefull">
    <img data-src="<?php echo get_template_directory_uri(); ?>/images/whypeoplelovenowrx.jpg" alt="why people love nowrx" class="pic lozad">
  </div>
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    A Better Local Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                   Why People Love NowRx
                </h2>
            </div>

            <div class="itemlist">
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Free Prescription Delivery in Hours</h3>
                </div>
                <div class="rvl">
                  <p>You only pay your normal insurance copay. 1-hour rush delivery is available for a $5 fee.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Local Presence in Our Service Areas</h3>
                </div>
                <div class="rvl">
                  <p>Visit your local NowRx Pharmacy in person and meet our hardworking pharmacy staff.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Insurance & Prior Authorization Assistance</h3>
                </div>
                <div class="rvl">
                  <p>We help you navigate the insurance process and get your medications covered.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Automatic Coupon Search & Application</h3>
                </div>
                <div class="rvl">
                  <p>Our proprietary software finds you savings to help lower your out of pocket costs.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">Out of Pocket Price Match Guarantee</h3>
                </div>
                <div class="rvl">
                  <p>If your medication is ever more expensive with NowRx we will transfer it for you.</p>
                </div>
              </div>
              <!-- item -->
              <div class="item">
                <div class="rvl">
                  <h3 class="title">5 Star Service (Google/Yelp 2020)</h3>
                </div>
                <div class="rvl">
                  <p>Our staff will do everything to help give you the best possible pharmacy experience.</p>
                </div>
              </div>

            </div>

            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions" class="rx-btn rx-dg">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('section-visitblock.php'); ?>




<?php get_footer(); ?>