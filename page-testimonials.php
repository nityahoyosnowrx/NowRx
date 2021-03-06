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

<!-- 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "3.5",
    "reviewCount": "11"
  },
  "description": "Free Prescription Delivery in Hours",
  "name": "NowRx Pharmacy",
  "image": "<?= IMG; ?>/library/images/NowRx-Logo-Pharmacy.png",

  "review": [
    {
      "@type": "Review",
      "author": "Tanya S",
      "datePublished": "2011-04-01",
      "reviewBody": "Companies that ACTUALLY PROVIDE CUSTOMER SERVICE are so rare in this day and age. These guys are awesome!",
      "name": "Tanya S",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4",
        "worstRating": "1"
      }
    },
    {
      "@type": "Review",
      "author": "Neil C.",
      "datePublished": "2019-03-12",
      "reviewBody": "We have been using NowRx for the last year and the service is great as well as all the staff we have talked to in getting our prescriptions filled. They go the extra mile in customer service!",
      "name": "Value purchase",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "3.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Alex F.",
      "datePublished": "2018-01-11",
      "reviewBody": "The best! Easy to work with, professional, and efficient and fast! No need to go to pharmacy, NowRx is the best option for prescription delivery. ",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Mark C.",
      "datePublished": "2016-04-01",
      "reviewBody": "Best Pharmacy experience EVER! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer? You don't get better service than this.",
      "name": "asdasdsad",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "David H",
      "datePublished": "2019-12-12",
      "reviewBody": "I don't know what I'd do without these folks. They are unfailingly knowledgeable, courteous and helpful. When they say your order will be delivered by a certain time you can count on it and they work to your schedule.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Jenny C.",
      "datePublished": "2020-03-12",
      "reviewBody": "The staff are so knowledgable and friendly and the service is absolutely 5 stars and so much better than all those big chain pharmacies. They really go above and beyond to help you. ",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Elizabeth P.",
      "datePublished": "2020-12-10",
      "reviewBody": "FANTASTIC! Still waiting to know what the catch is! This has been a phenomenal service that has made filling and receiving prescriptions so easy. I'm still blown away that delivery is free and same day.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "3.4",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Meg M.",
      "datePublished": "2018-09-21",
      "reviewBody": "This place, these people, are really incredible. I can't say enough about the service at NowRx. I feel very lucky to have found them.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Lisa W.",
      "datePublished": "2020-02-01",
      "reviewBody": "This pharmacy is the best around. They are fantastic at quick deliveries and the customer service is absolutely amazing. I highly recommend NowRx and would refer anyone I know to them.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Bruce B.",
      "datePublished": "2018-01-01",
      "reviewBody": "Super easy to use. Fast and WAY cheaper than Costco or any other place I've ever checked.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Jenn S.",
      "datePublished": "2019-04-19",
      "reviewBody": "I have nothing but great things to say! They have impeccable customer service and never had any issues filling my prescriptions. Highly recommend NowRx!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.8",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Cheri H.",
      "datePublished": "2017-03-03",
      "reviewBody": " It's changed our lives! They do all the work; reminders, calls to the docs or nurses, on time DELIVERIES TO YOUR DOOR with absolutely no hassle. We highly recommend this company!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "3.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Lina W.",
      "datePublished": "2019-07-12",
      "reviewBody": "There's a reason every single review is five stars - This pharmacy is AMAZING! Lightning fast response times by pleasant professional staff and customer service like nothing I have ever encountered. Give NowRx a try - you won't regret it!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Alexis B.",
      "datePublished": "2020-03-11",
      "reviewBody": "You couldn't ask for better pharmacy service. These people check prices for coupons for me, take scripts by phone picture or contact my doctor's office and deliver within a hour to my work or home!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.6",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Carolyn K.",
      "datePublished": "2020-09-03",
      "reviewBody": "The best move I've ever made! Besides being friendly and helpful, I always have the feeling they are trying to make my life better, always willing to work with me not against me as it felt in all the pharmacies I'd used before.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "3.9",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Victoria V.",
      "datePublished": "2018-01-03",
      "reviewBody": "This pharmacy is the absolute best! They are friendly, efficient and they know their stuff! I can't say enough good things about the staff. Professional, courteous, knowledgeable service equals five stars.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.8",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Nina K",
      "datePublished": "2020-12-04",
      "reviewBody": "I honestly cannot thank NowRx enough. Every time I need them, there is someone quickly available, always friendly and knowledgeable, and always helpful. I'm so grateful for the convenience/support offered by the team!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Craig S.",
      "datePublished": "2019-04-01",
      "reviewBody": "They are the best. I have been using them for about 1 year after being frustrated with Walgreens incompetence. NowRx is a refreshing change. They act like they actually appreciate the business. I can't say enough positive things about this business.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "aaaaaaa",
      "datePublished": "2020-11-11",
      "reviewBody": "Hands down best pharmacy you could ask for! I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!",
      "name": "Melissa A.",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.3",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Rob S.",
      "datePublished": "2020-10-03",
      "reviewBody": "Convenient and saved money on all the prescriptions! It's a no-brainer to sign up for this fabulous service!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Willy S.",
      "datePublished": "2020-12-09",
      "reviewBody": "Was with my previous online pharmacy for years because of copay savings on a three month supply. But was delighted and satisfied with switching to NowRx. Outstanding customer service and even more savings on my co-pays. Instant communication via phone call or text, with same day delivery options. Couldn't ask for more! ",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.3",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Larry H.",
      "datePublished": "2020-05-04",
      "reviewBody": "These people, this service is as Good as it Gets. NowRx sets a new standard that I have never seen anyone get close to. I really can't say enough good things on this service.",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.6",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Steve R.",
      "datePublished": "2019-01-01",
      "reviewBody": "I ordered a renewal at 5:30PM, and it was delivered at my door by 7:30PM. I expected it the next day. All I can say is WOW. ",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "Alex B",
      "datePublished": "2012-01-04",
      "reviewBody": "Spectacular! So easy to use! Always a live person to talk to! Just made my life so simple! Love them!",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.8",
        "worstRating": "1"
      }
    }
    ,{
      "@type": "Review",
      "author": "aaaaaaa",
      "datePublished": "2020-01-01",
      "reviewBody": "qweqweqweqwe",
      "name": "asdadasdsadsdadasd",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
  ]
}
</script> -->


