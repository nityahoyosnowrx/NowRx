<?php
/*
* Template Name: Doctor Thank You
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>


<main id="main" class="main-class" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <section class="article">

        <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">

                <header class="article-header tynk">

                    <div class="imageblock">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" alt="NowRx Pharmacy Pharmacist on desk" width="300px" height="300px" class="pic">
                    </div>

                    <div class="content">
                        <div class="rvl">
                            <span class="subheading">
                            Thank You for Your Interest in NowRx Pharmacy.
                            </span>
                        </div>
                        <div class="rvl">
                            <h1 class="page-title" itemprop="headline">
                            A NowRx team member will be reaching out to you shortly.
                            </h1>
                        </div>
                        <div class="rvl">
                            <p>
                                *Delivery at all locations available M-F 9am-5pm (Saturday available in SF Bay Area)
                            </p>
                        </div>
                        <div class="rvl">
                            <p>Live pharmacy support available 7 days/week 8:30am-8pm at <a href="tel:8444666979" class="li">(844) 466-6979</a>.</p>
                        </div>
                        <div class="rvl">
                            <span class="follow-links">
                                <div class="txt">
                                    Follow NowRx Pharmacy On Social Media: <a href="https://www.facebook.com/NowRx" class="li" target="_blank">Facebook</a> <a href="https://www.instagram.com/nowrxpharmacy" class="li" target="_blank">Instagram</a> <a href="https://www.linkedin.com/company/nowrx" class="li" target="_blank">LinkedIn</a> <a href="https://twitter.com/nowrx" class="li" target="_blank">Twitter</a>
                                </div>
                            </span>
                        </div>
                    </div>
                </header>
            </div>

            <section class="entry-content" itemprop="articleBody">
                <div class="whatnext tydoc">
                    <div class="bluetitle">
                        <div class="container">
                            <div class="rvl">
                                <h2 class="sec-title">What You Should Expect Next</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="blocks">
                            <!-- block -->
                            <div class="block">
                                <div class="imageblock">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/message.png" alt="pharmacy phone with messages icon" class="pic">
                                </div>
                                <div class="rvl">
                                    <p class="span">
                                    A local NowRx Pharmacy team member will reach out to you by phone and/or email using the information you have provided.
                                     </p>
                                </div>
                            </div>

                            <!-- block -->
                            <div class="block">
                                <div class="imageblock">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/talk-with-nowrx-pharmacy-icon.png" alt="folder of prescription and health files icon" class="pic">
                                </div>
                                <div class="rvl">
                                    <p class="span">
                                    We will set up some time to talk with you (virtually or in-person) about NowRx Pharmacy and answer any questions you have.
                                    </p>
                                </div>
                            </div>

                            <!-- block -->
                            <div class="block">
                                <div class="imageblock">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/a-better-local-pharmacy-icon.png" alt="man sitting down waiting for prescription delivery icon" class="pic">
                                </div>
                                <div class="rvl">
                                    <p class="span">
                                    Our local NowRx pharmacy team will work with your office staff and patients to provide the best pharmacy experience possible.
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </section>

        </article>

    </section>
<!-- FAQ -->
<?php get_template_part('components/section-faq-flip'); ?>


    <?php include('section-visitfaq.php'); ?>



</main>

<?php get_footer(); ?>