<?php
/*
 * Template Name: Blog
 * Template Post Type: post, page, product
 */
 ?>

<?php get_header(); ?>

<section class="blog" id="blog" style="padding-top: 2rem;">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
      	<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" style="background: #ffffff; margin-bottom: 2rem; box-shadow: 10px 0px 50px 0px rgba(0,0,0,0.15);">

      		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php
							/*
							 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
							 *
							 * So this function will bring in the needed template file depending on what the post
							 * format is. The different post formats are located in the post-formats folder.
							 *
							 *
							 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
							 * A SPECIFIC POST FORMAT.
							 *
							 * If you want to remove post formats, just delete the post-formats folder and
							 * replace the function below with the contents of the "format.php" file.
							*/
							get_template_part( 'post-formats/format', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>
          <div class="blog-content" style="padding-top: 0px;">
            <p class="text-small"><em>The contents of the NowRx Site, such as text, graphics, images, and other materials created by NowRx or obtained from NowRx's licensors, and other materials contained on the NowRx Site (collectively, "Content") are for informational purposes only.  Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment.  Always seek the advice of your physician or other qualified health provider with any questions you may have regarding any medical condition.  Do not ignore or delay seeking professional medical advice because of something you saw or read on the NowRx Site.</em></p>
          </div>
      	</main>
    	</div>

    	<!-- <div class="large-4 cell">
        <div class="">
          <h4>Want to live your best life?</h4>
          <p>Get the NowRx Weekly newsletter for health tips, wellness updates and more.</p>
          <p><a class="button rounded small" href="">Subscribe via Email</a></p>
        </div>
        <div class=""> -->
          <?//php get_sidebar(); ?>
        <!-- </div>
      </div> -->

    </div>
  </div>
</section>

<?php get_footer(); ?>
