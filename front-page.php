<?php get_header(); ?>

<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), ''); ?>
    <section class="hero" style="background: #000 url('<?php echo $image[0]; ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; padding: 4rem 0px; color: #fff;">
    <?php endif; ?>

    </section>


    <!-- hero -->
    <section class="hero-home">
        <div class="rvl">

            <!-- <img class="imageblock lozad" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" alt="prescription being delivered to mother" height="100px" width="450px"> -->

            <!-- <picture class="lozad imageblock" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" data-alt="prescription being delivered to mother" data-toggle-class="active">
                <source type="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" srcset="AdobeStock_91568410.webp">
                <source type="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" srcset="AdobeStock_91568410.jpeg">
                <img class="imageblock lozad" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" alt="prescription being delivered to mother" height="100px" width="450px">
            </picture> -->

                    <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" data-alt="prescription being delivered to mother" data-toggle-class="active">
                        <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg" class="imageblock" height="100px" width="450px">
                    </picture>

        </div>

        <div class="container">
            <div class="content">

                <!-- content -->
                <div class="column-half content-col">



                    <div class="rvls">
                        <span class="sub-headline">
                            A Better Pharmacy Delivered
                        </span>
                    </div>

                    <div class="rvls">
                        <h1>
                            Free Prescription
                            Delivery in Hours
                        </h1>
                    </div>

                    <div class="rvls">
                        <p>NowRx is a new kind of local pharmacy that uses modern technology to provide a better pharmacy
                            experience.</p>
                    </div>

                    <div class="rvls">
                        <div class="btn-container">
                            <a class="rx-btn" href="<?= get_site_url(); ?>/get-started/">Get Started</a>
                            <a class="rx-btn mrb" href="<?= get_site_url(); ?>/how-it-works/">How it Works</a>
                        </div>
                    </div>




                </div>

                <!-- image -->
                <div class="column-half image-col">

                    <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" data-alt="Free Prescription Delivery in Hours" data-toggle-class="active">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp">
                        <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.jpeg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410lowres.jpg" class="orbit-image" height="500px" width="650px">
                    </picture>
                </div>

            </div>
        </div>
    </section>


    <!-- companies -->
    <section class="featured-in-section">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell text-center">
                    <p>
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-cnbc.svg" alt="CNBC logo">
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-fortune.svg" alt="Fortune logo">
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-forbes.svg" alt="Forbes logo">
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-abc-7.svg" alt="ABC 7 logo">
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-business-insider.svg" alt="Business Insider logo">
                        <img height="100px" width="200px" data-toggle-class="active" class="lozad  featured-in-section-logo" data-src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-sfc2.svg" alt="San Francisco Chronicle logo">
                    </p>
                </div>
            </div>
        </div>
    </section>



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
                            <img data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png" alt="end Us Your Prescription" class="pic lozad">
                        </div>

                        <p>
                            <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
                            <strong>Existing Prescription: </strong>Text <a href="tel:844-466-6979" class="tellink">(844)
                                466-6979</a> or <a href="https://nowrx.com/get-started/" style="color:#fff;">Transfer Online
                                Here</a>.
                        </p>
                    </div>
                </div>


                <div class="hiw-cell cell large-4 text-center">
                    <div class="rvl">

                        <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
                        <div class="image">
                            <img data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png" alt="We Confirm Delivery" class="pic lozad ">
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
                            <img data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png" alt="Medication is Delivered" class="pic lozad">
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
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Pricing</h2>

                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                        “There's a reason every single review is five stars - This pharmacy is AMAZING! They
                                        actually look for discounts and coupons to offer the best rate possible.”
                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/3.png" class="lozad" alt="Lina W.">
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
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Service</h2>

                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                        "I am just gilding the lily with my 5 star review but companies that ACTUALLY
                                        PROVIDE
                                        CUSTOMER SERVICE are so rare in this day and age. These guys are awesome!"
                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/2.png" class="lozad" alt="Tanya S.">
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
                                <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png">
                                <meta itemprop="priceRange" content="$">
                                <meta itemprop="telephone" content="(844) 466-6979">
                            </div>

                            <h2 class="title">Better Convenience</h2>
                            <blockquote>

                                <div class="review" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                    <p itemprop="description">
                                        “Huge time saver. They deliver the prescription to your address within a 3 hour time
                                        window. No more standing in line or sitting in your idling car waiting.""
                                    </p>
                                    <meta itemprop="ratingValue" content="5">
                                    </meta>
                                </div>

                                <div class="imageblock">
                                    <img itemprop="image" data-toggle-class="active" data-src="<?php echo get_template_directory_uri(); ?>/library/images/1.png" class="lozad" alt="Tony M.">
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

    <div style="background: #e5f3fa; border-radius: 0 0 80px 0;">
        <section class="how-it-works panel--primary panel--cta">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell text-center prescription">
                        <div class="rvl">
                            <p class="pre-headline">Transfer Prescription to NowRX</p>
                        </div>
                        <div class="rvl">
                            <h2 class="headline">
                                <div>$20 Visa Card with</div> Prescription Delivery
                            </h2>
                        </div>

                        <div class="rvl">
                            <a href="https://nowrx.com/get-started/" class="button">Transfer My Prescriptions</a>
                        </div>

                    </div>
                    <div class="large-12 cell text-center ">
                        <p>
                            <div class="rvl">
                                <small>
                                    *Valid while supplies last, limit $100 per customer. Offer not valid under Medicare,
                                    Medicaid, or medication previously filled by NowRx.
                                </small>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
                        Visit our FAQ 
                    </h2>
                </div>
                <div class="rvl">
                    <div class="btn-container">
                        <a href="<?= get_site_url(); ?>/faqs/" class="rx-btn rx-dg">
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
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="border-styled lozad" style="margin-bottom: 1rem;" data-src="<?php echo $image[0]; ?>" alt=""></a>
                                        <?php endif; ?>
                                        <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
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