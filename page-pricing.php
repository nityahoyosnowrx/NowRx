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



<!-- hero -->
<section class="hero-home">

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



                <div class="rvls">
                    <span class="sub-headline">
                        FREE SAME-DAY PHARMACY DELIVERY
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                        <span class="k">All You Pay is</span>
                         <span class="k">Your Normal Copay</span>
                    </h1>
                </div>
                <div class="rvls">
                    <p>
                    With NowRx Pharmacy you get free same-day pharmacy delivery plus 5 star customer service. All you pay for is your medication.
                    </p>
                </div>

                <div class="rvls">

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




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-happy-customers-celebrating-low-drug-prices.webp" data-toggle-class="active">
                    <source media="(max-width: 1px)" srcset="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-happy-customers-celebrating-low-drug-pricess-mobile.webp">
                    <source media="(min-width: 2px)" srcset="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-happy-customers-celebrating-low-drug-prices.webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-happy-customers-celebrating-low-drug-prices.webp" class="orbit-image lozad" height="500px" width="650px" alt="nowrx pharmacy delivery happy customers celebrating low drug prices">
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<?php include('section-visitblock.php'); ?>



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
                        <!--[if lte IE 8]>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js" defer></script>
                        <![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>
                        <script defer>
                            window.addEventListener('load', function() {
                                setTimeout(function(){
                                    hbspt.forms.create({
                                        portalId: "5952677",
                                        formId: "e1e60aa0-0007-4875-a14d-edef6831c133"
                                    });
                                },2000)
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>





<?php get_footer(); ?>