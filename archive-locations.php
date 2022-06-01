<?php get_header(); ?>

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script>

<script type="application/ld+json" defer>
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
                            <a class="rx-btn rx-green mrb" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Get Started</a>
                        </div>
                    </div>

                </div>

                <!-- image -->
                <div class="column-half image-col">


                    <picture class="" data-toggle-class="active">
                        <source media="(max-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription-n.webp">
                        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Driver-Dropping-Off-Prescription.webp">
                        <img class="orbit-image " height="500px" width="650px" alt="NowRx Pharmacy Delivery Driver Dropping Off Prescription">
                    </picture>


                </div>

            </div>
        </div>
    </section>




    <?php include('components/component-logo-slider.php'); ?>



    <section class="locations-flex" id="locations-item">
        <div class="container">
            <div class="content">
                <header class="section">
                    <span class="sub-headline">
                        A Better Local Pharmacy
                    </span>
                    <h2 class="sec-title">
                        View All NowRx Locations
                    </h2>
                </header>

                <div class="map-tem">
                    <div id="map"></div>
                    <div id="side_bar"></div>
                </div>




                <div class="filter">
                <input id="address" type="text" value="Palo Alto, CA"></input>
                <input type="button" value="Search" onclick="codeAddress();"></input>
                <!-- <div id="info"></div> -->
                </div>


                <div class="locatios-mainblock">
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/mountain-view/">
                            <figure class="image"><img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3264" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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

                        <figure class="image"><img src="https://images.unsplash.com/photo-1615470721367-af2ef285d85f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669" alt=""></figure>
                        <a href="<?= get_site_url(); ?>/locations/california/irvine/">
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1648937391328-675141e2b6e1?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>
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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1613574726650-d1ab2eea296a?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1523724581292-f6c3a950b7ba?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1499310226026-b9d598980b90?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2274" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.pexels.com/photos/1049302/pexels-photo-1049302.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1517141772911-756dc840a94f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3260" alt=""></figure>
                            <div class="sv">
                                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m107.427 84.289h-30.155a182.929 182.929 0 0 1 -13.272 18.371 182.929 182.929 0 0 1 -13.272-18.371h-30.155l-14.267 37.405h115.388z" fill="#dfeef4" />
                                        <path d="m64 6.31a30.711 30.711 0 0 0 -30.71 30.71c-.18 29.3 30.71 65.64 30.71 65.64s30.89-36.34 30.71-65.64a30.711 30.711 0 0 0 -30.71-30.71zm0 43.74a13.03 13.03 0 1 1 13.03-13.03 13.025 13.025 0 0 1 -13.03 13.03z" fill="#f45858" />
                                        <path d="m110.74 92.96-57.58 20.48-22.44-29.15h20.01a182.752 182.752 0 0 0 13.27 18.37 182.752 182.752 0 0 0 13.27-18.37h30.16z" fill="#f2da30" />
                                        <path d="m29.96 121.694 56.996-20.274 15.604 20.274z" fill="#3ea2e5" />
                                    </g>
                                </svg>

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
                            <figure class="image"><img src="https://images.unsplash.com/photo-1619468129361-605ebea04b44?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2671" alt=""></figure>
                            <h2 class="sec-title disclaimer">

                                Suggest a Location
                            </h2>
                            <p>
                                Don't see a NowRx near you? Suggest a location!
                            </p>
                            <span class="desc-item" style="display:block;">
                                <span class="rx-btn">
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



</main>





