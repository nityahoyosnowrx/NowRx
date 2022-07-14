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

<source media="(max-width: 993px)" srcset="data:image/webp;base64,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">
                               <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/nowrx-locations.webp">
                        <img class="orbit-image " height="500px" width="650px" alt="nowrx pharmacy delivery location in irvine">

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

                <!-- <div class="map-tem">
                    <div id="map"></div>
                    <div id="side_bar"></div>
                </div> -->




                <!-- <div class="filter">
                <input id="address" type="text" value="Palo Alto, CA"></input>
                <input type="button" value="Search" onclick="codeAddress();"></input>
                <div id="info"></div>
                </div> -->

                <div id="dropdown-locations">
                        <button class="dropdown-list" id="locationsBtn">
                        Select a Location
                            <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"/></svg>
                            </span>
                        </button>
                        <div class="list-dropdown">
                            <ul class="list">
                            <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/mesa/" class="link">Mesa, AZ

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/mountain-view/" class="link">Mountain View, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/irvine/" class="link">Irvine, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/burlingame/" class="link">Burlingame, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>

                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/san-jose/" class="link">San Jose, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/pleasanton/" class="link">Pleasonton, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/van-nuys/" class="link">Van Nuys, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/hayward/" class="link">Hayward, CA

                                <span class="link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" alt="">
                                </span>
                            </a>
                                </li>
                            </ul>
                        </div>
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
                    <a href="<?= get_site_url(); ?>/locations/california/irvine/">

                        <figure class="image"><img src="https://images.unsplash.com/photo-1615470721367-af2ef285d85f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669" alt=""></figure>
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




<!--
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
</style> -->


<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmMty5MmMXegrIhIhMHDWOqIu6RQ6m9vg&libraries=geometry,places"></script> -->

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




//     var geocoder = null;
// var map = null;
// var customerMarker = null;
// var gmarkers = [];
// var closest = [];

// function initialize() {
//   // alert("init");
//   geocoder = new google.maps.Geocoder();
//   map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 9,
//     center: new google.maps.LatLng(52.6699927, -0.7274620),
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   });
//   var infowindow = new google.maps.InfoWindow();
//   var marker, i;
//   var bounds = new google.maps.LatLngBounds();
// //   document.getElementById('info').innerHTML = "found " + locations.length + " locations<br>";
//   for (i = 0; i < locations.length; i++) {
//     var coordStr = locations[i][4];
//     var coords = coordStr.split(",");
//     var pt = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
//     bounds.extend(pt);
//     marker = new google.maps.Marker({
//       position: pt,
//       map: map,
//       icon: locations[i][5],
//       address: locations[i][2],
//       title: locations[i][0],
//       html: locations[i][0] + "<br>" + locations[i][2]
//     });
//     gmarkers.push(marker);
//     google.maps.event.addListener(marker, 'click', (function(marker, i) {
//         return function() {
//           infowindow.setContent(marker.html);
//           infowindow.open(map, marker);
//         }
//       })
//       (marker, i));
//   }
//   map.fitBounds(bounds);

// }

// function codeAddress() {
//   var numberOfResults = 25;
//   var numberOfDrivingResults = 5;
//   var address = document.getElementById('address').value;
//   map.setZoom(9);

//   geocoder.geocode({
//     'address': address
//   }, function(results, status) {
//     if (status == google.maps.GeocoderStatus.OK) {
//       map.setCenter(results[0].geometry.location);
//       if (customerMarker) customerMarker.setMap(null);
//       customerMarker = new google.maps.Marker({
//         map: map,
//         position: results[0].geometry.location
//       });
//       closest = findClosestN(results[0].geometry.location, numberOfResults);
//       // get driving distance
//       closest = closest.splice(0, numberOfResults);
//       calculateDistances(results[0].geometry.location, closest, numberOfDrivingResults);
//     } else {
//       alert('Geocode was not successful for the following reason: ' + status);
//     }
//   });
// }

// function findClosestN(pt, numberOfResults) {
//   var closest = [];
// //   document.getElementById('info').innerHTML += "processing " + gmarkers.length + "<br>";
//   for (var i = 0; i < gmarkers.length; i++) {
//     gmarkers[i].distance = google.maps.geometry.spherical.computeDistanceBetween(pt, gmarkers[i].getPosition());
//     // document.getElementById('info').innerHTML += "process " + i + ":" + gmarkers[i].getPosition().toUrlValue(6) + ":" + gmarkers[i].distance.toFixed(2) + "<br>";
//     gmarkers[i].setMap(null);
//     closest.push(gmarkers[i]);
//   }
//   closest.sort(sortByDist);
//   return closest;
// }

// function sortByDist(a, b) {
//   return (a.distance - b.distance)
// }

// function calculateDistances(pt, closest, numberOfResults) {
//   var service = new google.maps.DistanceMatrixService();
//   var request = {
//     origins: [pt],
//     destinations: [],
//     travelMode: google.maps.TravelMode.DRIVING,
//     unitSystem: google.maps.UnitSystem.METRIC,
//     avoidHighways: false,
//     avoidTolls: false
//   };
//   for (var i = 0; i < closest.length; i++) {
//     request.destinations.push(closest[i].getPosition());
//   }
//   service.getDistanceMatrix(request, function(response, status) {
//     if (status != google.maps.DistanceMatrixStatus.OK) {
//       alert('Error was: ' + status);
//     } else {
//       var origins = response.originAddresses;
//       var destinations = response.destinationAddresses;
//       var outputDiv = document.getElementById('side_bar');
//       outputDiv.innerHTML = '<h3>Nearest Locations</h3>';
//       outputDiv.classList.add("active");


//       var results = response.rows[0].elements;
//       // save title and address in record for sorting
//       for (var i = 0; i < closest.length; i++) {
//         results[i].title = closest[i].title;
//         results[i].address = closest[i].address;
//         results[i].idx_closestMark = i;
//       }
//       results.sort(sortByDistDM);
//       for (var i = 0;
//         ((i < numberOfResults) && (i < closest.length)); i++) {
//         closest[i].setMap(map);
//         outputDiv.innerHTML += "<div class='locatonitem'><a href='javascript:google.maps.event.trigger(closest[" + results[i].idx_closestMark + "],\"click\");'>" + results[i].title + '</a><br>' + results[i].address + "<br>" + results[i].distance.text + ' appoximately ' + results[i].duration.text + '<br></div>';
//       }
//     }
//   });
// }

// function sortByDistDM(a, b) {
//   return (a.distance.value - b.distance.value)
// }

// google.maps.event.addDomListener(window, 'load', initialize);
// // Store Name[0],delivery[1],Address[2],Delivery Zone[3],Coordinates[4] data from FusionTables pizza stores example
// var locations = [
//   ["burlingame", "no", "burlingame, USA", "polygon", "37.58752971358246, -122.3740210794692", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["san-jose", "no", "san-jose, USA", "polygon", "37.30548177620453, -121.86341245055891", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["mountain-view", "no", "mountain-view, USA", "polygon", "37.40896234551496, -122.0836722973587", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["irvine", "no", "irvine, USA", "polygon", "33.671060999133054, -117.78370002094705", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["pleasanton", "no", "pleasanton, USA", "polygon", "37.66751653864867, -121.87849056355327", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["van-nuys", "no", "van-nuys, USA", "polygon", "34.20060954951781, -118.45333623367563", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["hayward", "no", "hayward, USA", "polygon", "37.63140568400543, -122.084409386676", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
// ["mesa", "no", "mesa, USA", "polygon", "33.374268887924956, -111.80059004642737", "http://maps.google.com/mapfiles/ms/icons/yellow.png"]

// ];





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