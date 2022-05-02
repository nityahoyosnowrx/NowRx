

<?php if (is_page('nowprep')) : ?>

<div class="reveal twentyone nowprep-modal" id="waitlist" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
    <div class="content">
        <h2 class="title">
            <span class="title-image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" class="lozad" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
            </span>
            Get Started
        </h2>
        <div class="form-content">
            <div id="prep-form-footer"></div>
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
                            portalId: "5952677",
                            target: "#prep-form-footer",
                            formId: "ded00596-ad7a-46b6-9069-bb3552b72735"
                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',
                            portalId: "5952677",
                            target: "#prep-form-footer",
                            formId: "ded00596-ad7a-46b6-9069-bb3552b72735"

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

<?php endif; ?>

<?php if (is_page('faqs') || is_page('nowprep') ) : ?>
    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- faq -->
    <!-- nowprep -->
    <div class="reveal" id="submitaquestion" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">Submit a Question</h3>
        <div class="subheading">
            <p class="center">Please enter your question below and a NowRx Pharmacy Team member will respond as soon as possible.</p>
        </div>
        <div id="question-form-submitdd"></div>
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
                        portalId: "5952677",
                        formId: "aa3d3838-6464-4e9f-911f-d2096f43433c",
                        target: "#question-form-submitdd",
                    })
                }, 3000);

                // your callback's code
                setTimeout(() => {
                    // console.log('loaded')
                    hbspt.forms.create({
                        region: "na1",
                        css: '',
                        portalId: "5952677",
                        formId: "aa3d3838-6464-4e9f-911f-d2096f43433c",
                        target: "#question-form-submitdd",

                    })
                }, 4000);

            }, true);
        </script>

        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (is_page('nowprep') ) : ?>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- nowprep -->
    <div class="reveal" id="telehealth" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">Sign Up for NowRx Telehealth</h3>
        <div class="subheading">
            <p class="center">The NowRx Telehealth App lets you get prescriptions written and delivered without ever leaving the comfort of your home.</p>
        </div>
        <div id="question-form-submitelehealth"></div>
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
                        portalId: "5952677",
                    formId: "33aa45eb-499d-4a4b-b55f-f5a7c7bd5359",
                        target: "#question-form-submitelehealth",
                    })
                }, 3000);

                // your callback's code
                setTimeout(() => {
                    // console.log('loaded')
                    hbspt.forms.create({
                        region: "na1",

                        css: '',
                        portalId: "5952677",
                    formId: "33aa45eb-499d-4a4b-b55f-f5a7c7bd5359",
                        target: "#question-form-submitelehealth",

                    })
                }, 4000);

            }, true);
        </script>
        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if (is_archive('locations')) : ?>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- suggest a new location -->
    <div class="reveal" id="suggestalocation" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">suggest a new location</h3>
        <p>NowRx Pharmacy will notify you when we expand our free prescription delivery services to your area</p>


            <div id="location-suggestion"></div>
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

                            target: "#location-suggestion",
                            portalId: "5952677",
                    formId: "9085621c-0203-44d5-b7e4-f97da3d5cea3"

                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#location-suggestion",
                            portalId: "5952677",
                    formId: "9085621c-0203-44d5-b7e4-f97da3d5cea3"


                        })
                    }, 4000);

                }, true);
            </script>
        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if (is_page('contact-us') || is_archive('locations') || is_page('for-doctors') ) : ?>
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
    <?php
if ( is_page('for-doctors') ) :
?>
    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- for-doctors -->
    <div class="reveal" id="for-doctors-learnmore-second" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">NowRx Doctor Feedback Program</h3>
        <p class="text-center">
            Fill out the form below and a member of our pharmacy team will reach out to you within 24 hours to provide
            details on how to get started.
        </p>


    <div id="doctofeedback"></div>
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
                            target: "#doctofeedback",
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

                            target: "#doctofeedback",
                            portalId: "5952677",
                            formId: "134ddd71-adf4-414b-a537-24f71e87f48e"


                        })
                    }, 4000);

                }, true);
            </script>
        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
endif; ?>
    <?php
if (is_page('for-doctors')) :
?>
    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!--for-doctors -->
    <div class="reveal" id="for-doctors" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up" style="padding: 40px;">
        <h3 class="text-center">Building A Better Pharmacy for<br>Our Doctors & Patients</h3>
        <p class="text-center">Learn Why More Than 4,500 Physicians Trust NowRx!</p>

 <div id="buildbetter"></div>
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
                            target: "#buildbetter",
                            portalId: "5952677",
                    formId: "e7d24a50-ae52-4ec2-a184-a6bbd3eb1382"

                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#buildbetter",
                            portalId: "5952677",
                    formId: "e7d24a50-ae52-4ec2-a184-a6bbd3eb1382"


                        })
                    }, 4000);

                }, true);
            </script>
        <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
endif; ?>

<?php
if (is_page('wedwedw')) :
?>
    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>
    <div class="reveal" id="make-nowrx-my-pharmacy" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">Make NowRx My Default Pharmacy</h3>
        <p class="text-center">Fill out the form and we'll let your Doctor know to fill your next prescription with NowRx.</p>


            <div id="makenowrx"></div>
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
                            target: "#makenowrx",
                            portalId: "5952677",
                    formId: "e7d24a50-ae52-4ec2-a184-a6bbd3eb1382"

                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#makenowrx",
                            portalId: "5952677",
                    formId: "e7d24a50-ae52-4ec2-a184-a6bbd3eb1382"


                        })
                    }, 4000);

                }, true);
            </script>
        <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
endif; ?>

<?php
if (is_page('cwecwec') ) :
?>
    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
<!-- hubspot slow -->
<!-- after this loads on homepage -->
<!-- footer -->
<div class="reveal" id="modal-example" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
    <p class="text-center">
        <img style="width: 60px; margin-bottom: 2rem; border-radius: 0 15px; margin: 0px 3px;" class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/library/images/chat-with-pharmacists-1.jpg" alt="melissa bostock director of pharmacy for nowrx pharmacy facing camera smiling prepared to help">
        <img style="width: 60px; margin-bottom: 2rem; border-radius: 0 15px; margin: 0px 3px;" class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/library/images/chat-with-pharmacists-2.jpg" alt="laemsing root pharmacist in charge for nowrx pharmacy facing camera smiling prepared to help">
    </p>
    <h3 class="text-center">Chat With One Of Our NowRx Pharmacists</h3>
    <p class="text-center">Do you have questions about your prescription? No Problem. Our Local Pharmacists are here
        to help!</p>
    <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
endif; ?>
<!-- reveal overlay -->
<div class="reveal-overlay"></div>