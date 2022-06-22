

<?php if ( is_page('for-doctors') ) : ?>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- for-doctors -->
    <!-- archive locations -->
    <!-- contact-us -->
    <div class="reveal twentyone" id="for-doctors-learnmore" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <div class="imagblock">
            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/prescription-transfer-or-refill-desktop-left-form-image copy.png" alt="prescription-transfer-or-refill-desktop" class="pic lozad">
        </div>
        <div class="content">
            <h2 class="title">Learn More About NowRx Pharmacy</h2>
            <div class="description">
                <p>Fill out the form below and a member of our pharmacy team will reach out to you within 24 hours.</p>
            </div>
            <div class="form-content">

<div id="learn-more-fields"></div>
            <script defer>
                var $document = document.querySelector("body");

                document.addEventListener('load', function(evt) {
                    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                    if (!evt.target.isEqualNode($script)) {
                        return;
                    }

                    // Callback code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",
                            css: '',
                            target: "#learn-more-fields",
                            portalId: "5952677",
                            formId: "134ddd71-adf4-414b-a537-24f71e87f48e"

                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#learn-more-fields",
                            portalId: "5952677",
                            formId: "134ddd71-adf4-414b-a537-24f71e87f48e"


                        })
                    }, 4000);

                }, true);
            </script>
            </div>
        </div>
        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
endif; ?>



<!-- reveal overlay -->
<div class="reveal-overlay"></div>