<style>
    #map_canvas {
  margin: 0;
  padding: 0;
  height: 100%;
}
    #map {
        height: 300px;
        border-radius: 5px;
    }

    .map-tem {
        padding: 0 20px;
        margin: 60px 0 40px;
    }

    #mapoc {
        height: 400px;
    }

    label.enter {
        text-align: center;
        margin: 0 0 10px;
        font-size: 1.4rem;
        display: block;
    }

    @media screen and (max-width: 992px) {
        label.enter {
            font-size: 1rem;
            font-weight: 700;
        }
    }

    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    .box {
        max-width: 1200px;
        padding: 0 20px;
        margin: 0 auto 30px;
    }

    .results-map.notfound {
        color: #d43636;
    }

    .results-map {
        display: block;
        margin: 0 0 20px;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.8;
        color: #31a631;
        font-weight: 700;
        text-align: center;
    }

    #pac-input {
        text-transform: none;
        position: relative;
        cursor: pointer;
        user-select: none;
        direction: ltr;
        overflow: hidden;
        text-align: center;
        vertical-align: middle;
        border-bottom-right-radius: 2px;
        border-top-right-radius: 2px;
        background-color: transparent;
        padding: 0;
        color: rgb(0 0 0);
        outline: none;
        flex: 100%;
        font-size: 16px;
        background: #fff;
        display: flex;
        border: 1px solid #dfe1e5;
        box-shadow: none;
        border-radius: 24px;
        z-index: 3;
        padding: 23px;
        margin: 0 auto 10px;
    }

    #pac-input::placeholder {
        color: rgb(156 156 156);
    }

    .map-searchbar.secondbar {
        margin: 60px 0 0;
    }


    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
</style>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmMty5MmMXegrIhIhMHDWOqIu6RQ6m9vg&libraries=geometry,places"></script>

