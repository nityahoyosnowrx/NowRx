<?php get_header(); ?>

<?php if (has_post_thumbnail($post->ID)) : ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), ''); ?>
<section class="hero"
    style="background: #000 url('<?php echo $image[0]; ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; padding: 4rem 0px; color: #fff;">
    <?php endif; ?>

</section>

<!-- hero -->
<section class="hero-home">

    <div class="">
        <img data-src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy)" class="imageblock lozad" height="100px" width="450px">
    </div>

    <div class="container">
        <div class="content">
            <!-- content -->
            <div class="column-half content-col">

                    <span class="sub-headline ">
                            <strong>A Better Local Pharmacy Delivered</strong>
                    </span>

                    <h1 class="">
                            Free Prescription Delivery in Hours
                    </h1>

                    <p class="">
                            NowRx is a new kind of local pharmacy that uses modern technology to provide a better pharmacy experience.
                    </p>

                    <div class="btn-container">
                        <a class="rx-btn" href="<?= get_site_url(); ?>/get-started/">
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
                        <a class="rx-btn rx-green mrb" href="<?= get_site_url(); ?>/how-it-works/">
                            <span class="arrow">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-question-circle fa-w-16 fa-2x"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z" class=""></path></svg>
                            </span>
                            How it Works
                        </a>

                    </div>




            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture data-toggle-class="active" class="lozad">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" media="(min-width: 100px)">
                    <!-- <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.jpeg"> -->

                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410mobile.jpeg" alt="Pharmacist Ready to Provide Medication" class="orbit-image lozad" height="500px" width="620px">

                </picture>
                
            </div>

        </div>
    </div>
</section>


<?php include('section-companies.php'); ?>



