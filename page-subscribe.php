<?php get_header(); ?>

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>

<section class="form-landingmain">
    <div class="content">
        <h1 class="title">
        Get Health News Right to Your Inbox
        </h1>
        <p>NowRx brings you the latest healthcare news, tips, resources and fun in a free and easy to read 5-minute newsletter.</p>
        <div class="form">
                <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->

                <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->

                <div id="subscribe-form"></div>

                <script defer>

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
            formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
            formInstanceId: "2fef",
                                css: '',
                                cssClass:'dynamic-subscribe-form',
                                target: "#subscribe-form",
                                translations: {
                                    en: {
                                        submitText: "Get Started",
                                    }
                                }
                            })
                        }, 100);

                        setTimeout(() => {
                            let formDisplayed = document.getElementsByClassName('dynamic-subscribe-form');

                            if (formDisplayed.length > 0) {
                                console.log('exists',formDisplayed.length);

                            } else {

                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
            formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
            formInstanceId: "2fef",
                                    css: '',
                                    target: "#subscribe-form",
                                    translations: {
                                    en: {
                                        submitText: "Get Started",
                                    }
                                }
                                })
                            }

                        }, 1400);

                    }, true);


                </script>
        </div>
    </div>
    <div class="image-float">
        <img src="<?php echo get_template_directory_uri(); ?>/images/healthcare-blog-subscription-iphone-copy.webp" alt="healthcare blog subscription iphone copy">
    </div>
</section>

<?php get_footer(); ?>