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
                        "latitude": "37.415216701214526",
                        "longitude": "-122.09510250883349"
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
                        "latitude": "37.596418685860804",
                        "longitude": "-122.36602182417356"
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
                        "latitude": "37.31633033505249",
                        "longitude": "121.83342937814587"
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
                        "latitude": "33.695316202996324",
                        "longitude": "-117.85031817824478"
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
                        "latitude": "33.40968333673354",
                        "longitude": "-111.8845563089426"
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
                        "latitude": "33.40968333673354",
                        "longitude": "-111.8845563089426"
                    }
                }
              
            }

        ]
    }
</script>

<!-- Event snippet for Form Completion conversion page -->
<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-875503484/Bj1NCMmPzboBEPy-vKED'
    });
</script>

<main id="main" class="main-class">
    <div class="rvl">

        <picture class="lozad" data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png" data-alt="prescription being delivered to mother" data-toggle-class="active">
            <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg" class="imageblock" height="100px" width="450px">
        </picture>

    </div>
    <section class="article archive">
        <article id="post-<?php the_ID(); ?>">
            <div class="container">

                <header class="article-header tynk locations-header">
                    <div class="content">
                        <div class="rvl">
                            <span class="subheading">
                                NowRx Pharmacy - Coming to a City Near You
                            </span>
                        </div>
                        <div class="rvl">
                            <h1 class="page-title" itemprop="headline">
                                A Better Local Pharmacy
                            </h1>
                        </div>
                        <div class="rvl">
                            <p>
                                Don't see a NowRx Pharmacy near you? Don't worry! Suggest a location and you could be
                                our next expansion city.
                            </p>
                        </div>

                        <div class="rvls">
                            <div class="btn-container">
                                <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">Suggest a Location</a>
                                <a class="rx-btn mrb" href="<?= get_site_url(); ?>/get-started/">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="imageblock">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-National-Map-Big.png" alt="Thank you for Choosing NowRx Pharmacy" width="300px" height="300px" class="pic">
                    </div>
                </header>
            </div>



        </article>

    </section>




    <section class="visit-faq archivelocations">
        <div class="container">
            <div class="content">
                <div class="rvl">
                    <span class="sub-headline">
                        Find a NowRx that Delivers to You
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Search Our Delivery Areas
                    </h2>
                </div>
                <div class="search-bar">
                    <div class="map-searchbar">
                        <div class="box">
                            <label for="pac-input" class="enter">Please enter your address below.</label>
                            <input id="pac-input" class="controls" type="text" placeholder="e.g. 123 Baker St, Sunnyvale CA">
                            <div class="results-map"></div>
                        </div>
                    </div>

                    <div class="map-tem">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="locations-item">
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
                            <h2 class="sec-title">NowRx - Mountain View, CA</h2>
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
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/irvine/">
                            <h2 class="sec-title">NowRx - Irvine, CA</h2>
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
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/burlingame/">
                            <h2 class="sec-title">NowRx - Burlingame, CA</h2>
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
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/mesa/">
                            <h2 class="sec-title">NowRx - Mesa, AZ</h2>
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
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/san-jose/">
                            <h2 class="sec-title">NowRx - San Jose, CA</h2>
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
                    </div>
                    <!-- item -->
                    <div class="location-item">
                        <a href="<?= get_site_url(); ?>/locations/california/pleasanton/">
                            <h2 class="sec-title">NowRx - Pleasanton, CA</h2>
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
                    </div>

                    <!-- item -->
                    <div class="location-item">
                        <h2 class="sec-title disclaimer">Don't see a NowRx near you? Suggest a location!</h2>
                        <span class="desc-item">
                            <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">Suggest a Location</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>







    <!-- faq -->
    <?php
    get_template_part('components/faq-block'); ?>

    <!-- visit faq -->
    <?php
    get_template_part('components/visit-our-faq'); ?>



</main>



