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

<?php get_header(); ?>

<?php if (has_post_thumbnail($post->ID)) : ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<style>
.title-bar {
  display: none;
  padding: 1.5em 1.5em 0 1.5em;
  position: relative;
  background: transparent; }	
.bg-white {
	background: #ffffff;
	position: relative;
}
.get-started-intro {
	margin-top: 1rem;
}
.get-started-hero-2 {
	background: #448bc8;
	color: #ffffff;
	margin-bottom: 2rem;
}
.get-started-headline-2 {
	color: #ffffff;
}
.get-started-post-headline-2 {
	color: #ffffff;
}
.get-started-form {
    border-radius: 9px;
    background-color: #fafafa;
    padding-top: 30px;
    padding-bottom: 24px;    	
}
.get-started-form-sub {
	color: #458bc9;
}
h5.get-started-form-sub.text-center {
    margin-bottom: 2rem;
}
.image-2 {
    width: 100%;
    margin-bottom: -1px;
}
.get-started-car {
/*     margin-top: -50px; */
    margin-bottom: 20px;
}
.text-block-27 {
    width: 100%;
    margin-right: auto;
    margin-bottom: 10px;
    margin-left: auto;
    margin-top: 10px;
    color: #d0103a;
    font-size: 36px;
    line-height: 36px;
    font-weight: 800;
}
.btn-img {
    max-width: 55px;
    display: inline-block;
    float: left;
    width: 14%;
    padding-right: 0px;
}
.btn-text {
    width: 86%;
    float: right;
}
.center {
    margin-bottom: 15px;
    font-size: 20px;	
}
.blue {
	color: #458bc9;
}
.below-btn {
	margin-top: 0;
}
.get-started-how-works {
	padding: 100px 40px 50px;
	border-radius: 9px;
    background-color: #eef7ff;
    color: #192d3e; 
    margin-top: 4rem; 
    background-image: url("https://assets.website-files.com/5e7e6b8…/5e7e6b8…_pills.svg");  
}
.pad-hw {
	padding: 49px 26px;
}
.number {
	position: absolute;
    left: 82.97px;
    top: 62px;
    padding: 0px 17px;
    border-radius: 9px;
    background-color: rgba(68,139,200,.24);
    color: #fff;
    font-size: 32px;
    font-weight: 700;
}
.ph-icon {
    position: relative;
    width: 120px;
    height: 108px;
    margin-bottom: 54px;
    background-image: url(https://assets.website-files.com/5e7e6b8…/5e7fb31…_shield%20(1).svg);
    background-size: 48%;
}
.ph-icon.icon-2, .ph-icon.icon-3 {
    background-position: 0 50%;
    background-size: contain;
}
.ph-icon.icon-2.icon-2-test {
    height: 46px;
    background-image: none;
}
.bl {
    top: auto;
    right: -60%;
    bottom: -36%;
    width: 64px;
    height: 64px;
    border-radius: 14px;
    background-color: rgba(69,139,201,.06);
    position: absolute;
}
.bl.rd {
    right: -25%;
    bottom: 29%;
    width: 48px;
    height: 48px;
    background-color: rgba(255,1,27,.05) !important;
    position: absolute;
}
.ph-ico-position {
    top: auto;
    right: -55%;
    bottom: -20%;
    width: 50px;
    height: 50px;
    border-radius: 14px;
    position: absolute;
}
.rows-new {
	padding-bottom: 61px;	
}
.slider1 {
	position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin: 1px 1px 10px;
    padding: 112px 70px 24px;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    background-image: url('https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7e6b89b39e21595385dcb3_quote.svg');
    background-repeat: no-repeat;
    background-position: 36px 106px;
    background-size: 125px;
    box-shadow: 1px 1px 40px 0 rgba(0,0,0,.05);
    -webkit-transition: all .2s cubic-bezier(.165,.84,.44,1);
    transition: all .2s cubic-bezier(.165,.84,.44,1);
    font-size: 14px;
    line-height: 24px;
    cursor: -webkit-grab;
    cursor: grab;
}
.p-sub.p-short.last-word {
	font-size: 28px;
}
.p-light.left-al.center-text {
    margin-bottom: -6px;
    font-size: 21px;
    line-height: 35px;
    text-align: center;
    font-weight: 400;
}
.divider {
    width: 50px;
    height: 1px;
    margin: 25px auto;
    background-color: #e2e2e2;
    color: #458bc9;
}
.text-block-30 {
    margin-bottom: 38px;
}
.review {
    position: absolute;
    left: 0;
    top: -9%;
    right: 0;
    bottom: 0;
    margin-right: auto;
	margin-left: auto;
    border-style: solid;
    border-width: 6px;
    border-color: #fff;
    border-radius: 143px;
}
.section.section-opportunity.red {
    padding-top: 99px;
    padding-bottom: 99px;
    background-color: #d0103a;
    background-image: url('https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7e6b89b39e219a3985dca6_par-2.svg');
    background-position: 100% 0;
    background-size: cover;
    font-size: 28px;
    color: #ffffff;
}
.get-started-covered {
    display: block;
    width: 100%;
    margin-bottom: 50px;
    padding: 50px 40px 50px;
    background-image: none;
    background-position: 0 0;
    background-size: auto;
    background-repeat: repeat;
    background-attachment: scroll;
	background-color: #fafafa;
}
.get-started-covered-box {
    margin-top: 0;
    margin-bottom: 0;
    padding: 77px 41px;	
}
.image-3 {
    height: 100%;
    margin-right: 26px;
    padding-right: 0;
    background-image: url('https://www.nowrx.com/wp-content/themes/nowrx/library/images/5ea729fc1d9f69ada542b845_now-new-img.jpg');
    background-size: cover;
	border-radius: 4px;
    width: 100%;
}
.p-sub.p-short.p-margin {
    width: auto;
    margin-bottom: 25px;
    padding-bottom: 7px;
    padding-left: 5px;
    background-image: url('https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7e6b89b39e219e0385dca2_dot.svg');
    background-position: 0 0;
    background-repeat: no-repeat;
    background-size: 32px;
    font-size: 24px;
    line-height: 30px;
}
.list-red {
    margin-bottom: 20px;
    padding-top: 0px;
    padding-bottom: 2px;
    padding-left: 29px;
    border-bottom-style: none;
    background-image: url('https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7fbe2b0c4ef4df15f98133_tick.svg');
    background-position: 0 50%;
    background-size: 12px;
    background-repeat: no-repeat;    
    color: #000;
    font-size: 16px;
    line-height: 22px;
    text-align: left;
    list-style-type: none;
}
.orbit-figure {
    margin: 0;
	height: 100%;
    min-height: 270px;
}
.get-started-speak {
    display: block;
    clear: both;
}
.testi-text p {
    font-size: 0.9em;
    margin-bottom: 0.5rem;
}
span.testi-small {
	font-size: 0.7em;
}	
.list-dots {
    display: block;
    margin-bottom: 25px;
    padding-left: 57px;
}
.w-list-unstyled {
    padding-left: 0;
    list-style: none;
}
.orbit-previous:hover, .orbit-next:hover, .orbit-previous:active, .orbit-next:active, .orbit-previous:focus, .orbit-next:focus {
	display: none;
}
[data-whatinput='mouse'] .orbit-previous, [data-whatinput='mouse'] .orbit-next {
	display: none;
}
.orbit-previous, .orbit-next {
	display: none;
}
.testi-name p {
	margin-bottom: 0;
}
.yelp-rating img {
	max-width: 100px;
	margin-bottom: 1rem;
	margin-top: 0.7rem;
}
.section-bussiness {
	padding: 100px 40px 50px;
    border-radius: 9px;
    background-color: #eef7ff;
    color: #192d3e;
    background-image: url('https://assets.website-files.com/5e7e6b8…/5e7e6b8…_pills.svg');	
}
.section-bussiness .ph-icon.icon-2 {
	margin-bottom: 20px;
}
.section-bussiness img {
    position: absolute;
    left: 100%;
    top: 22%;
}
.section-bussiness img.car-larger {
    position: absolute;
    left: 85%;
    top: 35%;	
    max-width: 100px;
}

.section-bussiness img.bt-row {
	position: absolute;
    left: 108%;
    top: 35%;
    max-width: 100px;
}
.section-business-header {
	padding-bottom: 50px;
}
.works-head {
    margin-bottom: 10px;
    color: #333131;
    line-height: 22px;
    font-weight: 700;
}
.bl-2 {
    top: auto;
    right: -60%;
    bottom: 0;
    width: 64px;
    height: 64px;
    border-radius: 14px;
    background-color: rgba(69,139,201,.06);
    position: absolute;
}
.bl-2.rd-2 {
    right: -25%;
    bottom: 29%;
    width: 48px;
    height: 48px;
    background-color: rgba(255,1,27,.05) !important;
    position: absolute;
}
@media screen and (max-width: 991px) {
	.text-block-27 {
		margin-top: 1rem;
		margin-bottom: 1rem;
	}
	.below-btn {
		margin-top: 1rem;
	}
	.image-2 {
		display: block;
	    margin-bottom: 8px;
	    padding-right: 1px;
	    padding-left: 1px;
	}	
	.get-started-how-works {
	    margin-top: 25px;
	    padding: 50px 10px 25px;		
	}
	.bl {
		bottom: -60%;
	}
	.ph-ico-position {
		bottom: -40%;
	}
	.bg-white {
		margin-bottom: 15px;	
	}
	.number {
	    left: 46%;
	    top: 5%;
	    right: auto;
	    bottom: auto;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -ms-flexbox;
	    display: flex;
	    margin-right: auto;
	    margin-left: auto;
	}
	.slider1 {
	    margin-top: 70px;
	    padding-bottom: 44px;
	}		
	.section.section-opportunity.red {
		padding-left: 5%;
		padding-right: 5%;
	}
	.section-bussiness {
		padding-top: 35px;
	}
	.section-business-header {
		padding-top: 10px;
		padding-bottom: 1rem;
	}
	.ph-icon {
		margin: 0 auto 4rem auto;
	}
	.bl {
		right: 20%;
	}
	.ph-ico-position {
		right: 20%;
	}
	.h2-op {
		font-size: 50px;
	}
	.bl.rd {
		right: 65%;
	}
	.rows-new {
	    padding-bottom: 0px;
	}	
	.bl-2 {
		right: 10%;
	}
	.bl-2.rd-2 {
		right: 50%;
	}
	.section-bussiness img.car-larger {
		left: 10%;
	}
	.section-bussiness img {
		left: 20%;
	}
	.section-bussiness img.bt-row {
		left: 30%;
	}
	.get-started-covered-box {
		padding-top: 0px;
		padding-bottom: 0px;
	}
	.get-started-covered {
		margin-bottom: 0px;
		padding-bottom: 50px;
	}
	.p-sub.p-short.p-margin {
		padding-left: 42px;
		font-size: 29px;
	}
}
@media screen and (max-width: 767px) {
	.h2-box, .h2-box.h2-op {
	    font-size: 32px;
	}	
	.slider1 {
	    margin-top: 102px;
	    padding: 123px 20px 53px;
	}	
	.get-started-covered-box {
		padding-top: 50px;
		padding-bottom: 0px;
	}
	.h2-op {
		font-size: 32px;
	}
	.number {
		left: 40%;
	}
	.ph-ico-position {
	    right: 25%;
	}
	.orbit-figure {
	    min-height: 230px;
	}	
}
/*
@media screen and (max-width: 569px) {
	.orbit-figure {
	    min-height: 400px;
	}		
}
*/	
</style>
<section class="get-started-intro">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-6 cell get-started-form">
				<div class="sign-up-form-heading text-center">
					<h2 class="h2-box text-center">Try NowRx Pharmacy<br/></h2>
					<h5 class="get-started-form-sub text-center">*Sign up in seconds by filling out the form below and have prescriptions delivered in hours for FREE.</h5>
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
						<img src="/wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min.png" srcset="/wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min-p-500.png 500w, /wp-content/uploads/2020/08/5e7ff1ff0c4ef44e93fa96e4_car-3-min.png" sizes="(max-width: 479px) 88vw, (max-width: 991px) 90vw, 50vw" alt="" class="image-2">
					</div>					
					<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
					  <div class="orbit-wrapper">
					    <div class="orbit-controls">
					      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
					    </div>
					    <ul class="orbit-container">
					      <li class="is-active orbit-slide">
					        <figure class="orbit-figure">					          					          
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          
					          <div class="testi-text"> 
						          <p>“I cannot say strongly enough how much better it is to have prescriptions delivered to my door, as opposed to endlessly waiting at my local drug store. I would never go back. NowRx is the best.”</p>
					          </div>
							  <div class="testi-name">
						          <p><strong>Christene M.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
					          </div>					          					          					          
					        </figure>
					      </li>
					      <li class="orbit-slide">					          
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          <div class="testi-text"> 
						          <p>"Best Pharmacy experience EVER! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer?"</p>
					          </div>
					          <div class="testi-name">
						          <p><strong>Mark C.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
					          </div>					          					          
					        </figure>
					      </li>
					      <li class="orbit-slide">
					        <figure class="orbit-figure">					        
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          <div class="testi-text"> 
						          <p>"There's a reason every single review is five stars - This pharmacy is AMAZING! Lightning fast response times by pleasant professional staff and customer service like nothing I have ever encountered."</p>
					          </div>
					          <div class="testi-name">
						          <p><strong>Lina W.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
					          </div>					          					          
					        </figure>
					      </li>
					      <li class="orbit-slide">
					        <figure class="orbit-figure">					        
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          <div class="testi-text"> 
						          <p>“These people, this service is as Good as it Gets. NowRx sets a new standard that I have never seen anyone get close to. I really can't say enough good things on this service.”</p>
					          </div>
					          <div class="testi-name">
						          <p><strong>Larry H.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
					          </div>					          					          
					        </figure>
					      </li>
					      <li class="orbit-slide">
					        <figure class="orbit-figure">					        
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          <div class="testi-text"> 
						          <p>“This place, these people, are really incredible. Have never had luck dealing with pharmacies before and as a type one diabetic I have dealt with many for the last 30 years. I feel very lucky to have found them.”</p>
					          </div>
					          <div class="testi-name">
						          <p><strong>Meg M.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
					          </div>					          					          
					        </figure>
					      </li>
					      <li class="orbit-slide">
					        <figure class="orbit-figure">					        
					          <div class="testi-img">
<!-- 						          <img src="/wp-content/uploads/2020/08/5e7fb6b0dad44de8a82812b6_testimonial-christene-m-1.jpg" width="130" alt="" class="review"><p class="p-light left-al center-text"> -->
					          </div>
					          <div class="testi-text"> 
						          <p>“Hands down best pharmacy you could ask for! I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!”</p>
					          </div>
					          <div class="testi-name">
						          <p><strong>Melissa A.</strong> <em><span class="testi-small">Real NowRx Customer</span></em></p>
					          </div>	
					          <div class="yelp-rating">
						          <img src="/wp-content/uploads/2020/08/yelp-rating.png" />
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
				<p class="center">Give us a call and speak with a live <br /><strong>NowRx</strong> pharmacist in seconds!<br/></p>
					<a class="button secondary rounded" href="tel:(844)466-6979">
						<div class="btn-img">
							<img src="https://www.nowrx.com/wp-content/themes/nowrx/library/images/5e7e795389fbd7083209507c_phone.svg" />			
						</div>
						<div class="btn-text">
							(844) 466-6979
						</div>
					</a>
					<div class="below-btn text-center">	
						Hours of Operation: <span class="blue">Monday – Friday <strong>9am to 5pm</strong></span>				
					</div>
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
					How NowRx Pharmacy Delivery Works
				</h2>
			</div>
		</div>
		<div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on="medium" align-middle">
			<div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
				<div class="number">
					<div>1</div>
				</div>
				<div class="ph-icon icon-2 icon-2-test">
					<div class="bl rd"></div>
					<div class="bl"></div>
					<img src="/wp-content/uploads/2020/08/5e7e6b89b39e217e5685dc9a_pharmacy.svg" class="ph-ico-position" width="62" alt="">
				</div>
				<h4 class="heading-7">Send Us Your Prescription</h4>
				<div>
					For new prescriptions, your doctor can e-prescribe or fax us your prescription. For existing prescriptions or refills call us at (844) 466-6679 or fill out the provided form above.
				</div>				
			</div>
			<div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
				<div class="number">
					<div>2</div>
				</div>
				<div class="ph-icon icon-2 icon-2-test">
					<div class="bl rd"></div>
					<div class="bl"></div>
					<img src="/wp-content/uploads/2020/08/5e7fb31543a59d4bb4145c28_shield-1.svg" class="ph-ico-position" width="53" alt="">
				</div>
				<h4 class="heading-7">We Confirm Delivery</h4>
				<div>
					We will reach out to you via phone to confirm delivery address, insurance, and collect the prescription copy.
				</div>
			</div>
			<div class="large-4 cell bg-white pad-hw text-center" data-equalizer-watch>
				<div class="number"><div>3</div></div>
				<div class="ph-icon icon-2 icon-2-test">
					<div class="bl rd"></div>
					<div class="bl"></div>
					<img src="/wp-content/uploads/2020/08/5e7e6b89b39e21cf4285dc9c_shopping-bag.svg" class="ph-ico-position" width="38" alt="">
				</div>
				<h4 class="heading-7">Sit Back And Relax</h4>
				<div>
					We will deliver your medication in an electric NowRx vehicle for no additional charge. Delivery within 5 hours or as requested.
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
		Get a <span><strong class="bold">$20 Visa Gift Card</strong></span> for every prescription you transfer to NowRx*.
	</div>
</section>
<section id="How-it-works" class="section section-bussiness">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle section-business-header">
			<div class="large-12 cell text-center" style="padding-bottom: 1em;">
				<h2 class="h2-box h2-op h2-center"><strong>Why People Love NowRx Pharmacy</strong></h2>
			</div>
		</div>
		<div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on="medium" align-middle">
			<div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
				<div class="icon-white">
					<div class="ph-icon icon-2 icon-white-area b">
						<div class="bl-2"></div>
						<div class="bl-2 rd-2"></div>
						<img src="/wp-content/uploads/2020/08/5e7e6b89b39e214e5b85dc9b_car.svg" width="98" alt="" class="car-larger">
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
						<img src="/wp-content/uploads/2020/08/5e7fbae8d802d64ae585a094_coupon.svg" width="65" alt="" class="coupon">
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
						<img src="/wp-content/uploads/2020/08/5e7e6b89b39e21c61d85dcaf_caduceus-1.svg" width="55" alt="" class="pharma">
					</div>
					<div class="icon-texts">
						<div class="works-head">Live pharmacist support<br> available all day</div>
					</div>
				</div>
			</div>						
		</div>
		<div class="rows-new grid-x grid-margin-x data-equalizer data-equalize-on="medium" align-middle">
			<div class="medium-4 cell bg-white pad-hw text-center" data-equalizer-watch>
				<div class="icon-white">
					<div class="ph-icon icon-2 icon-white-area b">
						<div class="bl-2"></div>
						<div class="bl-2 rd-2"></div>
						<img src="/wp-content/uploads/2020/08/5e7fbc3f957e0a7f8b2afb61_clock-1.svg" width="46" alt="" class="bt-row">
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
						<img src="/wp-content/uploads/2020/08/5e7e6b89b39e217e5685dc9a_pharmacy-1.svg" width="52" alt="" class="bt-row">
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
						<img src="/wp-content/uploads/2020/08/5e7fbc92d802d6569d85aa74_marker.svg" width="42" alt="" class="bt-row">
					</div>
					<div class="icon-texts">
					<div class="works-head">5-Star Local and<br> Personalized Service</div>
				</div>
			</div>						
		</div>		
	</div>
</section>
<section class="get-started-covered">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-6 large-6 cell">
				<div class="sign-up-form-heading text-center">
					<img src="https://www.nowrx.com/wp-content/themes/nowrx/library/images/5ea729fc1d9f69ada542b845_now-new-img.jpg" />				
				</div>
			</div>
		
			<div class="medium-6 large-5 large-offset-1 cell text-center get-started-covered-box">
				<p class="p-sub p-short p-margin"><strong>NowRx Pharmacy Has You Covered.</strong></p>
				<ul class="list-dots w-list-unstyled">
					<li class="list-red">
						<div>NowRx works with your insurance to get your medication approved.<br><br></div>
					</li>
					<li class="list-red">
						<div>We manage your refills every month and contact your doctor when you run out.</div></li><li class="list-red"><div>Anytime you have a question our live pharmacists are ready to chat.</div>
					</li>
				</ul>
				<p class="p-sub p-short last-word"><strong><em>Anything you need, we're here!</em></strong></p>	
			</div>
		</div>
	</div>
</section>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
