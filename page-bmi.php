<?php get_header(); ?>

<section class="bmi-calculator">
    <div class="padded-container">
        <div class="form-content">
            <h1 class="title">BMI Calculator</h1>
            <div class="description">
                This calculator provides body mass index (BMI) and the corresponding BMI weight status category for adults 20 years and older.
            </div>
            <div class="form">
                <span class="input-field">
                    <span class="label">Height</span>

                    <input type="text" class="input height-input">
                    <label for="ft">ft</label>

                    <input type="text" class="input height-in-input">
                    <label for="in">in</label>
                </span>
                <span class="input-field">
                    <span class="label">Weight</span>

                    <input type="text" class="input weight-input">
                    <label for="lbs">lbs</label>
                </span>
                <span class="input-submit">
                    <button class="submit rx-btn" id="btn">Calculate</button>
                </span>

                  <div id="result"></div>
            </div>
        </div>
        <div class="info">
            <ul>
                <li>Less than 18.5 = Underweight</li>
                <li>Between 18.5 - 24.9 = Healthy Weight</li>
                <li>Between 25 - 29.9 = Overweight</li>
                <li>Over 30 = Obese</li>
            </ul>

            <div class="social">
                <a href="" class="link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                </a>
            </div>

            <img src="https://medical.azureedge.net/images/0aa8713b-421f-445f-996a-0aed1695b5a2.jpg" alt="">
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
// BMI = (weight) / (height * height)
window.onload = () => {
    let button = document.querySelector("#btn");

    // Function for calculating BMI
    button.addEventListener("click", calculateBMI);
};

function calculateBMI() {

    let heightFt = parseInt(document.querySelector(".height-input").value);
    let heightIn = parseInt(document.querySelector(".height-in-input").value);
    let weight = parseInt(document.querySelector(".weight-input").value);

    const testConversion = (feet, inches) => {
        const cmTotal = feet * 30.48 + inches * 2.54;
        return cmTotal;
    };

    let conversion = testConversion(heightFt, heightIn);

    let result = document.querySelector("#result");

    if (conversion === "" || isNaN(conversion)) {
        result.innerHTML = "Provide a valid Height!";
    }
    else if (weight === "" || isNaN(weight))
        result.innerHTML = "Provide a valid Weight!";
    else {
        // Fixing upto 2 decimal places
        let bmi = (weight / ((conversion * conversion) / 10000)).toFixed(2);
        // Dividing as per the bmi conditions
        if (bmi < 18.6) result.innerHTML =
            `Under Weight : <span>${bmi}</span>`;
        else if (bmi >= 18.6 && bmi < 24.9)
            result.innerHTML =
                `Normal : <span>${bmi}</span>`;
        else result.innerHTML =
            `Over Weight : <span>${bmi}</span>`;
    }
}

</script>



<?php get_footer(); ?>