<script>
    // var map;
    // var geocoder;
    // var marker;
    // var polygon;
    // var bounds;



    // <?php

    // $coord = '33.410481, -111.884589';

    // $currentLocation = '';

    // if (is_single('burlingame')) {
    //     $coord = '37.59065492066287, -122.36895749879504';
    //     $currentLocation = "burlingame";
    // }
    // if (is_single('san-jose')) {
    //     $coord = '37.31386495445363, -121.87610133554892';
    //     $currentLocation = "san-jose";
    // }
    // if (is_single('mountain-view')) {
    //     $coord = '37.39626924351466, -122.08504573831861';
    //     $currentLocation = "mountain-view";
    // }
    // if (is_single('irvine')) {
    //     $coord = '33.67015776456957, -117.77854787529476';
    //     $currentLocation = "irvine";
    // }
    // if (is_single('pleasanton')) {
    //     $coord = '37.699004, -121.916914';
    //     $currentLocation = "pleasanton";
    // }
    // if (is_single('van-nuys')) {
    //     $coord = '34.2150729, -118.4950994';
    //     $currentLocation = "van-nuys";
    // }
    // if (is_single('hayward')) {
    //     $coord = '37.629392782800444, -122.05598271544449';
    //     $currentLocation = "hayward";
    // }
    // if (is_single('mesa')) {
    //     $coord = '33.4656483447172, -112.03032416162027';
    //     $currentLocation = "mesa";
    // }

    // $zoomLvl = 6;
    // if (is_single('mesa')) {
    //     $zoomLvl = 9;
    // }


    // ?>

    // function initMap() {

    //     map = new google.maps.Map(document.getElementById('map'), {
    //         center: center,
    //         zoom: <?php echo $zoomLvl; ?>,
    //         scaleControl: true
    //     });

    //     geocoder = new google.maps.Geocoder();
    //     bounds = new google.maps.LatLngBounds();

    //     google.maps.event.addListenerOnce(map, 'tilesloaded', function(evt) {
    //         bounds = map.getBounds();
    //     });

    //     marker = new google.maps.Marker({
    //         position: center
    //     });

    //     polygon = new google.maps.Polygon({
    //         path: area,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygon2 = new google.maps.Polygon({
    //         path: area2,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygon3 = new google.maps.Polygon({
    //         path: area3,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygonoc = new google.maps.Polygon({
    //         path: ocarea,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygonplntCoordsd = new google.maps.Polygon({
    //         path: plntCoords,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygonvnysCoords = new google.maps.Polygon({
    //         path: vnysCoords,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygonhwrdCoords = new google.maps.Polygon({
    //         path: hwrdCoords,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });
    //     polygonMesa = new google.maps.Polygon({
    //         path: mesaCoords,
    //         geodesic: true,
    //         strokeColor: '#038ed8',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 4,
    //         fillColor: '#038ed8',
    //         fillOpacity: 0.35
    //     });

    //     if ('<?= $currentLocation; ?>' == 'burlingame') {

    //         polygon.setMap(map);

    //     } else if ('<?= $currentLocation; ?>' == 'mountain-view') {

    //         polygon2.setMap(map);
    //     } else if ('<?= $currentLocation; ?>' == 'san-jose') {

    //         polygon3.setMap(map);
    //     } else if ('<?= $currentLocation; ?>' == 'irvine') {

    //         polygonoc.setMap(map);
    //     } else if ('<?= $currentLocation; ?>' == 'pleasanton') {

    //         polygonplntCoordsd.setMap(map);

    //     } else if ('<?= $currentLocation; ?>' == 'van-nuys') {

    //         polygonvnysCoords.setMap(map);

    //     } else if ('<?= $currentLocation; ?>' == 'hayward') {


    //         polygonhwrdCoords.setMap(map);

    //     } else if ('<?= $currentLocation; ?>' == 'mesa') {


    //         polygonMesa.setMap(map);

    //     }

    //     marker.setMap(map);

    //     var input = document.getElementById('pac-input');

    //     // var types = document.getElementById('type-selector');
    //     // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    //     // map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

    //     var autocomplete = new google.maps.places.Autocomplete(input);

    //     autocomplete.addListener('place_changed', function() {
    //         marker.setMap(null);

    //         var place = autocomplete.getPlace();
    //         var newBounds = new google.maps.LatLngBounds(bounds.getSouthWest(), bounds.getNorthEast()); //Changed

    //         // removed newBounds = bounds;
    //         // if (!place.geometry) {
    //         geocodeAddress(input.value);
    //         // window.alert("Autocomplete's returned place contains no geometry");
    //         // return;
    //         // };

    //         marker.setPosition(place.geometry.location);
    //         marker.setMap(map);

    //         newBounds.extend(place.geometry.location);

    //         map.fitBounds(newBounds);


    //         // if (google.maps.geometry.poly.containsLocation(place.geometry.location, polygon)) {
    //         console.log('The area contains the address');

    //         // } else {
    //         //     console.log('The address is outside of the area.');
    //         // }

    //     });
    // }


    // function geocodeAddress(addr) {
    //     geocoder.geocode({
    //         'address': addr
    //     }, function(results, status) {
    //         if (status === 'OK') {

    //             var newBounds = new google.maps.LatLngBounds(bounds.getSouthWest(), bounds.getNorthEast());
    //             marker.setPosition(results[0].geometry.location);
    //             marker.setMap(map);
    //             newBounds.extend(results[0].geometry.location);
    //             map.fitBounds(newBounds);

    //             if (google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon2) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon3) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonoc) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonMesa) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonhwrdCoords) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonvnysCoords) ||
    //                 google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonplntCoordsd)) {


    //                 console.log('The area contains the address');
    //                 $('.results-map').html(
    //                     'NowRx delivers to this address. <a class="rx-btn mrb" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions">Get Started</a>'
    //                 );
    //                 $('.results-map').removeClass('notfound');
    //             } else {
    //                 console.log('The address is outside of the area.');
    //                 $('.results-map').html(
    //                     'NowRx does not deliver to this address. <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">Suggest a Location</a>'
    //                 );
    //                 $('.results-map').addClass('notfound');

    //             };
    //         } else {
    //             console.log('Geocode was not successful for the following reason: ' + status);
    //         }
    //     });
    // };





    // var center = new google.maps.LatLng(<?= $coord; ?>);
    // var currentLoc = '<?= $currentLocation; ?>';

    // // burlingame
    // var area = [{
    //         lat: 37.590298,
    //         lng: -122.243381
    //     }, //San Mateo Bridge
    //     {
    //         lat: 37.541612,
    //         lng: -122.184565
    //     }, //Bay past Blair island
    //     {
    //         lat: 37.440062,
    //         lng: -122.292341
    //     }, //Huddart Park
    //     {
    //         lat: 37.605642,
    //         lng: -122.434955
    //     }, //San Andreas Lake
    //     {
    //         lat: 37.582400,
    //         lng: -122.509844
    //     }, //Tom Lantos Tunnels
    //     {
    //         lat: 37.594231,
    //         lng: -122.521583
    //     }, //Pedro point
    //     {
    //         lat: 37.708889,
    //         lng: -122.511727
    //     }, //Daly-West
    //     {
    //         lat: 37.708889,
    //         lng: -122.471150
    //     }, //280 and 1
    //     {
    //         lat: 37.708889,
    //         lng: -122.375195
    //     }, //101 -East
    //     {
    //         lat: 37.590298,
    //         lng: -122.243381
    //     } //San Mateo Bridge

    // ];

    // // mountain-view
    // var area2 = [
    //     // {lat:37.505913, lng:-122.11956},    //Menlo-Dumbarton
    //     {
    //         lat: 37.541612,
    //         lng: -122.184565
    //     }, //Bay past Blair island
    //     // {lat:37.422591, lng:-122.271784},   //Woodside Rd
    //     {
    //         lat: 37.440062,
    //         lng: -122.292341
    //     }, //Huddart Park
    //     {
    //         lat: 37.355159,
    //         lng: -122.198204
    //     }, //Portola Valley
    //     {
    //         lat: 37.326669,
    //         lng: -122.089413
    //     }, //Permanente
    //     {
    //         lat: 37.296427,
    //         lng: -122.077340
    //     }, //Stevens Creek Reservoir
    //     {
    //         lat: 37.320885,
    //         lng: -121.995702
    //     }, //280 and Lawrence
    //     {
    //         lat: 37.342792,
    //         lng: -121.925992
    //     }, //880 and The Alameda
    //     {
    //         lat: 37.425226,
    //         lng: -121.917435
    //     }, //880 and 237
    //     {
    //         lat: 37.460650,
    //         lng: -121.924623
    //     }, //W. Milpitas
    //     {
    //         lat: 37.442165,
    //         lng: -122.001308
    //     },
    //     {
    //         lng: -122.029953,
    //         lat: 37.466411
    //     },
    //     {
    //         lng: -122.11956,
    //         lat: 37.505913
    //     }

    // ];

    // // san-jose
    // var area3 = [{
    //         lat: 37.296427,
    //         lng: -122.077340
    //     }, //Stevens Creek Reservoir
    //     {
    //         lat: 37.252134,
    //         lng: -122.059279
    //     }, //Saratogo
    //     {
    //         lat: 37.215046,
    //         lng: -121.988328
    //     }, //Los Gatos
    //     {
    //         lat: 37.199160,
    //         lng: -121.958976
    //     }, //Los Gatos Hills
    //     {
    //         lat: 37.216825,
    //         lng: -121.912523
    //     }, //Guadalupe Creek
    //     {
    //         lat: 37.191559,
    //         lng: -121.840590
    //     }, //Almaden
    //     {
    //         lat: 37.228328,
    //         lng: -121.745425
    //     }, //South 101
    //     {
    //         lat: 37.296245,
    //         lng: -121.707597
    //     }, //Evergreen, SJ
    //     {
    //         lat: 37.406655,
    //         lng: -121.794333
    //     }, //Alum Rock Park
    //     {
    //         lat: 37.467054,
    //         lng: -121.902307
    //     }, //N. Milpitas
    //     {
    //         lat: 37.460650,
    //         lng: -121.924623
    //     }, //W. Milpitas
    //     {
    //         lat: 37.425226,
    //         lng: -121.917435
    //     }, //880 and 237
    //     {
    //         lat: 37.342792,
    //         lng: -121.925992
    //     }, //880 and The Alameda
    //     {
    //         lat: 37.320885,
    //         lng: -121.995702
    //     }, //280 and Lawrence
    //     {
    //         lng: -122.077340,
    //         lat: 37.296427
    //     }

    // ];

    // // irvine
    // var ocarea = [{
    //         lat: 33.3874460,
    //         lng: -117.595877
    //     }, //San Onofre State Beach
    //     {
    //         lat: 33.711440,
    //         lng: -118.145128
    //     }, //Seal Beach
    //     {
    //         lat: 33.948184,
    //         lng: -117.977292
    //     }, //La Habra
    //     {
    //         lat: 33.946136,
    //         lng: -117.781795
    //     }, //Sleepy Hollow
    //     {
    //         lat: 33.868799,
    //         lng: -117.674384
    //     }, // 91
    //     {
    //         lat: 33.684729,
    //         lng: -117.556649
    //     }, //Trabuco Canyon
    //     {
    //         lat: 33.607207,
    //         lng: -117.527900
    //     }, //Coto De Caza
    //     {
    //         lat: 33.455898,
    //         lng: -117.571570
    //     }, //San Clemente
    //     {
    //         lat: 33.3874460,
    //         lng: -117.595877
    //     }

    // ];

    // // mesa
    // var mesaCoords = [{
    //         lat: 33.692420,
    //         lng: -112.176308
    //     }, //Arrowhead Point
    //     {
    //         lat: 33.710040,
    //         lng: -111.960085
    //     },
    //     {
    //         lat: 33.647086,
    //         lng: -111.893084
    //     }, //101 and Pima
    //     {
    //         lat: 33.625379,
    //         lng: -111.869130
    //     }, //N Thompson Peak Pkwy
    //     {
    //         lat: 33.605021,
    //         lng: -111.851949
    //     },
    //     {
    //         lat: 33.593955,
    //         lng: -111.833349
    //     },
    //     {
    //         lat: 33.566222,
    //         lng: -111.828254
    //     },
    //     {
    //         lat: 33.485470,
    //         lng: -111.752808
    //     },
    //     {
    //         lat: 33.503645,
    //         lng: -111.684238
    //     }, //N. Bush Hwy
    //     {
    //         lat: 33.4959016,
    //         lng: -111.6388539
    //     }, //Phoenix Sign
    //     {
    //         lat: 33.451979,
    //         lng: -111.595351
    //     }, //Crismon Trailhead
    //     {
    //         lat: 33.451961,
    //         lng: -111.476328
    //     }, //Apache Junction NE
    //     {
    //         lat: 33.350631,
    //         lng: -111.477242
    //     }, //Apache Junction SE
    //     // {lat:33.474591, lng:-111.683928},   //202 and N. Power
    //     // {lat:33.451580, lng:-111.669892},
    //     // {lat:33.425921, lng:-111.632895},
    //     // {lat:33.296867, lng:-111.643973},   //Phoenix-Mesa Gateway Airport
    //     {
    //         lat: 33.293164,
    //         lng: -111.519077
    //     }, //Queen Creek
    //     {
    //         lat: 33.206621,
    //         lng: -111.495533
    //     }, //Pinal County Line
    //     {
    //         lat: 33.200262,
    //         lng: -111.755451
    //     },
    //     {
    //         lat: 33.203518,
    //         lng: -111.900382
    //     },
    //     {
    //         lat: 33.291610,
    //         lng: -111.989648
    //     },
    //     {
    //         lat: 33.289047,
    //         lng: -112.132352
    //     },
    //     {
    //         lat: 33.371648,
    //         lng: -112.311804
    //     }, //Phoneix Raceway
    //     {
    //         lat: 33.399077,
    //         lng: -112.461650
    //     }, //Goodyear SW
    //     {
    //         lat: 33.638025,
    //         lng: -112.469626
    //     }, //Surprise NW
    //     {
    //         lat: 33.690988,
    //         lng: -112.419245
    //     }, //Phoenix Metro NW
    //     {
    //         lat: 33.766730,
    //         lng: -112.284303
    //     } //303 NW

    // ];



    // //   pleasanton
    // var plntCoords = [{
    //         lat: 37.718984,
    //         lng: -121.696681
    //     }, //Altamont Pass Rd
    //     {
    //         lat: 37.665259,
    //         lng: -121.696628
    //     }, //Greenville Rd
    //     {
    //         lat: 37.646371,
    //         lng: -121.754199
    //     }, //Holdener Park
    //     {
    //         lat: 37.626547,
    //         lng: -121.804920
    //     }, //CA-84
    //     {
    //         lat: 37.622889,
    //         lng: -121.880342
    //     }, //Verona
    //     {
    //         lat: 37.628665,
    //         lng: -121.895776
    //     }, //Castlewood Country Club
    //     {
    //         lat: 37.647128,
    //         lng: -121.914731
    //     }, //Longview Ln
    //     {
    //         lat: 37.681444,
    //         lng: -121.937066
    //     }, //Moller Ranch Bench
    //     {
    //         lat: 37.699922,
    //         lng: -121.987665
    //     }, //580-Castro Valley
    //     {
    //         lat: 37.754333,
    //         lng: -122.004854
    //     }, //Norris Canyon Rd
    //     {
    //         lat: 37.771550,
    //         lng: -122.001759
    //     }, //Crow Canyon Rd
    //     {
    //         lat: 37.828422,
    //         lng: -122.026914
    //     }, //Danville NW
    //     {
    //         lat: 37.806274,
    //         lng: -122.113567
    //     }, //Rancho Laguna Park
    //     {
    //         lat: 37.822317,
    //         lng: -122.137824
    //     }, //Valle Vista Staging Area
    //     {
    //         lat: 37.867345,
    //         lng: -122.201177
    //     }, //Knickerbocker, Orinda
    //     {
    //         lat: 37.883935,
    //         lng: -122.220545
    //     }, //Seaview Trail, Orinda
    //     {
    //         lat: 37.8995667,
    //         lng: -122.2151531
    //     }, //Orinda Connector Staging Area
    //     {
    //         lat: 37.924711,
    //         lng: -122.197338
    //     }, //Black Hill
    //     {
    //         lat: 37.910014,
    //         lng: -122.141103
    //     }, //Mariposa Trail
    //     {
    //         lat: 37.916613,
    //         lng: -122.120943
    //     }, //Briones Trail Head
    //     {
    //         lat: 37.972927,
    //         lng: -122.149856
    //     }, //Alhambra Valley
    //     {
    //         lat: 38.035870,
    //         lng: -122.150062
    //     }, //Carquinez Strait
    //     {
    //         lat: 38.068054,
    //         lng: -122.034360
    //     }, //Suisun Bay
    //     {
    //         lat: 37.967214,
    //         lng: -121.926879
    //     }, //Kirker Pass
    //     {
    //         lat: 37.948636,
    //         lng: -121.906645
    //     }, //Black Diamond Trail
    //     {
    //         lat: 37.919543,
    //         lng: -121.897617
    //     }, //Marsh Creek Rd
    //     {
    //         lat: 37.821902,
    //         lng: -121.921483
    //     }, //Blackhawk Rd
    //     {
    //         lat: 37.799766,
    //         lng: -121.896387
    //     }, //Danville E
    //     {
    //         lat: 37.749441,
    //         lng: -121.871704
    //     }, //Camino Tassajara
    //     {
    //         lat: 37.745313,
    //         lng: -121.850462
    //     }, //Tassajara Hills
    //     {
    //         lat: 37.740961,
    //         lng: -121.723154
    //     }, //N. Vasco Rd
    //     {
    //         lat: 37.718984,
    //         lng: -121.696681
    //     }
    // ];


    // //   van nuys
    // var vnysCoords = [{
    //         lat: 34.278744,
    //         lng: -118.630395
    //     }, // Indian Springs
    //     {
    //         lat: 34.304726,
    //         lng: -118.585203
    //     }, // Porter Ranch
    //     {
    //         lat: 34.324734,
    //         lng: -118.502170
    //     }, // I5 Sylmar
    //     {
    //         lat: 34.337815,
    //         lng: -118.400452
    //     }, // San Fernando Valley East
    //     {
    //         lat: 34.274613,
    //         lng: -118.331774
    //     }, // Sunland-Tujunga
    //     {
    //         lat: 34.219675,
    //         lng: -118.326811
    //     }, // Verdugo Mountain Park
    //     {
    //         lat: 34.185278,
    //         lng: -118.257726
    //     }, // Las Flores Mtwy
    //     {
    //         lat: 34.154781,
    //         lng: -118.282457
    //     }, // John Ferraro Fields
    //     {
    //         lat: 34.1186458,
    //         lng: -118.3486866
    //     }, // Jerome Daniel Overlook
    //     {
    //         lat: 34.1205728,
    //         lng: -118.364706
    //     }, // Runyon Canyon
    //     {
    //         lat: 34.1233107,
    //         lng: -118.3744618
    //     }, // Fitzpatrick Leland House
    //     {
    //         lat: 34.1229152,
    //         lng: -118.3952553
    //     }, // Barbara Fine Overlook
    //     {
    //         lat: 34.127134,
    //         lng: -118.417854
    //     }, // Mrca Open Space
    //     {
    //         lat: 34.1287722,
    //         lng: -118.4327943
    //     }, // Charles Lotte Overlook
    //     {
    //         lat: 34.126340,
    //         lng: -118.475647
    //     }, // Mulholland and 405
    //     {
    //         lat: 34.1305408,
    //         lng: -118.5442992
    //     }, // Mulholland Gateway Park
    //     {
    //         lat: 34.1302433,
    //         lng: -118.6125792
    //     }, // Summit Valley Park
    //     {
    //         lat: 34.1253714,
    //         lng: -118.6579469
    //     }, // Mountain Park Calabasas
    //     {
    //         lat: 34.125206,
    //         lng: -118.691430
    //     }, // Calabasas South
    //     {
    //         lat: 34.278744,
    //         lng: -118.630395
    //     }
    // ];

    // // hayward

    // var hwrdCoords = [{
    //         lat: 37.726379,
    //         lng: -122.201422
    //     }, //San Leandro North
    //     {
    //         lat: 37.612943,
    //         lng: -122.173916
    //     }, // San Mateo Bridge
    //     {
    //         lat: 37.526175,
    //         lng: -122.098461
    //     }, //Dumbarton Bridge
    //     {
    //         lat: 37.460650,
    //         lng: -121.924623
    //     }, //W. Milpitas
    //     {
    //         lat: 37.467054,
    //         lng: -121.902307
    //     }, //N. Milpitas
    //     {
    //         lat: 37.530674,
    //         lng: -121.909613
    //     }, //Ohlone College
    //     {
    //         lat: 37.587940,
    //         lng: -121.959870
    //     }, //Niles Canyon
    //     {
    //         lat: 37.723137,
    //         lng: -122.017688
    //     }, //Castro Valley E
    //     {
    //         lat: 37.737617,
    //         lng: -122.060895
    //     }, //Columbia Trail
    //     {
    //         lat: 37.743026,
    //         lng: -122.145975
    //     }, //580, San Leandro NE
    //     {
    //         lat: 37.726379,
    //         lng: -122.201422
    //     } //San Leandro North
    // ];
    // initMap();




    var geocoder = null;
