<?php
/*
 Template Name: Referral
*/
?>

<?php get_header(); ?>


<!-- hero -->
<section class="hero-referral-form">
    <div class="container">
        <div class="content">
            <!-- content -->
            <div class="column-half content-col">

                <div class="rvls">
                    <h1 class="hiw-title">
                    Refer A Friend
                    </h1>
                    <div class="blue">
                    Refer your friends to NowRx Pharmacy and receive a $20 Visa Card for every qualifying referral.
                    </div>
                </div>


                <!-- form -->
                <div class="formcall">
                    <div id="referralformform">
                        <div class="containerd">
                            <div class="contet">
                                <form id="referralForm" name="referralForm" novalidate method="post"
                                    action="/hubspot-post-2.php">
                                    <div class="grid-container">
                                        <div id="referral-error"
                                            style="text-align: center;font-size: 14px;color:#f00;background-color:#ffdede;padding: 5px 020px;border-radius: 20px;display:none;">
                                            Please enter the email address registered with NowRx.com
                                        </div>
                                        <div class="desc">
                                            <p>Enter your name and email address</p>
                                        </div>
                                        <div class="grid-x grid-padding-x">
                                            <div class="medium-6 cell">
                                                <label>
                                                    <span>Your Name</span>
                                                    <input type="text" data-placeholder="Customer Name"
                                                        placeholder="Your Name" name="referring_name" required>
                                                </label>

                                            </div>
                                            <div class="medium-6 cell">
                                                <label>
                                                    <span>Your Email Address</span>
                                                    <input type="email" data-placeholder="Customer Email"
                                                        placeholder="Your Email Address" name="referring_email"
                                                        required>
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid-container fillform">
                                        <div class="desc">
                                            <p>Enter your referral's name and email address.</p>
                                        </div>

                                        <div class="item-referrals">

                                            <!-- item -->
                                            <div class="grid-x grid-padding-x" id="prime">
                                                <style>
                                                    #prime{
                                                        display:flex!important;
                                                    }
                                                    @media screen  and (max-wdith:700px) {
                                                        #prime{
                                                        display:flex!important;
                                                    }
                                                    }
                                                </style>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Name</span>
                                                        <input class="referralinput" type="text"
                                                            data-placeholder="Customer Name" placeholder="Referral Name"
                                                            name="referral_name_1" required>
                                                    </label>
                                                </div>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Email Address</span>
                                                        <input class="referralinput" type="email" class=""
                                                            data-placeholder="Customer Email"
                                                            placeholder="Referral Email Address" name="referral_email_1"
                                                            required>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- item -->
                                            <div class="grid-x grid-padding-x" style="display:none;">
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Name</span>
                                                        <input type="text" class="referralinput"
                                                            data-placeholder="Customer Name" placeholder="Referral Name"
                                                            name="referral_name_2" required>
                                                    </label>

                                                </div>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Email Address</span>
                                                        <input class="referralinput" type="email" class=""
                                                            data-placeholder="Customer Email"
                                                            placeholder="Referral Email Address" name="referral_email_2"
                                                            required>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- item -->
                                            <div class="grid-x grid-padding-x" style="display:none;">
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Name</span>
                                                        <input type="text" class="referralinput"
                                                            data-placeholder="Customer Name" placeholder="Referral Name"
                                                            name="referral_name_3" required>
                                                    </label>

                                                </div>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Email Address</span>
                                                        <input type="email" class="referralinput"
                                                            data-placeholder="Customer Email"
                                                            placeholder="Referral Email Address" name="referral_email_3"
                                                            required>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- item -->
                                            <div class="grid-x grid-padding-x" style="display:none;">
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Name</span>
                                                        <input type="text" class="referralinput"
                                                            data-placeholder="Customer Name" placeholder="Referral Name"
                                                            name="referral_name_4" required>
                                                    </label>

                                                </div>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Email Address</span>
                                                        <input type="email" class="referralinput"
                                                            data-placeholder="Customer Email"
                                                            placeholder="Referral Email Address" name="referral_email_4"
                                                            required>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- item -->
                                            <div class="grid-x grid-padding-x" style="display:none;">
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Name</span>
                                                        <input type="text" class="referralinput"
                                                            data-placeholder="Customer Name" placeholder="Referral Name"
                                                            name="referral_name_5" required>
                                                    </label>

                                                </div>
                                                <div class="medium-6 cell">
                                                    <label>
                                                        <span>Referral Email Address</span>
                                                        <input type="email" class="referralinput"
                                                            data-placeholder="Customer Email"
                                                            placeholder="Referral Email Address" name="referral_email_5"
                                                            required>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- additional people -->

                                        <div class="addtional-people">
                                            <span class="text">
                                                <div class="icon">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512"
                                                        class="svg-inline--fa fa-plus fa-w-14 fa-3x">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                                            class=""></path>
                                                    </svg>
                                                </div>
                                                <div class="en">
                                                    Enter another referral
                                                </div>
                                            </span>
                                        </div>

                                        <div class="gridd">
                                            <div class="mediumcl">
                                                <input type="submit" class="button secondary rounded shadow rx-btn"
                                                    disabled type="button" value="Submit" id="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form -->


            </div>

            <!-- image -->
            <div class="column-half image-col">
                <picture class="lozad" data-toggle-class="active">
                    <source media="(max-width: 992px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp">

                    <source media="(min-width: 993px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp"
                        class="orbit-image lozad" height="500px" width="650px" alt="daughter showing mother nowrx pharmacy delivery website">
                </picture>
            </div>

        </div>
    </div>
