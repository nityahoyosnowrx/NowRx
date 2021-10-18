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



<section class="welcomed">
    <div class="container">
    <div class="sub-heading h5 js-revealText" style="">
            Company <span class="h-dash">———</span>
        </div>
        <div class="content">

            <h1>Healthcare The Way It Should Be</h1>
            <div class="txt">
                NowRx is rebuilding healthcare the way it should be – accessible, convenient, and affordable for all.
            </div>
        </div>
        <div class="btn-container">
                    <a class="rx-btn rx-dg aboutbtn on" href="#ourstory">
                        Our Story
                    </a>
                    <a class="rx-btn rx-dg aboutbtn tw" href="#execteam">
                        Executive Team</a>
                    <a class="rx-btn rx-dg aboutbtn  tr" href="#pharmteam">
                        Our Pharmacists
                    </a>
                    <a class="rx-btn rx-dg aboutbtn fr" href="<?= get_site_url(); ?>/locations">
                        Locations
                    </a>

                </div>
    </div>

    <!-- <img class="asset  lazyloaded" alt="nowrx prescription delivery car making a pharmacy delivery" src="<?php echo get_template_directory_uri(); ?>/images/nowrx-prescription-delivery-car-making-a-pharmacy-delivery.webp"> -->
</section>



<section class="storybox" id="ourstory">
    <div class="container">
        <div class="content">

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
            <div class="col">

                <figure>
                    <picture class="lozad" data-toggle-class="active">
                        <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-car-charging-at-nowrx-pharmacy.webp">
                        <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-car-charging-at-nowrx-pharmacy.webp">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacy-delivery-car-charging-at-nowrx-pharmacy.webp" class="orbit-image lozad" height="500px" width="650px" alt="pharmacy delivery car charging at nowrx pharmacy">
                    </picture>
                </figure>
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
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg" class="orbit-image lozad" height="500px" width="650px" alt="Cary Breese">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">Cary Breese</h3>
                    <div class="subtitle">
                        CEO/Founder
                    </div>
                    <p>
                    Successful, serial entrepreneur with expertise in technology, healthcare, and financial services. Former CEO of financial services startup acquired for 18x cash-on-cash. Led $100M product line as EVP, CIGNA. B.S. in Electrical Engineering from Drexel University and credentialed actuary.


                    </p>
                </div>
            </div>
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg" class="orbit-image lozad" height="500px" width="650px" alt="Sumeet Sheokand">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Sumeet Sheokand

                    </h3>
                    <div class="subtitle">
                        CTO/Founder


                    </div>
                    <p>
                    15+ years of senior leadership in software and technology startups (CTO – Genie DB, VP Engineering – X1). Extensive expertise in building business line and enterprise grade software. Adept at utilizing Big Data techniques to solve real business problems.
                    </p>
                </div>
            </div>
            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg" class="orbit-image lozad" height="500px" width="650px" alt="Melissa Bostock">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Melissa Bostock
                    </h3>
                    <div class="subtitle">
                        Director of Pharmacy


                    </div>
                    <p>
                   Doctor of Pharmacy (Pharm D) from UCSF, Master's Degree in Public Health and B.S. in Microbiology, Immunology, & Molecular Genetics from UCLA. Former Target managing pharmacist trained in medication therapy management, diabetes screening, pain management, pediatrics, and immunizations.
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
                Find a NowRx
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/locations/" class="rx-btn rx-dg">
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
        <div class="contentprofile smalle">

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-irvine.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-irvine.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-irvine.webp" class="orbit-image lozad" height="500px" width="650px" alt="Laemsing Roo pharmacist for nowrx pharmacy delivery in irvine">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Laemsing Root
                    </h3>
                    <div class="subtitle">
                        Pharmacist in Charge – Irvine
                    </div>
                    <p>
                        Laemsing obtained her Doctor of Pharmacy (Pharm D) from Touro University, and she holds a B.A. in English Literature from UCLA. Laemsing is trained in diabetes and blood pressure screening, medication therapy management and immunizations. Prior to NowRx, Laemsing spent over 9 years as a Pharmacy Manager and Staff Pharmacist at Target and CVS.
                    </p>
                </div>
            </div>

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-hayward.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-hayward.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-hayward.webp" class="orbit-image lozad" height="500px" width="650px" alt="Trinh Thai pharmacist for nowrx pharmacy delivery in hayward">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Trinh Thai
                    </h3>
                    <div class="subtitle">
                        Pharmacist in Charge – Hayward
                    </div>
                    <p>
                        Trinh obtained her Doctor of Pharmacy (Pharm D) from Touro University, and she holds a B.S. in Pharmaceutical Chemistry from UC Davis. Trinh is trained and highly proficient in medication therapy management and immunizations. Before joining NowRx, Trinh spent over 5 years in increasing roles of responsibility leading and managing pharmacy operations at CVS.
                    </p>
                </div>
            </div>

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-san-jose.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-san-jose.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-san-jose.webp" class="orbit-image lozad" height="500px" width="650px" alt="Joanne Thai pharmacist for nowrx pharmacy delivery in san jose">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Joanne Thai
                    </h3>
                    <div class="subtitle">
                        Pharmacist in Charge – San Jose
                    </div>
                    <p>
                        Joanne obtained her Doctor of Pharmacy (Pharm D) from Temple University School of Pharmacy in Philadelphia, Pennsylvania through an accelerated track. Joanne is trained in immunizations, diabetes and blood pressure screening and medication therapy management. Prior to NowRx, Joanne spent several years as the Pharmacy Manager for CVS.</p>
                </div>
            </div>


            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mesa.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mesa.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mesa.webp" class="orbit-image lozad" height="500px" width="650px" alt="Antoinette Davis-Hatton pharmacist for nowrx pharmacy delivery in-mesa">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Antoinette Davis-Hatton
                    </h3>
                    <div class="subtitle">
                        Pharmacist in Charge – Mesa
                    </div>
                    <p>
                        Antoinette obtained her Doctor of Pharmacy (Pharm D) from St. Louis College of Pharmacy and a B.S. in Chemistry from the University of Oklahoma. Antoinette is trained in a variety of disease states including diabetes management, high BP, women’s health, and more. She also lectures at several universities and was a Pharmacy Manager at CVS/Target prior to joining NowRx.
                    </p>
                </div>
            </div>

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-pleasanton.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-pleasanton.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-pleasanton.webp" class="orbit-image lozad" height="500px" width="650px" alt="Lily Naanos pharmacist for nowrx pharmacy delivery in pleasanton">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                    Lily Naanos
                    </h3>
                    <div class="subtitle">
                    Pharmacist in Charge – Pleasanton
                    </div>
                    <p>
                    Lily obtained her Doctor of Pharmacy (Pharm D) from UCSD and holds a B.S. in Molecular Cell Biology and Nutritional Sciences & Toxicology from UC Berkeley. Lily is trained in diabetes screening, medication therapy management, nutrition and immunizations. Prior to NowRx, Lily spent 10 years as Pharmacy Manager and Staff Pharmacist at Safeway/Albertsons Pharmacy.
                     </p>
                </div>
            </div>

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mountain-view.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mountain-view.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-mountain-view.webp" class="orbit-image lozad" height="500px" width="650px" alt="Abeba Hadgu pharmacist for nowrx pharmacy delivery in mountain view">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                    Abeba Hadgu
                    </h3>
                    <div class="subtitle">
                    pharmacist in charge – Mt. View
                    </div>
                    <p>
                    Abeba is a licensed pharmacist with a passion for patient care and pharmacy operations. Abeba is trained in diabetes care, medication therapy management, immunizations, and medication reconciliation. Prior to NowRx, Abeba spent over 7 years as a Pharmacy Manager and Staff Pharmacist at Rite Aid and CVS.
                      </p>
                </div>
            </div>

            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-van-nuys.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-van-nuys.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-van-nuys.webp" class="orbit-image lozad" height="500px" width="650px" alt="pharmacist for nowrx pharmacy delivery in van nuys">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                    Avital Kashanian
                    </h3>
                    <div class="subtitle">
                    pharmacist in charge – Van Nuys
                    </div>
                    <p>
                    Avital obtained her Doctor of Pharmacy (PharmD) from Western University of Health Sciences and a B.A. from UCLA (with honors). Avital is trained in medication therapy management, immunizations, and more. Prior to joining NowRx, Avital was manager and staff pharmacist for several pharmacies/clinics focused on a range of specialty conditions.
                       </p>
                </div>
            </div>


            <!-- profile -->
            <div class="profile">
                <div class="image">
                    <figure>
                        <picture class="lozad" data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-burlingame.webp">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-burlingame.webp">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/pharmacist-for-nowrx-pharmacy-delivery-in-burlingame.webp" class="orbit-image lozad" height="500px" width="650px" alt="pharmacist for nowrx pharmacy delivery in van nuys">
                        </picture>
                    </figure>
                </div>
                <div class="text">
                    <h3 class="sec-title">
                        Tina Lui
                    </h3>
                    <div class="subtitle">
                    pharmacist in charge – Burlingame
                    </div>
                    <p>
                        Tina obtained her Doctor of Pharmacy (Pharm D) from the University of the Pacific in Stockton, CA. Tina is trained in diabetes and blood pressure screening as well as medication therapy management and immunizations. Prior to joining NowRx, Tina spent over 13 years as a Pharmacy Manager at Target and CVS.
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
                    <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/" class="rx-btn rx-dg">
                    Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>








<?php get_footer(); ?>