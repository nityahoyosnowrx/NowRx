<?php get_header(); ?>

<section class="blog" id="blog" style="padding-top: 4rem;">
  <div class="grid-container container-featured-posts">
    <div class="grid-x grid-padding-x headline-container">
      <div class="large-8 large-offset-2 cell text-center">
        <h1 class="headline">NowRx in the News</h1>
        <p>For all press inquiries, <a href="mailto:NowRxPress@activapr.com">click here</a>.</p>
      </div>
    </div>
    <div class="grid-x grid-margin-x data-equalizer data-equalize-on='medium' id='test-eq'">
      <!-- &tag_id=29 -->
      <!-- ^ Featured tag id -->
      <!-- &cat=2 -->

      <!-- ^ "News" category -->
      <!-- &cat=28 -->
      <!-- ^ "Blog" category -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-4 cell featured-post--card">
        <div class="">
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),''); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="" style="margin-bottom: 1rem;" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>"></a>
          <?php endif; ?>
          <div class="featured-post-link-title-container">
            <h5><a class="featured-post-link-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="grid-container container-recent-posts">
    <div class="grid-x grid-padding-x headline-container">
      <div class="large-8 large-offset-2 cell text-center">
        <h2>Recent NowRx in the News</h2>
      </div>
    </div>
    <div class="grid-x grid-margin-x data-equalizer data-equalize-on='medium' id='test-eq2'">
      <?php query_posts($query_string.'&posts_per_page=8&cat=2&order=DESC'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-3 cell post--card">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),''); ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="" style="margin-bottom: 1rem;" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>"></a>
        <?php endif; ?>
        <div class="post-link-title-container">
          <p><a class="post-link-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="grid-x grid-padding-x pagination">
      <div class="large-8 large-offset-2 cell text-center">
        <?php bones_page_navi(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
