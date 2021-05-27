<?php get_header(); ?>



<!-- hero -->
<section class="hero-home page404">

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">


                    <span class="sub-headline">
                    Error 404 - Page Not FOund
                    </span>

                    <h1 class="hiw-title">
                        <span class="k">Ooop's Something</span>
                        <span class="k">Went Wrong</span>
                    </h1>
                    <p>
                        Check that you have typed in the page URL corretly or navigate to the corect page using the buttons below.
                    </p>

                <div class="rvls">

                    <div class="btn-container">
                        <a class="rx-btn" href="<?= get_site_url(); ?>/">
                            <span class="arrow">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512" class="svg-inline--fa fa-file-prescription fa-w-12 fa-2x">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm68.53 179.48l11.31 11.31c6.25 6.25 6.25 16.38 0 22.63l-29.9 29.9L304 409.38c6.25 6.25 6.25 16.38 0 22.63l-11.31 11.31c-6.25 6.25-16.38 6.25-22.63 0L240 413.25l-30.06 30.06c-6.25 6.25-16.38 6.25-22.63 0L176 432c-6.25-6.25-6.25-16.38 0-22.63l30.06-30.06L146.74 320H128v48c0 8.84-7.16 16-16 16H96c-8.84 0-16-7.16-16-16V208c0-8.84 7.16-16 16-16h80c35.35 0 64 28.65 64 64 0 24.22-13.62 45.05-33.46 55.92L240 345.38l29.9-29.9c6.25-6.25 16.38-6.25 22.63 0zM176 272h-48v-32h48c8.82 0 16 7.18 16 16s-7.18 16-16 16zm208-150.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"
                                        class=""></path>
                                </svg>
                            </span>
                            Homepage
                        </a>
                        <a class="rx-btn rx-green mrb" href="<?= get_site_url(); ?>/how-it-works/">
                            <span class="arrow">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-question-circle fa-w-16 fa-2x">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"
                                        class=""></path>
                                </svg>
                            </span>


                            How It Works

                        </a>

                    </div>
                </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon.webp" class="orbit-image lozad" height="500px" width="650px" alt="NowRx Pharmacy Page Not Found">
                </picture>


            </div>

        </div>
    </div>
</section>





<?php include('section-visitblock.php'); ?>




<?php get_footer(); ?>
