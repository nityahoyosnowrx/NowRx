<?php get_header(); ?>

<section class="grid-container pill-calculator">

    <div class="container">
        <div class="content">
            <div class="main-block">
                <header>
                    <h1 class="title">Prescription Refill Calculator</h1>
                    <p class="subtext">
                    Select the date you last filled your prescription and the number of days supplied to find your next prescription refill date.
                    </p>
                </header>

                <div class="warning"></div>

                <div class="mobile-calendar">
                <div class="date-picker">
                    <span class="title">Select Last Date Filled:</span>
                    <div class="flatpickr-calendar"></div>
                </div>
                </div>
                <div class="dayfill">
                    <div class="text-title">Number of Days Supplied:</div>
                    <div class="time-selector">

                        <span class="days">
                            <input class="daysfills" type="number">
                            <span class="days-label">Days</span>
                        </span>

                    </div>
                </div>
                <div class="calculate">
                    <button class="bnt-calc">Calculate</button>
                </div>
            </div>

            <div class="info">
                <div class="display-block">
                <div class="date-picker">
                    <span class="title">Select Last Date Filled:</span>
                    <div class="flatpickr-calendar"></div>
                </div>

                    <span class="title-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
                    </span>
                </div>

                <div class="results">
                    <header class="title">
                        <h2 class="title">Results</h2>
                    </header>
                    <div class="result"></div>
                    <div class="text">
                    Do not wait to run out of medication to request a prescription refill. Visit <a href="<?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/"><?php echo get_site_url(); ?>/refill-and-transfer-prescriptions/</a> to request free delivery of your prescriptions today!

                    </div>
                    <span class="disclaimer">
                        *This assessment is being provided solely for informational purposes and should never take the place of advice from a qualified health professional.
                    </span>
                    <div class="reset-container">
                        <button class="reset">Select Different Date or Days</button>
                    </div>
                </div>

            </div>


        </div>
    </div>

</section>



<div class="block-subscribe">
    <div class="subscribe-blockitem">
        <header class="title">
            <h2 class="title">Subscribe to Healthcare in 5</h2>
            <p>
                Get blogs, tips, and discounts related to pharmacy delivered right to your inbox each week.
            </p>
            <div class="btnc">
                <a href="<?php echo get_site_url(); ?>/blog/subscribe/" class="button secondary rounded shadow rx-btn">
                    Learn More
                </a>
            </div>
        </header>
    </div>
</div>

<article>

    <section class="blogmain">
        <div class="bogcontainer">

            <header class="page">
                <h2>Read the latest from NowRx</h2>
                <div class="subtitle">Stay informed with recent announcements, best practices and insights into health and perscription delivery.</div>
            </header>

            <div class="blog-posts">

                <?php
                //get the current page
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                //pagination fixes prior to loop
                $query = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'ASC'
                ));

                //set our query's pagination to $paged
                $query->query('post_type=post&posts_per_page=8&paged=' . $paged);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>

                        <article class="section-blog-post">

                            <div class="image">
                                <?php if (has_post_thumbnail($post->ID)) : ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img class="border-styled lozad" data-src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img class="border-styled" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="contentblock">
                                <h2>
                                    <a href="<?php the_permalink(); ?>" class="readlink">
                                        <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                                    </a>
                                </h2>
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>" class="readlink">
                                        <?php echo mb_strimwidth(wp_trim_words(get_the_content(), 100, ''), 0, 65, '...'); ?>
                                    </a>
                                    <div class="wd">
                                        <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
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
</article>




<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    $(".flatpickr-calendar").flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            console.log(dateStr)
            dateSelected = dateStr;
        }
    });

    $(".reset").on('click', function(e) {
        $('.results').removeClass('active');
        $('.display-block').show();
    });

    $(".bnt-calc").on('click', function(e) {
        let warningArray = [];
        let inputVal = $('.daysfills').val();

        $('.warning').html('');

        if( !inputVal) {
            console.log( inputVal);
            warningArray.push('daysfilled');
        }

        if( typeof dateSelected === 'undefined' ) {
            console.log(typeof dateSelected);
            warningArray.push('dateselected');
        }

        if(warningArray.includes('daysfilled')){
            $('.warning').append('Please set a number for number of days filled. </br>');
        }
        if(warningArray.includes('dateselected')){
            $('.warning').append('Please select a date.');
        }

        if(warningArray.length == 0){
            let num = $('input.daysfills').val();
            let value = parseInt(num);
            value++;
            dateMain = new Date(dateSelected);

            let now = new Date(dateMain);
            now = new Date(now.toDateString());

            console.log(dateMain)

            const inFiveDays = new Date(new Date(now).setDate(now.getDate() + value)).toDateString();
            $('.results').addClass('active');
            $('.display-block').hide();
            $('.result').html("Refill date calculated: " + inFiveDays.toLocaleString());
        }


    });
</script>



<?php get_footer(); ?>