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
    <?php // end article header ?>


    <div class="blog-content">
        <div class="article-data">
            <div class="article-time">
                <time data-testid="published-timestamp">
                    Published <?php echo get_the_date( 'D, M d Y - h:i a' ); ?>
                </time>
            </div>

            <?php $author_id = get_the_author_meta( 'ID' ); ?>


            <div class="articleheader-container">

                <div class="author-info">
                    <span>
                        <?php if(get_field( "author_image" )): ?>
                        <div class="author-portrait" title="<?php if(get_field( "author_name" )): ?>
              <?php echo get_field( "author_name" ); ?>
            <?php else: ?>
              <?php echo get_the_author_meta( 'nickname', $author_id ); ?>
            <?php endif; ?>" style="background-image: url(<?php echo get_field( "author_image" ); ?>);"></div>
                        <?php else: ?>
                        <div class="author-portrait" title="<?php if(get_field( "author_name" )): ?>
              <?php echo get_field( "author_name" ); ?>
            <?php else: ?>
              <?php echo get_the_author_meta( 'nickname', $author_id ); ?>
            <?php endif; ?>"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/phil.webp');">
                        </div>
                        <?php endif; ?>

                    </span>


                    <div class="author-box">

                        <span href="#" class="author-name">
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


            <?php global $wp; ?>

            <div class="share-to">

                <span class="title">Share with friends:</span>

                <div class="social-icons">
                    <!-- twitter -->
                    <a target="_blank"
                        href="http://twitter.com/share?text=Check out this post <?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>&hashtags=nowrx,pharmacy,blog"
                        class="social-a">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                            xml:space="preserve">
                            <title>twitter</title>
                            <g>
                                <g>
                                    <path
                                        d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <!-- facebook -->
                    <a href="https://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                        class="social-a">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Bold" enable-background="new 0 0 24 24" height="512"
                            viewBox="0 0 24 24" width="512">
                            <title>facebook</title>
                            <path
                                d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" />
                        </svg>
                    </a>
                    <!-- linkedin -->
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                        class="social-a">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Bold" enable-background="new 0 0 24 24" height="512"
                            viewBox="0 0 24 24" width="512">
                            <title>linkedin</title>
                            <path
                                d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z">
                            </path>
                            <path d="m.396 7.977h4.976v16.023h-4.976z"></path>
                            <path
                                d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z">
                            </path>
                        </svg>
                    </a>

                    <!-- email -->
                    <a href="mailto:?subject=I wanted you to see this post <?php echo get_the_title(); ?> &amp;body=Find at it at <?php echo get_permalink(); ?>."
                        title="Share by Email" class="social-a">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 230.17 230.17"
                            style="enable-background:new 0 0 230.17 230.17;" xml:space="preserve">
                            <g>
                                <path
                                    d="M230,49.585c0-0.263,0.181-0.519,0.169-0.779l-70.24,67.68l70.156,65.518c0.041-0.468-0.085-0.94-0.085-1.418V49.585z" />
                                <path
                                    d="M149.207,126.901l-28.674,27.588c-1.451,1.396-3.325,2.096-5.2,2.096c-1.836,0-3.672-0.67-5.113-2.013l-28.596-26.647   L11.01,195.989c1.717,0.617,3.56,1.096,5.49,1.096h197.667c2.866,0,5.554-0.873,7.891-2.175L149.207,126.901z" />
                                <path
                                    d="M115.251,138.757L222.447,35.496c-2.427-1.443-5.252-2.411-8.28-2.411H16.5c-3.943,0-7.556,1.531-10.37,3.866   L115.251,138.757z" />
                                <path d="M0,52.1v128.484c0,1.475,0.339,2.897,0.707,4.256l69.738-67.156L0,52.1z" />
                            </g>

                        </svg>
                    </a>

                </div>
            </div>
            <!-- social icons -->

            <div class="line-item"></div>

        </div>

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

                    <li><?php echo $sub_value; ?></li>


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

        <?php if (has_post_thumbnail( $post->ID ) ): ?>

        <?php
        //   $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'');
          ?>


        <figure class="article-featured-image">

            <!-- <picture data-test="picture" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 1340px)">
                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 1020px)">
                <source srcset="<?php echo $image[0]; ?>" media="(min-width: 760px)">
                <img itemprop="url" src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lozad">
            </picture> -->

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