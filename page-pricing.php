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
                <span class="sub-headline">   FREE SAME-DAY PHARMACY DELIVERY</span>
                <h1 class="title"><strong>All You Pay is Your Normal Copay</strong> </h1>
                <p>
                With NowRx Pharmacy you get free same-day pharmacy delivery plus 5 star customer service. All you pay for is your medication.
                     </p>
             </div>
            <div class="btn-container">
            <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions">
                            <span class="arrow">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512" class="svg-inline--fa fa-file-prescription fa-w-12 fa-2x">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm68.53 179.48l11.31 11.31c6.25 6.25 6.25 16.38 0 22.63l-29.9 29.9L304 409.38c6.25 6.25 6.25 16.38 0 22.63l-11.31 11.31c-6.25 6.25-16.38 6.25-22.63 0L240 413.25l-30.06 30.06c-6.25 6.25-16.38 6.25-22.63 0L176 432c-6.25-6.25-6.25-16.38 0-22.63l30.06-30.06L146.74 320H128v48c0 8.84-7.16 16-16 16H96c-8.84 0-16-7.16-16-16V208c0-8.84 7.16-16 16-16h80c35.35 0 64 28.65 64 64 0 24.22-13.62 45.05-33.46 55.92L240 345.38l29.9-29.9c6.25-6.25 16.38-6.25 22.63 0zM176 272h-48v-32h48c8.82 0 16 7.18 16 16s-7.18 16-16 16zm208-150.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"
                                        class=""></path>
                                </svg>
                            </span>
                            Get Started
                        </a>
                        <a class="rx-btn rx-green mrb" href="#form-faq">
                            <span class="arrow">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-question-circle fa-w-16 fa-2x">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"
                                        class=""></path>
                                </svg>
                            </span>


                Check Price

                        </a>
            </div>
        </div>
        <div class="media">
            <figure class="image">
            <picture class="" data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/low-drug-prices-cause-excitement-for-couple.webp">
                    <img class="orbit-image " height="500px" width="650px" alt="low drug prices cause excitement for couple">
                </picture>
            </figure>
        </div>
    </div>
</section>



<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>



<?php
// include('section-visitblock.php'); ?>



