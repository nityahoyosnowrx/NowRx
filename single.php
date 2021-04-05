<?php get_header(); ?>

<section class="blog" id="blog">

    <main id="main" class="" role="main">

        <div class="grid-container">

            <div class="large-12 cell">

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
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
								</p>
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

                                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>

                                                <img class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                                    data-src="<?php echo $image[0]; ?>"
                                                    alt="<?php echo get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true ); ?>" />

                                                <?php else: ?>

                                                <img class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                                    data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                    alt="<?php  the_title();  ?>" />

                                                <?php endif; ?>

                                            </span>

                                        </a>

                                        <a href="<?php the_permalink(); ?>" class="MostPopular-link title">
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

                    	<?php 
						// GET TAGS BY POST_ID
 						$tags = get_the_tags($post->ID);  ?>

                    <ul class="cloudTags">
                        <li>
                            <span class="title">Tags</span>
                        </li>
                        <?php foreach($tags as $tag) :  ?>
							<li>
								<a class="btn btn-warning" href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
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
                            Just A Better Pharmacy
                        </h2>
                    </div>
                    <div class="rvl">
                        <div class="btn-container">
                            <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/" class="rx-btn rx-dg">
                                Get Started
                            </a>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="small-block">
                            Still have questions about how to get started with NowRx Pharmacy? Email us at <a
                                href="mailto:info@nowrx.com" class="alink">info@nowrx.com</a> and we will be happy to
                            help.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>

</section>

<?php get_footer(); ?>