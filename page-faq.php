<?php
/*
 Template Name: FAQs
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

<?php if (has_post_thumbnail($post->ID)) : ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- hero -->
<section class="hero-home">

    <div class="rvl">
        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) " data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px" alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) ">
        </picture>
    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">

                <div class="rvls">
                    <span class="sub-headline">
                        A Better Local Pharmacy Delivered
                    </span>
                </div>

                <div class="rvls">
                    <h1>
                        Frequently Asked Questions
                    </h1>
                </div>

                <div class="rvls">
                    <p>Need some help? Check out our frequently asked questions below or submit a question for our pharmacy team.</p>
                </div>

                <div class="rvls">
                    <div class="btn-container">
                        <a class="rx-btn" href="#faqblock">View FAQs</a>
                        <a class="rx-btn mrb" data-toggle="submitaquestion" aria-controls="submitaquestion"
                            aria-haspopup="true" tabindex="0">Submit a Question</a>
                    </div>
                </div>

            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                    data-iesrc="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp"
                    data-alt="NowRx Pharmacist Ready to Provide Service" data-toggle-class="active">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.jpeg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410lowres.jpg"
                        class="orbit-image" height="500px" width="650px" alt="NowRx Pharmacist Ready to Provide Service">
                </picture>
            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<section class="faq-blocks" id="faqblock">
    <div class="container">
        <div class="topcontent content">
            <div class="rvl">
                <span class="sub-headline">
                    A better local pharmacy delivered
                </span>
            </div>

            <div class="rvl">
                <h2 class="sec-title">
                    How can we help you today?
                </h2>
            </div>
        </div>
        <div class="content botcot">
            <div class="faq-blocks">

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            Top Frequently Asked Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx is a retail pharmacy just like any CVS or Walgreens, except
                                                instead of
                                                customers coming into the store to pick up their medications, we deliver
                                                it
                                                in hours free of charge. We have physical locations local to every area
                                                we
                                                service and offer the same services as a traditional retail pharmacy.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx prescription delivery work?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx prescription delivery work?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                The prescription delivery process is simple with NowRx Pharmacy.
                                            </p>

                                            <ol>
                                                <li> You or your doctor sends a prescription to NowRx (we accept
                                                    ePrescribe,
                                                    fax, or calls)</li>
                                                <li>
                                                    We call you to confirm the prescription, collect your copay, and
                                                    set up a
                                                    delivery time.
                                                </li>
                                                <li>
                                                    A pharmacy employee delivers the prescription in a few hours free
                                                    of
                                                    charge.
                                                </li>
                                            </ol>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How is NowRx different than a mail-order pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How is NowRx different than a mail-order pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Unlike mail order pharmacies:
                                            </p>
                                            <ul>
                                                <li>
                                                    NowRx has physical pharmacies local to every area we service.
                                                </li>
                                                <li>
                                                    NowRx employees deliver all medications (opposed to using 3rd
                                                    parties like
                                                    USPS)
                                                </li>
                                                <li>
                                                    NowRx deliveries arrive within hours opposed to mail services
                                                    which can
                                                    take 3-14 days.
                                                </li>
                                                <li> NowRx delivers both controlled and refrigerated medications for no
                                                    additional charge</li>
                                                <li>
                                                    NowRx always has a live pharmacy team member available to answer
                                                    your
                                                    questions.
                                                </li>
                                            </ul>




                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx make money?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx make money?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx makes money like all pharmacies and healthcare services –
                                                reimbursement from insurance and copays from the patient.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowRx charge more to cover delivery costs?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does NowRx charge more to cover delivery costs?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                No, NowRx never raises the cost of your medication to offset delivery
                                                costs.
                                            </p>

                                            <p>
                                                For prescriptions paid for through insurance, your copay is set by the
                                                insurance company and will generally be the same regardless of the
                                                pharmacy
                                                you use.
                                            </p>

                                            <p>
                                                For prescriptions paid for without insurance, our cash pricing is
                                                competitive with or lower than competing pharmacies.
                                            </p>

                                            <p>
                                                Additionally, anytime we receive a prescription our software
                                                automatically
                                                searches for drug coupons and applies them if it will lower your out of
                                                pocket costs, which has saved NowRx customers over $1.5M in the past
                                                year.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can NowRx afford to deliver in hours for free?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can NowRx afford to deliver in hours for free?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx has proprietary software and technology inside each pharmacy which
                                                increases efficiency and reduces costs considerably. This allows nowrx
                                                to
                                                operate at about 1/100th the cost of a traditional retail pharmacy like
                                                CVS
                                                or Walgreens.
                                            </p>

                                            <p>
                                                We then use these savings to provide customer benefits like free
                                                delivery in
                                                hours, better customer service, and better cash pricing.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What insurance plans does NowRx accept?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What insurance plans does NowRx accept?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy accepts all major insurance plans except Kaiser
                                                Permanente.
                                                We also offer non-insurance pricing that is competitive with or lower
                                                than
                                                even leading discount drug cards like GoodRx.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Where does NowRx Pharmacy offer prescription delivery?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Where does NowRx Pharmacy offer prescription delivery?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy has physical pharmacy locations throughout California and
                                                Arizona. We offer free prescription delivery in hours to these cities
                                                and
                                                surrounding areas.
                                            </p>

                                            <p>
                                                Customers and doctors are also more than welcome to stop by these
                                                physical
                                                locations to fill a prescription or ask our pharmacist a question.
                                            </p>

                                            <p>
                                                To view our locations and service area maps please visit
                                                <a href="https://nowrx.com/locations/">https://nowrx.com/locations/</a>
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What medications does NowRx Pharmacy deliver?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What medications does NowRx Pharmacy deliver?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy offers delivery of over 250 prescriptions including
                                                controlled and refrigerated medications. We also offer delivery of
                                                common
                                                over the counter medications and supplements like Tylenol, Vitamin D,
                                                etc.

                                            </p>
                                            <p>
                                                We do not offer compounding at this time.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Can I manage a family member or loved one’s prescriptions?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Can I manage a family member or loved one’s prescriptions?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx allows you to set a head of household or caregiver if one person
                                                will
                                                be managing a family member or loved one's prescriptions. Just give us a
                                                call at (844) 466-6979 or email us at info@nowrx.com and we will be
                                                happy to
                                                get you set up.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            Patient Frequently Asked Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx is a retail pharmacy just like any CVS or Walgreens, except
                                                instead of customers coming into the store to pick up their medications,
                                                we deliver it in hours free of charge. We have physical locations local
                                                to every area we service and offer the same services as a traditional
                                                retail pharmacy.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Why is NowRx better than my traditional retail pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Why is NowRx better than my traditional retail pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx offers several benefits over traditional retail pharmacies
                                                including:
                                            </p>
                                            <ul>
                                                <li>Free prescription delivery in hours</li>
                                                <li> Assistance with insurance & prior auths</li>
                                                <li> Automatic coupon search & application</li>
                                                <li> Low cash prescription pricing</li>
                                                <li> 5-star rated customer service</li>
                                            </ul>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What insurance plans does NowRx accept?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What insurance plans does NowRx accept?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            NowRx Pharmacy accepts all major insurance plans with the exception of
                                            Kaiser.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I send a new prescription to NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I send a new prescription to NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            Your doctor can send a new prescription to NowRx Pharmacy through
                                            e-prescribe or fax. We are in all EMR systems.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I transfer/refill a prescription from another pharmacy with NowRx?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I transfer/refill a prescription from another pharmacy with NowRx?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>Transferring/refilling a prescription with NowRx Pharmacy is simple and
                                                takes seconds.</p>

                                            <p>Just text us at <a href="tel:844-466-6979">(844) 466-6979</a> a picture
                                                of the empty prescription bottle you would like us to refill/transfer or
                                                go to <a
                                                    href="<?= get_site_url(); ?>/get-started">https://nowrx.com/get-started</a>
                                                and fill out our transfer/refill request form.</p>

                                            <p>We will take care of the rest!</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How many locations does NowRx have and where do they offer delivery?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How many locations does NowRx have and where do they offer delivery?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>At the moment, NowRx has multiple locations throughout California and
                                                Arizona.</p>

                                            <p>You can check below to view a full list of NowRx Pharmacy locations and
                                                enter your address to see if we service your area.</p>

                                            <p><a href="<?= get_site_url(); ?>/locations/">NowRx Pharmacy Locations and
                                                    Service Area Check</a> </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How long does medication delivery from NowRx typically take?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How long does medication delivery from NowRx typically take?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>Medication delivery from NowRx will arrive at your house within 3-4 hours
                                                of us receiving the prescription from your doctor. If you are
                                                transferring or refilling a prescription from another pharmacy, we will
                                                deliver the prescription within 3-4 hours of receiving the transfer from
                                                your current pharmacy.</p>

                                            <p>If we receive a prescription outside of our normal business hours, we
                                                will deliver it the following business day.</p>

                                            <p>In some cases, there may be delays if your insurance company requires
                                                prior authorization or if you require a rare medication that we do not
                                                typically carry in stock. In these situations, we will notify you as
                                                soon as possible and do everything we can to find a solution!</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx ensure the safe delivery of my medication?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx ensure the safe delivery of my medication?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>All NowRx deliveries are made by HIPAA certified NowRx employees. These
                                                pharmacy employees have undergone extensive background checks and
                                                training to ensure safe medication delivery.</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowRx deliver refrigerated medications or schedule 2 controlled substances?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                                Does NowRx deliver refrigerated medications or schedule 2 controlled
                                                substances?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Yes. For a controlled substance or refrigerated medication delivery, NowRx
                                                will need proof of identification and a signature at the time of
                                                delivery.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx handle special requests?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx handle special requests?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Special requests (e.g. blister packs, medication sorting, etc.) are
                                                available upon request. Just let our pharmacist know when they reach out
                                                to schedule your delivery!
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I schedule a free consultation?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I schedule a free consultation?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Scheduling a consultation with a NowRx pharmacist is easy and can be
                                                done in minutes.


                                            </p>

                                            <p>
                                                Just text or call <a href="tel:844-466-6979">(844) 466-6979</a> and one
                                                of our pharmacy team members will be happy to assist you.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What medications does NowRx Pharmacy deliver?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What medications does NowRx Pharmacy deliver?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy offers delivery of over 250 prescriptions including
                                                controlled and refrigerated medications. We also offer delivery of
                                                common over the counter medications and supplements like Tylenol,
                                                Vitamin D, etc. We do not offer compounding at this time.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I request an FSA receipt?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I request an FSA receipt?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">

                                            How do I request an FSA receipt? NowRx Pharmacy is happy to provide an FSA
                                            receipt upon request. Just give your local NowRx pharmacy a call or email us
                                            at <a href="mailto:info@nowrx.com">info@nowrx.com</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            Doctor Frequently Asked Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can NowRx afford to deliver in hours for free?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can NowRx afford to deliver in hours for free?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx has proprietary software and technology inside each pharmacy which
                                                increases efficiency and reduces costs considerably. This allows NowRx
                                                to operate at about 1/100th the cost of a traditional retail pharmacy
                                                like CVS or Walgreens.


                                            </p>

                                            <p>
                                                We then use these savings to provide customer benefits like free
                                                delivery in hours, better customer service, and better cash pricing.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How is NowRx different than a mail-order pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How is NowRx different than a mail-order pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Unlike mail order pharmacies:

                                            </p>

                                            <ul>
                                                <li> NowRx has physical pharmacies local to every area we service.</li>
                                                <li>
                                                    NowRx has physical pharmacies local to every area we service.

                                                </li>
                                                <li>
                                                    NowRx employees deliver all medications (opposed to using 3rd
                                                    parties like USPS).

                                                </li>
                                                <li>
                                                     NowRx delivers in hours as opposed to mail services which can take
                                                    3-14 days.

                                                </li>
                                                <li>
                                                    NowRx delivers controlled and refrigerated medications.

                                                </li>
                                                <li>
                                                    NowRx has live pharmacy team members available to answer any
                                                    questions.

                                                </li>
                                            </ul>








                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can NowRx help my practice and patients?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can NowRx help my practice and patients?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx can help your office staff and patients save significant time and
                                                money.
                                            </p>

                                            <p>
                                                Saving your office staff time:
                                            </p>
                                            <ul>
                                                <li>
                                                    Proactively communicate and educate patients on their medication
                                                    regimen
                                                </li>
                                                <li>
                                                    Assist with prior authorizations and insurance approval
                                                </li>
                                                <li>
                                                    Accept standing orders and special requests
                                                </li>
                                            </ul>

                                            <p>
                                                Saving your patients money:
                                            </p>
                                            <ul>
                                                <li>
                                                    Free prescription delivery in hours, same or lower drug
                                                    price/copay
                                                </li>
                                                <li>
                                                    Automatically apply available drug coupons to lower out of pocket
                                                    costs
                                                </li>
                                                <li>
                                                    Check for lower cash prices and outline options for patients
                                                </li>
                                            </ul>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How do I send a prescription for my patient to NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How do I send a prescription for my patient to NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Sending a prescription to NowRx Pharmacy is easy.


                                            </p>
                                            <p>
                                                Just ePrescribe to NowRx (we are in all EMRs) or send it to your local
                                                NowRx by fax.

                                            </p>
                                            <p>
                                                If you are having trouble, please do not hesitate to call our pharmacy
                                                or email us at info@nowrx.com and we will get back to you as soon as
                                                possible.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx help with prior authorizations?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx help with prior authorizations?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx can help your office safe significant time by handling prior
                                                authorizations.
                                            </p>

                                            <p>
                                                We use Cover My Meds and can start the process online for you, fill out
                                                all the information that is needed and then reassign in the portal to
                                                your team so they can add any medical information that is needed for
                                                approval. Your office will then need to submit to the insurance company.
                                                Once this has been submitted, we will track if it is approved or denied
                                                and communicate with your office and the patient as needed.
                                            </p>

                                            <p>
                                                In some cases, if your office has a lot of prior auths and is looking
                                                for even more support, NowRx Pharmacy can take full responsibility for
                                                the entire process via a Collaborative Practice Agreement which
                                                authorizes us to speak to the insurance plan on behalf of your office.To
                                                learn more about this, please email us at info@nowrx.com.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowRx Pharmacy accept standing orders?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does NowRx Pharmacy accept standing orders?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>Yes, any practice that wishes to provide a standing order form may
                                                request one by emailing us at info@nowrx.com or contacting their
                                                dedicated NowRx representative.

                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                Does NowRx provide consultation for patients?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            Does NowRx provide consultation for patients?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Yes, NowRx provides free consultations to every patient over the phone
                                                or in person if they would like to set up an appointment to come see the
                                                pharmacist in person. For more information, please call your local NowRx
                                                Pharmacy.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How long does medication delivery from NowRx take?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How long does medication delivery from NowRx take?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Medication delivery from NowRx will arrive at your patient's house
                                                within 3-4 hours of you sending the prescription to us. If the patient
                                                is transferring a prescription from another pharmacy, we will deliver
                                                the prescription within 3-4 hours of receiving the transfer from their
                                                current pharmacy.




                                            </p>
                                            <p>
                                                If a prescription is sent outside of normal business hours we will
                                                deliver it the following business day.
                                            </p>
                                            <p>
                                                In rare cases, delivery may not be same-day e.g. if a prior
                                                authorization is required and is taking longer than usual. In these
                                                situations, we will notify the patient as soon as possible and do
                                                everything we can to find a solution!
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What are NowRx cash prices like?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What are NowRx cash prices like?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy cash prices are competitive or beat even leading coupon
                                                cards like GoodRx. To check the cash price for a specific medication,
                                                please give your local NowRx Pharmacy a call.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx improve medication adherence and patient safety?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx improve medication adherence and patient safety?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">

                                            <p>
                                                Multiple studies have shown that home delivery of prescription
                                                medications and better patient education increase adherence and
                                                compliance to medication regimens.
                                            </p>
                                            <ul>
                                                <li><a
                                                        href="https://pubmed.ncbi.nlm.nih.gov/25062079/">https://pubmed.ncbi.nlm.nih.gov/25062079/</a>
                                                </li>
                                                <li><a
                                                        href="https://pubmed.ncbi.nlm.nih.gov/24304158/">https://pubmed.ncbi.nlm.nih.gov/24304158/</a>
                                                </li>
                                                <li><a
                                                        href="https://pubmed.ncbi.nlm.nih.gov/30816817/">https://pubmed.ncbi.nlm.nih.gov/30816817/</a>
                                                </li>
                                                <li><a
                                                        href="https://pubmed.ncbi.nlm.nih.gov/27123916/">https://pubmed.ncbi.nlm.nih.gov/27123916/</a>
                                                </li>
                                            </ul>

                                            <p>
                                                In addition, NowRx Pharmacy proprietary software and robotic automation
                                                reduces average dispensing error rates by over 1000x. In 2020
                                                SureScripts recognized Nowrx Pharmacy as a finalist for the White Coat
                                                Awards in the Highest Accuracy category.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What medications does NowRx Pharmacy deliver?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What medications does NowRx Pharmacy deliver?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy offers delivery of over 250 prescriptions including
                                                controlled and refrigerated medications. We also offer delivery of
                                                common over the counter medications and supplements like Tylenol,
                                                Vitamin D, etc. We do not offer compounding at this time.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx apply/handle drug coupons?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx apply/handle drug coupons?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx automatically searches for and applies any manufacturer coupon
                                                that will lower your patient's out of pocket costs. We keep a database
                                                of existing medication coupons and anytime a new drug is prescribed our
                                                pharmacy team checks with the manufacturer to see if there is a coupon
                                                available.
                                            </p>

                                            <p>
                                                Many pharmaceutical reps recommend working with NowRx on new medications
                                                for this reason as we make sure coupons are handled properly and costs
                                                for new medications are kept in check for patients.
                                            </p>

                                            <p>
                                                This feature has saved customers over $1.5M to date.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What insurance plans does NowRx Pharmacy accept?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What insurance plans does NowRx Pharmacy accept?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx Pharmacy accepts all major insurance plans with the exception of
                                                Kaiser.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- faq item -->
                <div class="faq-block">
                    <div class="click" data-opentab="0">
                        <h2 class="sec-title">
                            General Business Questions
                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <div class="block-content">
                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                What is NowRx Pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            What is NowRx Pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx is a retail pharmacy just like any CVS or Walgreens, except
                                                instead of
                                                customers coming into the store to pick up their medications, we deliver
                                                it
                                                in hours free of charge. We have physical locations local to every area
                                                we
                                                service and offer the same services as a traditional retail pharmacy.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How is NowRx different than a mail order pharmacy?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How is NowRx different than a mail order pharmacy?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                Unlike mail order pharmacies:
                                            </p>

                                            <ul>
                                                <li> NowRx has physical pharmacies local to every area we service.</li>
                                                <li> NowRx employees deliver all medications (opposed to using 3rd
                                                    parties like
                                                    USPS)</li>
                                                <li> NowRx deliveries arrive within hours opposed to mail services
                                                    which can
                                                    take 3-14 days.</li>
                                                <li>
                                                     NowRx delivers both controlled and refrigerated medications for no
                                                    additional charge
                                                </li>
                                                <li> NowRx always has a live pharmacy team member available to answer
                                                    your
                                                    questions.</li>
                                            </ul>








                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How can NowRx afford to deliver in hours for free?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How can NowRx afford to deliver in hours for free?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx has proprietary software and technology inside each pharmacy which
                                                increases efficiency and reduces costs considerably. This allows NowRx
                                                to
                                                operate at about 1/100th the cost of a traditional retail pharmacy like
                                                CVS
                                                or Walgreens.
                                            </p>

                                            <p>
                                                We then use these savings to provide customer benefits like free
                                                delivery in
                                                hours, better customer service, and better cash pricing.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx make money?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx make money?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                NowRx makes money like all pharmacies and healthcare services –
                                                reimbursement from insurance and copays from the patient.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="item" data-opentab="false">
                            <span class="title">
                                How does NowRx protect my personal health information?
                                <span class="question-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.661 490.661"
                                        style="enable-background:new 0 0 490.661 490.661;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M453.352,236.091L48.019,1.424c-3.285-1.899-7.36-1.899-10.688,0c-3.285,1.899-5.333,5.419-5.333,9.237v469.333    c0,3.819,2.048,7.339,5.333,9.237c1.643,0.939,3.499,1.429,5.333,1.429c1.856,0,3.691-0.469,5.355-1.429l405.333-234.667    c3.285-1.92,5.312-5.44,5.312-9.237S456.637,237.989,453.352,236.091z" />
                                        </g>

                                    </svg>
                                </span>
                            </span>
                            <div class="item-block">
                                <div class="block">
                                    <div class="q-item">
                                        <span class="close-itcon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"
                                                alt="close icon">
                                        </span>
                                        <div class="title">Q.</div>
                                        <span class="cntx">
                                            How does NowRx protect my personal health information?
                                        </span>
                                    </div>
                                    <div class="a-item">
                                        <div class="title">A.</div>
                                        <span class="cntx">
                                            <p>
                                                At NowRx Pharmacy, we take our customer's data very seriously and employ
                                                a
                                                number of safeguards to ensure the security of the data we collect
                                                including
                                                but not limited to maintaining all health-related data offline on a
                                                secure
                                                HIPAA compliant server.
                                            </p>

                                            <p>
                                                To learn more, please take a look at our <a
                                                    href="https://nowrx.com/privacy-policy/"> Privacy Policy</a> and <a
                                                    href="https://nowrx.com/hipaa-privacy/">Privacy Practices</a>.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>

                <div class="faq-block">
                    <div class="clickmodal" data-opentab="0">
                        <h2 class="sec-title">

                            <span class="tiltelink" data-toggle="submitaquestion" aria-controls="submitaquestion"
                                aria-haspopup="true" tabindex="0">Submit a Question</span>

                            <span class="chevron-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256"
                                    style="enable-background:new 0 0 256 256;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <polygon
                                                points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>
                </div>

            </div>
            <div class="faq-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Prescription-Bottles-White-BG.jpeg" alt="Prescription Bottles on White table"
                    class="pic">
            </div>
        </div>
    </div>
</section>



<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    No Signup Required. No Hidden Fees.
                </span>
            </div>

            <div class="rvl">
                <h2 class="sec-title">
                    Just a Better Pharmacy
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a class="rx-btn rx-dg" href="<?= get_site_url(); ?>/get-started/">Get Started</a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    <p>
                        Still have questions about how to get started with NowRx Pharmacy? Email us at info@nowr.com an
                        agent will be happy to help.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>