<?php
/*
 Template Name: Referral Landing Page
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

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); ?>
<section class="hero" style="background: #000 url('<?php echo $image[0]; ?>') no-repeat top center; -webkit-background-size: cover; background-size: cover; padding: 4rem 0px 3rem; color: #fff;">
<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-8 large-offset-2">
				<header class="article-header text-center">
					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					<p>For every new referral that fills a prescription with NowRx, we will send you a $20 Visa Gift Card up to a limit of $1000 per. person. Offer not valid on medication previously filled by NowRx.</p>
				</header> <?php // end article header ?>
			</div>
	    </div>
	</div>
</section>

<section id="content" class="grid-container">
	<div class="grid-x grid-margin-x" style="padding: 5rem 0px;">
		<div class="cell large-7">






		<form id="referralForm" name="referralForm" method="post" action="/hubspot-post.php">
		  <div class="grid-container">
				<div id="referral-error" style="color:#f00;background-color:#ffdede;padding:5px;border-radius:10px;display:none;">
					Please enter the email address registered with NowRx.com
				</div>
		  	<p><strong>Please fill out your name and email:</strong></p>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-6 cell">
		        <label>
		          <input type="text" placeholder="Name" name="referring_name" required>
		        </label>
		      </div>
		      <div class="medium-6 cell">
		        <label>
		          <input type="email" placeholder="Email" name="referring_email" required>
		        </label>
		      </div>
		    </div>
		  </div>

		  <div class="grid-container">
		  	<p><strong>Please fill out the name, email, and phone number of who you are referring:</strong></p>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							Name
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_1" required>
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							Email
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_1" required>
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							Phone Number
		          <input type="tel" placeholder="###-###-####" name="referral_phone_1" class="form-control" data-mask="999-999-9999" required>
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_2">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_2">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_2" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_3">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_3">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_3" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_4">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_4">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_4" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_5">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_5">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_5" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_6">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_6">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_6" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_7">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_7">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_7" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_8">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_8">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_8" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_9">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_9">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_9" class="form-control" data-mask="999-999-9999"
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
		          <input type="text" placeholder="e.g. Jim Smith" name="referral_name_10">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="email" placeholder="jimsmith@yahoo.com" name="referral_email_10">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
		          <input type="tel" placeholder="###-###-####" name="referral_phone_10" class="form-control" data-mask="999-999-9999">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		      	<input type="submit" class="button rounded shadow" value="Submit" id="Submit">
		      </div>
		    </div>
		  </div>
		</form>



			<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">
					<?php
						// the content (pretty self explanatory huh)
						the_content();

						/*
						 * Link Pages is used in case you have posts that are set to break into
						 * multiple pages. You can remove this if you don't plan on doing that.
						 *
						 * Also, breaking content up into multiple pages is a horrible experience,
						 * so don't do it. While there are SOME edge cases where this is useful, it's
						 * mostly used for people to get more ad views. It's up to you but if you want
						 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
						 *
						 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
						 *
						*/
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
					</section> <?php // end article section ?>
					<footer class="article-footer cf">
					</footer>
					<?php comments_template(); ?>
				</article>
				<?php endwhile; endif; ?>

			</main>
		</div>
		<div class="cell large-4 large-offset-1">
			<h3>How It Works</h3>
			<h5>Step 1:</h5>
			<p>Provide any friends and family you think would be interested in trying NowRx.</p>
			<h5>Step 2:</h5>
			<p>We will send them an email letting them know you have referred them and how to fill a prescription with NowRx.</p>
			<h5>Step 3:</h5>
			<p>When they fill their first prescription with NowRx, we will send you a $20 Visa Gift Card!</p>
		</div>
	</div>
