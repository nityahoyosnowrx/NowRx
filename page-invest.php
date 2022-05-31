<?php get_header();
// Template name: Invest
?>



<section class="landing-block form-landing">
    <div class="container fluid">
        <div class="content">
            <div class="text-content prep-text">
            <h1 class="title">
                    NowRx's Investment Round Has Closed
                </h1>
                <p>
                    Subscribe below to receive NowRx updates and learn when a new investment round becomes available.
                </p>
                <div class="form">
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->

                    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->

                    <div id="prep-form"></div>

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
                                    cssClass: 'dynamic-prep-form',
                                    target: "#prep-form",
                                    translations: {
                                        en: {
                                            submitText: "Get Started",
                                        }
                                    }
                                })
                            }, 100);

                            setTimeout(() => {
                                let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

                                if (formDisplayed.length > 0) {
                                    console.log('exists', formDisplayed.length);

                                } else {

                                    hbspt.forms.create({
                                        region: "na1",
                                        portalId: "5952677",
                                        formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                                        formInstanceId: "2fef",
                                        css: '',
                                        target: "#prep-form",
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

        </div>
        <div class="media">
            <figure class="image">
                <picture class="lozad" data-loaded="true">
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-car-charging-at-nowrx-pharmacy.webp">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-car-charging-at-nowrx-pharmacy.webp">
                    <img class="orbit-image" height="500px" width="650px" alt="NowRx pharmacist answering pharmacy delivery questions">
                </picture>
            </figure>
        </div>
    </div>
</section>


<?php get_footer(); ?>