<section class="pp-section pp-section--payments" id="pay">
    <div class="section-inner pp-inner--split">
        <div class="pp-split-mod pp-txt-mod rvl">
            <p class="section-subh">FREE SAME DAY PHARMACY DELIVERY</p>
            <h2 class="section-h">Just Pay Your Normal Copay</h2>
        </div>
        <div class="pp-txt-mod--secondary rvl">
            <h3 class="note-h">You’re only responsible for the price of your medication</h3>
            <div class="inline-items-mod no-break">
                <svg id="Capa_1" enable-background="new 0 0 512 512"  viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m440.371 64.129h-16.548v-16.548c0-8.556-6.96-15.516-15.516-15.516h-257.033v-8.533c0-12.975-10.557-23.532-23.533-23.532s-23.532 10.557-23.532 23.532v8.533h-32.58c-8.556 0-15.516 6.96-15.516 15.516v416.839c0 8.556 6.96 15.516 15.516 15.516h16.548v16.548c0 8.556 6.96 15.516 15.516 15.516h336.678c8.556 0 15.516-6.96 15.516-15.516v-416.838c0-8.556-6.96-15.517-15.516-15.517zm-321.162-40.597c0-4.705 3.828-8.532 8.533-8.532s8.532 3.827 8.532 8.532v8.533h-17.065zm321.678 472.952c0 .285-.231.516-.516.516h-336.678c-.285 0-.516-.231-.516-.516v-16.548h305.129c8.556 0 15.516-6.96 15.516-15.516v-344.697c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v344.697c0 .285-.231.516-.516.516h-336.677c-.285 0-.516-.231-.516-.516v-416.839c0-.285.231-.516.516-.516h32.581v24.565c0 12.975 10.557 23.531 23.533 23.531s23.532-10.556 23.532-23.531c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5c0 4.704-3.828 8.531-8.533 8.531s-8.532-3.827-8.532-8.531v-24.566h289.097c.285 0 .516.231.516.516v40.081c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.532h16.548c.285 0 .516.231.516.517z" />
                    <path
                        d="m216.436 223.936c0 8.556 6.96 15.516 15.516 15.516h16.032c8.556 0 15.516-6.96 15.516-15.516v-32.581h32.581c8.556 0 15.516-6.96 15.516-15.516v-16.032c0-8.556-6.96-15.517-15.516-15.517h-32.581v-32.58c0-8.556-6.96-15.517-15.516-15.517h-16.032c-8.556 0-15.516 6.961-15.516 15.517v32.58h-32.581c-8.556 0-15.516 6.961-15.516 15.517v16.032c0 8.556 6.96 15.516 15.516 15.516h32.581zm-32.581-47.582c-.285 0-.516-.231-.516-.516v-16.032c0-.285.231-.517.516-.517h40.081c4.142 0 7.5-3.357 7.5-7.5v-40.08c0-.285.231-.517.516-.517h16.032c.285 0 .516.231.516.517v40.08c0 4.143 3.358 7.5 7.5 7.5h40.081c.285 0 .516.231.516.517v16.032c0 .284-.231.516-.516.516h-40.081c-4.142 0-7.5 3.358-7.5 7.5v40.081c0 .285-.231.516-.516.516h-16.032c-.285 0-.516-.231-.516-.516v-40.081c0-4.142-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m352.193 288.581h-160.322c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h160.322c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m151.791 288.581h-24.049c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h24.049c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m352.193 336.678h-160.322c-4.142 0-7.5 3.357-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h160.322c4.142 0 7.5-3.358 7.5-7.5 0-4.143-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m352.193 384.774h-160.322c-4.142 0-7.5 3.357-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h160.322c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m151.791 336.678h-24.049c-4.142 0-7.5 3.357-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h24.049c4.142 0 7.5-3.358 7.5-7.5 0-4.143-3.358-7.5-7.5-7.5z" />
                    <path
                        d="m151.791 384.774h-24.049c-4.142 0-7.5 3.357-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h24.049c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                </svg>
                <p class="section-p"><strong>Paying With Insurance</strong> Just pay your normal insurance copay and we
                    will deliver your prescriptions free of charge.</p>
            </div>
            <div class="inline-items-mod no-break">
                <svg id="Capa_1" enable-background="new 0 0 512 512"  viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m416.323 0h-320.646c-12.975 0-23.532 10.557-23.532 23.532v80.161c0 10.354 6.724 19.16 16.032 22.3v362.475c0 12.976 10.557 23.532 23.532 23.532h288.581c12.976 0 23.532-10.557 23.532-23.532v-362.475c9.308-3.139 16.032-11.946 16.032-22.3v-80.161c.001-12.975-10.556-23.532-23.531-23.532zm8.532 23.532v56.629h-17.064v-65.161h8.532c4.704 0 8.532 3.828 8.532 8.532zm-49.129 56.629v-65.161h17.065v65.161zm-32.065 0v-65.161h17.064v65.161zm-32.064 0v-65.161h17.064v65.161zm-32.065 0v-65.161h17.064v65.161zm-32.064 0v-65.161h17.064v65.161zm-32.065 0v-65.161h17.064v65.161zm-32.064 0v-65.161h17.064v65.161zm-32.065 0v-65.161h17.064v65.161zm-32.065 0v-65.161h17.065v65.161zm-23.532-65.161h8.532v65.161h-17.064v-56.629c0-4.704 3.828-8.532 8.532-8.532zm320.646 97.226h-16.031c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h8.531v361.242c0 4.705-3.828 8.532-8.532 8.532h-288.582c-4.705 0-8.532-3.828-8.532-8.532v-361.242h265.046c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-272.546c-4.705 0-8.532-3.828-8.532-8.532v-8.532h337.71v8.532c0 4.704-3.828 8.532-8.532 8.532z" />
                    <path
                        d="m185.551 333.858c3.176-2.66 3.595-7.39.935-10.565-1.033-1.233-2.025-2.458-2.999-3.68h32.432c2.226 0 4.337-.989 5.762-2.699l26.819-32.183v67.462c0 3.034 1.827 5.768 4.63 6.929.928.384 1.902.571 2.869.571 1.952 0 3.87-.762 5.305-2.197l37.884-37.884h29.301c-5.344 6.728-11.104 13.025-16.764 18.701-21.919 21.981-46.368 38.881-55.727 45.043-8.129-5.349-27.643-18.793-47.011-36.671-3.043-2.81-7.789-2.619-10.598.424s-2.62 7.789.424 10.598c26.284 24.262 52.168 40.283 53.257 40.953 1.205.742 2.568 1.113 3.931 1.113s2.726-.371 3.931-1.113c1.347-.829 33.326-20.636 62.233-49.574 17.24-17.259 29.764-34.199 37.223-50.349 9.771-21.156 10.951-41.048 3.506-59.124-8.156-19.805-26.222-34.43-47.146-38.168-22.474-4.017-44.748 3.775-59.577 20.832-.07.045-.271.045-.332.008-14.837-17.065-37.111-24.858-59.586-20.84-20.924 3.738-38.99 18.364-47.146 38.168-11.431 27.756-2.724 59.15 25.879 93.309 2.66 3.177 7.39 3.594 10.565.936zm-22.574-88.532c6.224-15.112 19.985-26.269 35.915-29.115 17.229-3.078 34.286 2.872 45.628 15.917 2.864 3.294 7.049 5.183 11.48 5.183s8.616-1.889 11.481-5.184c11.342-13.045 28.396-18.997 45.628-15.916 15.929 2.846 29.691 14.002 35.915 29.114 8.068 19.591 1.729 40.447-9.922 59.287h-43.021c-1.989 0-3.897.79-5.303 2.197l-27.278 27.278v-70.071c0-3.158-1.978-5.977-4.947-7.052-2.97-1.075-6.293-.174-8.315 2.251l-37.832 45.398h-39.594c-13.683-22.011-17-41.891-9.835-59.287z" />
                    <path
                        d="m127.742 464.936c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h264.533c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                </svg>
                <p class="section-p"><strong>Paying Out of Pocket</strong> NowRx Pharmacy’s software and robotics reduce
                    our cost to about 1/100th that of a traditional pharmacy, which means better prices and service for
                    you!</p>
            </div>
            <div class="btn-container">
            <a class="rx-btn rx-dg" href="#form-faq">

                Check Price
            </a>
        </div>
        </div>

    </div>
