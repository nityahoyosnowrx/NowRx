<?php get_header();
// Template Name: telehealth/register-for-telehealth/thank-you/
?>



<style>
main#main {
    margin: 140px auto 0;
}
@media screen and (max-width:992px){
    main#main {
    margin: 90px auto 0;
}
}
</style>
<main id="main" class="main-class" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <section class="article">
        <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">

                <header class="article-header tynk registerfornowprepthankyou">

                    <div class="content">
                        <div class="rvl">
                            <span class="subheading">
                                Thank you for choosing NowRx Telehealth
                            </span>
                        </div>
                        <div class="rvl">
                            <h1 class="page-title" itemprop="headline">
                                You have successfully signed up for NowRx Telehealth
                            </h1>
                        </div>
                        <div class="rvl">
                            <p>
                            Please check your email for a link to download the NowRx Telehealth App or tap the App Store or Google Play Icon below. If you have any questions or need help signing up, please contact <a href="mailto:telehealth@nowrx.com">telehealth@nowrx.com</a>
                            </p>
                        </div>
                        <div class="rvl">
                            <div class="donl">
                                <a target="_blank" href="https://apps.apple.com/us/app/nowrx-telehealth/id1573059382" class="download">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/appleplay.png" alt="" class="pic">
                                </a>
                                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nowrx.telehealth" class="download">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" alt="" class="pic">
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

        </article>
    </section>


</main>

<?php get_footer(); ?>