<?php get_header(); ?>


<script type="application/ld+json" defer async>
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
                            <img class="orbit-image " height="500" width="650" alt="nowrx pharmacy delivery location in irvine">

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
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/mountain-view/" class="link">Mountain View, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/irvine/" class="link">Irvine, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/burlingame/" class="link">Burlingame, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>

                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/san-jose/" class="link">San Jose, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/pleasanton/" class="link">Pleasonton, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/van-nuys/" class="link">Van Nuys, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
                                </span>
                            </a>
                                </li>
                                <li class="list-li">
                                    <a href=<?= get_site_url(); ?>/locations/california/hayward/" class="link">Hayward, CA

                                <span class="link">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/pillsin.svg" width="20px" height="20" alt="pill svg" class="lozad">
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="" class="lozad"></figure>
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

                        <figure class="image"><img data-src="data:image/webp;base64,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" alt="Irvine, CA" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="Burlingame, CA" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="Mesa, AZ" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="San Jose, CA" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="Pleasanton, CA" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,UklGRiYgAABXRUJQVlA4WAoAAAAgAAAA+QAAuwAASUNDUBgCAAAAAAIYAAAAAAQwAABtbnRyUkdCIFhZWiAAAAAAAAAAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAAHRyWFlaAAABZAAAABRnWFlaAAABeAAAABRiWFlaAAABjAAAABRyVFJDAAABoAAAAChnVFJDAAABoAAAAChiVFJDAAABoAAAACh3dHB0AAAByAAAABRjcHJ0AAAB3AAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAFgAAAAcAHMAUgBHAEIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFhZWiAAAAAAAABvogAAOPUAAAOQWFlaIAAAAAAAAGKZAAC3hQAAGNpYWVogAAAAAAAAJKAAAA+EAAC2z3BhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABYWVogAAAAAAAA9tYAAQAAAADTLW1sdWMAAAAAAAAAAQAAAAxlblVTAAAAIAAAABwARwBvAG8AZwBsAGUAIABJAG4AYwAuACAAMgAwADEANlZQOCDoHQAAcHQAnQEq+gC8AD6dRJxKJaOiqSpUq4EgE4lnbRnIO0AjNaJNgytXcXl1+T/v/obZk+z/Us8E86P9b3+/G3UO9s+g/+D3He9f730Bfc77v4Df/R6I/Zf2A/KT/l+Jn9h/6PsEfzv+7esL/xeU79m/5fsMdNE0hLQYAr7w1HnCwVOFNm7+yAZAAusWxPzMkDzw8krCnzjvIr4K7dCT7f7YQiWwpZGSjirNCh3+oblzVuD7cN5ZFvMmr3qhCN+gBEC+8GKAHlvfNBY0wDsE86Q7X90GmB3vhY8kt7ue0Ab3szzL8BdCB3g1Jci4pmzYBEkh8iz5MXIAPxziYy4KiOMASCp1soiDQ6f/pZASWVT+w3qo/jgTPCusPQg3vR/mwDiI6wQGzFQAJG8pjeJxlY86nXN+f6+Qx6v5ewi/S3yyzr6UNjfonZsih9RRNpCLfAfHjraYxdW4DB7VjZ1ia4uDpsoDOgsPanLmvkrLWRneuSjYfzMXD5ULr6aec3r0O3Oavvc+voCKdDv+0uP3q6e+5NT8M14x9di96Yml1oGGoW6SRP60L+XgkKswD541YgK+rIj3sm49W3ft87lCclZY3s9qZNaKyfxofdnQvrLbAeimLEXFpuGPgIeIZp6n6KGg2jaxVOyWCaEq3Z2hpFV2V6+763P6sRVsEPQmz3bLZKvOFxonbvkfxgX8ssfnevGF7ptBXEkovSHmYL1OS0kycUjyGSLvccYHmoxBk7hqZftoUpuOVUW+7ahEbrCjJVKAyi1gQd5zYhp7HSaQoKpbE03Gclj4Cp/a9xvlHKQoGqPpmdI9oadmcmXm1YiFHc9BSQHy77vI7+xyCadF+k8ruoGBf9p/YKbWXugH/EzNa8zUKBYVkqdDJMwZXW+SndlZofgnq1bkbHhmA3a/Xs7i7dpo5SOzoBMNiddFNdFM3GM0W7pJQ8pOw/3FjxLLSZSaPXLQz92A15Cnqf04Oa9cwi1mzJR79ojrw4Igq6kZOY9pDk6Ui7judXt2K1Jq6D4NjOeze4TJ8DnHKpV/w2r7Mq3VRGp7Cwq0XACtrkGFxV9FqmaMWrCJn6LL8uCSA3RN0+fp/dcSTFTcJxJ5eh2jb0sYz4pateqKHZJtkLu359nZBFv8nY5GsTagihGANv6Oeaf92tkBtBwsNtXD6xGPHh9bX0AtxLFGsuHW33+FNHr309ykhlhQFnyr8pCscJ9vRVmzrw3/E9FFfN2W2AvWeXQpmQ57JJMGrsTooAD+5/r73Nw24Gj3JcBrI7FHPSG4lQ233n0JD5yfYii6ymPUrXhU4cxjc6EJkz+T8qFWxDKsoS8Yt7WAcyT95gJVBtGaIp35TyD1ZU1JNmxc4P8dS9gXqwGDInjCJ1W9VNzp1eSkehH56nG/5G8qjREL6YPToJhP8BWdH9/lnpjCD2RSlWZ9dKmIAmecDHZ5Gj+MthKKTd9+tL8hun62sQ7p08Q2JBhn+vqAbciN677zo5F07EYWeJgxN0cQi+HKuMbgfXwTLNpUJbf1ABHHzxmqjjD6RWNWQ9JI6IiAe3pTwpw0+MuSXHRrsyphWqZdepzoSPEu3Q6OqI4JguFT7z4imOdC5WsOyk2fwe1Kc3pOGJsA8aw5F9C4CWzRCxUZXYuEynulHzDKmkk8sKM/G/qdG+7M52Uw6Mz6RZDFqRYXQwpIq+ajD7LvKgf9k2bSB0szuvCbYRhSV6A4KpuxeM3H2LitsskuYiYY+Rz8tJ33bQwaWN2yMvvbdAx6HpLzzr4FqjrYMMCyicItxhnjJw2t5TCNxaB79t0qaZ2dIzSva+HlHrwR47akZig8Q+giFdPzrf7kycBdAHZBA/W1FEx84HdLVIfwKb8z17M3TbokpT8cmwg3vrSvMY7M15Mjk3n8lvBimHpB6Yr25g5ArdrCyLVFwu8eOsejioQmJ5ulu6Don1QHD9VV7QwO9assu3/tf6NEZvVvqMKj7PZYbFbdGUD+EHa7TzHkhRVxYZsI39nnGsuONcqi4RH/WWl2bv/l4cjrR0h+DiPScOscjHD5rB0DpMaw6N7Dwf0bfAq+kNAqD4BkFH3jqE4MC6STgvGumnO+oczppFxoNwGbd3cIZzruFtWTyzW9vWYQJD56bRL2ylxqaz7IOv8LC0+NGyfVIhFQCsQZD8UeuUcAap/uL/uc0XRdF9b8tHHj997qfHFL+EKJPGHADSvRp0x9pEpFW1xfV+almxcDzGHTQDNupeyEBx8fxyhm+xvm6XShRHjt4MXYD/CJIPj5RwfPeRSkjG3rnUUlOqbN87VdnPGXm3fu3+9Eh0qL0EpW2xEVc6IBq+beQ7QCslhQvCw9i5kHyHLEOBaClmIMBCx632j2mV7uMPoaRbJ8zabhYLV8TCcr+pzQeaoKfQ1g+TbyYVHLChhDVPgbxBfC/zzPk+3TMElBbBD4haaLeKO8kWaYmAWTosWQcKGkz8+SwTlB8OgcTHOWJ8dAmRJThXtrYLFulJUQKflvuCqQ9iVsZdLsNKYpCOOcmGFWQt8nyLKn1dv4fzc4Qm4V/oxRIF8CZQbSNdJoB9aB2vBQBfHJNTXJW55JdruaikPZWQQAtB7MuDUCA6sIvAix2xEEkTWOxddIjK/q5FEkFMDtFE5ZfRY+H5oR1mPuwfm8kJ0BHkhZC5YjZqp6NHlWoEy6STeHwZMBHFITBX9tD1yk8IQ2QLMgj4nqw6dgs1KXj/humSI/BhKGuh3g9rZYN78jOloonGTd7/pOPKivtC2ti3RhPtxKJJGrghbjWD7ovdHzdCkqw2GMQimYPYH+dt50uS+sbmun7gzG+nZ3viewcJdYqngTJNqkP85ddV6WBxJlccIh6a0SG+95RCwA/VO3k4iW/pZwRE8ThNv/zXnv0MqIPTTXkoemhayfRIBLdiJ9YVXljr6oAUHF0gD5OBRZLy7KYjzuX8OvUYSsgVm3E7/f6Kt7XuGgIkzXla+s9hMemLO5SBCJO8Bl2HV6Sf7Et7YyfUMJKCcvH0jWCOUw/qx3HkH91xe2RLRdPm5NHHpRcuV9oXbZSU4m0TROgyi5tIpHaduSs43Y4U9BbfMTWiCa0CL4o6QMmHIpnjRkW2rSe5MZKjQG1qu0/MlfbytClVxkfn8jcsVBUJB7rec5O26OceGQJoBEDcvgz5XmEMe2053RTag2efNdcHOCa84PfZobp+/c4hmDBkolmruTl5DJ7EJoVgAYI+/AUP6a28xUNPvoZezCtBZh8cAYJO+q1G7f4ByMHkWs86qAUJAIyICeKYECRsqThX1SDAYfnYHG/EH0gn4l9FzKQpykwDwFi3wh54WjLqpMoy1Q+qA8WlFqc6J6Cf9ufgaDkLdzMErWDCDAx6rhVAjVz8QY/6ebaxbrSX7/iz0b1T19qyl3Zbe1enNKl1hEzC7awkpgIG8bOQGHq3I1yhfyaHbYKsZRJZIPxD8dWWUySfoHZOHqvN0/c21UU9PFEmiTigl3eKsIUssm+7AC7CQiPT5Pr0fTpJQlS2zzou+JEXqQr6M/mZkJIFFGB7YhDUHytToDtAU6Ezef7XINCMuY8yvsCEzRC7z/cq9PLN2xYSMRVSeFLmY4EVGrppIzWbGflkz0uat2Fk2U+T6bAM0tcM3DDIOaWuSCUgJCnBJ9YtK4Onnrco5FokFuM9CXdKckmEESZ/hvW/bNXoe3ih6KetxgfOaDfH7krdu2HEQi54Ty6CIlnjcKoRSfSpRtcDBs+aDRmyGISkphudmemQqV9Jk3oe3oQTZuKErbLb/qjvo3ttmvdwXhEftBMFK988/sExAHn7e1U/Xa9PIvztPZktq7C9lOFe8eym8jcah/gc5HcC0B9SGWTQn2mP4C3qDDcpJNk8gxRq+Y3MODD1D3F2F4BJjMNAgJByp1u30p3Vw0GFIQWuR0Xp3xD7pgshl+QqqaT4bGL8xfTBFRy9PBz5+MTFBmvMK/zWmjANLG3PdWBlxxSZZXu+onKOj3jq5urzy0nv8A3RDVhbw5nQbundrqST/WDjHWuoca5DImy2b3H5RHZo3uK1iSqhgFNxCSSreqTFYU/xrj0zczuQQuaQnsPQzSBKJ+9kwtfZgKZM1xK51Kj3YqA7UvO7kotyAv94cPkSCBO0gucGNhhL7bzh/I5E+JWcUmvQLPbBVEvFbAGwqFKn6jrxpd+2bAOQhZ2QdL71reLXmbkTt4TKWm61oUZI9LWP2wpBy2sw3+FZQKURUH7bV5SEAZE8WZoXZDGEP4qH8OVsQQcVq99q1cEXOOs056C0RBrG8szM+XX/F4KectYJCYq0M+UqYjlbJp2qlcb42iKnXXNBmVgxqF47fgSEGzv20Q8bhMk+WR003ZcKxydqRv9KMd/C7rK1mu+7OhdTBxt0NXK1ab9tnton7ijltjAh2vdZ70Lxw8twyv9jC41/lAY2GYQBRIRAQccN3Qz0eDe3ha20oBsphlubnmdo8ZrkrYKtTKKuJb3jEchMAjaTjei4nws/+Z6EAL6LZctQCn2lAOBDOgeHPTuP87rtcB7yWasEjN3RZejqs/FkeF4lQFawSKL6wHJ3qT21G1f0MiXMP2ASM6Z1WWMtw12AHQc5/2BC8tESsB20qfHTE0Wup91tfAgD/Baw0/mGPeZd4cg7fl1A8PfQT5JDT+BVszfgS2aAEL+4QOYshNCBrG9ObzeBfJkNjGyfsu4uCXC5ec9Fyjaycn5ietJCdIeLLeCykqvjTsQLgfX4i3s1JOPjgBN/7JWZp0Nlr3Lu+xpcBWWVsJ1ZtFh77fo11ST/k+aV+8cK5vw8j4qvLoBcArDlb1AE3+PKqvWPECO2Be8z8BFF0uo6U2uytt1CdvBk6QVREId6r7xF5Vjkz/HFzjp8ujLfuQ/rC1RABStdpXR6o2+CzJbhlKJRSiC9w1f4NeIMynoE6kta2mJCARVv5MKLR/EyOS3u58HFP9YSXoRWfaOacMDWUEYY4tgpW9PDSTlIdQSYQnNBEOxRxoqIyWOMzGfHnGqkjGUqo8DlZ+NmbW/Mf5mfOvatA4PKNDkTC2xNiOeH3qeH5NUs6dWLxVhzxtJE3wIN8O4imms9B5N7cE8pwuKBhIUPbyckyXivyQ0CWPEzmJfCCsddnzVvLpO9Gl3qBYnJ1708IlS+kZFRJGr8JheUhD8uYuYJ1m2It1eaWrVrtZJ1Z6KoO3HQxmsXV2/GqE0CQGIoiWZIltNqUd91LThvNeEo86Sr6vn1kYuXfGrcrU+vLSXAsA+/lFDSXuduxyxB9lDGgEaHRO7mTDzk+s7aB/YOzNRxSY4+7S1IKvaRjGo2shmYcWdZkcTA8N0Q8I6+CZrhW/4O5f45sCCGYBPqOkcvAu4TR7br4yAjHYCZIZNMzfEazn5gQW0aPSlERhoVk/tEPxeTbxZ02LPS2YA/YDyaUMG9u7qe5CBxccXTunVWR+yhKXS9VztVnh8gXo3vdiPZRuHD8oHQZPUdARPuZ5o0IDEGKTaZOmIdOWa0C/X04xhL1vByrgCFOoITqFXY56OW+vHRezGsySdPcB4on9Nqh+Y0TFV6FM1+5cwqhOBMVfKAJGGK1L70+GIwG3X7LcZ7WyidMTJc9rlsX9XlIN+vNanVs2O00ErMSD+QzutxYOYuxGH31JJkioTIaL3pd5ZhxdvSFx8xMryD6uZThDyWSZaJo9ecBTa8X1BedsFihm8BDM2dDDOjah+e9H3SmdkhiOvGqzckbScMJ8DMyTCi/PvvXH6tKvUFqTNFUbV5pCsWz0HYI10uTrmSfURBJqYgoMSC16k5uan2P8MVAj5hg68FzmKpJMUgXVUtbuPl916Vr5ywLy0NaPVS1Sg+1PQFyG4VPyioK31VWd9FMcMDx3m92FxggbKRTS3agjpbPSeUbcnp31lvviGvGn1021FzwsA3VKesW5vqkbnhDpBzqaZ4UPUo2ckVZRll1v+TwyxMvvV8qklTVhDIo1l8AsIuv7Rbz3jOyzj8bTaZ4mHIRvSzLbHeeX2FlMYwIbmctD/t2w9LvJE3sU7VWbcylkjvWZUqCfmmbPvJ/RiNBxaktlFSb46F1wFgiz09m6/rmWmjG90W9/T5dzqIj08oz5moE6dcka0RrE3ZzT6pCMZQ2C+OQX28qgUOxlWlNrtD0iYaykcQ8tqbeb4DI7cve6jQ9xt/y2gP+ZG7anG5pZb1Ahh7KEFuvLAfUfN1SL080vIpe3tzHFr+0xZbDIzU5gNikdLDt2ih5JYZZzOvJrKjGK7l7KxK08PsyNnzljPP2JCLiK3i46C862wzs5aHdyu+xjYyLPycUu9cj8WVFWkM3maa9B+ZExvHJNEV2AnmUP0T7+mXUMkmgaOCDMYnq2rTQNrZXs7Cow1a9inR128BJeogP2iGM1hYjNirifw6u8HAaOUVFrA3mTLkDDOTgU5MwFuNyTXc0B4I/P3BHjwRy20sDh4qE322Fj8N9B5GYU9NXI02F2TsN/1WPgb4IHPWR13Kfe5bsfvc3UMcdrOkrUa6KHYNZo6sr6gOuLGsaVsd2lMaWi+nzPCZQwz05kIL72Up2BjEXZYjupFtCXF3+FlTq+5HM0pyqHw0YwtvpveEoQ8+43o2SeejNNmkLV0EMRW0qELq3AwDnm4JFoeXNvHgvraB4FUh3j5w4yFP5aF1Who/ruwSJxN7Mko1VOuz0XHlh5WRnhhtpsA6lkvsOAOY0ol6babcbAzUMPpNiMAci9/Q24mCwgTd4lhi00u+1seOD+WLTAG5yCUtlrUf7yP74XsjqdLOZHXoHHUP3VbAuXo8/d8S7K7N5J35hlPy4bngp1oWQ7juHp2pWHzmJuye0+2NuCfMZE/Wvu4FhomFwRJpABbGWphO2MbsTrcvUze5kXsSxCWkDC8ReyR9qgwKcE9bFgbz/J3hviW6ct5g1T4f38cLvwwXQEbYWBJVWYiZCYrcXYovWaLum56eci4XvyCGYxbytyWK9g5ti8+98l/eyAsfj8Va63kSibw9p9OEbCKfTC/vTWUbZW/Hf1Thk65Ouk0PKLBnL2s/s77QWKQ9rL6HnZTMVOQ4GC9dQtv20QirKwbyspusJ3oMFxA9dbvknEejM0BF/tP3QqTDpZ0Bu5DBjJf2ldTEWYB2Kx0M167k2la+3uaTcVpHBS4qrnqZRi7Ead+mEm+etgvtZjA3OJCunGWGlymmMTJQZwyA564JVG0YGdSEQTGxG07L30OpD1LP+PfGoJPU2H8zR7FwPFlL4cJpGUlXiULMSIeOfKQyzZhkLt8SlMp1LttPSC0es3qrHnOWjK6emFJoAZXzcPCC4QP3XMmOubS2HS22DAmjvp6L+NYrpTV/iw71RNgp399Ptw89TjHQqU4L3cV0/1u/8mUky5PdXMOXsIFqqaWiZAyOoWnDAyv3T4CRuphY6KAVJMewZtOxC8qHAvmOp25BXTGBrVm1mL3faXAsliiVyki2QpuGXHkGTYvYlvOGC+laSN+meDOFtBc12am8Y2+M49XP4UhV2evIFglm7bwJzV3krqBvGWWegHhBROlc+OeOgefdws7ACHi32V66EkpFdy+cQ8ld2ijN4EHOtmfl2umpb1IhzXoVONgfT6ziHP2oiF//gwR4ZgSIrx9sv3i/Y1iz7G/v+2RwBojwSNfaW0o5EFxWBaoYCqKqF3uVB29Dk2VBCQBSlgWBurNa8Ce2qV9E5BYt5+2EwHEO1/hNFz0+kMKuagxxsQJxmqNTFW+y7f0oII2rl0RBNsbWRW0KiypsJxjOu3TFiq6o0a41Lce95jO9UNBx6LQPYubKqccgoa2d6uvmGgRH6FjQRCTfQRzkHC1yaTOsU1T035kK9hGZ11xSS16+jTRkwNCIpPMP6rKgQSCv0/FmKdXZ2aXv3E89zMdCfARUrvmzSEKHWe8avK4p+JPmBSNMEKgKBbE62QyL7IUBtwAocqtt2owlrWtDCOo4xqg0IRSVGKWHaZInhghiEi5Z4nbilnTLY2YiiGSU903IX0B/DlasENzUBWeO0jJNtLSLcBzKYT7M5onBE/keTg2v54S270ajxGKnyJlnuvDu5qIkAHx3gHokEfW0kNks9xjkqv1s2s1w6E8H3av49WmAte8V2on9TH9e2EINETfPNhz+PT6Eqw3E298j+EoNfPJC3R6teVKhtLLI5PIXoJ2ucltmA+b7URpIxGK7HwSI3L8KCxni34uW+3vTAfdGcIGRldmNQG9E3U2oG3mEqDK8/M4EvcuGmva5pGhM6D/7cHGRz69uPx5RXjCyWjWD5bO9WK6Gq8PfrkV9FEm0qQHvdTRtm70+v4iu9+bgLuk0TtV7DqattRpPBO1C6pJWsRzYjNaF4oOOVBa3Gj3I1K1t0tDyLNiWCi4tiAYdGYxWMLbKcvxmSlEK4ncnETsa3P8vGCjUsBuzLaQf/NWwidcMuT+s6YpGkDRbvyF1jy4D3NILKd474WvSnxh8h7FP0YZIDhglHQG5rh5DdeayolopWcUsapLOOZQZswLZjCTZ1q56gbYVHmRJfKTr8/vD+VP/ufeH0d2UxgaKvjGY5CMuymKRaJzr7xETRoDuf/saTxvK/754wZN4P1Xq0V1Hh4CVwGEiz+vl5sotakLitS+gjAhlhWPzGC6Ln3cHB2WpvMLEdljeAK3cD6+d7BOr2GFPQmce/MksV/Bge9cn0yeVKKoxDfeSFVozZgyaqx1gkZq6UFyCW3MnYSOTVxInrjE8E5LbYD58zkwPfeVlZ7oDyJvR10zqAgs60aFaGhu18BYR87GorIwcr3cjR2d1ScgOEsskXxDK/4t8w8DJ3g8AbdLuuWy4K3pNp0Vi3XG/mWF+FkgKDDM/t6frgi8ZPo1Jj5CbrmhvfUTM7uq5sTzxgDd9FeaxipZC/1SUow0asOlCjANANKORILc60I5VPrYVVXlSEZ8i0t698s6DV4XL4+imDn4qtpG8YoCdgbdexrgw3Ic94gep0s8aoa2uHSPwyza6xKekUl2Bxb8Sr2AZSAMhF8RMxLgOrNiAqpY1Et7tBsEuBBGfOt95iPYq0NGWiejX1AXWQ/uxrsx/H5eVvjnln2MDePPCQ4Lrv2EHNQI0QqH+14yVwKnXF4vaVcRvCy3xatHixmnOsTHTFWdyyrCciXpkc6o+xiyJVCKPI1WKIpHwpbDw2tFGV+D/NDs1iZa6a3T/zScU0mWq5kZRuAs0UHWGs+F04Swcf27SzYqQkdzMpAGXo+4EHpRsqJrNOAKzCTGNpDkdjQCeYJ7l8sT8DzFT2z8ukC9zdFFHfWFcHaSs2iRFqOgb3ewdA6ujugxw3jLub3c03EyWvGDBP8c01KHhuvHwZuWzMvimxuQnaZZyxxCRee2i+Dve6JpBtuQCGyELBXTvigeBGt3GnrCqSFFcT0Mn8Gx0k0xdjJ27PVircU4+ka7OFBrRf/Gz4lP/9zfEh9VPg0ueBDXA5or5dYONWwbOLcut5aalNA+YHl63RWrtwOeZ3kJ97t2H4e7xdD8EHVYgdmjxOwBMoWNvs/oQ3+ZXojaWxys3lxk9NZApyBaLMj1WSPm7XT2fcUSGXrj2DOIn9QBaHB5+wZjNJeR3pCJlneHjlQkZshuIoSoXqdjpQeHb8lcv8pC7rII8OTBhd6HoVIpLkUex4vaMuCNsnHqzLK2XN9DzWJ72Zfy/gRPdzJZNHeFPhPhSEz7a6jm5/IVXXZoFW08fX7prciUsx8ASR9wGcSJXOPuIjxGMGgv2Xx+NBOSHQtHBVuXVhcUB5TXW+9ImmxCmaAZDDOkDBx4wrNdea81RYqpXm4GRSen/YEIU1I2tgQz7kXZdngZQ1wwSiG36XXAC//Ybmdbsglcm+ffw6rJYJomXxa2U3hlmXx7IKMOq3v6nPDt5RsOWvjiy4nFD7KXUy/7zlnfoFeDmCZx4B+kWs+fMMsp5Jd56NM5XZljniWzx/8mFM6xwrJwSyJg6wkTEkC6om4dQ6hhZZeaX6V38eF2NCf9yJvBX3yZcx/pTfs8GV+Dm8Mw10OaIAjHhUXj4XRZfGibhQW3ubr7pmNdvZtgo7rN+ae8tuntr93FSsASis/jeSBrBii3Rv10T+T/h4BogQZe2e72aEf1aWPIkgxPu7qHxnMNk5mZwGh0aafSVj8CTYdodi8jQuHZjjKHyr4SNrKyXyRNgNgmIC+PyoOMV0aHI1N/DWRMuUqziAWdMpFU+hAgAAA" alt="Van Nuys, CA" class="lozad"></figure>
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
                            <figure class="image"><img data-src="data:image/webp;base64,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" alt="Hayward, CA" class="lozad"></figure>
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


                </div>
            </div>
        </div>
    </section>






    <?php include('section-visitblock.php'); ?>



    <!-- FAQ -->
    <?php get_template_part('components/section-faq-flip'); ?>



</main>






<?php get_footer(); ?>