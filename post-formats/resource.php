<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>


    <header class="article-header entry-header">

        <div class="post-cat">
            <?php $categories = get_the_category();
                if ( !empty( $categories ) ) { ?>
            <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) );?>"
                class="ArticleHeader-eyebrow"><?php echo esc_html( $categories[0]->name ); ?></a>
            <?php } ?>
        </div>

        <h1 class="entry-title single-title">
            <?php the_title(); ?>
        </h1>

    </header>

    <!-- key points -->

    <?php if (has_post_thumbnail( $post->ID ) ): ?>


    <figure class="article-featured-image">

        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
        <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>

        <!-- For an element to be caught, add a block type that is different from the inline and some min-height for correct caught into view -->
        <picture class="border-styled lozad" data-test="picture" style="display: block; min-height: 1rem"
            data-iesrc="<?php echo $imageThumbnail[0]; ?>"
            data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
            <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
            <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
            <!-- NO img element -->
            <!-- instead of img element, there will be the last source with the minimum dimensions -->
            <!-- for disabled JS you can set <noscript><img src="images/thumbs/04.jpg" alt=""></noscript> -->
        </picture>
        <figcaption>

            <?php
            $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
              if(!empty($get_description)){//If description is not empty show the div
              echo  $get_description;
              }
            ?>

        </figcaption>

    </figure>

    <?php endif; ?>


    <section class="entry-content cf">
        <?php
        the_content();
        wp_link_pages( array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
        ) );
      ?>
    </section> <?php // end article section ?>

    <footer class="article-footer">

        <!-- <? //php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

      <? //php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?> -->

    </footer> <?php // end article footer ?>

    </div>

    <?php //comments_template(); ?>

</article> <?php // end article ?>