<?php
/*
 Template Name: Refill and Transfer Prescriptions
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




<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "How can you afford to provide free same-day delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The proprietary tech inside our pharmacy increases efficiency and reduces our cost to about 1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery."
            }
        },
        {
            "@type": "Question",
            "name": "How do you make money?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We make money like every pharmacy or healthcare service – reimbursement from insurance and copays from the patient."
            }
        },
        {
            "@type": "Question",
            "name": "How can you afford to provide free same-day delivery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The proprietary tech inside our pharmacy increases efficiency and reduces our cost to about 1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery."
            }
        },
        {
            "@type": "Question",
            "name": "How do you handle special requests?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Special requests (e.g. blister packs, medication sorting, etc.) are available upon request. Just let our pharmacist know when they reach out to schedule your delivery!"
            }
        },
        {
            "@type": "Question",
            "name": "Do you take all insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We accept all major insurance except Kaiser Permanente."
            }
        },
        {
            "@type": "Question",
            "name": "Do you deliver controlled & refrigerated medication?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor before delivery. These meds also require a signature & proper ID."
            }
        },
        {
            "@type": "Question",
            "name": "Do you deliver controlled & refrigerated medication?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor before delivery. These meds also require a signature & proper ID."
            }
        },
        {
            "@type": "Question",
            "name": "Do your meds cost more?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "NO. Pricing is competitive with and typically lower than even GoodRx coupons."
            }
        },
        {
            "@type": "Question",
            "name": "Can I manage prescriptions for a family member?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. You can set a head of household if a single person will be managing a family member or loved one's prescriptions."
            }
        },
        {
            "@type": "Question",
            "name": "Where is NowRx Available?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can view our locations and service areas at nowrx.com/locations/."
            }
        }


    ]
}
</script>


<!-- hero -->
<section class="hero-home refillstation" id="home">
    <div class="rvl">


        <!-- <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) " data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" height="100px" width="450px"
                alt="Surescripts 2020 White Coat Award Finalist (Highest Accuracy) ">
        </picture> -->

    </div>

    <div class="container">

        <div class="content">


            <!-- content -->
            <div class="column-half content-col">


            <div class="deskcontent">
                <h1 class="hiw-title">
                    Pharmacy Delivery Made Easy
                </h1>
                <span class="sub-headline">Please complete the form below to request a refill or transfer. Your
                    local NowRx Pharmacy will then call/text you to confirm all delivery details. </span>
            </div>

            <div class="titlecolumn">
                <span class="sub-headline">
                Please complete the form below. Your local NowRx will then call/text you to confirm delivery.
                </span>
            </div>


                <div class="rvls">
                    <div class="pageform">
                        <!--[if lte IE 8]>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js" ></script>
                        <![endif]-->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script>
                        hbspt.forms.create({
                            portalId: "5952677",
                            formId: "bfc2a11c-c87f-4d3b-ad5e-9fc5878ede37",
                        });
                        </script>

                        <style>
                        .pageform input {
                            margin: 0 0 7px;
                            display: inline-block;
                            width: 90%;
                            max-width: 500px;
                            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                            font-size: 16px;
                            font-weight: 400;
                            line-height: 22px;
                            color: #33475b;
                            border: 1px solid #cbd6e2;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            border-radius: 3px;
                            background-color: #f5f8fa;
                            border-radius: 20px;
                            padding: 0 15px;
                            min-height: 27px;
                            min-width: 100%;
                        }

                        .pageform textarea {
                            margin: 0 0 7px;
                            display: inline-block;
                            width: 90%;
                            max-width: 500px;
                            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                            font-size: 16px;
                            font-weight: 400;
                            line-height: 22px;
                            color: #33475b;
                            border: 1px solid #cbd6e2;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            border-radius: 3px;
                            background-color: #f5f8fa;
                            border-radius: 20px;
                            padding: 10px 15px;
                            min-height: 100px;
                            min-width: 100%;
                        }

                        label {
                            font-family: helvetica;
                            font-size: 13px;
                            padding: 0 10px;
                        }

                        span.hs-form-required {
                            color: red;
                        }


                        ul.inputs-list.multi-container li.hs-form-checkbox {
                            list-style: none;
                        }

                        ul.inputs-list.multi-container li.hs-form-checkbox input {
                            margin-right: 10px;
                            min-width: 0%;
                        }

                        ul.inputs-list.multi-container li.hs-form-checkbox label {
                            font-size: 14px;
                        }


                        ul.inputs-list.multi-container li.hs-form-checkbox label#label-switch_to_nowrx_pharmacy-bfc2a11c-c87f-4d3b-ad5e-9fc5878ede37 {
                            margin: 30px 0 0;
                            display: block;
                        }

                        label#label-switch_to_nowrx_pharmacy-bfc2a11c-c87f-4d3b-ad5e-9fc5878ede37 {
                            font-size: 16px;
                            margin: 20px 0 10px;
                        }

                        .hs_submit.hs-submit {
                            margin: 0 0 0;
                            justify-content: flex-start;
                        }

                        .hs_switch_to_nowrx_pharmacy input[type=checkbox]:after {
                            background: transparent;
                            border-radius: 50%;
                            width: 13px;
                            height: 13px;
                            /* color: transparent; */
                            /* border: 2px solid #ffffff8c; */
                            /* background: transparent; */
                            content: '✓';
                            line-height: 13px;
                        }

                        ul.inputs-list.multi-container li.hs-form-checkbox input {
                            margin-right: 10px;
                            min-width: 0%;
                            border: none;
                            width: 27px;
                            height: 27px;


                        }

                        .hs_message_to_nowrx>label,
                        .hs_switch_to_nowrx_pharmacy>label {
                            color: inherit;
                            font-weight: 100;
                            font-family: helvetica;
                            font-size: 13px;
                        }

                        .hs_message_to_nowrx>label,
                        .hs_switch_to_nowrx_pharmacy>label strong {
                            font-weight: 500;
                            font-family: helvetica;
                            font-size: 13px;
                        }

                        .hs_message_to_nowrx>label,
                        .hs_switch_to_nowrx_pharmacy>label em {
                            font-size: 13px;
                        }

                        .hbspt-form {
                            text-align: left;
                        }

                        .pageform li {
                            list-style: none;
                            margin-bottom: 10px;
                        }

                        li {
                            list-style: none;
                        }
                        </style>
                    </div>
                </div>



            </div>

            <!-- image -->
            <div class="column-half image-col">
                <div class="quoteitems">
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Mark C.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    >"<span style="font-weight: bold; color: #008ed8"
      >Best pharmacy experience EVER!</span
    >
    These guys are like going to your old neighborhood pharmacy, you know the
    one, where they deliver your medications to you and actually care about the
    customer? You don't get better service."</span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Dr. James Tearse</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    >"I highly recommend NowRx Pharmacy. I use them professionally as well as
    personally for my own prescriptions and
    <span style="font-weight: bold; color: #008ed8"
      >they really are as good as advertised.</span
    >
    I could not be happier with NowRx!"</span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Tanya S.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    >"Companies that
    <span style="font-weight: bold; color: #008ed8"
      >ACTUALLY PROVIDE CUSTOMER SERVICE</span
    >
    are so rare in this day and age. These guys are awesome!"</span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>


                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Melissa A.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    >"Hands down
    <span style="font-weight: bold; color: #008ed8"
      >BEST PHARMACY you could ask for!</span
    >
    I no longer have to wait in line to fill my grandmother's medications, and
    the customer service is amazing. Try them out and you won't regret
    it!"</span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Larry H.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    ><span style="font-weight: normal"
      >"These people, this service is
      <span style="font-weight: bold; color: #008ed8">AS GOOD AS IT GETS.</span>
      NowRx sets a new standard that I have never seen anyone get close to. I
      really can't say enough good things on this service."</span
    ></span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Lina W.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    "There's a reason every single review is five stars -
  <span style="font-weight: bold; color: #008ed8"
    >This pharmacy is AMAZING!</span
  >
  Lightning fast response times by pleasant professional staff and customer
  service like nothing I have ever encountered. Give NowRx a try - you won't
  regret it!"
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Bruce B.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    <span
    >"<span style="font-weight: bold; color: #008ed8">Super easy to use.</span>
    Fast and WAY cheaper than Costco or any other place I've ever
    checked."</span
  >
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Meg M.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    "<span style="font-weight: bold; color: #008ed8"
    >This place, these people, are really incredible.</span
  >
  They deliver to my house. They process coupons and discounts when I find that
  they are available. The big chain pharmacies made that process very difficult.
  I can't say enough!"
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>

                                        <!-- item -->
                                        <div class="quoteitem">
                        <div class="content">
                            <div class="quote">
                                <blockquote>

                                    <cite>
                                        <div class="name">
                                            <h2 class="sec-title">Danna Y.</h2>
                                            <div class="stars">
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                                <div class="star">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="511pt"
                                                        viewBox="0 -10 511.98685 511" width="511pt">
                                                        <path
                                                            d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                                            fill="#ffc107" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <span class="li">NowRx Pharmacy Customer</span>
                                        </div>
                                    </cite>
                                    <span class="fullquote">
                                    "My husband and I have been using NowRx since early this year and
    <span style="font-weight: bold; color: #008ed8"
      >I wish we knew about this pharmacy earlier.</span
    >
    It's fast, convenient and their customer service people are very friendly. I
    would definitely recommend them!"
                                    </span>

                                </blockquote>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="titlecolumn">
                <h1 class="hiw-title">
                    Pharmacy Delivery Made Easy
                </h1>

            </div>
        </div>
    </div>
