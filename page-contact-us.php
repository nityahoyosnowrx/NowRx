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

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>


<section class="landing-block">
    <div class="container fluid">
        <div class="content">
            <div class="text-content prep-text">
                <span class="sub-headline">CONTACT NOWRX PHARMACY SUPPORT</span>
                <h1 class="title">Talk to a <strong>Live Person</strong></h1>
                <p>Contact us by filling out the form below or calling your local NowRx. To refill or transfer a prescription,  <b><a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Tap Here</a></b>.</p>
            </div>
            <div class="btn-container">
                <a class="rx-btn" href="#contactus">
                    <?php include('reg-arrow.php'); ?>
                    Contact Us
                </a>
                <a class="rx-btn rx-green mrb" href="<?= get_site_url(); ?>/faqs/">
                    <?php include('grn-arrow.php'); ?>
                    View FAQs
                </a>
            </div>
        </div>
        <div class="media">
            <figure class="image">
                <picture class="" data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-pharmacist-pulling-prescription-delivery-from-parata-robot.webp">
                    <img  class="orbit-image " height="500px" width="650px" alt="NowRx pharmacist pulling prescription delivery from parata robot">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>
<?php
// include('section-visitblock.php'); ?>



<div id="view-faq">
    <!-- FAQ -->
    <?php get_template_part('components/section-faq-flip'); ?>
</div>


<?php include('section-visitblock.php'); ?>

<section class="form-and-locations" id="contactus">
    <div class="container">
        <div class="content">
            <div class="form-item">
                <div class="containerform">
                    <h2 class="sec-title">Get in Touch</h2>
                    <p>For medication refills, transfers, or new prescriptions please use our online transfer form at <a
                            href="https://nowrx.com/refill-and-transfer-prescriptions/">nowrx.com/refill-and-transfer-prescriptions/</a>
                    </p>



<div id="contactus-form">

                </div>

                <script defer async>

                    var $document = document.querySelector("body");

                    document.addEventListener('load', function(evt) {

                        var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                        if (!evt.target.isEqualNode($script)) {
                            return;
                        }

                        setTimeout(() => {
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "5952677",
                                formId: "c3096955-bd03-4e37-a266-c4fc4cc523a7",
                                formInstanceId: "main1",
                                css: '',
                                cssClass: 'dynamic-contactus-form',
                                target: "#contactus-form",
                                translations: {
                                    en: {
                                        submitText: "Get Started",
                                    }
                                }
                            })
                        }, 0);

                        setTimeout(() => {
                            let formDisplayed = document.getElementsByClassName('dynamic-contactus-form');

                            if (formDisplayed.length > 0) {
                                // console.log('exists', formDisplayed.length);

                            } else {

                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                formId: "c3096955-bd03-4e37-a266-c4fc4cc523a7",
                                    formInstanceId: "main1",
                                    css: '',
                                    target: "#contactus-form",
                                    translations: {
                                        en: {
                                            submitText: "Get Started",
                                        }
                                    }
                                })
                            }

                        }, 4400);

                    }, true);
                </script>
                </div>
            </div>

        </div>
    </div>
</section>




<?php get_footer(); ?>