var map = null;
var customerMarker = null;
var gmarkers = [];
var closest = [];

function initialize() {
  // alert("init");
  geocoder = new google.maps.Geocoder();
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: new google.maps.LatLng(52.6699927, -0.7274620),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var infowindow = new google.maps.InfoWindow();
  var marker, i;
  var bounds = new google.maps.LatLngBounds();
//   document.getElementById('info').innerHTML = "found " + locations.length + " locations<br>";
  for (i = 0; i < locations.length; i++) {
    var coordStr = locations[i][4];
    var coords = coordStr.split(",");
    var pt = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
    bounds.extend(pt);
    marker = new google.maps.Marker({
      position: pt,
      map: map,
      icon: locations[i][5],
      address: locations[i][2],
      title: locations[i][0],
      html: locations[i][0] + "<br>" + locations[i][2]
    });
    gmarkers.push(marker);
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(marker.html);
          infowindow.open(map, marker);
        }
      })
      (marker, i));
  }
  map.fitBounds(bounds);

}

function codeAddress() {
  var numberOfResults = 25;
  var numberOfDrivingResults = 5;
  var address = document.getElementById('address').value;
  map.setZoom(9);

  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      if (customerMarker) customerMarker.setMap(null);
      customerMarker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location
      });
      closest = findClosestN(results[0].geometry.location, numberOfResults);
      // get driving distance
      closest = closest.splice(0, numberOfResults);
      calculateDistances(results[0].geometry.location, closest, numberOfDrivingResults);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

