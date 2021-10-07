<?php get_header(); ?>

<main id="main" class="main-class">



    <section class="resource-sections hrline mainhead">
        <div class="container">
            <div class="content">
                <div class="context">
                    <h1 class="title">NowRx Patient Resources</h1>
                    <p>
                        Everything you need to get started with NowRx Pharmacy
                    </p>
                </div>
                <div class="blocks">
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">
                                <figure>

                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/getstartedicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy get started">
                                </figure>
                                <h2 class="title">

                                    Get Started
                                </h2>
                                <p>
                                    Get started with your first pharmacy delivery from NowRx Pharmacy.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/locations/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/locationsicon.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Locations
                                </h2>
                                <p>
                                    Find a local NowRx near you for free same day pharmacy delivery.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/faqs/">

                                <figure>

                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/faqimg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Frequently Asked Questions
                                </h2>
                                <p>
                                    View frequently asked questions or submit a question to our pharmacists.
                                </p>
                            </a>

                        </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/pricing/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pricingsvg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Pricing
                                </h2>
                                <p>
                                    Check a medication price to see what you could save with NowRx.
                                </p>
                            </a>

                        </div>
                    </div>

                    <!-- block -->
                    <div class="block">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/about-us/">

                                <figure>

                                   <img data-src="<?php echo get_template_directory_uri(); ?>/images/aboutimage.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    About Us
                                </h2>
                                <p>
                                    Learn more about the NowRx team and our company's vision for healthcare.
                                </p>
                            </a>

                        </div>
                    </div>

                    <!-- block -->
                    <div class="block  ">
                        <div class="contentblock">
                            <a href="<?= get_site_url(); ?>/contact-us/">

                                <figure>

                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/contentsvg.svg" class="pic limg lozad" height="100" width="100" alt="nowrx pharmacy locations icon">
                                </figure>
                                <h2 class="title">
                                    Contact NowRx
                                </h2>
                                <p>
                                    Submit our online form or talk with a live NowRx pharmacy team member.
                                </p>
                            </a>
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
                <span class="sub-headline">
                    No Signup Required. No Hidden Fees.
                </span>
                <h2 class="sec-title">
                    Free Pharmacy Delivery
                </h2>
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/" class="rx-btn rx-dg">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blogmain">
        <div class="bogcontainer    ">
            <header class="page">
                <h2>
                Read the latest from NowRx
                </h2>
                <div class="subtitle">Stay informed with recent announcements, best practices and insights into health and perscription delivery.</div>
            </header>
            <div class="blog-posts">
                <?php
            //get the current page
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            //pagination fixes prior to loop
            $temp =  $query;
            $query = null;
            //custom loop using WP_Query
            $query = new WP_Query(array(
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'ASC'
            ));
            //set our query's pagination to $paged
            $query->query('post_type=post&posts_per_page=8' . '&paged=' . $paged);
            $postCount = 0;
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();


?>
                <article class="section-blog-post">
                    <div class="image">
                        <?php if (has_post_thumbnail($post->ID)) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <img class="border-styled lozad" data-src="<?php echo $image[0]; ?>"
                                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                        </a>
                        <?php else : ?>
                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <img class="border-styled"
                                src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="contentblock">
                        <h2>
                            <a href="<?php the_permalink(); ?>/" class="readlink">
                                <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                            </a>
                        </h2>
                        <div class="content">
                            <a href="<?php the_permalink(); ?>/" class="readlink">
                                <?php echo mb_strimwidth(wp_trim_words(get_the_content(), 100, ''),0, 65, '...'); ?>
                            </a>
                            <div class="wd">
                                <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </article>

                <?php
                endwhile;
                ?>

                <nav class="pagination">
                    <?php pagination_bar($query); ?>
                </nav>
                <?php endif; ?>

            </div>
        </div>
    </section>




</main>

<?php get_footer(); ?>