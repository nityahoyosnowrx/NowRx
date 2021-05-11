<?php
/*
 Template Name: Referral
*/
?>

<?php get_header(); ?>

<!-- hero -->
<section class="hero-home referralform">
    <div class="container">
        <div class="content">
            <!-- content -->
            <div class="column-half content-col">
                <div class="rvls">
                    <span class="sub-headline">
                        Earn $20 For Every Qualifying Referral
                    </span>
                </div>
                <div class="rvls">
                    <h1 class="hiw-title">
                        NowRx Pharmacy <br> Refer a Friend
                    </h1>
                </div>
                <div class="rvls">
                    <p>
                        Refer your friends to NowRx Pharmacy and receive a $20 Visa Gift Card for each referral that
                        becomes a customer.
                    </p>
                </div>
                <div class="rvls">
                    <div class="btn-container">
                        <!-- <a class="rx-btn" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Join Watilist</a> -->
                        <a class="rx-btn " href="#referralform">Refer a Friend</a>
                        <a class="rx-btn rx-green mrb" href="#howitwork">How It Works</a>

                    </div>
                </div>
            </div>

            <!-- image -->
            <div class="column-half image-col">

                <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    data-alt="Pharmacist Ready to Provide Medication" data-toggle-class="active">
                    <source type="image/jpeg"
                        srcset="https://images.pexels.com/photos/3768131/pexels-photo-3768131.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    <source type="image/webp"
                        srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                        class="orbit-image lozad" height="500px" width="650px"
                        alt="Pharmacist Ready to Provide Medication">
                </picture>


            </div>

        </div>
    </div>
</section>

<!-- companies -->
<?php include('section-companies.php'); ?>

<section class="referralform" id="referralform">
    <div class="container">
        <div class="svgicon">
            <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                data-alt="Pharmacist Ready to Provide Medication" data-toggle-class="active">
                <source type="image/jpeg"
                    srcset="https://images.pexels.com/photos/4353618/pexels-photo-4353618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/For-Doctors.webp"
                    class="orbit-image lozad" height="500px" width="650px" alt="Pharmacist Ready to Provide Medication">
            </picture>
        </div>
        <div class="content">
            <div class="sectitle">
                <h2 class="title">Refer a Friend</h2>
                <p>Earn $20 For Every Qualifying Referral</p>
            </div>
            <form id="referralForm" name="referralForm" novalidate method="post" action="/hubspot-post-2.php">
                <div class="grid-container">
                    <div id="referral-error"
                        style="color:#f00;background-color:#ffdede;padding:5px;border-radius:10px;display:none;">
                        Please enter the email address registered with NowRx.com
                    </div>
                    <div class="desc">
                        <p>Enter your name and email address</p>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 cell">
                            <label>
                                <span>Your Name</span>
                                <input type="text" data-placeholder="Customer Name" placeholder="Your Name"
                                    name="referring_name" required>

                            </label>

                        </div>
                        <div class="medium-6 cell">
                            <label>
                                <span>Your Email Address</span>
                                <input type="email" data-placeholder="Customer Email" placeholder="Your Email Address"
                                    name="referring_email" required>

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
                        <div class="grid-x grid-padding-x">
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Name</span>
                                    <input type="text" data-placeholder="Customer Name" placeholder="Referral Name"
                                        name="referral_name_1" required>

                                </label>

                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Email Address</span>
                                    <input type="email" data-placeholder="Customer Email"
                                        placeholder="Referral Email Address" name="referral_email_1" required>

                                </label>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="grid-x grid-padding-x">
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Name</span>
                                    <input type="text" data-placeholder="Customer Name" placeholder="Referral Name"
                                        name="referral_name_2" required>

                                </label>

                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Email Address</span>
                                    <input type="email" data-placeholder="Customer Email"
                                        placeholder="Referral Email Address" name="referral_email_2" required>

                                </label>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="grid-x grid-padding-x">
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Name</span>
                                    <input type="text" data-placeholder="Customer Name" laceholder="Referral Name"
                                        name="referral_name_3" required>

                                </label>

                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Email Address</span>
                                    <input type="email" data-placeholder="Customer Email"
                                        placeholder="Referral Email Address" name="referral_email_3" required>

                                </label>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="grid-x grid-padding-x">
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Name</span>
                                    <input type="text" data-placeholder="Customer Name" laceholder="Referral Name"
                                        name="referral_name_4" required>

                                </label>

                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Email Address</span>
                                    <input type="email" data-placeholder="Customer Email"
                                        placeholder="Referral Email Address" name="referral_email_4" required>

                                </label>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="grid-x grid-padding-x">
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Name</span>
                                    <input type="text" data-placeholder="Customer Name" laceholder="Referral Name"
                                        name="referral_name_5" required>

                                </label>

                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <span>Referral Email Address</span>
                                    <input type="email" data-placeholder="Customer Email"
                                        placeholder="Referral Email Address" name="referral_email_5" required>

                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- additional people -->

                    <div class="addtional-people">
                        <span class="text">
                            <div class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
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
                            <input type="submit" class="button secondary rounded shadow rx-btn" disabled type="button" value="Submit" id="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<section class="how-it-works panel--primary" id="howitwork">
    <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <div class="rvl">
                    <p class="pre-headline">Using NowRx Pharmacy is Simple</p>
                </div>

                <div class="rvl">
                    <h2 class="headline">Here’s How It Works</h2>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x steps">

            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">1. Submit Your Referrals</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png"
                            alt="end Us Your Prescription" class="pic lozad">
                    </div>

                    <p>
                        Submit your referrals using our Refer a Friend form. Make sure you use the same email address
                        NowRx has on file.


                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. We Notify Your Referrals
                    </h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png"
                            alt="We Confirm Delivery" class="pic lozad ">
                    </div>

                    <p>
                        We will send your referrals an email letting them know you have referred them and telling them
                        how to get started.


                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Receive $20 Visa Cards
                    </h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png"
                            alt="Medication is Delivered" class="pic lozad">
                    </div>

                    <p>
                        Once your referral gets their first delivery from NowRx, we will mail you a $20 Gift Card. (No
                        Delivery = No Gift Card)
                    </p>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- faq -->
