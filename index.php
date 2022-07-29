<?php
get_header();

global $post;
$currentPage = $post->ID;
?>

<main id="primary" class="site-main">
    <div class="grid-posts">

        <div class="blog-container <?php if(is_paged()){echo'pagedinner';} ?>">

            <!-- main items -->
            <div class="mainblock ">
                    <?php if(!is_paged()){ ?>
                    <header class="page ">
                        <h1>
                            Health Tips, Medical Information, & Pharmacy Resources For You
                        </h1>
                    </header>
                    <?php } ?>
                <?php

                    $latest_cpt = get_posts("post_type=post&numberposts=1&tag=featured");


                    if(!is_paged()){

                    $currentpost = get_the_ID();
                    //get the current page
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $count = 0;
                    //custom loop using WP_Query
                    $queryMain = new WP_Query(array(
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tag' => 'featured',
                        'posts_per_page' => 1
                    ));


                    // $query->query('post_type=post&posts_per_page=1' . '&paged=' . $paged);

                    if ($queryMain->have_posts()) :
                        while ($queryMain->have_posts()) : $queryMain->the_post();

                            if($count == 0){
                                $currentpost = get_the_ID();
                            }
                        ?>
                                    <article class="blog-item">
                                        <div class="image">

                                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>

                                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                    <picture class="border-styled " style="display: block; min-height: 1rem">
                                                        <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
                                                        <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
                                                        <img src="data:image/jpeg;base64,/some_lqip_in_base_64==" width="766" height="430" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                                    </picture>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                    <img class="border-image"
                                                        src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                        alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                                </a>
                                            <?php endif; ?>

                                        </div>

                                        <div class="content">
                                            <h2>
                                                <a href="<?php the_permalink(); ?>" class="readlink">
                                                <?php
                                                            // echo wp_trim_words(get_the_title(), 12);
                                                            echo get_the_title();
                                                        ?>
                                                </a>
                                            </h2>
                                        <?php if($count == 0):?>
                                            <div class="except">
                                                <?php
                                                // $contentTrimmed =  wp_trim_words(get_the_content(), 150);
                                                // echo mb_strimwidth($contentTrimmed, 0, 230, '..');
                                                // echo $contentTrimmed;
                                                echo substr(get_post_meta($post->ID, '_yoast_wpseo_metadesc', true), 0, 999);

                                                ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="databot">
                                            <div class="data">
                                                <a href="<?php the_permalink(); ?>" class="readlink">
                                                    <?php echo get_the_date('F j Y - h:i a'); ?>
                                                </a>
                                            </div>
                                            <div class="wd">
                                                <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                            </div>
                                        </div>

                                        </div>
                                    </article>

                            <?php
                            $count++;
                        endwhile;
                    else :
                        echo "Nothing";
                    endif;
                    wp_reset_postdata();
                }
                    ?>

            </div>

            <?php if(!is_paged()){ ?>
           <!-- sideitems -->
                <div class="sideblocks">
                    <div class="top">
                    <h3 class="title"> Trending Now</h3>
                        <?php
                        $queryskde = new WP_Query(array(
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tag'=>'trending',
                            'posts_per_page' => 4,
                            'paged' => $paged,
                            'post__not_in' => array($latest_cpt[0]->ID),
                        ));
                        //set our query's pagination to $paged
                        // $queryskde->query('post_type=post&posts_per_page=3&tag=trending');
                        if ($queryskde->have_posts()) :
                            while ($queryskde->have_posts()) : $queryskde->the_post();

                            if($latest_cpt[0]->ID == get_the_ID()){
                                continue;
                            }
                            ?>

                                        <article class="side-blog-item">
                                            <div class="content">
                                                <a href="<?php the_permalink();  ?>" class="readlink">
                                                    <h2>
                                                        <?php
                                                        echo  wp_trim_words(get_the_title(), 8);

                                                        ?>
                                                    </h2>
                                                </a>
                                                <div class="clk">
                                                    <div class="data">
                                                        <a href="<?php the_permalink(); ?>" class="readlink">
                                                            <?php echo get_the_date('F j Y ');   ?>
                                                        </a>
                                                    </div>

                                                    <div class="content">
                                                        <div class="wd">
                                                            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                                        </div>
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
                        ?>
                    </div>

                    <div class="blockitem">
                        <header class="title">
                            <h2 class="title">Subscribe To Our Newsletter</h2>
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
        </div>
        <?php } ?>




        <div class="blog-container brbot  <?php if(is_paged()){echo'pagedinner';} ?>">
             <!-- main items -->
             <div class="mainblock">

            <?php
                //get the current page
                $countbot = 0;
                if(is_paged()){
                    $querybot = new WP_Query(array(
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array($latest_cpt[0]->ID),
                        'paged' => $paged,
                        'posts_per_page'=>10,
                    ));
                } else {
                    $querybot = new WP_Query(array(
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array($latest_cpt[0]->ID),
                        'paged' => $paged,
                        'posts_per_page'=>7,
                    ));
                }
                //custom loop using WP_Query


                //set our query's pagination to $paged
                // $querybot->query('post_type=post' . '&paged=' . $paged);

                if ($querybot->have_posts()) :
                    while ($querybot->have_posts()) : $querybot->the_post();

                    if($countbot == 3):
                    ?>
                    <?php if(!is_paged()): ?>
                    <div class="tags__block">
                                    <header class="tag__header">
                                        <h2 class="title">Explore More Topics</h2>
                                        <p>Ready to brush up on something new? We've got more to read right this way.</p>
                                    </header>
                                    <div class="tags__container">
                                    <?php
                        $tagField = get_field('tags', 'option');
                        // var_dump($tagField);
                        foreach ($tagField as $key => $value) {
                            ?>
                                <span class="tags__tag">
                                    <a href="<?php echo get_site_url(); ?>/tag/<?php echo $value->slug; ?>" class="tag__link">
                                        <?php echo $value->name; ?>
                                    </a>
                                </span>
                            <?php
                        }
                    ?>
                                    </div>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php

                    if(!is_paged()){
                        if($countbot == 3){
                            ?>
                            <div class="ctablock">
                            <div class="blockitem" id="cta-block">
                        <header class="title">
                            <h2 class="title">Subscribe To <br> Our Newsletter</h2>
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
                            <?php

                        }
                    } else {
                            if (($countbot % 3) == 0){
                    ?>
                        <div class="blockitem" >
                            <header class="title">
                                <h2 class="title">Subscribe To Our Newsletter</h2>
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

                    <?php  } } ?>

                            <article class="blog-item">
                                <div class="image">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                        <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <picture class="border-styled lozad" style="display: block; min-height: 1rem"
                                                data-iesrc="<?php echo $imageThumbnail[0]; ?>"
                                                data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
                                                <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
                                            </picture>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <img class="border-image"
                                                src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>
                                    <div class="content">
                                        <h2>
                                            <a href="<?php the_permalink(); ?>" class="readlink">
                                                <?php
                                                    if($countbot == 5 || $countbot == 6){

                                                        echo  wp_trim_words(get_the_title(), 112);
                                                        // small items
                                                    }else if($countbot == 3){
                                                        echo  get_the_title();

                                                    } else{
                                                        echo  wp_trim_words(get_the_title(), 131);
                                                    }

                                                ?>
                                            </a>
                                        </h2>
                                        <div class="databot">
                                            <div class="data">
                                                <a href="<?php the_permalink(); ?>" class="readlink">
                                                    <?php echo get_the_date('F j Y - h:i a'); ?>
                                                </a>
                                            </div>
                                            <div class="wd">
                                                <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                            </div>
                                        </div>

                                    </div>
                            </article>

                        <?php
                        $countbot++;
                    endwhile;

                else :
                    echo "Nothing";
                endif;
                ?>
                <nav class="pagination">
                <?php pagination_bar($querybot); ?>
            </nav>
            <?php
                wp_reset_postdata();
                ?>

           </div>
        </div>


    </div>

</main><!-- #main -->

<?php get_footer(); ?>