<section class="how-it-works panel--primary">
    <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <div class="rvl">
                    <p class="pre-headline">Using NowRx Pharmacy is Simple</p>
                </div>

                <div class="rvl">
                    <h2 class="headline">Here’s How It Works</h2>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x steps">

            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">1. Send Us Your Prescription</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png"
                            alt="Prescription Icon" class="pic lozad">
                    </div>

                    <p>
                        <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
                        <strong>Existing Prescription: </strong>Text <a href="tel:844-466-6979" class="tellink">(844)
                            466-6979</a> or <a href="<?= get_site_url(); ?>/get-started/" style="color:#fff;">Transfer
                            Online
                            Here</a>.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png"
                            alt="prescription delivery confirmation check mark icon" class="pic lozad ">
                    </div>

                    <p>We will reach out to you via phone to collect your insurance copay confirm your address and set
                        up a
                        delivery time.</p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Medication is Delivered</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png"
                            alt="Prescription Delivery Car Icon" class="pic lozad">
                    </div>

                    <p>A NowRx employee will deliver your medication in hours from your local NowRx Pharmacy for free.
                        All you pay is your normal copay.</p>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="testimonials-block">

    <div class="container">
        <div class="content">
            <div class="rvl">
                <div class="subtitle">A Better Local Pharmacy Delivered</div>
            </div>
            <div class="rvl">
                <h2 class="main-title">What Customers are Saying</h2>
            </div>
            <div class="blocks">

                <!-- block -->
                <div class="rvl">
                    <div class="block" itemscope itemtype="http://schema.org/Review">

                        <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                            <meta itemprop="name" content="NowRx Pharmacy">
                            <meta itemprop="image"
                                content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                            <meta itemprop="priceRange" content="$">
                            <meta itemprop="telephone" content="(844) 466-6979">
                        </div>

                        <h2 class="title">Better Pricing</h2>

                        <blockquote>

                            <div class="review" itemprop="reviewRating" itemscope=""
                                itemtype="http://schema.org/Rating">
                                <p itemprop="description">
                                    “There's a reason every single review is five stars - This pharmacy is AMAZING! They
                                    actually look for discounts and coupons to offer the best rate possible.”
                                </p>
                                <meta itemprop="ratingValue" content="5">
                                </meta>
                            </div>

                            <div class="imageblock">
                                <img itemprop="image" data-toggle-class="active"
                                    data-src="<?php echo get_template_directory_uri(); ?>/library/images/3.png"
                                    class="lozad" alt="Photo of NowRx Pharmacy customer Lina W. smiling">
                            </div>

                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <h3 class="name" itemprop="name">Lina W.</h3>
                                <div class="usertitle">
                                    NowRX Customer
                                </div>
                            </span>

                        </blockquote>
                    </div>
                </div>

                <!-- block -->
                <div class="rvl">
                    <div class="block" itemscope itemtype="http://schema.org/Review">

                        <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                            <meta itemprop="name" content="NowRx Pharmacy">
                            <meta itemprop="image"
                                content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                            <meta itemprop="priceRange" content="$">
                            <meta itemprop="telephone" content="(844) 466-6979">
                        </div>

                        <h2 class="title">Better Service</h2>

                        <blockquote>

                            <div class="review" itemprop="reviewRating" itemscope=""
                                itemtype="http://schema.org/Rating">
                                <p itemprop="description">
                                    "I am just gilding the lily with my 5-star review but companies that ACTUALLY
                                    PROVIDE
                                    CUSTOMER SERVICE are so rare in this day and age. These guys are awesome!"
                                </p>
                                <meta itemprop="ratingValue" content="5">
                                </meta>
                            </div>

                            <div class="imageblock">
                                <img itemprop="image" data-toggle-class="active"
                                    data-src="<?php echo get_template_directory_uri(); ?>/library/images/2.png"
                                    class="lozad" alt="Photo of NowRx Pharmacy customer Tanya S. smiling">
                            </div>

                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <h3 class="name" itemprop="name ">Tanya S.</h3>
                                <div class="usertitle">
                                    NowRX Customer
                                </div>
                            </span>
                        </blockquote>
                    </div>
                </div>

                <!-- block -->
                <div class="rvl">
                    <div class="block" itemscope itemtype="http://schema.org/Review">

                        <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/LocalBusiness">
                            <meta itemprop="name" content="NowRx Pharmacy">
                            <meta itemprop="image"
                                content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                            <meta itemprop="priceRange" content="$">
                            <meta itemprop="telephone" content="(844) 466-6979">
                        </div>

                        <h2 class="title">Better Convenience</h2>
                        <blockquote>

                            <div class="review" itemprop="reviewRating" itemscope=""
                                itemtype="http://schema.org/Rating">
                                <p itemprop="description">
                                    “Huge time saver. They deliver the prescription to your address within a 3 hour time
                                    window. No more standing in line or sitting in your idling car waiting."
                                </p>
                                <meta itemprop="ratingValue" content="5">
                                </meta>
                            </div>

                            <div class="imageblock">
                                <img itemprop="image" data-toggle-class="active"
                                    data-src="<?php echo get_template_directory_uri(); ?>/library/images/1.png"
                                    class="lozad" alt="Photo of NowRx Pharmacy customer Tony M. smiling">
                            </div>

                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <h3 class="name" itemprop="name ">Tony M.</h3>
                                <div class="usertitle">
                                    NowRX Customer
                                </div>
                            </span>

                        </blockquote>
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
                    No Signup Required. No Hidden Fees.
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Just A Better Pharmacy
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/get-started/" class="rx-btn rx-dg">
                        Get Started
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="mailto:info@nowrx.com" class="alink">info@nowrx.com</a> and we will be happy to help.
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
                                The proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                about
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
                                How long does delivery take?
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
                    Visit our FAQ
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

<section class="in-the-news padded-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x cellblock">
            <div class="large-12 cell">
                <div class="text-center">
                    <div class="rvl">
                        <h2>NowRx Pharmacy Delivery Blog</h2>
                    </div>
                </div>
                <div class="rvl">
                    <div class="grid-x grid-padding-x">
                        <?php query_posts($query_string . '&posts_per_page=3&order=DESC'); ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="large-4 cell">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), ''); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark"
                                title="<?php the_title_attribute(); ?>"><img class="border-styled lozad"
                                    style="margin-bottom: 1rem;" data-src="<?php echo $image[0]; ?>"
                                    alt="<?php the_title_attribute(); ?>"></a>
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark"
                                    title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <?php endwhile;
                            endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>