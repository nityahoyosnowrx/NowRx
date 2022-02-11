<?php get_header(); ?>

<?php
if (has_post_thumbnail( $post->ID ) ):
?>
<?php
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');
?>

<section class="hero" style="background: #000 url('<?php echo $image[0]; ?>') no-repeat top center; -webkit-background-size: cover; background-size: cover; padding: 4rem 0px 3rem; color: #fff;">

<?php
endif;
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
</section>

<section id="content" class="grid-container">
    <main id="main" class="m-all t-2of3 d-5of7 cf standardpadding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <header class="article-header">
            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
        </header>
        <?php // end article header ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <section class="entry-content cf" itemprop="articleBody">

            <?php
            // the content (pretty self explanatory huh)
            the_content();
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ));
            ?>

            </section>
            <?php // end article section ?>

            <?php
            comments_template();
            ?>
        </article>
    <?php
        endwhile;
    endif;
    ?>
    </main>
</section>

<?php get_footer(); ?>