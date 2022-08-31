<?php get_header(); ?>

<section class="blog" id="blog" >

  <?php
    $cat_id = get_query_var('cat',$post->ID);
    $category = get_category( $cat_id );
    if (has_category('news')){
      $titleText = 'NowRx in the News';
      $subText = 'For all press inquiries, <a href="mailto:NowRxPress@activapr.com">click here</a>.';
    } else {
      $titleText = 'Health Tips, Medical Information, & Pharmacy Resources For You';
      $subText = 'To subscribe to the NowRx blog, <a href="https://nowrx.com/blog/">click here.</a>';
    }
    ?>

<div class="header--content">





      <h1 class="title main--title"><?php echo get_the_archive_title(); ?></h1>
</div>



      <div class="article--loop">
      <?php
      $countbot = 0;
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
            $cat_id = get_query_var('cat');
            $category = get_category( $cat_id );
            // var_dump($category->slug);
            if(!empty($category->slug)){
              if (!has_category($category->slug)){
                continue;
              }
            }

            if (($countbot % 3) == 0){
              if($countbot == 0){
                $countbot++;
                continue;
              }
              ?>
<div class="blockitem interior">
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

              <?php  }

      ?>

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

                                                        echo  wp_trim_words(get_the_title(), 12);
                                                        // small items
                                                    }else if($countbot == 3){
                                                        echo  get_the_title();

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
      endif; ?>
      </div>

    <?php bones_page_navi(); ?>

</section>





<?php get_footer(); ?>
