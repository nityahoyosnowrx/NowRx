<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

<?php 
$mapd = get_field('address'); 
// print_r($mapd); 
// echo $mapd['name'];
// echo $mapd['city'];
// echo $mapd['state'];
// echo $mapd['post_code'];
// echo $mapd['country'];
// echo $mapd['lat'];
// echo $mapd['lng'];
?>
<script type="application/ld+json">
{
    "@context": "https://www.schema.org/",
    "@type": "LocalBusiness",
    "name": "<?= __(the_title()); ?>",
    "alternateName": ["NowRx", "NowRx Pharmacy", "Now Rx", "Now Rx Pharmacy"],
    "url": "<?php the_title(); ?>",
    "@id": "<?php the_title(); ?>#LocalBusiness",
    "image": "<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Logo-Pharmacy.png",
    "telephone": "844-466-6979",    
    "sameAs": [
       "https://twitter.com/NowRx?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
       "https://www.facebook.com/NowRx/"
       ],
    "openingHoursSpecification": [
        {
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
        }
    ],
     "priceRange": "$",
     "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $mapd['name']; ?>",
        "addressLocality": "<?= $mapd['city']; ?>",
        "addressRegion": "<?= $mapd['state']; ?>",
        "postalCode": "<?= $mapd['post_code']; ?>",
        "addressCountry": "<?= $mapd['country']; ?>"
        },
    "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "1",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "Lina W."
        }
      },
	"location": {
	 "@type": "Place",
	 "geo": {
	        "@type": "GeoCoordinates",
		"latitude": "<?= $mapd['lat']; ?>",
		"longitude": "<?= $mapd['lng']; ?>"
			}
	},
	"areaServed": [{
	    "@type": "City",
	    "name": ["<?= $mapd['city']; ?>"]
    }]	
}
</script>




<main id="main" class="main-class singleloc">

    <div class="rvl">

        <picture class="lozad"
            data-iesrc="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png"
            data-alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy)" data-toggle-class="active">
            <source type="image/png"
                srcset="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020.png">
            <img src="<?php echo get_template_directory_uri(); ?>/images/White-Coat-Awards-2020lowrez.jpg"
                class="imageblock" alt="NowRx Pharmacy Surescripts 2020 White Coat Award Finalist (Highest Accuracy)" height="100px" width="450px">
        </picture>

    </div>


    <article class="article-block location-item">

        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <div class="breadcrumb">
        <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
        </div>
        </header><!-- .entry-header -->

        <div class="entry-content mapplace">

            <div class="mapcontent">

                <?php 
            the_content(); ?>
            </div>
            <div class="map-block">


                <div class="maphours">
                    <span class="hourtitle">Hours of Operation</span>
                    <span class="time">
                        Monday - Friday | 9am - 5pm
                    </span>
                </div>

                <div class="map-tem">
                    <div id="map"></div>
                </div>

                <div class="map-locations">
                
                    <?php echo get_field('info'); ?>
                </div>
            </div>


        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->


    <section class="searchbar">
        <div class="map-searchbar">
            <div class="box">
                <label for="pac-input" class="enter">Please enter your address below to see if NowRx delivers.</label>
                <input id="pac-input" class="controls" type="text" placeholder="e.g. 123 Baker St, Sunnyvale CA">
                <div class="results-map"></div>
            </div>
        </div>
    </section>


    <section class="visit-faq">
        <div class="container">
            <div class="content">
                <div class="rvl">
                    <span class="sub-headline">
                        No Signup Required. No Hidden Fees.
                    </span>
                </div>

                <div class="rvl">
                    <h2 class="sec-title">
                        Just a Better Pharmacy
                    </h2>
                </div>
                <div class="rvl">
                    <div class="btn-container">
                        <a class="rx-btn rx-dg" data-toggle="suggestalocation" aria-controls="suggestalocation"
                            aria-haspopup="true" tabindex="0">Request a Location</a>
                    </div>
                </div>
                <div class="rvl">
                    <div class="small-block">
                        Still have questions about how to get startd with NowRx Pharmacy? Email us at info@nowr.com an
                        dwe will be happy to help.
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
                                    What is NowRx?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    NowRx is a pharmacy just like your CVS or Walgreens, except instead of you coming in
                                    to
                                    pick up medication, we bring them to you.
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
                                    Is NowRx a mail-order pharmacy?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    NO. NowRx Pharmacy has physical locations in all of our service areas. We accept
                                    walk-ins and our pharmacists are always available to chat in person or over the
                                    phone.
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
                                    Proprietary tech inside our pharmacy increases efficiency and reduces our cost to
                                    about
                                    1/100th that of a traditional pharmacy like CVS. This enables free same-day
                                    delivery.
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
                                    We make money like every pharmacy or healthcare service – reimbursement from
                                    insurance
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
                                    Do you charge more to offset the cost of delivery?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    NO. Prices are lower than or competitive with all pharmacies. We also automatically
                                    search for and apply available coupons to offer the lowest price possible (over $1M
                                    saved!).
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
                                    Can I manage prescriptions for a family member?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    Yes. You can set a head of household if a single person will be managing a family
                                    member
                                    or loved one’s prescriptions.
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
                                    What insurance plans do you take?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    NowRx Pharmacy accepts all major insurance plans except Kaiser. We also offer some
                                    of
                                    the lowest out of pocket prices in the areas we serve.
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
                                    How long does does delivery take?
                                </span>
                            </div>
                        </div>
                        <div class="rvl">
                            <div class="a-item">
                                <div class="title">A.</div>
                                <span class="cntx">
                                    Typically, your prescription will arrive 2-4 hours after we have confirmed your
                                    prescription. We also offer 1hr delivery option for a $5 fee.
                                </span>
                            </div>
                        </div>
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
                        Have additional questions about NowRx Pharmacy
                    </span>
                </div>
                <div class="rvl">
                    <h2 class="sec-title">
                        Visit our FAQ
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
                        You can also text us at (844) 466-6979 or send an email to info@nowrx.com and we will get back
                        to
                        you as soon as possible.
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>



