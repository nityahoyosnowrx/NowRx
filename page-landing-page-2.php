<?php
/*
 Template Name: Referral Landing Page v2
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

			<div class="cell large-12">
				<header class="article-header text-center">
					<h1 class="page-title" itemprop="headline" style="padding-top: .5em; color: #008ed8;"><?php the_title(); ?></h1>
					<p style="color: #274e85; max-width: 900px; margin: auto;"><strong>Receive a $20 Visa Gift Card for every referral that becomes a NowRx Pharmacy customer!</strong></p>
				</header> <?php // end article header ?>
			</div>
	    </div>
	</div>
</section>

<div class="grid-container">
	<div class="grid-x grid-margin-x" style="padding:3.5rem 0px 2.5rem 0px;">
		<div class="cell large-12 text-center">
		</div>
		<div class="cell large-4 text-center">
			<h5 style="color: #274e85;">Step 1:</h5>
			<p>Provide any friends and family you think would be interested in trying NowRx.</p>
		</div>
		<div class="cell large-4 text-center">
			<h5 style="color: #274e85;">Step 2:</h5>
			<p>We'll send an email telling them you've referred them &amp; how to fill a prescription.</p>
		</div>
		<div class="cell large-4 text-center">
			<h5 style="color: #274e85;">Step 3:</h5>
			<p>When they fill their first prescription, we'll send you a $20 Visa Gift Card!</p>
		</div>
	</div>
</div>

<section id="content" class="grid-container">
	<div class="grid-x grid-margin-x" style="padding: 1rem 0px;">
		<div class="cell large-12">
		<form id="referralForm" name="referralForm" method="post" action="/hubspot-post-2.php">
		  <div class="grid-container">
				<div id="referral-error" style="color:#f00;background-color:#ffdede;padding:5px;border-radius:10px;display:none;">
					Please enter the email address registered with NowRx.com
				</div>
		  	<p><strong>Please enter your name and email address</strong> <em>(Email address must be on file with NowRx)</em></p>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Your Name</strong>
		          <input type="text" placeholder="E.g. John Smith" name="referring_name" required>
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Your Email Address</strong>
		          <input type="email" placeholder="E.g. johnsmith@aol.com" name="referring_email" required>
		        </label>
		      </div>
		    </div>
		  </div>

		  <div class="grid-container">
		  	<p><strong>Please fill out the name, email, and phone number of who you are referring</strong> <em>(Referral must use this email when they sign up)</em></p>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Name 1</strong>
		          <input type="text" placeholder="Eg. John Smith Referral 1" name="referral_name_1" required>
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Email Address 1</strong>
		          <input type="email" placeholder="E.g. johnsmithreferral1@aol.com" name="referral_email_1" required>
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Name 2</strong>
		          <input type="text" placeholder="Eg. John Smith Referral 2" name="referral_name_2">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Email Address 2</strong>
		          <input type="email" placeholder="E.g. johnsmithreferral2@aol.com" name="referral_email_2">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Name 3</strong>
		          <input type="text" placeholder="Eg. John Smith Referral 3" name="referral_name_3">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Email Address 3</strong>
		          <input type="email" placeholder="E.g. johnsmithreferral3@aol.com" name="referral_email_3">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Name 4</strong>
		          <input type="text" placeholder="Eg. John Smith Referral 4" name="referral_name_4">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Email Address 4</strong>
		          <input type="email" placeholder="E.g. johnsmithreferral4@aol.com" name="referral_email_4">
		        </label>
		      </div>
		    </div>
		    <div class="grid-x grid-padding-x">
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Name 5</strong>
		          <input type="text" placeholder="Eg. John Smith Referral 5" name="referral_name_5">
		        </label>
		      </div>
		      <div class="medium-4 cell">
		        <label>
							<strong>Referral Email Address 5</strong>
		          <input type="email" placeholder="E.g. johnsmithreferral5@aol.com" name="referral_email_5">
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
			jQuery('input[name="referring_email"]').css("back ground-color", "#fff");
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
			for(i = 1; i <= 5; i++) {
				jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#fff");
				if(
					jQuery('input[name="referral_name_'+i+'"]').val() != "" &&
					(
						jQuery('input[name="referral_email_'+i+'"]').val() == ""
					)
				)
				{
					if(jQuery('input[name="referral_email_'+i+'"]').val() == "") {
						jQuery('input[name="referral_email_'+i+'"]').css("background-color", "#ffdede");
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
