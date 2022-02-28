<?php get_header(); ?>

<section class="blog" id="blog" style="padding-top: 4rem;">
  <div class="grid-container container-featured-posts">
    <div class="grid-x grid-padding-x headline-container">
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
      <div class="large-8 large-offset-2 cell text-center">
        <h1 class="headline"><?php echo $titleText ?></h1>
        <p><?php echo $subText; ?></p>
      </div>


    </div>
    <div class="grid-x grid-margin-x data-equalizer data-equalize-on='medium' id='test-eq'">
      <!-- &tag_id=29 -->
      <!-- ^ Featured tag id -->
      <!-- &cat=2 -->

      <!-- ^ "News" category -->
      <!-- &cat=28 -->
      <!-- ^ "Blog" category -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

      $cat_id = get_query_var('cat');
      $category = get_category( $cat_id );
      // var_dump($category->slug);
      if (!has_category($category->slug)){
        continue;
      }
      ?>

      <div class="large-4 cell featured-post--card">
        <div class="">
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),''); ?>
            <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="" style="margin-bottom: 1rem;" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>"></a>
          <?php endif; ?>
          <div class="featured-post-link-title-container">
            <h5><a class="featured-post-link-title" href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="grid-container container-recent-posts">


    <div class="grid-x grid-padding-x pagination">
      <div class="large-8 large-offset-2 cell text-center">
        <?php
        bones_page_navi();
        ?>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