<style>
    #map {
        height: 0px;
        border-radius: 13px;
        box-shadow: 0 4px 10px -3px #00000047;
    }

    #mapoc {
        height: 400px;
    }

    label.enter {
        text-align: center;
        margin: 0 0 10px;
        color: #fff;
        position: absolute;
        top: -9999px;
        left: -999px;
        width: 1px;
        height: 1px;
        overflow: hidden;
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
        max-width: 600px;
        margin: 0 auto 30px;
    }

    .results-map.notfound {
        /* color: #d43636; */
    }

    .results-map {
        display: block;
        margin: 0 0 20px;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.8;
        /* color: #31a631; */
        color: #fff;
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
        height: 44px;
        margin: 0 auto 10px;
    }

    #pac-input::placeholder {
        color: rgb(156 156 156);
    }

    .map-searchbar.secondbar {
        margin: 60px 0 0;
    }

    #pac-input::placeholder {}

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
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmMty5MmMXegrIhIhMHDWOqIu6RQ6m9vg&libraries=geometry,places">
</script>

<script>
    function sanFranMap() {

        var map;
        var geocoder; //Added on 27/09/2016
        var marker;
        var polygon;
        var polygon2;
        var polygon3;
        var bounds;
        window.onload = initMap;

        function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
                zoom: 7,
                scaleControl: true
            });


            geocoder = new google.maps.Geocoder(); //Added on 27/09/2016

            bounds = new google.maps.LatLngBounds();


            google.maps.event.addListenerOnce(map, 'tilesloaded', function(evt) {
                bounds = map.getBounds();
            });

            marker = new google.maps.Marker({
                position: center
            });

            polygon = new google.maps.Polygon({
                path: area,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });

            polygon2 = new google.maps.Polygon({
                path: area2,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });


            polygon3 = new google.maps.Polygon({
                path: area3,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });

            polygonoc = new google.maps.Polygon({
                path: ocarea,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });

            polygonMesa = new google.maps.Polygon({
                path: mesaCoords,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });

            polygonplntCoordsd = new google.maps.Polygon({
                path: plntCoordsd,
                geodesic: true,
                strokeColor: '#038ed8',
                strokeOpacity: 1.0,
                strokeWeight: 4,
                fillColor: '#038ed8',
                fillOpacity: 0.35
            });

            




            polygon.setMap(map);
            polygon2.setMap(map);
            polygon3.setMap(map);
            polygonoc.setMap(map);
            polygonMesa.setMap(map);
            polygonplntCoordsd.setMap(map);


            var input = /** @type {!HTMLInputElement} */ (
                document.getElementById('pac-input'));

            var types = document.getElementById('type-selector');
            // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function() {
                marker.setMap(null);

                var place = autocomplete.getPlace();
                var newBounds = new google.maps.LatLngBounds(bounds.getSouthWest(), bounds.getNorthEast()); //Changed

                // removed newBounds = bounds;
                // if (!place.geometry) {
                geocodeAddress(input.value); //Added on 27/09/2016 
                //window.alert("Autocomplete's returned place contains no geometry");
                // return;
                // };

                marker.setPosition(place.geometry.location);

                marker.setMap(map);

                newBounds.extend(place.geometry.location);

                map.fitBounds(newBounds);


                // if (google.maps.geometry.poly.containsLocation(place.geometry.location, polygon)) {
                //     console.log('The area contains the address');

                // } else {
                //     console.log('The address is outside of the area.');
                // };

            });
        }

        //*************************
        function geocodeAddress(addr) {
            geocoder.geocode({
                'address': addr
            }, function(results, status) {
                if (status === 'OK') {
                    var newBounds = new google.maps.LatLngBounds(bounds.getSouthWest(), bounds.getNorthEast());
                    marker.setPosition(results[0].geometry.location);
                    marker.setMap(map);
                    newBounds.extend(results[0].geometry.location);
                    map.fitBounds(newBounds);
                    if (google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon) ||
                        google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon2) ||
                        google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon3) || 
                        google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonoc) || 
                        google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonMesa) ||
                        google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonplntCoordsd)
                        ) {
                        console.log('The area contains the address');
                        $('.results-map').html('NowRx delivers to this address. <a class="rx-btn mrb" href="<?= get_site_url(); ?>/get-started/">Get Started</a>');
                        $('.results-map').removeClass('notfound');
                    } else {
                        console.log('The address is outside of the area.');
                        $('.results-map').html('NowRx does not deliver to this address. <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">Suggest a Location</a>');
                        $('.results-map').addClass('notfound');

                    };
                } else {
                    console.log('Geocode was not successful for the following reason: ' + status);
                }
            });
        };
        //*************************

        var center = new google.maps.LatLng(35.64321196831607, -119.84474224265433);
        var centerOc = new google.maps.LatLng(33.71507942857136, -117.82536187073532);

        var area = [{
                lat: 37.590298,
                lng: -122.243381
            }, //San Mateo Bridge
            {
                lat: 37.541612,
                lng: -122.184565
            }, //Bay past Blair island
            {
                lat: 37.440062,
                lng: -122.292341
            }, //Huddart Park
            {
                lat: 37.605642,
                lng: -122.434955
            }, //San Andreas Lake
            {
                lat: 37.582400,
                lng: -122.509844
            }, //Tom Lantos Tunnels
            {
                lat: 37.594231,
                lng: -122.521583
            }, //Pedro point
            {
                lat: 37.708889,
                lng: -122.511727
            }, //Daly-West
            {
                lat: 37.708889,
                lng: -122.471150
            }, //280 and 1
            {
                lat: 37.708889,
                lng: -122.375195
            }, //101 -East
            {
                lat: 37.590298,
                lng: -122.243381
            } //San Mateo Bridge

        ];

        var area2 = [
            // {lat:37.505913, lng:-122.11956},    //Menlo-Dumbarton
            {
                lat: 37.541612,
                lng: -122.184565
            }, //Bay past Blair island
            // {lat:37.422591, lng:-122.271784},   //Woodside Rd
            {
                lat: 37.440062,
                lng: -122.292341
            }, //Huddart Park
            {
                lat: 37.355159,
                lng: -122.198204
            }, //Portola Valley
            {
                lat: 37.326669,
                lng: -122.089413
            }, //Permanente
            {
                lat: 37.296427,
                lng: -122.077340
            }, //Stevens Creek Reservoir
            {
                lat: 37.320885,
                lng: -121.995702
            }, //280 and Lawrence
            {
                lat: 37.342792,
                lng: -121.925992
            }, //880 and The Alameda
            {
                lat: 37.425226,
                lng: -121.917435
            }, //880 and 237
            {
                lat: 37.460650,
                lng: -121.924623
            }, //W. Milpitas
            {
                lat: 37.442165,
                lng: -122.001308
            },
            {
                lng: -122.029953,
                lat: 37.466411
            },
            {
                lng: -122.11956,
                lat: 37.505913
            }

        ];

        var area3 = [{
                lat: 37.296427,
                lng: -122.077340
            }, //Stevens Creek Reservoir
            {
                lat: 37.252134,
                lng: -122.059279
            }, //Saratogo
            {
                lat: 37.215046,
                lng: -121.988328
            }, //Los Gatos
            {
                lat: 37.199160,
                lng: -121.958976
            }, //Los Gatos Hills
            {
                lat: 37.216825,
                lng: -121.912523
            }, //Guadalupe Creek
            {
                lat: 37.191559,
                lng: -121.840590
            }, //Almaden
            {
                lat: 37.228328,
                lng: -121.745425
            }, //South 101
            {
                lat: 37.296245,
                lng: -121.707597
            }, //Evergreen, SJ
            {
                lat: 37.406655,
                lng: -121.794333
            }, //Alum Rock Park
            {
                lat: 37.467054,
                lng: -121.902307
            }, //N. Milpitas
            {
                lat: 37.460650,
                lng: -121.924623
            }, //W. Milpitas
            {
                lat: 37.425226,
                lng: -121.917435
            }, //880 and 237
            {
                lat: 37.342792,
                lng: -121.925992
            }, //880 and The Alameda
            {
                lat: 37.320885,
                lng: -121.995702
            }, //280 and Lawrence
            {
                lng: -122.077340,
                lat: 37.296427
            }

        ];

        var ocarea = [{
                lat: 33.3874460,
                lng: -117.595877
            }, //San Onofre State Beach
            {
                lat: 33.711440,
                lng: -118.145128
            }, //Seal Beach
            {
                lat: 33.948184,
                lng: -117.977292
            }, //La Habra
            {
                lat: 33.946136,
                lng: -117.781795
            }, //Sleepy Hollow
            {
                lat: 33.868799,
                lng: -117.674384
            }, // 91
            {
                lat: 33.684729,
                lng: -117.556649
            }, //Trabuco Canyon
            {
                lat: 33.607207,
                lng: -117.527900
            }, //Coto De Caza
            {
                lat: 33.455898,
                lng: -117.571570
            }, //San Clemente
            {
                lat: 33.3874460,
                lng: -117.595877
            }

        ];

        var mesaCoords = [{
                lat: 33.457978,
                lng: -112.333381
            }, // I10 and Agua Fria
            {
                lat: 33.538324,
                lng: -112.302920
            }, //Glendale Landfill
            {
                lat: 33.669915,
                lng: -112.320130
            },
            {
                lat: 33.692420,
                lng: -112.176308
            }, //Arrowhead Point
            {
                lat: 33.710040,
                lng: -111.960085
            },
            {
                lat: 33.647086,
                lng: -111.893084
            }, //101 and Pima
            {
                lat: 33.625379,
                lng: -111.869130
            }, //N Thompson Peak Pkwy
            {
                lat: 33.605021,
                lng: -111.851949
            },
            {
                lat: 33.593955,
                lng: -111.833349
            },
            {
                lat: 33.566222,
                lng: -111.828254
            },
            {
                lat: 33.485470,
                lng: -111.752808
            },
            {
                lat: 33.474591,
                lng: -111.683928
            }, //202 and N. Power
            {
                lat: 33.451580,
                lng: -111.669892
            },
            {
                lat: 33.425921,
                lng: -111.632895
            },
            {
                lat: 33.296867,
                lng: -111.643973
            }, //Phoenix-Mesa Gateway Airport 
            {
                lat: 33.200262,
                lng: -111.755451
            },
            {
                lat: 33.203518,
                lng: -111.900382
            },
            {
                lat: 33.291610,
                lng: -111.989648
            },
            {
                lat: 33.289047,
                lng: -112.132352
            },
            {
                lat: 33.457978,
                lng: -112.333381
            }
        ];
        var plntCoordsd = [
    {lat:37.718984, lng:-121.696681},   //Altamont Pass Rd
    {lat:37.665259, lng:-121.696628},   //Greenville Rd
    {lat:37.646371, lng:-121.754199},   //Holdener Park
    {lat:37.626547, lng:-121.804920},   //CA-84
    {lat:37.622889, lng:-121.880342},   //Verona
    {lat:37.628665, lng:-121.895776},   //Castlewood Country Club
    {lat:37.647128, lng:-121.914731},   //Longview Ln
    {lat:37.681444, lng:-121.937066},   //Moller Ranch Bench
    {lat:37.699922, lng:-121.987665},   //580-Castro Valley
    {lat:37.754333, lng:-122.004854},   //Norris Canyon Rd
    {lat:37.771550, lng:-122.001759},   //Crow Canyon Rd
    {lat:37.828422, lng:-122.026914},   //Danville NW
    {lat:37.846605, lng:-122.015809},   //Danville N
    {lat:37.821902, lng:-121.921483},   //Blackhawk Rd
    {lat:37.799766, lng:-121.896387},   //Danville E
    {lat:37.749441, lng:-121.871704},   //Camino Tassajara
    {lat:37.745313, lng:-121.850462},   //Tassajara Hills
    {lat:37.740961, lng:-121.723154},   //N. Vasco Rd
	{lat:37.718984, lng: -121.696681}
  ];

    }
    sanFranMap();


 
</script>




<?php get_footer(); ?>