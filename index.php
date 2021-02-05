<?php get_header(); ?>


<main id="primary" class="site-main">

    <div class="grid-container pageblock">
        <header class="page">
      <h1>
      Health Tips, Medical Information, and Pharmacy Resources For You
      </h1>
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
            $query->query('post_type=post&posts_per_page=10' . '&paged=' . $paged);

            $postCount = 0;

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_id = get_the_author_meta('ID');
                    //  featured article
                    if ($postCount == 0) {

                        $args = array(
                            'tag' => 'featured',
                            'posts_per_page' => 1
                        ); ?>

                        <?php $recent_posts = new WP_Query($args); ?>

                        <?php if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        ?>


                                <article class="section featured-part">



                                    <div class="image">
                                        <span class="featuredtext">featured</span>

                                        <?php if (has_post_thumbnail($post->ID)) : ?>
                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                <img class="border-styled" style="" src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                <img class="border-styled" style="" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                   <div class="cnt">
                                   <h2><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h2>
                                    <div class="data">by <?php echo get_the_author_meta('nickname', $author_id); ?>,
                                        <?php echo get_the_date('D, M n Y - h:i a'); ?></div>
                                    <div class="content">
                                        <?php 
                                        // echo wp_trim_words(get_the_content(), 50, '...');  
                                        echo get_the_excerpt();
                                        ?>
                                        <div class="wd">
                                            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                        </div>
                                    </div>
                                   </div>
                                </article>

                    <?php
                            endwhile;

                        else :
                            echo "Nothing";
                        endif;
                        wp_reset_postdata();
                        // end featured article
                        $postCount++;
                        continue;
                    } elseif ($postCount == 1) {
                        echo '<div class="rightcolumn">';
                        echo '<h2 class="title">Recent Posts</h2>';
                    }

                    ?>

                    <article class="section <?php if ($postCount == 1 || $postCount == 2 || $postCount == 3) {
                                                echo "firsttwo";
                                            } ?>">

                        <div class="image">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                    <img class="border-styled" style="" src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                    <img class="border-styled" style="" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="contentblock">

                            <h2>
                                <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                            </h2>



                            <?php if ($postCount == 1 || $postCount == 2 || $postCount == 3) : ?>

                                <div class="content">
                                    <?php echo wp_trim_words(get_the_content(), 0, ''); ?>
                                    <div class="wd">
                                        <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                    </div>
                                </div>
                            <?php else : ?>
                                <!-- <div class="data">
                by <?php echo get_the_author_meta('nickname', $author_id); ?>, <?php echo get_the_date('d, M n Y'); ?>
              </div> -->
                                <div class="content">
                                    <?php echo wp_trim_words(get_the_content(), 0, ''); ?>
                                    <div class="wd">
                                        <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php

                    if ($postCount == 3) {
                        echo '</div>';
                    }
                    $postCount++;
                endwhile;
                ?>

                <?php //pass in the max_num_pages, which is total pages 
                ?>

                <nav class="pagination">
                    <?php pagination_bar($query); ?>
                </nav>

            <?php endif; ?>

            <?php //reset the following that was set above prior to loop
            $query = null;
            $query = $temp; ?>
        </div>
    </div>

</main><!-- #main -->


<?php get_footer(); ?>