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

                     <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/medication-pricing.webp">
                    <img class="orbit-image " height="500px" width="650px" alt="nowrx pharmacy delivery cars in pharmacy parking lot">
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