</section>


<?php include('section-companies.php'); ?>



<section class="how-it-works panel--primary" id="howitworks-doctors">
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

                    <h3 class="padding-bottom-3">1. Send Us Your Prescription</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Prescription-Icon.png"
                            alt="Prescription Icon" class="pic lozad">
                    </div>

                    <p>
                        <strong>New Prescription: </strong>Tell your doctor to fax or ePrescribe to NowRx. <br>
                        <strong>Existing Prescription: </strong>Text <a href="tel:844-466-6979" class="tellink">(844)
                            466-6979</a> or <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/"
                            style="color:#fff;">Transfer
                            Online
                            Here</a>.
                    </p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">2. We Confirm Delivery</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Confirmation-Icon.png"
                            alt="prescription delivery confirmation check mark icon" class="pic lozad ">
                    </div>

                    <p>We will reach out to you via phone to collect your insurance copay confirm your address and set
                        up a
                        delivery time.</p>
                </div>
            </div>


            <div class="hiw-cell cell large-4 text-center">
                <div class="rvl">

                    <h3 class="padding-bottom-3">3. Medication is Delivered</h3>
                    <div class="image">
                        <img data-toggle-class="active"
                            data-src="<?php echo get_template_directory_uri(); ?>/library/images/Car-Icon.png"
                            alt="Prescription Delivery Car Icon" class="pic lozad">
                    </div>

                    <p>A NowRx employee will deliver your medication in hours from your local NowRx Pharmacy for free.
                        All you pay is your normal copay.</p>
                </div>
            </div>


        </div>
    </div>
