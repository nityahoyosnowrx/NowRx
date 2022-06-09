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
                <picture class="" data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-being-prepared-by-nowrx-pharmacist.webp">
                    <img class="orbit-image " height="500px" width="650px" alt="pharmacy delivery being prepared by nowrx pharmacist">
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