<section class="faq-section" id="faq-section">
    <div class="container">
        <div class="content">
            <div class="titleblock">
                <div class="rvl">
                    <span class="sub-headline">
                        NowRx Refer a Friend
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Frequently Asked Questions
                    </h2>
                </div>
            </div>
            <div class="faq-content">

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What is the NowRx Pharmacy Refer a Friend Program?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    The NowRx Pharmacy Refer a Friend Program is a referral program that allows existing
                                    NowRx customers to receive a $20 Visa Gift card for every qualifying referral.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How does the Refer a Friend Program work?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    Just submit your referrals using our Refer a Friend form and when your referral
                                    receives their first prescription from NowRx, we will mail you a $20 Visa Gift card.
                                </p>




                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What is a qualifying referral?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    Qualifying referrals are referrals that receive their first prescription delivery
                                    from NowRx Pharmacy following the date on which they were referred. </p>




                            </span>
                        </div>
                    </div>
                </div>



                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Who can I refer to NowRx Pharmacy?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    You can refer any individual (friend, family, relative, etc.) that is not already a
                                    customer of NowRx Pharmacy.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>


                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                Is there a limit to the number of people I can refer?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    There is no limit to the number of people you can refer to NowRx Pharmacy or to the
                                    amount of money you can earn referring new customers but NowRx reserves the right to
                                    nulligy rewards, bonuses, or perks if we suspect abuse or fraud.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What happens when I submit a referral?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    When you submit a referral, NowRx Pharmacy will send your referrals a welcome email
                                    letting them know you have referred them and telling them how to get started.. We
                                    suggest you follow up with all of your referrals to tell them about your experience
                                    with NowRx and why you are referring them.

                                </p>

                            </span>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                When will NowRx pay me my referral bonus?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Once your referral has received their first prescription delivery from NowRx, we will
                                mail you a $20 Visa gift card in 5-7 business days.
                            </span>
                        </div>
                    </div>
                </div>



                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                How will NowRx pay me my referral bonus?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    NowRx pays all referral bonuses in $20 Visa Gift Card denominations. These Gift
                                    Cards can be used nearly anywhere in the domestic US.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>


                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What if two people refer the same person?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    If two people refer the same person, the individual that provided the first referral
                                    will be the one that receives a $20 Visa Gift Card.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>











                <!-- item -->
                <div class="block">
                    <div class="rvl">
                        <div class="q-item">
                            <div class="title">Q.</div>
                            <span class="cntx">
                                What else do I need to know?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                <p>
                                    The email addresses you enter for yourself and your referrals must match the email
                                    address used with NowRx. If we do not have an email address for you, please contact
                                    us at info@nowrx.com so we can update your customer profile.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</section>





<!-- visit faq -->
<section class="form-faq">
    <div class="custom-shape-divider-top-1610578846">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div class="content">
            <div class="formloop">
                <div class="rvl">
                    <span class="sub-headline">
                        Have additional questions about the Refer a Friend program?
                    </span>
                </div>
                <div class="rvl">
                    <h2 class="sec-title">
                        Submit a Question
                    </h2>
                </div>
                <div class="rvl">
                    <div class="form-content">

                        <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script>
                        hbspt.forms.create({
                            portalId: "5952677",
                            formId: "79574438-8e30-404e-a02f-4424317036e4"
                        });
                        </script>


                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#Submit').click(function() {
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
            window.scrollTo(0, 0);
            return false;
        }

        if (jQuery('input[name="referring_email"]').val() == "") {
            jQuery("#referral-error").html("Please enter your Email Address");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
            window.scrollTo(0, 0);
            return false;
        }

        if (!validateEmail(jQuery('input[name="referring_email"]').val())) {
            jQuery("#referral-error").html("Please enter a valid email address");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referring_email"]').css("background-color", "#ffdede");
            window.scrollTo(0, 0);
            return false;
        }

        if (jQuery('input[name="referral_name_1"]').val() == "") {
            jQuery("#referral-error").html("Please enter at least one referral");
            jQuery("#referral-error").show(500);
            jQuery('input[name="referral_name_1"]').css("background-color", "#ffdede");
            window.scrollTo(0, 0);
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
                window.scrollTo(0, 0);
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
                    window.scrollTo(0, 0);
                    return false;
                }
            }
        }

        let referring_email = document.querySelector('input[name="referring_email"]').value;

        //validating email in system
        jQuery.ajax({
            url: "https://nowrx.com/hubspot-check-email.php?referring_email=" + referring_email,
            success: function(data) {
                console.log(data);
                if (data == 0) {
                    jQuery("#referral-error").html(
                        "Please enter the email address registered with NowRx.com");
                    jQuery("#referral-error").show(500);
                    jQuery('input[name="referring_email"]').css("background-color",
                        "#ffdede");
                    window.scrollTo(0, 0);
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