</section>



<!-- faq -->
<section class="faq-section">
    <div class="container">
        <div class="content">
            <div class="titleblock">
                <div class="rvl">
                    <span class="sub-headline">
                        Pharmacy Delivery from NowRx
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
                                How can you afford to provide free same-day delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                The proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                about
                                1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery.
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
                                How do you make money?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                We make money like every pharmacy or healthcare service – reimbursement from insurance
                                and copays from the patient.
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
                                How can you afford to provide free same-day delivery?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                The proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                about
                                1/100th that of a traditional pharmacy like CVS. This enables free same-day delivery.
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
                                How do you handle special requests?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Special requests (e.g. blister packs, medication sorting, etc.) are available upon
                                request. Just let our pharmacist know when they reach out to schedule your delivery!

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
                                Do you take all insurance?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                We accept all major insurance except Kaiser Permanente.
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
                                Do you deliver controlled & refrigerated medication?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                YES. If you have a paper copy, a NowRx driver will pick it up from you or your
                                doctor
                                before delivery. These meds also require a signature & proper ID.
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
                                Do you deliver controlled & refrigerated medication?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                YES. If you have a paper copy, a NowRx driver will pick it up from you or your doctor
                                before delivery. These meds also require a signature & proper ID.
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
                                Do your meds cost more?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                NO. Pricing is competitive with and typically lower than even GoodRx coupons.
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
                                Can I manage prescriptions for a family member?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                Yes. You can set a head of household if a single person will be managing a family member
                                or loved one's prescriptions.
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
                                Where is NowRx Available?
                            </span>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="a-item">
                            <div class="title">A.</div>
                            <span class="cntx">
                                You can view our locations and service areas at <a
                                    href="https://nowrx.com/locations/">nowrx.com/locations/</a>.
                            </span>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>




