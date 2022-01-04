<?php get_header(); ?>


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
                                Thank you for Choosing NowRx
                            </span>
                        </div>
                        <div class="rvl">
                            <h1 class="page-title" itemprop="headline">
                            Our Local Pharmacy Will Reach Out to You Shortly
                            </h1>
                        </div>
                        <div class="rvl">
                            <p>
                                *Delivery at all locations available M-F 9am-5pm (Saturday available in SF Bay Area)
                            </p>
                        </div>
                        <div class="rvl">
                            <p>Live pharmacy support available Mon-Sat: 9am-8pm, Sun: 9am-5:30pm at <a href="tel:8444666979" class="c">(844) 466-6979</a>.</p>
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
                <div class="whatnext">
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
                                    Your local NowRx Pharmacy will reach out to you by call and text at the number you provided. Please have your insurance and prescription information ready so that we may better assist you.
                                    </p>
                                </div>
                            </div>

                            <!-- block -->
                            <div class="block">
                                <div class="imageblock">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/files.png" alt="folder of prescription and health files icon" class="pic">
                                </div>
                                <div class="rvl">
                                    <p class="span">
                                    If you are transferring a prescription from another pharmacy, we will call you once the transfer is received to confirm your copay. If you have any questions about the status of a prescription, please text us :)
                                    </p>
                                </div>
                            </div>

                            <!-- block -->
                            <div class="block">
                                <div class="imageblock">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/time.png" alt="man sitting down waiting for prescription delivery icon" class="pic">
                                </div>
                                <div class="rvl">
                                    <p class="span">
                                    Once payment has been approved just sit back, relax, and a NowRx Pharmacy team member will deliver your medication to you in under 5 hours or as requested. We also offer a 1-hour delivery option for a $5 fee.
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- delivery -->
                <div class="delivery-prescribe">

                    <div class="bluetitle">
                        <div class="container">
                            <div class="rvl">
                                <h2 class="sec-title">Want All Your Prescriptions Delivered?</h2>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="content-block">
                            <div class="imageblock">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Pills.png" alt="NowRx pharmacy prescription bottle and medication spilled" class="pic">
                            </div>
                            <div class="cntx">
                                <div class="rvl">
                                    <span class="subheading">
                                        Contact Your Doctor Offices
                                    </span>
                                </div>
                                <div class="rvl">
                                    <h2 class="page-title" itemprop="headline">
                                        Tell Them to Make NowRx Your Default Pharmacy
                                    </h2>
                                </div>
                                <div class="rvl">
                                    <p>
                                        NowRx Pharmacy can be found in all doctor office electronic prescribing systems. If your doctor has trouble finding us or needs more information, please give us a call at <a href="tel:8444666979" class="li">(844) 466-6979</a> and a live pharmacy team member will be happy to assist you.
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