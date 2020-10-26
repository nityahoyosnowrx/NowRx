<?php get_header(); ?>

<section class="blog" id="blog">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
      	<main id="main" class="" role="main"  itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<div class="main-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
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


				<div class="sidebar-articles">
				<div class="MostPopular-wrapper MostPopular-taboolaContainer">
					<div class="MostPopular-header">
						Trending Now
						<div class="MostPopular-headerDivider"></div>
					</div>
					<div class="MostPopular-slide">
						<ol class="MostPopular-list">

							<?php 
							// Example argument that defines three posts per page. 
							$args = array( 'posts_per_page' => 4 , 'order'=>'rand','tag' => 'featured',  ); 
							
							// Variable to call WP_Query. 
							$trendloop = new WP_Query( $args ); 
							
							if ( $trendloop->have_posts() ) : 
								// Start the Loop 
								while ( $trendloop->have_posts() ) : $trendloop->the_post(); 
								
							?>
							
							<li class="MostPopular-addIndex">

								<a href="<?php  the_permalink();  ?>" class="MostPopular-link">

									<span class="posthumb">

										<?php if ( has_post_thumbnail( $post->ID ) ): ?>

											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

												<img class="MostPopular-thumbnail transition-fade-appear-active" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />

										<?php else: ?>

												<img class="MostPopular-thumbnail transition-fade-appear-active" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php  the_title();  ?>" />

										<?php endif; ?>

									</span>

								</a>

								<a href="<?php the_permalink(); ?>" class="MostPopular-link">
									<?php the_title(); ?>
								</a>

								<div class="MostPopular-divider"></div>

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

				</div>
			</div>

			<div class="blog-content disclaimer-bottom">
            	<p class="text-small">
					<em>
						<?php _e('The contents of the NowRx Site, such as text, graphics, images, and other materials created by NowRx or obtained from NowRx\'s licensors, and other materials contained on the NowRx Site (collectively, "Content") are for informational purposes only.  Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment.  Always seek the advice of your physician or other qualified health provider with any questions you may have regarding any medical condition.  Do not ignore or delay seeking professional medical advice because of something you saw or read on the NowRx Site.','bonestheme'); ?>
					</em>
				</p>
          	</div>	




			  <section class="in-the-news padded-section">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<div class="newsletter-title">
						<h2>More from NowRX Pharmacy</h2>
						</div>
						<div class="grid-x grid-padding-x">

						<?php 
						// Example argument that defines three posts per page. 
						$args = array( 'posts_per_page' => 6 , 'orderby'=> 'date', 'order'=>'DESC' ); 
						
						// Variable to call WP_Query. 
						$the_query = new WP_Query( $args ); 
						
						if ( $the_query->have_posts() ) : 
							// Start the Loop 
							while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
							<div class="large-4 cell morefrom">
								<?php if (has_post_thumbnail( $post->ID )): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<img class="border-styled" style="margin-bottom: 1rem;" src="<?php echo $image[0]; ?>" alt="">
									</a>
								<?php else: ?>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<img class="border-styled" style="margin-bottom: 1rem;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php the_title_attribute(); ?>">
									</a>
								<?php endif; ?>

								<h5>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

									<?php echo wp_trim_words(get_the_title(), 7, '...'); ?>

										<span class="dateitem">
											<?php echo get_the_date( 'D, M n Y - h:i a' ); ?>
										</span>
									</a>
								</h5>
							</div>
						<?php
							// End the Loop 
							endwhile; 
						else: 
						// If no posts match this query, output this text. 
							_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
						endif; 
						
						wp_reset_postdata(); 
						?>


						</div>

						<!-- <div class="nextlink">
							<a href="<?php echo get_site_url(); ?>/blog/" class="next">
								View All Now RX Posts
								<span class="arrow-in">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-2x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
								</span>
							</a>
						</div> -->

					</div>
					</div>
				</div>
				</section>

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
