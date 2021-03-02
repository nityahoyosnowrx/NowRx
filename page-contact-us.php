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
<section class="hero-home contactpage">
    <div class="rvl">


        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy) " data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px" alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy) ">
        </picture>

    </div>

    <div class="container">
        <div class="content">

            <!-- content -->
            <div class="column-half content-col">



            <div class="rvls">
                    <span class="sub-headline">
                        Contact Nowrx pharmacy support
                    </span>
                </div>

                <div class="rvls">
                    <h1 class="hiw-title">
                    Talk to a Live Person
                    </h1>
                </div>
                <div class="rvls">
                    <p>
                    Contact us by filling out the form below or calling your local NowRx Pharmacy. We won't put you through a never ending automated phone menu, we won't leave you on hold for an hour, and your email won't fall into a black hole of unread messages.


                    </p>
                    <p>Why?</p>
                    <p>Because we believe in delivering first-rate customer service that we would be happy to experience ourselves.</p>
                </div>


            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad"
                    data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="doctor considering a local nowrx pharmacy for prescription delivery" data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/Pharmacist.jpeg">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                        class="orbit-image " height="500px" width="650px" alt="doctor considering a local nowrx pharmacy for prescription delivery">
                </picture>


            </div>

        </div>
    </div>
</section>


<!-- companies -->
<?php include('section-companies.php'); ?>



<section class="form-and-locations">
    <div class="container">
        <div class="content">
            <div class="form-item">
<div class="containerform">
    <h2 class="sec-title">Get in Touch</h2>
    <p>For medication refills, transfers, or new prescriptions please use our online transfer form at <a href="https://nowrx.com/refill-and-transfer-prescriptions/">nowrx.com/get-started</a></p>
    <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
hbspt.forms.create({
portalId: "5952677",
formId: "c3096955-bd03-4e37-a266-c4fc4cc523a7"
});
</script>
</div>
            </div>
            <div class="locations-list">
                <h2 class="sec-title">
                    View NowRx Pharmacy Location
                </h2>
                <span class="clockview">
                    (Click to View a Location)
                </span>
                <span class="items">
                    <ul class="item">
                        <li><a href="<?= get_site_url(); ?>/locations/california/mountain-view/">Mountain View, CA</a></li>
                        <li><a href="<?= get_site_url(); ?>/locations/california/san-jose/">San Jose, CA</a></li>
                        <li><a href="<?= get_site_url(); ?>/locations/california/burlingame/">Burlingame, CA</a></li>
                        <li><a href="<?= get_site_url(); ?>/locations/california/irvine/">Irvine, CA</a></li>
                        <li><a href="<?= get_site_url(); ?>/locations/arizona/mesa/">Mesa, AZ</a></li>
                    </ul>
                </span>
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
                    <a data-toggle="for-doctors-learnmore" aria-controls="for-doctors-learnmore" aria-haspopup="true" tabindex="0" class="rx-btn rx-dg">
                        Request a NowRx Doctor Kit
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="maito:info@nowrx.com" class="alink">info@nowrx.com </a>and we will be happy to help.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq -->
<section class="faq-section">
    <div class="container">
        <div class="content">
            <div class="titleblock">
                <div class="rvl">
                    <span class="sub-headline">
                        Pharmacy Delivery from NowRx
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Frequently Asked Questions
                    </h2>
                </div>
            </div>
            <div class="faq-content">

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What is NowRx?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in to
                                pick up medication, we bring them to you.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Is NowRx a mail-order pharmacy?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NO. NowRx Pharmacy has physical locations in all of our service areas. We accept
                                walk-ins and our pharmacists are always available to chat in person or over the phone.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How can you afford to provide free same-day delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Proprietary tech inside our pharmacy increases efficiency and reduces our cost to about
                                1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How do you make money?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                We make money like every pharmacy or healthcare service – reimbursement from insurance
                                and copays from the patient.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Do you charge more to offset the cost of delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NO. Prices are lower than or competitive with all pharmacies. We also automatically
                                search for and apply available coupons to offer the lowest price possible (over $1M
                                saved!).
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How do you handle special requests?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Special requests (e.g. blister packs, medication sorting, etc.) are available upon
                                request. Just let our pharmacist know when they reach out to schedule your delivery!


                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Can I manage prescriptions for a family member?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Yes. You can set a head of household if a single person will be managing a family member
                                or loved one’s prescriptions.
                            </span>
                        </div>
                    </div>
                </div>


                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Do you deliver controlled & refrigerated medication?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor
                                before delivery. These meds also require a signature & proper ID.
                            </span>
                        </div>
                    </div>
                </div>




                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What insurance plans do you take?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some of
                                the lowest out of pocket prices in the areas we serve.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How long does does delivery take?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Typically, your prescription will arrive 2-4 hours after we have confirmed your
                                prescription. We also offer 1hr delivery option for a $5 fee.
                            </span>
                        </div>
                    </div>
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
                    Have additional questions about NowRx Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Visit our FAQ Page
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/faqs/#faqblock" class="rx-btn rx-dg">
                        Frequently Asked Questions
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    You can also text us at (844) 466-6979 or send an email to info@nowrx.com and we will get back to
                    you as soon as possible.
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>