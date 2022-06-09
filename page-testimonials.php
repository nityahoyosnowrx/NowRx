<?php
/*
 Template Name: How It Works
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


<!-- what doctor saying -->


<section class="testimonials-block doctorquotes">

    <div class="container">
        <div class="content">
            <div class="txt">
                <div class="rvla">
                    <div class="subtitle">
                        See What Customers Are Saying About NowRx Pharmacy Delivery
                    </div>
                </div>
                <div class="rvla">
                    <h1 class="main-title">
                        "Best Prescription Delivery Service for Northern California and Orange County Residents"
                        <small>(CNET)</small>
                    </h1>
                </div>
            </div>
            <div class="image">
                <figure>

                        <picture class=" " data-toggle-class="active">
                            <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                            <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/Best-Prescription-Delivery-Service-for-Northern-California-and-Orange-County-Residents.webp">
                            <img   class="orbit-image " height="500px" width="650px" alt="nowrx pharmacy delivery happy customers celebrating low drug prices">
                        </picture>

                </figure>
            </div>
        </div>
        <!-- end content -->
        <div class="content sliderfordoctors">
            <div class="main-slider">
                <div class="slide">
                    <!-- Slider main container -->
                    <div class="quote-container">
                        <!-- Additional required wrapper -->
                        <div class="de">



                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                    <blockquote>

<span class="fullquote">
    "Companies that <b>ACTUALLY PROVIDE CUSTOMER SERVICE</b> are so rare in
    this day and age. These guys are awesome!"

</span>
<cite>
    <div class="name">
        <h2 class="sec-title">-Tanya S.</h2>
    </div>
    <div class="title">
        <span class="li">NowRx Pharmacy Customer</span>
    </div>
</cite>
</blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem largeblock">
                                <figure>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/custom-recieving-rx.webp"
                                        class="orbit-image lozad"
                                        alt="custom-recieving-rx"
                                        >
                                </figure>
                                <div class="content">

                                    <div class="quote">

                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>Best Pharmacy experience EVER</b>! These guys are like going to your
                                                old neighborhood pharmacy, you know the one, where they deliver your
                                                medications to you and actually care about the customer? You don't get
                                                better service than this."

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Mark C.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            <b>Best pharmacy I have ever used!</b> I have nothing but good things to say about them. Exemplary customer service, delivery right to your door with text updates, and great pricing. I will be using them for as long as I can!


                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Sarah S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            This is my new pharmacy. <b> Not only was their price lower, but they do same day delivery</b> to my neighborhood. And when you call it's easy to reach a real person. My kind of store!



                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Julie B.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                           <b> NowRx is the best Rx delivery service</b> I have ever experienced. They're fast, efficient, courteous and economical. What more could you want?
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Ramon S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem largeblock">
                                <figure>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/couple-viewing-nowrx-service.webp" class="orbit-image lozad" alt="couple viewing nowrx service" />
                                </figure>
                                <div class="content">

                                    <div class="quote">

                                        <blockquote>
                                            <span class="fullquote">
                                            NowRx is the best pharmacy I've ever used. They take all the work out of prescription management, they have incredible communication (text and phone, whichever is your preference), and they keep providing service at a level I never expect.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -Kate P.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>


                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                    <blockquote>
                                            <span class="fullquote">
                                                "Super easy to use. <b>Fast and WAY cheaper</b> than Costco or any other
                                                place I've ever checked."
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Bruce B.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                    <blockquote>
                                            <span class="fullquote">
                                            Responsible business. <b>Actually the best pharmacy I've used so far</b>. Delivery is always on time. Customer service is awesome and service is very reliable.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Julin D.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I can't emphasize enough how helpful this service has been. You've shifted my experience from standing in lines at Walgreens for an hour when it is painful to stand to exchanging text messages and a front door drop off. Thank you.


                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -Sean W.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>



                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            The service is stellar. I got the feeling they were my advocates, doing whatever they could to get my scripts transferred so I could get them, and contacting me to let me know their progress. Can't ask for better than that.
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -Steve R.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>



                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            Speedy prescription delivery. Excellent, available staff who are incredibly helpful. Spectacular.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -J.M.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem largeblock">
                                <figure>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/couple-happy-with-nowrx-service.webp" class="orbit-image lozad" alt="couple happy with nowrx service" />
                                </figure>
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "We have been using NowRx for the last year and the service is great as
                                                well as all the staff we have talked to in getting our prescriptions
                                                filled. <b>They go the extra mile in customer service!</b>"

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Neil C.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            My new favorite pharmacy! Excellent and courteous customer service. On time deliveries. Great followup calls. Couldn't be better. This company nails it!


                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -Eva C.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I have to say the Pharmacists and all of the employees at NowRx are hands down the best, kindest people I have ever dealt with! I will be a forever customer!
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">
                                                    -Kim A
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>FANTASTIC! Still waiting to know what the catch is!</b> This has
                                                been a phenomenal service that has made filling and receiving
                                                prescriptions so easy. I'm still blown away that delivery is free and
                                                same day."


                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Elizabeth P.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem largeblock">
                                <figure>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/couple-talking-about-their-service-with-nowrx-pharmacy.webp"
                                        class="orbit-image lozad"
                                        alt="couple talking about their service with nowrx pharmacy"
                                        >
                                </figure>
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            "<b>There's a reason every single review is five stars - This pharmacy
                                                    is AMAZING</b>! Lightning fast response times by pleasant
                                                professional staff and customer service like nothing I have ever
                                                encountered. Give NowRx a try - you won't regret it!"

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Lina W.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>




                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>This pharmacy is the absolute best</b>! They are friendly, efficient
                                                and they know their stuff! I can't say enough good things about the
                                                staff. Professional, courteous, knowledgeable service equals five
                                                stars."

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Victoria V.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>Hands down best pharmacy you could ask for!</b> I no longer have to
                                                wait in line to fill my grandmother's medications, and the customer
                                                service is amazing. Try them out and you won't regret it!"

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Melissa A.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
<div class="quoteitem largeblocktext largeblock">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            After complaining about the local pharmacy's service, our family physician recommended NowRx for quick, reliable and friendly service.  The order was placed Saturday morning and the prescriptions were delivered mid afternoon.  The service and delivery staff were efficient and helpful.  We received text updates until our order was delivered.  <b>To my surprise, one prescription not covered by my insurance price was lower than Walgreens.</b> NowRx takes the worry out of ordering and saves my family time.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Liz A
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "These people, this service is as Good as it Gets. <b>NowRx sets a new
                                                    standard that I have never seen anyone get close to.</b> I really
                                                can't say enough good things on this service."
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Larry H.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>



                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>I don't know what I'd do without these folks.</b> They are
                                                unfailingly knowledgeable, courteous and helpful. When they say your
                                                order will be delivered by a certain time you can count on it and they
                                                work to your schedule."

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-David H
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>This place, these people, are really incredible.</b> I can't say
                                                enough about the service at NowRx. I feel very lucky to have found
                                                them."

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Meg M.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                              <!-- Slides -->
  <div class="quoteitem largeblocktext largeblock">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I've been using NowRx for a while now, since long before the pandemic kept me from ever wanting to set foot in a drug store again. They communicate clearly, get meds out to me quickly at home or at work, coordinate everything with my doctor and insurance. <b>I am so happy I found them and always spreading word to friends, family, and doctors.</b> I also appreciate how the drivers, especially Roxy, go above and beyond, for instance, always calling or texting instead of ringing my doorbell, since it makes my dog bark and wake up the baby. Absolutely great!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Mark C
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "I have nothing but great things to say! <b>They have impeccable
                                                    customer service and never had any issues filling my
                                                    prescriptions.</b> Highly recommend NowRx!"

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Jenn S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>You couldn't ask for better pharmacy service.</b> These people check
                                                prices for coupons for me, take scripts by phone picture or contact my
                                                doctor's office and deliver within a hour to my work or home!"
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Alexis B.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "I honestly cannot thank NowRx enough. <b>Every time I need them, there
                                                    is someone quickly available, always friendly and knowledgeable, and
                                                    always helpful.</b> I'm so grateful for the convenience/support
                                                offered by the team!"
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Nina K
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "<b>Convenient and saved money on all the prescriptions!</b> It's a
                                                no-brainer to sign up for this fabulous service!"
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Rob S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
       <!-- Slides -->
       <div class="quoteitem largeblocktext largeblock">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I began using NowRx when the stay-in-place order took effect on 3/17/20. I called them to transfer prescriptions and a live person answered the phone, unlike endless hold at Walgreens. The person was knowledgeable and friendly and the transfer went smoothly. NowRx will send a text when a refill is due; you text back to arrange delivery to your doorstep.  Before delivery, there will be a reminder text and then a text letting you know you're the next stop. The delivery people adhere to COVID-19 safety procedures and they are polite. <b>I am never going back to a brick and mortar drug store,</b> even after going out is no longer a roll of dice on your life.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Tamara N
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "I ordered a renewal at 5:30PM, and it was delivered at my door by
                                                7:30PM. I expected it the next day. <b>All I can say is WOW.</b> "
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Steve R.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "Spectacular! So easy to use! Always a live person to talk to! Just made
                                                my life so simple! Love them!"
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Alex B
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "The best! Easy to work with, professional, and efficient and fast! No
                                                need to go to pharmacy, <b>NowRx is the best option for prescription
                                                    delivery.</b> "
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">Alex F.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "The staff are so knowledgable and friendly and the service is
                                                absolutely 5 stars and so much better than all those big chain
                                                pharmacies. <b>They really go above and beyond to help you.</b> "
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Jenny C.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "This pharmacy is the best around. <b>They are fantastic at quick
                                                    deliveries and the customer service is absolutely amazing.</b> I
                                                highly recommend NowRx and would refer anyone I know to them."
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Lisa W.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                " <b>It's changed our lives!</b> They do all the work; reminders, calls
                                                to the docs or nurses, on time DELIVERIES TO YOUR DOOR with absolutely
                                                no hassle. We highly recommend this company!"
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Cheri H.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "The best move I've ever made! Besides being friendly and helpful, <b>I
                                                    always have the feeling they are trying to make my life better</b>,
                                                always willing to work with me not against me as it felt in all the
                                                pharmacies I'd used before."
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Carolyn K.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "They are the best. I have been using them for about 1 year after being
                                                frustrated with Walgreens incompetence. <b> NowRx is a refreshing
                                                    change.</b> They act like they actually appreciate the business. I
                                                can't say enough positive things about this business."
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Craig S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "Was with my previous online pharmacy for years because of copay savings
                                                on a three month supply. But was delighted and satisfied with switching
                                                to NowRx. <b>Outstanding customer service and even more savings on my
                                                    co-pays. Instant communication via phone call or text, with same day
                                                    delivery options. Couldn't ask for more!</b> "
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-Willy S.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            <b>I adore NowRx</b>. Who wants to wait in line for a medicine in the middle of a Pandemic in a pharmacy with sick people waiting for their prescriptions? I have never waited longer than one hour for my prescriptions to be delivered to my door and that is from the time my doctor calls in the prescription. Price is the same as at Walgreens or CVS.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Jody T.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
<!-- Slides -->
<div class="quoteitem largeblocktext largeblock">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            <b>If I could give NowRx 10 stars, I would!</b> This is by far the very best pharmacy I've ever used! I was skeptical when my doctor told me they could deliver my meds to my house within 2-4 hours with no delivery or other fees at the same price (or lower) than what I was getting through my mail order pharmacy or Walgreens. I was delighted to discover the one Arizona location in nearby Mesa when we moved to the Phoenix area 2 months ago. They have outstanding customer service, are easily reachable by text or phone, and always helpful. They are prompt with any follow up including contacting my doctors for authorizations for refills, and their drivers are prompt and professional. They always text me prior to delivery and after (with a photo of my front door w/the bag).  They are a company definitely "on their game!" I hope they continue to expand and cover other areas in the country where I have family and friends who would absolutely love doing business with them. Thank you NowRx!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">-  Chippy K
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I started using NowRx in March 2020 during the beginning stages of the pandemic. My doctor had always recommended them, but I was weary. Honestly .... <b>Who delivers for free, within a few hours of receipt of the prescription, has VERY friendly customer service available by text or phone, has responses that are immediate and delivery employees that obviously love their jobs ...... NowRx does!</b> This service is INCREDIBLE!! I have tried to tip them, but they say they are not allowed to accept tips. USE THIS SERVICE .... It's a game changer!! Bye bye long lines at Walgreens, what a waste of my time you have been!! If your doctor hasn't heard of them yet, by all means tell them!!!!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Rena R.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            Amazing experience with this pharmacy! My son takes an NDC specific medication and I would ALWAYS have a problem refilling it at Walgreens. From the person I first spoke with (Shalini) to the delivery guy (Ed) both were pleasant, knowledgeable and thorough.  <b>The convenience they give us of picking up and dropping off the prescription from my home...I can't ask for anything more!</b> It sure beats waiting in a wrap around line MULTIPLE times at Walgreens drive thru! Will definitely be returning! Great job guys!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Michelle D.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            Super easy and efficient to transfer all of our Rx to NowRx. After a phone call, they arranged with our previous pharmacy, and now prescriptions just arrive at our house without any effort on our part. If they need a refill, they contact our doctors and make it happen. <b>Best of all, our prescriptions are much cheaper than the retail pharmacy we used to use.</b> I highly recommend NowRx!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Rick F
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            <b>NowRx Pharmacy, has the best service ever!</b> They are professionals, on time, I don't have to worry about refills, they do everything for me!! Give them a try! You won't be disappointed!!!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Madel L
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                              <!-- Slides -->
                              <div class="quoteitem largeblocktext largeblock">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            Never before has our family experienced such five star service. We cannot recommend NowRx enough. The staff from the drivers, pharmacy technicians to the pharmacists are all amazing to work with. Patience and Yvonne at the Mountain View location are so helpful in meeting our family’s needs. NowRx has helped us navigate through the pandemic by having our medications delivered directly to our home. We have not had to stand in long pharmacy lines. They also actually answer the phone promptly. The other big box pharmacies have a customer wait on hold for up to an hour. <b>NowRx is the most efficient model of how a pharmacy should run. We are very grateful for the professional service that they have given our family.</b> They are the very best!!!

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Noel M.
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I wish I knew about NowRx before! <b>So much better than waiting in line at CVS</b>. The service is amazing. They are so easy to contact and have amazing customer. They also deliver the same day and text you when your driver is near.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Adilene T
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            I LOVE the service of NowRx. I called early for my prescription and boy not even an hour the delivery guy named ADRIAN ding-dong at my door I was sooo impressed.  <b>Employees are all so customer service oriented. I LOVE THIS PHARMACY!</b>
                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Sally H
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            This is so much easier than going to the pharmacy. They are quick, efficient, and always pleasant.  <b>No more standing lines!</b> They are also able to fill prescriptions for my dog at very reasonable prices.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- C.G
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            NowRx has been very patient, courteous and trustworthy, in handling my complicated medication profile. They are very friendly to work with, and extremely reliable. The delivery staff have show a very high standard of providing the same level of care as the professional staff. I would heartily recommend customers of other delivery pharmacies, to compare the great care they would receive with Now Rx. <b>As a retired RN, I can really appreciate their consistency, and dedication to excellence.</b>

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Robert D
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>





                            <!-- Slides -->
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            Really convenient and reliable way of getting a medication quickly introducing inline at the pharmacy store. Will highly recommend it. They even have an option of one hour delivery if you pay extra.

                                            </span>
                                            <cite>
                                                <div class="name">
                                                    <h2 class="sec-title">- Santosh H
                                                    </h2>
                                                </div>
                                                <div class="title">
                                                    <span class="li">NowRx Pharmacy Customer</span>
                                                </div>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>