function findClosestN(pt, numberOfResults) {
  var closest = [];
//   document.getElementById('info').innerHTML += "processing " + gmarkers.length + "<br>";
  for (var i = 0; i < gmarkers.length; i++) {
    gmarkers[i].distance = google.maps.geometry.spherical.computeDistanceBetween(pt, gmarkers[i].getPosition());
    // document.getElementById('info').innerHTML += "process " + i + ":" + gmarkers[i].getPosition().toUrlValue(6) + ":" + gmarkers[i].distance.toFixed(2) + "<br>";
    gmarkers[i].setMap(null);
    closest.push(gmarkers[i]);
  }
  closest.sort(sortByDist);
  return closest;
}

function sortByDist(a, b) {
  return (a.distance - b.distance)
}

function calculateDistances(pt, closest, numberOfResults) {
  var service = new google.maps.DistanceMatrixService();
  var request = {
    origins: [pt],
    destinations: [],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false
  };
  for (var i = 0; i < closest.length; i++) {
    request.destinations.push(closest[i].getPosition());
  }
  service.getDistanceMatrix(request, function(response, status) {
    if (status != google.maps.DistanceMatrixStatus.OK) {
      alert('Error was: ' + status);
    } else {
      var origins = response.originAddresses;
      var destinations = response.destinationAddresses;
      var outputDiv = document.getElementById('side_bar');
      outputDiv.innerHTML = '<h3>Nearest Locations</h3>';
      outputDiv.classList.add("active");


      var results = response.rows[0].elements;
      // save title and address in record for sorting
      for (var i = 0; i < closest.length; i++) {
        results[i].title = closest[i].title;
        results[i].address = closest[i].address;
        results[i].idx_closestMark = i;
      }
      results.sort(sortByDistDM);
      for (var i = 0;
        ((i < numberOfResults) && (i < closest.length)); i++) {
        closest[i].setMap(map);
        outputDiv.innerHTML += "<div class='locatonitem'><a href='javascript:google.maps.event.trigger(closest[" + results[i].idx_closestMark + "],\"click\");'>" + results[i].title + '</a><br>' + results[i].address + "<br>" + results[i].distance.text + ' appoximately ' + results[i].duration.text + '<br></div>';
      }
    }
  });
}

