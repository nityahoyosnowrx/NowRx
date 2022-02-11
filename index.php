<?php get_header();

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
                                                    <picture class="border-styled lozad" style="display: block; min-height: 1rem" data-iesrc="<?php echo $imageThumbnail[0]; ?>" data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
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
                                                            echo wp_trim_words(get_the_title(), 12);
                                                        ?>
                                                </a>
                                            </h2>
                                        <?php if($count == 0):?>
                                            <div class="except">
                                                <?php
                                                $contentTrimmed =  wp_trim_words(get_the_content(), 50);
                                                echo mb_strimwidth($contentTrimmed, 0, 175, '..');

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
                    <h3 class="title">Most Popular</h3>
                        <?php
                        $queryskde = new WP_Query(array(
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'ASC',
                        ));
                        //set our query's pagination to $paged
                        $queryskde->query('post_type=post&posts_per_page=3&tag=trending');

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
                            <h2 class="title">Subscribe via Email</h2>
                        </header>
                        <!--[if lte IE 8]>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                        <![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script>
                        hbspt.forms.create({
                        region: "na1",
                        portalId: "5952677",
                        formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                        formInstanceId: "2fef",
                        });
                        </script>
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
                //custom loop using WP_Query
                $querybot = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array($latest_cpt[0]->ID),
                    'paged' => $paged
                ));

                //set our query's pagination to $paged
                // $querybot->query('post_type=post' . '&paged=' . $paged);

                if ($querybot->have_posts()) :
                    while ($querybot->have_posts()) : $querybot->the_post();


                    if(!is_paged()){
                        if($countbot == 0){
                            ?>
                            <div class="ctablock">
                                <a id="cta" class="cta_button wt-blog__cta--pink-red" href="https://nowrx.com/invest/" target="_blank" >
                                    <h3 >Own Shares of NowRx Through SeedInvest</h3>
                                    <span class="button secondary rounded shadow rx-btn">Learn More</span>
                                </a>
                            </div>
                            <?php

                        }
                    } else {
                        if($countbot == 1){
                    ?>
                    <div class="blockitem">
                        <header class="title">
                            <h2 class="title">Subscribe via Email</h2>
                        </header>
                        <!--[if lte IE 8]>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                        <![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script>
                        hbspt.forms.create({
                        region: "na1",
                        portalId: "5952677",
                        formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                        formInstanceId: "2fef",
                        });
                        </script>
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
                                                    if($countbot == 3 || $countbot == 4 || $countbot == 5){

                                                        echo  wp_trim_words(get_the_title(), 12);
                                                        // small items

                                                    } else{
                                                        echo  wp_trim_words(get_the_title(), 13);
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