</section>



<!-- visit faq -->
<section class="form-faq" id="form-faq">
    <div class="custom-shape-divider-top-1610578846">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div class="content">
            <div class="formloop">
                <div class="rvl">
                    <span class="sub-headline">
                        HAVE QUESTIONS OR WANT TO CHECK THE PRICE OF A MEDICATION?

                    </span>
                </div>
                <div class="rvl">
                    <h2 class="sec-title">
                        Contact Us
                    </h2>
                </div>
                <div class="rvl">
                    <div class="form-content">

 <div id="pricing-form"></div>

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
                                        formId: "e1e60aa0-0007-4875-a14d-edef6831c133",
                formInstanceId: "2fef",
                css: '',
                cssClass: 'dynamic-pricing-form',
                target: "#pricing-form",
                translations: {
                    en: {
                        submitText: "Get Started",
                    }
                }
            })
        }, 100);

        setTimeout(() => {
            let formDisplayed = document.getElementsByClassName('dynamic-pricing-form');

            if (formDisplayed.length > 0) {
                console.log('exists', formDisplayed.length);

            } else {

                hbspt.forms.create({
                    region: "na1",
                    portalId: "5952677",
                                        formId: "e1e60aa0-0007-4875-a14d-edef6831c133",
                    formInstanceId: "2fef",
                    css: '',
                    target: "#pricing-form",
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
        </div>
    </div>

</section>





<?php get_footer(); ?>