function sortByDistDM(a, b) {
  return (a.distance.value - b.distance.value)
}

google.maps.event.addDomListener(window, 'load', initialize);
// Store Name[0],delivery[1],Address[2],Delivery Zone[3],Coordinates[4] data from FusionTables pizza stores example
var locations = [
  ["burlingame", "no", "burlingame, USA", "polygon", "37.58752971358246, -122.3740210794692", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["san-jose", "no", "san-jose, USA", "polygon", "37.30548177620453, -121.86341245055891", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["mountain-view", "no", "mountain-view, USA", "polygon", "37.40896234551496, -122.0836722973587", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["irvine", "no", "irvine, USA", "polygon", "33.671060999133054, -117.78370002094705", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["pleasanton", "no", "pleasanton, USA", "polygon", "37.66751653864867, -121.87849056355327", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["van-nuys", "no", "van-nuys, USA", "polygon", "34.20060954951781, -118.45333623367563", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["hayward", "no", "hayward, USA", "polygon", "37.63140568400543, -122.084409386676", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
["mesa", "no", "mesa, USA", "polygon", "33.374268887924956, -111.80059004642737", "http://maps.google.com/mapfiles/ms/icons/yellow.png"]

];





</script>


  <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer></script> -->
    <!-- suggest a new location -->
    <div class="reveal" id="suggestalocation" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h3 class="text-center">suggest a new location</h3>
        <p>NowRx Pharmacy will notify you when we expand our free prescription delivery services to your area</p>


            <div id="location-suggestion"></div>
            <script defer>
                var $document = document.querySelector("body");

                document.addEventListener('load', function(evt) {
                    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                    if (!evt.target.isEqualNode($script)) {
                        return;
                    }

                    // Callback code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#location-suggestion",
                            portalId: "5952677",
                    formId: "9085621c-0203-44d5-b7e4-f97da3d5cea3"

                        })
                    }, 3000);

                    // your callback's code
                    setTimeout(() => {
                        // console.log('loaded')
                        hbspt.forms.create({
                            region: "na1",

                            css: '',

                            target: "#location-suggestion",
                            portalId: "5952677",
                    formId: "9085621c-0203-44d5-b7e4-f97da3d5cea3"


                        })
                    }, 4000);

                }, true);
            </script>
        <button class="close-button text-center" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>



<?php get_footer(); ?>