<?php get_header(); ?>


<script type="application/ld+json">
{
    "@context": "https://www.schema.org/",
    "@type": "LocalBusiness",
    "name": "<?= __(the_title()); ?>",
    "alternateName": ["NowRx", "NowRx Pharmacy", "Now Rx", "Now Rx Pharmacy"],
    "url": "<?= site_url(); ?>",
    "@id": "<?= site_url(); ?>/#LocalBusiness",
    "logo": "<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png",
    "image": "<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png",
    "description": "NOWRX PHARMACY - COMING TO A CITY NEAR YOU",
    "telephone": "(949) 619-6000",
    "sameAs": [
        "https://twitter.com/NowRx?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
        "https://www.facebook.com/NowRx/"
    ],
    "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
        ],
        "opens": "09:00",
        "closes": "17:00"
    }],
    "priceRange": "$",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "1641 Kaiser Ave",
        "addressLocality": "Irvine",
        "addressRegion": "California",
        "postalCode": "92614",
        "addressCountry": "USA"
    },

    "location": {
        "@type": "Place",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "30.0000",
            "longitude": "-130.0000"
        }
    },
    "areaServed": [{
        "@type": "City",
        "name": ["City 1", "City 2"]
    }],
    "department": [{
            "@type": "Pharmacy",
            "name": "NowRx – Mountain View",
            "description": "NowRx Mountain View is a local retail pharmacy based out of Mountain View California that provides free prescription delivery in 3-5",
            "url": "<?= site_url(); ?>/locations/california/mountain-view/",
            "@id": "<?= site_url(); ?>/locations/california/mountain-view/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "(650) 499-3000",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "2224 Old Middlefield Way, Suite J",
                "addressLocality": "Mountain View",
                "addressRegion": "California",
                "postalCode": "94043",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "37.41506757633653",
                    "longitude": "-122.09510787333173"
                }
            }

        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – Burlingame",
            "description": "NowRx Burlingame is a local retail pharmacy based out of Burlingame California that provides free prescription delivery in 3-5",
            "url": "<?= site_url(); ?>/locations/california/burlingame/",
            "@id": "<?= site_url(); ?>/locations/california/burlingame/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "(650) 499-300",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "800 Burlway Rd.",
                "addressLocality": "Burlingame",
                "addressRegion": "California",
                "postalCode": "94010",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "37.59640168435328",
                    "longitude": "-122.3660057307532"
                }
            }
        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – San Jose",
            "description": "NowRx Burlingame is a local retail pharmacy based out of Burlingame California that provides free prescription delivery in 3-5",
            "url": "<?= site_url(); ?>/locations/california/san-jose/",
            "@id": "<?= site_url(); ?>/locations/california/san-jose/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "(650) 499-3000",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1310 Tully Road",
                "addressLocality": "San Jose",
                "addressRegion": "California",
                "postalCode": "95122",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "37.31621941051127",
                    "longitude": "-121.83352057308733"
                }
            }
        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – Irvine",
            "description": "NowRx Irvine is a local retail pharmacy based out of Irvine California that provides free prescription delivery in 3-5 hours",
            "url": "<?= site_url(); ?>/locations/california/irvine/",
            "@id": "<?= site_url(); ?>/locations/california/irvine/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "(949) 619-6000",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1641 Kaiser Ave",
                "addressLocality": "Irvine",
                "addressRegion": "California",
                "postalCode": "92614",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "33.69528942383872",
                    "longitude": "-117.85037718665065"
                }
            }
        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – Mesa",
            "description": "NowRx is a local retail pharmacy based out of Mesa Arizona that provides free prescription delivery in 3-5 hours",
            "url": "<?= site_url(); ?>/locations/arizona/mesa/",
            "@id": "<?= site_url(); ?>/locations/arizona/mesa/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "(480) 400-3000",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "2452 W Birchwood Ave, Ste 106",
                "addressLocality": "Mesa",
                "addressRegion": "Arizona",
                "postalCode": "85202",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "33.40975440455737",
                    "longitude": "-111.8846782308355"
                }
            }

        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – Pleasanton",
            "description": "NowRx is a local retail pharmacy based out of Pleasanton Arizona that provides free prescription delivery in 3-5 hours",
            "url": "<?= site_url(); ?>/locations/arizona/Pleasanton/",
            "@id": "<?= site_url(); ?>/locations/arizona/Pleasanton/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "925-701-9424",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "7067 Commerce Cir.",
                "addressLocality": "Pleasanton",
                "addressRegion": "CA",
                "postalCode": "94588",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "37.69908108092993",
                    "longitude": "-121.91699751725876"
                }
            }

        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – van nuys",
            "description": "NowRx is a local retail pharmacy based out of van nuys California that provides free prescription delivery in 3-5 hours",
            "url": "<?= site_url(); ?>/locations/california/van-nuys/",
            "@id": "<?= site_url(); ?>/locations/california/van-nuys/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "213-263-4391",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "16517 Arminta St.",
                "addressLocality": "van nuys",
                "addressRegion": "CA",
                "postalCode": "91406",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "34.215095096637924",
                    "longitude": "-118.49289467314873"
                }
            }

        },
        {
            "@type": "Pharmacy",
            "name": "NowRx – hayward",
            "description": "NowRx is a local retail pharmacy based out of hayward california that provides free prescription delivery in 3-5 hours",
            "url": "<?= site_url(); ?>/locations/california/hayward/",
            "@id": "<?= site_url(); ?>/locations/california/hayward/#Pharmacy",
            "image": "<?= site_url(); ?>/wp-content/themes/nowrx-optimize/library/images/NowRx-Logo-Pharmacy.png",
            "telephone": "510-892-2665",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "29233 Pacific St.",
                "addressLocality": "hayward",
                "addressRegion": "CA",
                "postalCode": "94544",
                "addressCountry": "USA"
            },

            "location": {
                "@type": "Place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "37.62946075866285",
                    "longitude": "-122.0560470884243"
                }
            }

        }

    ]
}
</script>