<!-- what doctor saying -->


<section class="testimonials-block doctorquotes">

    <div class="container">
        <div class="content">
            <div class="rvla">
                <div class="subtitle">
                    See What Customers Are Saying About NowRx Pharmacy Delivery
                </div>
            </div>
            <div class="rvla">
                <h1 class="main-title">
                    "Best Prescription Delivery Service for Northern California and Orange County Residents" (CNET)
                </h1>
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
                                                "Companies that <b>ACTUALLY PROVIDE CUSTOMER SERVICE</b> are so rare in this day and age. These guys are awesome!"

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
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            "<b>Best Pharmacy experience EVER</b>! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer? You don't get better service than this."

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
                                            "<b>FANTASTIC! Still waiting to know what the catch is!</b> This has been a phenomenal service that has made filling and receiving prescriptions so easy. I'm still blown away that delivery is free and same day."


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
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                                "Super easy to use. <b>Fast and WAY cheaper</b> than Costco or any other place I've ever checked."
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
                                            "<b>There's a reason every single review is five stars - This pharmacy is AMAZING</b>! Lightning fast response times by pleasant professional staff and customer service like nothing I have ever encountered. Give NowRx a try - you won't regret it!"

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
                                            "<b>This pharmacy is the absolute best</b>! They are friendly, efficient and they know their stuff! I can't say enough good things about the staff. Professional, courteous, knowledgeable service equals five stars."

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
                                            "<b>Hands down best pharmacy you could ask for!</b> I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!"

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
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            "These people, this service is as Good as it Gets. <b>NowRx sets a new standard that I have never seen anyone get close to.</b> I really can't say enough good things on this service."
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
                                            "We have been using NowRx for the last year and the service is great as well as all the staff we have talked to in getting our prescriptions filled. <b>They go the extra mile in customer service!</b>"

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
                                            "<b>I don't know what I'd do without these folks.</b> They are unfailingly knowledgeable, courteous and helpful. When they say your order will be delivered by a certain time you can count on it and they work to your schedule."

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
                                            "<b>This place, these people, are really incredible.</b> I can't say enough about the service at NowRx. I feel very lucky to have found them."

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
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            "I have nothing but great things to say! <b>They have impeccable customer service and never had any issues filling my prescriptions.</b> Highly recommend NowRx!"

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
                                            "<b>You couldn't ask for better pharmacy service.</b> These people check prices for coupons for me, take scripts by phone picture or contact my doctor's office and deliver within a hour to my work or home!"
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
                                            "I honestly cannot thank NowRx enough. <b>Every time I need them, there is someone quickly available, always friendly and knowledgeable, and always helpful.</b> I'm so grateful for the convenience/support offered by the team!"
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
                                            "<b>Convenient and saved money on all the prescriptions!</b> It's a no-brainer to sign up for this fabulous service!"
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
                            <div class="quoteitem">
                                <div class="content">

                                    <div class="quote">
                                        <blockquote>
                                            <span class="fullquote">
                                            "I ordered a renewal at 5:30PM, and it was delivered at my door by 7:30PM. I expected it the next day. <b>All I can say is WOW.</b> "
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
                                            "Spectacular! So easy to use! Always a live person to talk to! Just made my life so simple! Love them!"
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
                                            "The best! Easy to work with, professional, and efficient and fast! No need to go to pharmacy, <b>NowRx is the best option for prescription delivery.</b> "
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
                                            "The staff are so knowledgable and friendly and the service is absolutely 5 stars and so much better than all those big chain pharmacies. <b>They really go above and beyond to help you.</b> "
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
                                            "This pharmacy is the best around. <b>They are fantastic at quick deliveries and the customer service is absolutely amazing.</b> I highly recommend NowRx and would refer anyone I know to them."
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
                                            " <b>It's changed our lives!</b> They do all the work; reminders, calls to the docs or nurses, on time DELIVERIES TO YOUR DOOR with absolutely no hassle. We highly recommend this company!"
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
                                            "The best move I've ever made! Besides being friendly and helpful, <b>I always have the feeling they are trying to make my life better</b>, always willing to work with me not against me as it felt in all the pharmacies I'd used before."
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
                                            "They are the best. I have been using them for about 1 year after being frustrated with Walgreens incompetence. <b> NowRx is a refreshing change.</b> They act like they actually appreciate the business. I can't say enough positive things about this business."
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
                                            "Was with my previous online pharmacy for years because of copay savings on a three month supply. But was delighted and satisfied with switching to NowRx. <b>Outstanding customer service and even more savings on my co-pays. Instant communication via phone call or text, with same day delivery options. Couldn't ask for more!</b> "
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



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>