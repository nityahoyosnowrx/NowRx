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
                      <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/how-prescription-delivery-works.webp">
                      <img class="orbit-image " height="500px" width="650px" alt="prescription delivery car from nowrx pharmacy">
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