<main id="main" class="main-class">




    <!-- hero -->
    <section class="hero-home ">

        <div class="container">
            <div class="content">

                <!-- content -->
                <div class="column-half content-col">


                    <div class="rvls">
                        <span class="subheading">
                            Coming to a City Near You
                        </span>
                    </div>
                    <div class="rvls">
                        <h1 class="" itemprop="headline">
                            A Better Local Pharmacy Delivered
                        </h1>
                    </div>
                    <div class="rvls">
                        <p>
                            Don't see a NowRx Pharmacy near you? Don't worry! Suggest a location and you could be
                            our next expansion city.
                        </p>
                    </div>

                    <div class="rvls">
                        <div class="btn-container">
                            <a class="rx-btn" href="#locations-item" tabindex="0">View Locations</a>
                            <a class="rx-btn rx-green mrb"
                                href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Get Started</a>
                        </div>
                    </div>

                </div>

                <!-- image -->
                <div class="column-half image-col">


                    <picture class="lozad"
                        data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription.webp"
                        data-toggle-class="active">
                        <source media="(max-width: 1px)"
                            srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription.webp">
                        <source media="(min-width: 2px)"
                            srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription.webp"
                            class="orbit-image lozad" height="500px" width="650px"
                            alt="NowRx Pharmacy Delivery Driver Dropping Off Prescription">
                    </picture>


                </div>

            </div>
        </div>
    </section>








    <section class="locations-item" id="locations-item">
        <div class="container">
            <div class="content">
                <span class="sub-headline">
                    A Better Local Pharmacy
                </span>
                <h2 class="sec-title">
                    View All NowRx Locations
                </h2>


                <div class="locatios-mainblock">
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/mountain-view/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Mountain View, CA</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx MtnV (NCPDP: 56565559)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (650) 499-3000
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (650) 963-3204
                            </span>
                        </a>

                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/mountain-view/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>

                    </div>
                    <!-- item -->
                    <div class="location-item">

                        <a href="<?= get_site_url(); ?>/locations/california/irvine/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Irvine, CA</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx IRVN (NCPDP: 5670220)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (949) 619-6000
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (949) 418-9013
                            </span>
                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/irvine/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href='<?= get_site_url(); ?>/locations/california/burlingame/'>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>
                            </div>
                            <h2 class="sec-title">Burlingame, CA</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx BURL (NCPDP: 5669948)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (650) 499-3000
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (650) 931-4304
                            </span>
                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/burlingame/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/mesa/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Mesa, AZ</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx MESA (NCPDP: 0364252)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (480) 400-3000
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (480) 597-3274
                            </span>
                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/mesa/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/san-jose/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">San Jose, CA</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx SJCE (NCPDP: 5667843)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (650) 499-3000
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (408) 645-5039
                            </span>
                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/san-jose/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/pleasanton/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Pleasanton, CA</h2>
                            <span class="desc-item">
                                <b>ePrescribe:</b> NowRx Plnt (NCPDP : 5670751)
                            </span>
                            <span class="desc-item">
                                <b>Phone:</b> (925) 701-9424
                            </span>
                            <span class="desc-item">
                                <b>Fax:</b> (925) 701-9525
                            </span>
                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/pleasanton/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/van-nuys/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Van Nuys, CA</h2>

                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/van-nuys/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/hayward/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4"/><path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858"/><path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30"/><path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5"/></g></svg>

                            </div>
                            <h2 class="sec-title">Hayward, CA</h2>

                        </a>
                        <div class="btn-block">
                            <a href="<?= get_site_url(); ?>/locations/california/hayward/" class="rx-btn-loca">
                                Click for More Information

                            </a>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="location-item signup">
                    <a class="ali" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">
                        <h2 class="sec-title disclaimer">

                            Suggest a Location
                        </h2>
                        <p>
                        Don't see a NowRx near you? Suggest a location!
                        </p>
                        <span class="desc-item" style="display:block;">
                            <span  class="rx-btn">
                            Suggest a Location
                        </span>
                        </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <?php include('section-visitblock.php'); ?>



    <!-- FAQ -->
    <?php get_template_part('components/section-faq-flip'); ?>


    <!-- visit faq -->
    <?php
    get_template_part('components/visit-our-faq'); ?>



</main>



<?php get_footer(); ?>