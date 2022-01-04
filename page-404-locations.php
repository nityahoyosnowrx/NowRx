<?php get_header(); ?>


<!-- Event snippet for Form Completion conversion page -->
<script>
gtag('event', 'conversion', {
    'send_to': 'AW-875503484/Bj1NCMmPzboBEPy-vKED'
});
</script>

<main id="main" class="main-class" style="margin: 120px 0 0;" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <section class="article">
        <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">

                <header class="article-header tynk locations-header page404">
				<div class="imageblock">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-National-Map-Small.png"
                            alt="USA Map" width="300px" height="300px" class="pic">
                    </div>
                    <div class="content">
                        <div class="rvl">
                            <span class="subheading">
                                It looks like we do not have a NowRx location in your area.
                            </span>
                        </div>
                        <div class="rvl">
                            <h1 class="page-title" itemprop="headline">
                                Suggest a location below and we will be there before you know it.
                            </h1>
                        </div>


                        <div class="rvls">
                            <div class="btn-container">
                                <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0" >Suggest a Location</a>
                                <a class="rx-btn rx-txt mrb" href="<?= get_site_url(); ?>/locations">Return to Locations Page</a>
                            </div>
						</div>


                        <div class="rvl">
                            <span class="follow-links">
                                <div class="txt">
									Follow NowRx Pharmacy On Social Media:
									<div class="l">
									<a href="https://www.facebook.com/NowRx" class="li" target="_blank">Facebook</a> <a href="https://www.instagram.com/nowrxpharmacy" class="li" target="_blank">Instagram</a> <a href="https://www.linkedin.com/company/nowrx" class="li" target="_blank">LinkedIn</a> <a href="https://twitter.com/nowrx" class="li" target="_blank">Twitter</a>
									</div>
                                </div>
                            </span>
                        </div>

                    </div>

                </header>
            </div>


        </article>

    </section>





    <?php include('section-visitblock.php'); ?>


<!-- FAQ -->
<?php get_template_part('components/section-faq-flip'); ?>


    <?php include('section-visitfaq.php'); ?>



</main>

<?php get_footer(); ?>