<!-- visit faq -->
<section class="visit-faq refillfaq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    Have additional questions about NowRx Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Visit our FAQ Page
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/faqs/#faqblock" class="rx-btn rx-dg">
                        Frequently Asked Questions
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    You can also text us at (844) 466-6979 or send an email to info@nowrx.com and we will get back to
                    you as soon as possible.
                </div>
            </div>
        </div>
    </div>
</section>






<section class="split-image">
    <div class="imagefull">
        <img src="<?php echo get_template_directory_uri(); ?>/images/whypeoplelovenowrx.jpg"
            alt="NowRx Pharmacist Delivering Medication" class="pic">
    </div>
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    A Better Local Pharmacy
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Why People Love NowRx
                </h2>
            </div>

            <div class="itemlist">
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">Free Prescription Delivery in Hours</h3>
                    </div>
                    <div class="rvl">
                        <p>You only pay your normal insurance copay. 1-hour rush delivery is available for a $5 fee.</p>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">Local Presence in Our Service Areas</h3>
                    </div>
                    <div class="rvl">
                        <p>Visit your local NowRx Pharmacy in person and meet our hardworking pharmacy staff.</p>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">Insurance & Prior Authorization Assistance</h3>
                    </div>
                    <div class="rvl">
                        <p>We help you navigate the insurance process and get your medications covered.</p>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">Automatic Coupon Search & Application</h3>
                    </div>
                    <div class="rvl">
                        <p>Our proprietary software finds you savings to help lower your out of pocket costs.</p>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">Out of Pocket Price Match Guarantee</h3>
                    </div>
                    <div class="rvl">
                        <p>If your medication is ever more expensive with NowRx we will transfer it for you.</p>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="rvl">
                        <h3 class="title">5 Star Service (Google/Yelp 2020)</h3>
                    </div>
                    <div class="rvl">
                        <p>Our staff will do everything to help give you the best possible pharmacy experience.</p>
                    </div>
                </div>

            </div>

            <div class="rvl">
                <div class="btn-container">
                    <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/" class="rx-btn rx-dg">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- visit faq -->
<section class="visit-faq">
    <div class="container">
        <div class="content">
            <div class="rvl">
                <span class="sub-headline">
                    No Signup Required. No Hidden Fees
                </span>
            </div>
            <div class="rvl">
                <h2 class="sec-title">
                    Just a Better Pharmacy
                </h2>
            </div>
            <div class="rvl">
                <div class="btn-container">
                    <a href="#home" tabindex="0" class="rx-btn rx-dg">
                        Get Started
                    </a>
                </div>
            </div>
            <div class="rvl">
                <div class="small-block">
                    Still have questions about how to get started with NowRx Pharmacy? Email us at <a
                        href="maito:info@nowrx.com" class="alink">info@nowrx.com </a>and we will be happy to help.
                </div>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>