<style>
#map {
    height: 500px;
    border-radius: 13px;
    box-shadow: 0 4px 10px -3px #00000047;
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
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmMty5MmMXegrIhIhMHDWOqIu6RQ6m9vg&libraries=geometry,places">
</script>

<script>
var map;
var geocoder; //Added on 27/09/2016
var marker;
var polygon;
var bounds;
window.onload = initMap;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 10,
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

    polygonvnysCoords = new google.maps.Polygon({
        path: vnysCoords,
        geodesic: true,
        strokeColor: '#038ed8',
        strokeOpacity: 1.0,
        strokeWeight: 4,
        fillColor: '#038ed8',
        fillOpacity: 0.35
    });

    polygonhwrdCoords = new google.maps.Polygon({
        path: hwrdCoords,
        geodesic: true,
        strokeColor: '#038ed8',
        strokeOpacity: 1.0,
        strokeWeight: 4,
        fillColor: '#038ed8',
        fillOpacity: 0.35
    });


    
    


    // polygon.setMap(map);
    // polygon2.setMap(map);
    // polygon3.setMap(map);
    // polygonoc.setMap(map);
    // polygonMesa.setMap(map);

    marker.setMap(map);

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
                google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonhwrdCoords) || 
                google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonvnysCoords) || 
                google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygonplntCoordsd)) {
                    
                    
                console.log('The area contains the address');
                $('.results-map').html(
                    'NowRx delivers to this address. <a class="rx-btn mrb" href="<?= get_site_url(); ?>/get-started/">Get Started</a>'
                    );
                $('.results-map').removeClass('notfound');
            } else {
                console.log('The address is outside of the area.');
                $('.results-map').html(
                    'NowRx does not deliver to this address. <a class="rx-btn" data-toggle="suggestalocation" aria-controls="suggestalocation" aria-haspopup="true" tabindex="0">Suggest a Location</a>'
                    );
                $('.results-map').addClass('notfound');

            };
        } else {
            console.log('Geocode was not successful for the following reason: ' + status);
        }
    });
};
//*************************

<?php

$coord = '33.410481, -111.884589';
if(is_single('burlingame')){
    $coord = '37.59065492066287, -122.36895749879504';
} 
if(is_single('san-jose')){
    $coord = '37.31386495445363, -121.87610133554892';
} 
if(is_single('mountain-view')){
    $coord = '37.39626924351466, -122.08504573831861';
} 
if(is_single('irvine')){
    $coord = '33.67015776456957, -117.77854787529476';
} 
if(is_single('pleasanton')){
    $coord = '37.69897832554893, -121.91677365323146';
} 

if(is_single('van-nuys')){
    $coord = '34.2150729, -118.4950994';
} 
if(is_single('hayward')){
    $coord = '37.629392782800444, -122.05598271544449';
} 

?>



var center = new google.maps.LatLng(<?= $coord; ?>);
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


  var vnysCoords = [
    {lat:34.278744, lng:-118.630395},   // Indian Springs
    {lat:34.304726, lng:-118.585203},   // Porter Ranch
    {lat:34.324734, lng:-118.502170},   // I5 Sylmar
    {lat:34.337815, lng:-118.400452},   // San Fernando Valley East
    {lat:34.274613, lng:-118.331774},   // Sunland-Tujunga
    {lat:34.219675, lng:-118.326811},   // Verdugo Mountain Park
    {lat:34.185278, lng:-118.257726},   // Las Flores Mtwy
    {lat:34.154781, lng:-118.282457},   // John Ferraro Fields
    {lat:34.1186458, lng:-118.3486866}, // Jerome Daniel Overlook
    {lat:34.1205728,lng:-118.364706},   // Runyon Canyon
    {lat:34.1233107,lng:-118.3744618},  // Fitzpatrick Leland House
    {lat:34.1229152,lng:-118.3952553},  // Barbara Fine Overlook
    {lat:34.127134, lng:-118.417854},   // Mrca Open Space
    {lat:34.1287722,lng:-118.4327943},  // Charles Lotte Overlook
    {lat:34.126340, lng:-118.475647},   // Mulholland and 405
    {lat:34.1305408,lng:-118.5442992},  // Mulholland Gateway Park
    {lat:34.1302433,lng:-118.6125792},  // Summit Valley Park
    {lat:34.1253714,lng:-118.6579469},  // Mountain Park Calabasas
    {lat:34.125206, lng:-118.691430},   // Calabasas South
    {lat:34.278744, lng:-118.630395}
  ];


  var hwrdCoords = [
    {lat: 37.726379, lng: -122.201422},  //San Leandro North
    {lat:37.612943, lng:-122.173916},   // San Mateo Bridge
    {lat:37.526175, lng:-122.098461},   //Dumbarton Bridge 
    {lat:37.460650, lng:-121.924623},   //W. Milpitas
    {lat:37.467054, lng:-121.902307},   //N. Milpitas
    {lat:37.530674, lng:-121.909613},    //Ohlone College
    {lat:37.587940, lng:-121.959870},   //Niles Canyon
    {lat:37.723137, lng:-122.017688},   //Castro Valley E
    {lat:37.737617, lng:-122.060895},   //Columbia Trail
    {lat:37.743026, lng:-122.145975},   //580, San Leandro NE
    {lat: 37.726379, lng: -122.201422}  //San Leandro North
  ];

</script>


<?php
get_footer();