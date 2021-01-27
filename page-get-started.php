<?php
/*
 Template Name: Get Started
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

<?php get_header(); ?>

<?php if (has_post_thumbnail($post->ID)) : ?>
	<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="get-started-intro" id="formgetstarted">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell get-started-form">
                <div class="sign-up-form-heading text-center">
                    <h1 class="h1-box text-center">Try NowRx Pharmacy<br /></h1>
                    <h2 class="get-started-form-sub text-center">*Get started in seconds by filling out the form below
                        and have prescriptions delivered in hours for FREE.</h2>
                    <!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                        portalId: "5952677",
                        formId: "da5c6175-179e-4463-9b51-4a02a6c947b3"
                    });
                    </script>
                </div>
            </div>

            <div class="large-5 large-offset-1 cell text-center">
                <div class="get-started-testi">
                    <div class="get-started-car">
                        <img src="https://nowrx.com/wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min.png"
                            srcset="/wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min-p-500.png 500w, https://nowrx.com/wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min.png"
                            sizes="(max-width: 479px) 88vw, (max-width: 991px) 90vw, 50vw"
                            alt="NowRx Pharmacy Delivery Car" class="image-2">
                    </div>
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <div class="orbit-wrapper">
                            <div class="orbit-controls">
                                <button class="orbit-previous"><span class="show-for-sr">Previous
                                        Slide</span>&#9664;&#xFE0E;</button>
                                <button class="orbit-next"><span class="show-for-sr">Next
                                        Slide</span>&#9654;&#xFE0E;</button>
                            </div>
                            <ul class="orbit-container">
                                <li class="is-active orbit-slide">
                                    <figure class="orbit-figure">
                                        <div class="testi-img">
                                            <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                        </div>

                                        <div class="testi-text">
                                            <p>“I cannot say strongly enough how much better it is to have prescriptions
                                                delivered to my door, as opposed to endlessly waiting at my local drug
                                                store. I would never go back. NowRx is the best.”</p>
                                        </div>
                                        <div class="testi-name">
                                            <p><strong>Christene M.</strong> <em><span class="testi-small">Real NowRx
                                                        Customer</span></em></p>
                                        </div>
                                        <div class="yelp-rating">
                                            <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png" alt="yelp logo" />
                                        </div>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <div class="testi-img">
                                        <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                    </div>
                                    <div class="testi-text">
                                        <p>"Best Pharmacy experience EVER! These guys are like going to your old
                                            neighborhood pharmacy, you know the one, where they deliver your medications
                                            to you and actually care about the customer?"</p>
                                    </div>
                                    <div class="testi-name">
                                        <p><strong>Mark C.</strong> <em><span class="testi-small">Real NowRx
                                                    Customer</span></em></p>
                                    </div>
                                    <div class="yelp-rating">
                                        <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png"
                                            alt="yelp rating icon" />
                                    </div>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <div class="testi-img">
                                            <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                        </div>
                                        <div class="testi-text">
                                            <p>"There's a reason every single review is five stars - This pharmacy is
                                                AMAZING! Lightning fast response times by pleasant professional staff
                                                and customer service like nothing I have ever encountered."</p>
                                        </div>
                                        <div class="testi-name">
                                            <p><strong>Lina W.</strong> <em><span class="testi-small">Real NowRx
                                                        Customer</span></em></p>
                                        </div>
                                        <div class="yelp-rating">
                                            <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png"
                                                alt="yelp rating icon" />
                                        </div>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <div class="testi-img">
                                            <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                        </div>
                                        <div class="testi-text">
                                            <p>“These people, this service is as Good as it Gets. NowRx sets a new
                                                standard that I have never seen anyone get close to. I really can't say
                                                enough good things on this service.”</p>
                                        </div>
                                        <div class="testi-name">
                                            <p><strong>Larry H.</strong> <em><span class="testi-small">Real NowRx
                                                        Customer</span></em></p>
                                        </div>
                                        <div class="yelp-rating">
                                            <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png"
                                                alt="yelp rating icon" />
                                        </div>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <div class="testi-img">
                                            <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                        </div>
                                        <div class="testi-text">
                                            <p>“This place, these people, are really incredible. Have never had luck
                                                dealing with pharmacies before and as a type one diabetic I have dealt
                                                with many for the last 30 years. I feel very lucky to have found them.”
                                            </p>
                                        </div>
                                        <div class="testi-name">
                                            <p><strong>Meg M.</strong> <em><span class="testi-small">Real NowRx
                                                        Customer</span></em></p>
                                        </div>
                                        <div class="yelp-rating">
                                            <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png"
                                                alt="yelp rating icon" />
                                        </div>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <div class="testi-img">
                                            <!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
                                        </div>
                                        <div class="testi-text">
                                            <p>“Hands down best pharmacy you could ask for! I no longer have to wait in
                                                line to fill my grandmother's medications, and the customer service is
                                                amazing. Try them out and you won't regret it!”</p>
                                        </div>
                                        <div class="testi-name">
                                            <p><strong>Melissa A.</strong> <em><span class="testi-small">Real NowRx
                                                        Customer</span></em></p>
                                        </div>
                                        <div class="yelp-rating">
                                            <img src="https://nowrx.com/wp-content/uploads/2020/08/yelp-rating.png"
                                                alt="yelp rating icon" />
                                        </div>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <!--
					  <nav class="orbit-bullets">
					    <button class="is-active" data-slide="0">
					      <span class="show-for-sr">First slide details.</span>
					      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
					    </button>
					    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
					    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
					    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
					  </nav>
-->
                    </div>
                </div>

                <!-- 				<div class="text-block-27">OR</div> -->
                <div class="get-started-speak">
                    <!-- <p class="center">Give us a call and speak with a live <br /><strong>NowRx</strong> pharmacist in
                        seconds!<br /></p> -->
                    <!-- <a class="button secondary rounded" href="tel:(844)466-6979">
                        <div class="btn-img">
                            <img
                                src="https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7e795389fbd7083209507c_phone.svg" alt="phone icon" />
                        </div>
                        <div class="btn-text">
                            (844) 466-6979
                        </div>
                    </a> -->
                    <!-- <div class="below-btn text-center">
                        Hours of Operation: <span class="blue">Monday – Friday <strong>9 am to 5 pm</strong></span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="get-started-how-works">
    <div class="grid-container blue-bg">
        <div class="grid-x grid-padding-x align-middle section-business-header">
            <div class="large-12 cell text-center" style="padding-bottom: 1em;">
                <h2 class="h2-box h2-op h2-center">
                    How NowRx Pharmacy Works
                </h2>
            </div>
        </div>
        <div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on=" medium" align-middle">
            <div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="number">
                    <div>1</div>
                </div>
                <div class="ph-icon icon-2 icon-2-test">
                    <div class="bl rd"></div>
                    <div class="bl"></div>
                    <img src="/wp-content/uploads/2020/08/5e7e6b89b39e217e5685dc9a_pharmacy.svg" class="ph-ico-position"
                        width="62" alt="pills icon">
                </div>
                <h3 class="heading-7">1. Send Us Your Prescription</h3>
                <div>
                    <p>
                        <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
                        <strong>Existing Prescription: </strong>Text <a href="tel:844-466-6979" class="tellink">(844) 466-6979</a> or transfer/refill online using the <a href="#formgetstarted">form above.</a>
                    </p>
                </div>
            </div>
            <div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="number">
                    <div>2</div>
                </div>
                <div class="ph-icon icon-2 icon-2-test">
                    <div class="bl rd"></div>
                    <div class="bl"></div>
                    <img src="/wp-content/uploads/2020/08/5e7fb31543a59d4bb4145c28_shield-1.svg" class="ph-ico-position"
                        width="53" alt="shield icon">
                </div>
                <h3 class="heading-7">2. We Confirm Delivery</h3>
                <div>
                    <p>
We will reach out to you via phone to collect your insurance copay confirm your address and set up a delivery time.

                    </p>
                </div>
            </div>
            <div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="number">
                    <div>3</div>
                </div>
                <div class="ph-icon icon-2 icon-2-test">
                    <div class="bl rd"></div>
                    <div class="bl"></div>
                    <img src="/wp-content/uploads/2020/08/5e7e6b89b39e21cf4285dc9c_shopping-bag.svg"
                        class="ph-ico-position" width="38" alt="pharmacy bag icon">
                </div>
                <h3 class="heading-7">3. Medication is Delivered</h3>
                <div>
                    <p>
                    A NowRx employee will deliver your medication in hours from your local NowRx Pharmacy for free. All you pay is your normal copay.



                    </p>
                </div>
            </div>
        </div>
        <!--
<div class="slider1"><img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text">“I cannot say strongly enough how much better it is to have prescriptions delivered to my door, as opposed to endlessly waiting at my local drug store. I would never go back. NowRx is the best.”</p><div class="divider"></div><div><strong>Christene M.</strong></div><div class="text-block-30"><em>Real NowRX Customer</em></div><img src="/wp-content/uploads/2020/08/5e7fb70da7eca15492906b98_Yelp-Rating.png" alt="" class="stars"></div>		
	</div>
-->
</section>
<section id="Opportunity" class="section section-opportunity red">
    <div class="text-center">
        Get a <span><strong class="bold">$20 Visa Gift Card</strong></span> for every prescription you transfer to
        NowRx*.
    </div>
</section>
<section id="How-it-works" class="section section-bussiness">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle section-business-header">
            <div class="large-12 cell text-center" style="padding-bottom: 1em;">
                <h2 class="h2-box h2-op h2-center"><strong>Why People Love NowRx Pharmacy</strong></h2>
            </div>
        </div>
        <div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on=" medium align-middle>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7e6b89b39e214e5b85dc9b_car.svg" width="98" alt="nowrx pharmacy car icon"
                            class="car-larger">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">Free same-day<br> prescription delivery</div>
                    </div>
                </div>
            </div>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7fbae8d802d64ae585a094_coupon.svg" width="65" alt="nowrx pharmacy coupon icon"
                            class="coupon">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">Drug coupons<br> automatically applied</div>
                    </div>
                </div>
            </div>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7e6b89b39e21c61d85dcaf_caduceus-1.svg" width="55" alt="nowrx pharmacy Caduceus icon"
                            class="pharma">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">Live pharmacist support<br> available all-day</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on=" medium align-middle>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7fbc3f957e0a7f8b2afb61_clock-1.svg" width="46" alt="nowrx pharmacy streamline icon"
                            class="bt-row">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">Streamlined prior<br> authorizations</div>
                    </div>
                </div>
            </div>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7e6b89b39e217e5685dc9a_pharmacy-1.svg" width="52" alt="nowrx pharmacy prescription delivery received icon"
                            class="bt-row">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">Reduced prescription<br> dispensing errors</div>
                    </div>
                </div>
            </div>
            <div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
                <div class="icon-white">
                    <div class="ph-icon icon-2 icon-white-area b">
                        <div class="bl-2"></div>
                        <div class="bl-2 rd-2"></div>
                        <img src="/wp-content/uploads/2020/08/5e7fbc92d802d6569d85aa74_marker.svg" width="42" alt="nowrx pharmacy local retail pharmacy icon"
                            class="bt-row">
                    </div>
                    <div class="icon-texts">
                        <div class="works-head">5-Star Local and<br> Personalized Service</div>
                    </div>
                </div>
            </div>
        </div>
</section>



<?php 
	endwhile;
	endif;
?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

<script>
	$(document).ready(function() {
		$('.orbit-container').slick({
			autoplay: true,
			autoplaySpeed: 3000,
		});
	});
</script>

<?php get_footer(); ?>