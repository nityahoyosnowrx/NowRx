<?php get_header(); ?>

<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>
<?php
    $author_id = get_the_author_meta( 'ID' );
?>

<?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

    $id = get_the_ID();
    $yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );

    global $post;
    $currentPage = $post->ID;
?>

<script type="application/ld+json" >
{
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php the_permalink(); ?>"
    },
    "headline": "<?php the_title(); ?>",
    "articleBody": "<?php echo esc_attr(   strip_tags(get_the_content()) ); ?>",
    "image": "<?php echo $image[0]; ?>",
    "author": {
        "@type": "Person",
        "name": "<?php echo get_the_author_meta( 'nickname', $author_id ); ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "NowRx Pharmacy",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Logo.webp"
        }
    },
    "datePublished": "<?php echo get_the_date( 'D, M d Y - h:i a' ); ?>",
    "dateModified": "<?php echo get_the_modified_date(); ?>"
}
</script>

<?php endwhile; endif; ?>

<section class="blog" id="blog">
    <main id="main" class="" role="main">
        <div class="grid-container">
            <div class="large-12 cell">
                <div class="main-content">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <?php get_template_part( 'post-formats/format', get_post_format() ); ?>
                        <?php
                        endwhile; ?>
                    <?php
                    else :
                    ?>

                    <article id="post-not-found" class=" cf">
                        <header class="article-header">
                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
                            </p>
                        </section>
                        <footer class="article-footer">
                            <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                        </footer>
                    </article>

                    <?php
                    endif;
                    ?>

                    <div class="sidebar-articles">
                        <div class="sidebarauthor">
                            <div class="article-data">
                                <?php global $wp; ?>
                            </div>
                        </div>
                        <div class="MostPopular-wrapper MostPopular-taboolaContainer">
                            <div class="MostPopular-header">
                                Trending Now
                                <div class="MostPopular-headerDivider"></div>
                            </div>
                            <div class="MostPopular-slide">
                                <ol class="MostPopular-list">
                                    <?php
                                    // Example argument that defines three posts per page.
                                    $args = array( 'posts_per_page' => 4 , 'order'=>'rand','tag' => 'trending',  );

                                    // Variable to call WP_Query.
                                    $trendloop = new WP_Query( $args );

                                    if ( $trendloop->have_posts() ) :
                                        // Start the Loop
                                        while ( $trendloop->have_posts() ) : $trendloop->the_post();
                                        if($currentPage == get_the_ID()){
                                            continue;
                                        }
                                    ?>

                                    <li class="MostPopular-addIndex">

                                        <a href="<?php echo get_the_permalink(); ?>"
                                            class="MostPopular-link title">
                                            <?php the_title(); ?>
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
                                    </li>
                                    <?php
                                    // End the Loop
                                    endwhile;
                                    else:
                                    // If no posts match this query, output this text.
                                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                                </ol>
                            </div>
                        </div>
                        <div class="banner-call">
                            <h3 class="title">
                                Get health tips, medication info, and pharmacy resources right to your inbox.
                            </h3>
                            <div class="btnc">
                                <a href="<?php echo get_site_url(); ?>/blog/subscribe/" class="button secondary rounded shadow rx-btn">
                                Learn More
                                </a>
                            </div>

                        </div>
                    </div>
                    <span class="dislcaimerbot">
                        <b>Disclaimer</b>: This website does not provide medical advice and the information provided throughout the website, including but not limited to, text, graphics, images, and other material are for informational purposes only. It is not intended to be a substitute for professional medical advice, diagnosis, or treatment and you should always seek the advice of your physician or other qualified health care providers if you have questions regarding a medical condition or treatment or before starting or stopping any healthcare or health related regimen. Do not ever disregard or delay seeking medical advice from a qualified professional because of something you have read on <a href="https://nowrx.com">nowrx.com</a>.
                    </span>


                    <div id="cmt-template">
                    <?php comments_template(); ?>
                    </div>

                    <?php
                    // GET TAGS BY POST_ID
                    $tags = get_the_tags($post->ID);
                    ?>
                    <ul class="cloudTags">
                        <li>
                            <span class="title">
                                Tags
                            </span>
                        </li>
                        <?php
                        if (is_array($tags) || is_object($tags))
                        foreach($tags as $tag) :  ?>
                        <li>
                            <a class="btn btn-warning" href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>/">
                                <?php print_r($tag->name); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php if ( has_post_format( 'quote' )) { ?>
                    <div class="blog-content disclaimer-bottom">
                        <p class="text-small">
                            <em>
                                <?php _e('The contents of the NowRx Site, such as text, graphics, images, and other materials created by NowRx or obtained from NowRx\'s licensors, and other materials contained on the NowRx Site (collectively, "Content") are for informational purposes only.  Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment.  Always seek the advice of your physician or other qualified health provider with any questions you may have regarding any medical condition.  Do not ignore or delay seeking professional medical advice because of something you saw or read on the NowRx Site.','bonestheme'); ?>
                            </em>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- visit faq -->
        <section class="visit-faq">
            <div class="container">
                <div class="content">
                    <div class="rvl">
                        <span class="sub-headline">
                            No Signup Required. No Hidden Fees.
                        </span>
                    </div>
                    <div class="rvl">
                        <h2 class="sec-title">
                            Free Pharmacy Delivery
                        </h2>
                    </div>
                    <div class="rvl">
                        <div class="btn-container">
                            <a href="<?= get_site_url(); ?>/" class="rx-btn rx-dg">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="small-block">
                            Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="mailto:info@nowrx.com" class="alink">info@nowrx.com</a> and we will be happy to
                            help.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</section>



<?php get_footer(); ?>