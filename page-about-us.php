<?php
/*
 Template Name: About Us
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
<section class="hero-welcome aboutus">


    <div class="container">
        <div class="content">

            <div class="contenxt">
            <h1 class="hiw-title">
                Retail Pharmacy is Broken
            </h1>
            <p>
                We're fixing that by rebuilding the retail pharmacy experience from the ground up to offer better service, better pricing, and better convenience.
            </p>
            <span class="sub-headline">
                Pharmacy the Way It Should Be
            </span>
            </div>


                <div class="splitcontent">
                <div class="btn-container">
                    <a class="rx-btn-about on" href="#ourstory">
                        <?php include('reg-arrow.php'); ?>
                        Our Story
                    </a>
                    <a class="rx-btn-about tw" href="#execteam">
                        <?php include('reg-arrow.php'); ?>
                        Executive Team</a>
                        <a class="rx-btn-about  tr" href="#pharmteam">
                        <?php include('grn-arrow.php'); ?>
                        Our Pharmacists
                    </a>
                    <a class="rx-btn-about fr" href="<?= get_site_url(); ?>/locations">
                        <?php include('reg-arrow.php'); ?>
                        Locations
                    </a>

                </div>

               <div class="picture">
               <picture class="lozad"
                    data-toggle-class="active">
                    <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/unnamed.jpeg">
                    <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/unnamed.jpeg">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/unnamed.jpeg"
                        class="orbit-image lozad" height="500px" width="650px" alt="doctor evaluating best pharmacy delivery for patients">
                </picture>
               </div>
                </div>


        </div>
    </div>
</section>



<section class="storybox" id="ourstory">
    <div class="container">
        <div class="content">
            <div class="col">

                <figure>
                    <picture class="lozad" data-toggle-class="active">
                        <source media="(max-width: 992px)"
                            srcset="<?php echo get_template_directory_uri(); ?>/images/bg.jpeg">
                        <source media="(min-width: 993px)"
                            srcset="<?php echo get_template_directory_uri(); ?>/images/bg.jpeg">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/bg.jpeg"
                            class="orbit-image lozad" height="500px" width="650px"
                            alt="doctor evaluating best pharmacy delivery for patients">
                    </picture>
                </figure>
            </div>
            <div class="col txcl">
            <h2 class="sec-title">
                    Our Story
                </h2>
                <p>
                    One day in early 2015, Cary Breese left his doctor’s office with a prescription in hand and drove
                    across town to his local pharmacy where he found himself waiting in three separate lines: the first
                    to drop off the prescription, the second to pay (after a 20 minute wait for the medication to be
                    counted out by hand!), and the third to speak to the pharmacist. Cary found himself thinking: in the
                    world of on-demand where you can order a car to pick you up within a few minutes, or have
                    practically any retail product delivered to your doorstep, how can it be that pharmacy still
                    requires you to drive to a pharmacy, stand in multiple lines, and often wait for 20-30 minutes or
                    more for your prescription to be prepared?


                </p>
                <p>
                    Cary immediately called his friend and former work colleague, Sumeet Sheokand, NowRx’s current CTO
                    and together they researched the industry and surrounded themselves with industry experts. Cary and
                    Sumeet jumped in and NowRx was born.
                </p>
                <p>
                    Four years later NowRx has 5 licensed facilities spread across the San Francisco Bay area, Orange
                    County, and Los Angeles, and has delivered more than 100,000 prescriptions to 18,000 customers.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="meetteam" id="execteam">
    <div class="container">
        <div class="header">
            <h2 class="sec-title">Meet the Executive Team</h2>
        </div>
        <div class="contentprofile">
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg">
                            <source media="(min-width: 993px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg"
                                class="orbit-image lozad" height="500px" width="650px"
                                alt="doctor evaluating best pharmacy delivery for patients">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">Cary Breese</h3>
                    <div class="subtitle">
                        CEO/Founder
                    </div>
                    <p>
                        Successful, multiple time startup CEO, expertise in technology, healthcare and financial
                        services. CEO of database software startup GenieDB. COO of technology incubator focused on
                        developing innovative technologies in Healthcare. CEO and founder of bootstrapped financial
                        services startup, acquired for 18x cash-on-cash. Led $100M product line as EVP, CIGNA. B.S. in
                        Electrical Engineering from Drexel University and credentialed Actuary (ACAS). <a
                            href="https://www.linkedin.com/in/carybreese/">Connect on Linkedin</a>


                    </p>
                </div>
            </div>
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                    <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg">
                            <source media="(min-width: 993px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg"
                                class="orbit-image lozad" height="500px" width="650px"
                                alt="doctor evaluating best pharmacy delivery for patients">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                    Sumeet Sheokand

                    </h3>
                    <div class="subtitle">
                    CTO AND FOUNDER


                    </div>
                    <p>
                    15+ years senior technology leadership in software and technology startups. Previously CTO, GenieDB; VP Engineering at enterprise search startup X1. Extensive expertise in building business line software and utilizing Big Data techniques to solve real business problems. Connect on Linkedin

<a
                            href="https://www.linkedin.com/in/sumeetsheokand/">Connect on Linkedin</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- visit faq -->
<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    A Better Local Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Find a NowRx Near You
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true"
                        tabindex="0" class="rx-btn rx-dg">
                        View Locations
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- what doctor saying -->



<section class="meetteam" id="pharmteam">
    <div class="container">
        <div class="header">
            <h2 class="sec-title">Meet Our Pharmacists</h2>
        </div>
        <div class="contentprofile">
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg">
                            <source media="(min-width: 993px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg"
                                class="orbit-image lozad" height="500px" width="650px"
                                alt="doctor evaluating best pharmacy delivery for patients">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                    Melissa Bostock

                    </h3>
                    <div class="subtitle">
                    Director of Pharmacy — Mountain View


                    </div>
                    <p>
                    Melissa Bostock obtained her Doctor of Pharmacy (Pharm D) from UCSF and she holds a Masters Degree in Public Health and a Bachelor of Science degree in Microbiology, Immunology and Molecular Genetics from UCLA. Melissa is trained in diabetes screening, pain management, pediatrics, immunizations and medication therapy management. Prior to NowRx, Melissa spent several years as Managing Pharmacist at Target.

<a
                            href="https://www.linkedin.com/in/melissa-bostock-7a1b9065/">Connect on Linkedin</a>
                    </p>
                </div>
            </div>
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/laemsing-root.jpg">
                            <source media="(min-width: 993px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/library/images/laemsing-root.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/laemsing-root.jpg"
                                class="orbit-image lozad" height="500px" width="650px"
                                alt="doctor evaluating best pharmacy delivery for patients">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">Laemsing Root</h3>
                    <div class="subtitle">
                    Pharmacist-in-Charge — Irvine


                    </div>
                    <p>
                    Laemsing obtained her Doctor of Pharmacy (Pharm D) from Touro University and she holds a Bachelor of Arts in English Literature from UCLA. Laemsing is trained in diabetes and blood pressure screening, medication therapy management and immunizations. Prior to NowRx, Laemsing spent over 9 years as a Pharmacy Manager and Staff Pharmacist at Target and CVS.


                    </p>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- visit faq -->
<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    No Signup Required. No Hidden Fees
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Just a Better Pharmacy
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true"
                        tabindex="0" class="rx-btn rx-dg">
                        Learn More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>








<?php get_footer(); ?>