<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
    <header class="article-header entry-header">
        <div class="post-cat">
            <?php
            $categories = get_the_category();
            if ( !empty( $categories ) ) { ?>
                <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="ArticleHeader-eyebrow"><?php echo esc_html( $categories[0]->name ); ?></a>
            <?php } ?>
        </div>
        <h1 class="entry-title single-title">
            <?php the_title(); ?>
        </h1>
        <div class="article-time">
            <time data-testid="published-timestamp">
                Published <?php echo get_the_date( 'D, M d Y - h:i a' ); ?>
            </time>
        </div>
        <?php $author_id = get_the_author_meta( 'ID' ); ?>
        <div class="articleheader-container">
            <div class="author-info">
                <div class="author-box">
                    <span href="#" class="author-name">
                        Written by
                        <?php if(get_field( "author_name" )): ?>
                            <?php echo get_field( "author_name" ); ?>
                        <?php else: ?>
                            <?php echo get_the_author_meta( 'nickname', $author_id ); ?>
                        <?php endif; ?>
                    </span>
                    <?php if(get_field( "author_meta" )): ?>
                        <span class="author-twitter" target="_blank">
                            <?php echo get_field( "author_meta" ); ?>
                        </span>
                    <?php else: ?>
                        <a href="mailto:<?php echo get_the_author_meta( 'email', $author_id ); ?>"
                            class="author-twitter" target="_blank">
                            <?php echo get_the_author_meta( 'email', $author_id ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="line-item"></div>
        <div class="share-to">
                <span class="title">Share with friends:</span>
                <div class="social-icons">
                    <!-- twitter -->
                    <a target="_blank"
                        href="http://twitter.com/share?text=Check out this post <?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>&hashtags=nowrx,pharmacy,blog"
                        class="social-a">
                        <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="">
                    </a>
                    <!-- facebook -->
                    <a href="https://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                        class="social-a">

                        <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="">
                    </a>
                    <!-- linkedin -->
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                        class="social-a">

                        <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="">
                    </a>
                    <!-- email -->
                    <a href="mailto:?subject=I wanted you to see this post <?php echo get_the_title(); ?> &amp;body=Find at it at <?php echo get_permalink(); ?>."
                        title="Share by Email" class="social-a">
                        <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="">
                    </a>
                </div>
            </div>
            <!-- social icons -->
    </header>
    <?php // end article header ?>
    <div class="blog-content">
        <!-- key points -->
        <?php
        // Check rows exists.
            if( have_rows('key_points') ):
            ?>
                <div class="key-items">
                    <span class="title-section">
                        Key Points
                    </span>
                    <div class="bullet-points">
                        <ul class="list">
                            <?php
                            // Loop through rows.
                            while( have_rows('key_points') ) : the_row();
                                // Load sub field value.
                                $sub_value = get_sub_field('key_point');
                                ?>
                                <li>
                                    <?php echo $sub_value; ?>
                                </li>
                            <?php
                            // Do something...

                            // End loop.
                            endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
            <?php
            // No value.
            else :
                // Do something...
            endif;
            ?>
            <!-- key points -->
            <?php $image; if (has_post_thumbnail( $post->ID ) ): ?>
            <?php
            //   $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'');
            ?>
            <figure class="article-featured-image">

                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                <?php $imageThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                    <picture class="border-styled " data-test="picture" style="display: block; min-height: 1rem"
                        data-iesrc="<?php echo $imageThumbnail[0]; ?>"
                        data-alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">
                        <source srcset="<?php echo $image[0]; ?>" media="(min-width: 992px)">
                        <source srcset="<?php echo $imageThumbnail[0]; ?>" media="(min-width: 10px)">
                        <!-- NO img element -->
                        <!-- instead of img element, there will be the last source with the minimum dimensions -->
                        <img src="data:image/jpeg;base64,/some_lqip_in_base_64==" width="766" height="430">

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
        </section>
        <?php // end article section ?>
        <footer class="article-footer">
            <!-- <? //php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>
            <? //php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?> -->
        </footer>
        <?php // end article footer ?>
    </div>
    <?php //comments_template(); ?>
</article> <?php // end article ?>