</section>

<!-- companies -->
<?php include('components/component-logo-slider.php'); ?>

<?php include('components/component-how-it-works.php'); ?>

<!-- FAQ -->
<?php get_template_part('components/section-faq-flip'); ?>



<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#Submit').click(function(e) {
        e.preventDefault();
        //validating form fields
        jQuery("#referral-error").hide(500);

        //reset backgrounds
        jQuery('input[name="referring_name"]').css("background-color", "#fff");
        jQuery('input[name="referring_email"]').css("back ground-color", "#fff");
        jQuery('input[name="referral_name_1"]').css("background-color", "#fff");

        //check referring fields
        if (jQuery('input[name="referring_name"]').val() == "") {
            jQuery("#referral-error").html("Please enter your Name");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referring_name"]').css("background-color", "#ffdede");
            return false;
        }

        if (jQuery('input[name="referring_email"]').val() == "") {
            jQuery("#referral-error").html("Please enter your Email Address");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
            return false;
        }

        if (!validateEmail(jQuery('input[name="referring_email"]').val())) {
            jQuery("#referral-error").html("Please enter a valid email address");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
            return false;
        }

        if (jQuery('input[name="referral_name_1"]').val() == "") {
            jQuery("#referral-error").html("Please enter at least one referral");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referral_name_1"]').css("background-color", "#ffdede");
            return false;
        }

        //check all referral
        for (i = 1; i <= 5; i++) {
            jQuery('input[name="referral_email_' + i + '"]').css("background-color", "#fff");
            if (
                jQuery('input[name="referral_name_' + i + '"]').val() != "" &&
                (
                    jQuery('input[name="referral_email_' + i + '"]').val() == ""
                )
            ) {
                if (jQuery('input[name="referral_email_' + i + '"]').val() == "") {
                    jQuery('input[name="referral_email_' + i + '"]').css("background-color", "#ffdede");
                }
                jQuery("#referral-error").html("Please enter all fields for the referrral");
                jQuery("#referral-error").show(500);
                return false;
            }

            //validate email
            if (
                jQuery('input[name="referral_name_' + i + '"]').val() != "" && jQuery(
                    'input[name="referral_email_' + i + '"]').val() != ""
            ) {
                if (!validateEmail(jQuery('input[name="referral_email_' + i + '"]').val())) {
                    jQuery("#referral-error").html("Please enter a valid email address");
                    jQuery("#referral-error").show(500);
                    jQuery('input[name="referral_email_' + i + '"]').css("background-color", "#ffdede");
                    return false;
                }
            }
        }

        let referring_email = document.querySelector('input[name="referring_email"]').value;

        //validating email in system
        jQuery.ajax({
            url: "<?php echo get_site_url(); ?>/hubspot-check-email.php?referring_email=" + referring_email,
            success: function(data) {
                // console.log(data);
                if (data == 0) {
                    jQuery("#referral-error").html("Please enter the email address registered with NowRx.com");
                    jQuery("#referral-error").show(500);
                    jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
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
    } else {
        return false;
    }
}

function validatePhone(phone) {
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (phone.match(phoneno)) {
        return true;
    } else {
        return false;
    }
}
</script>

<?php get_footer(); ?>