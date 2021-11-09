<?php get_header(); ?>

<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap">


<main id="primary" class="site-main">
    <div class="grid-posts">

        <div class="blog-container">

            <!-- main items -->
        <div class="mainblock">
            <header class="page">
                <h1>
                    Health Tips, Medical Information, & Pharmacy Resources For You
                </h1>
            </header>
            <?php

                $currentpost = get_the_ID();
                //get the current page
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $count = 0;
                //custom loop using WP_Query
                $query = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                //set our query's pagination to $paged
                $query->query('post_type=post&posts_per_page=1' . '&paged=' . $paged);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        if($count == 0){
                            $currentpost = get_the_ID();
                        }
                    ?>

                                <article class="blog-item">
                                <div class="image">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                        <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>

                                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <picture class="border-styled lozad" style="display: block; min-height: 1rem"
                                                data-iesrc="<?php echo $imageThumbnail[0]; ?>"
                                                data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
                                                <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
                                            </picture>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <img class="border-image"
                                                src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>
                                    <div class="content">
                                    <h2>
                                    <a href="<?php the_permalink(); ?>/" class="readlink">
                                            <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
                                        </a>
                                    </h2>
                                    <?php if($count == 0):?>
                                        <div class="except">
                                            <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                                        </div>
                                    <?php endif; ?>


                                        <div class="databot">
                                        <div class="data">
                                            <a href="<?php the_permalink(); ?>/" class="readlink">
                                                <?php echo get_the_date('F j Y - h:i a'); ?>
                                            </a>
                                        </div>
                                            <div class="wd">
                                                <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
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
                ?>

           </div>
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
                        $queryskde->query('post_type=post&posts_per_page=3&tag=featured');

                        if ($queryskde->have_posts()) :
                            while ($queryskde->have_posts()) : $queryskde->the_post();

                            ?>

                                        <article class="side-blog-item">
                                            <div class="content">
                                                <a href="<?php the_permalink();  ?>/" class="readlink">
                                                    <h2><?php echo mb_strimwidth(get_the_title(), 0, 70, '...');  ?></h2>
                                                </a>


                                                <div class="clk">
                                                <div class="data">
                                                    <a href="<?php the_permalink(); ?>/" class="readlink">
                                                        <?php echo get_the_date('F j Y ');   ?>
                                                    </a>
                                                </div>

                                                <div class="content">
                                                    <div class="wd">
                                                        <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
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
        <div class="blog-container brbot">
             <!-- main items -->
             <div class="mainblock">

            <?php
                //get the current page
                $countbot = 0;
                //custom loop using WP_Query
                $querybot = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                //set our query's pagination to $paged
                $querybot->query('post_type=post&offset=1' . '&paged=' . $paged);

                if ($querybot->have_posts()) :
                    while ($querybot->have_posts()) : $querybot->the_post();
                        if ( get_the_ID() == $currentpost ){
                            // continue;
                        }
                        if($countbot == 0){
                            ?>
                            <div class="ctablock">
                                <a id="cta" class="cta_button wt-blog__cta--pink-red" href="https-80a0-NIog" target="_blank" >
                                    <h3 >Funraising Is now Active</h3>
                                    <span class="button secondary rounded shadow rx-btn">Invest</span>
                                </a>
                            </div>
                            <?php

                        }
                    ?>

                                <article class="blog-item">
                                <div class="image">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                        <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>

                                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <picture class="border-styled lozad" style="display: block; min-height: 1rem"
                                                data-iesrc="<?php echo $imageThumbnail[0]; ?>"
                                                data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
                                                <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
                                            </picture>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                            <img class="border-image"
                                                src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>
                                    <div class="content">
                                    <h2>
                                    <a href="<?php the_permalink(); ?>/" class="readlink">
                                            <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
                                        </a>
                                    </h2>


                                        <div class="databot">
                                        <div class="data">
                                            <a href="<?php the_permalink(); ?>/" class="readlink">
                                                <?php echo get_the_date('F j Y - h:i a'); ?>
                                            </a>
                                        </div>
                                            <div class="wd">
                                                <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
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
                wp_reset_postdata();
                ?>

           </div>
        </div>

        <nav class="pagination">
                <?php pagination_bar($query); ?>
            </nav>
    </div>

</main><!-- #main -->

<?php get_footer(); ?>