</div>
</section>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#Submit').click(function() {
			//validating form fields
			jQuery("#referral-error").hide(500);

			//reset backgrounds
			jQuery('input[name="referring_name"]').css("background-color", "#fff");
			jQuery('input[name="referring_email"]').css("background-color", "#fff");
			jQuery('input[name="referral_name_1"]').css("background-color", "#fff");

			//check referring fields
			if(jQuery('input[name="referring_name"]').val() == "") {
				jQuery("#referral-error").html("Please enter your Name");
				jQuery("#referral-error").show(500);
				jQuery('input[name="referring_name"]').css("background-color", "#ffdede");
				window.scrollTo(0,0);
				return false;
			}

			if(jQuery('input[name="referring_email"]').val() == "") {
				jQuery("#referral-error").html("Please enter your Email Address");
				jQuery("#referral-error").show(500);
				jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
				window.scrollTo(0,0);
				return false;
			}

			if(!validateEmail(jQuery('input[name="referring_email"]').val())) {
				jQuery("#referral-error").html("Please enter a valid email address");
				jQuery("#referral-error").show(500);
				jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
				window.scrollTo(0,0);
				return false;
			}

			if(jQuery('input[name="referral_name_1"]').val() == "") {
				jQuery("#referral-error").html("Please enter at least one referral");
				jQuery("#referral-error").show(500);
				jQuery('input[name="referral_name_1"]').css("background-color", "#ffdede");
				window.scrollTo(0,0);
				return false;
			}

			//check all referral
			for(i = 1; i <= 10; i++) {
				jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#fff");
				jQuery('input[name="referral_phone_'+i+'"]').css("background-color", "#fff");
				if(
					jQuery('input[name="referral_name_'+i+'"]').val() != "" &&
					(
						jQuery('input[name="referral_email_'+i+'"]').val() == "" ||
						jQuery('input[name="referral_phone_'+i+'"]').val() == ""
					)
				)
				{
					if(jQuery('input[name="referral_email_'+i+'"]').val() == "") {
						jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#ffdede");
					}
					if(jQuery('input[name="referral_phone_'+i+'"]').val() == "") {
						jQuery('input[name="referral_phone_'+i+'"]').css("background-color", "#ffdede");
					}
					jQuery("#referral-error").html("Please enter all fields for the referrral");
					jQuery("#referral-error").show(500);
					window.scrollTo(0,0);
					return false;
				}

				//validate email
				if(
					jQuery('input[name="referral_name_'+i+'"]').val() != "" && jQuery('input[name="referral_email_'+i+'"]').val() != ""
				)
				{
					if(!validateEmail(jQuery('input[name="referral_email_'+i+'"]').val()))
					{
						jQuery("#referral-error").html("Please enter a valid email address");
						jQuery("#referral-error").show(500);
						jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#ffdede");
						window.scrollTo(0,0);
						return false;
					}
				}

				//validate phone

				if(
					jQuery('input[name="referral_name_'+i+'"]').val() != "" && jQuery('input[name="referral_phone_'+i+'"]').val() != ""
				)
				{
					if(!validatePhone(jQuery('input[name="referral_phone_'+i+'"]').val()))
					{
						jQuery("#referral-error").html("Please enter a valid phone number");
						jQuery("#referral-error").show(500);
						jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#ffdede");
						window.scrollTo(0,0);
						return false;
					}
				}
			}

			let referring_email = document.querySelector('input[name="referring_email"]').value;

			//validating email in system
			jQuery.ajax({
				url: "/hubspot-check-email.php?referring_email="+referring_email,
				success: function(data) {
					console.log(data);
					if(data == 0) {
						jQuery("#referral-error").html("Please enter the email address registered with NowRx.com");
						jQuery("#referral-error").show(500);
						jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
						window.scrollTo(0,0);
						console.log('email not found');
						return false;
					} else {
						console.log('email found');
						jQuery('#referralForm').submit();
						return true;
					}
				}
			})
			return false;
	})
})

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function validatePhone(phone) {
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(phone.match(phoneno)) {
  	return true;
  } else {
    return false;
  }
}

</script>

<?php get_footer(); ?>
