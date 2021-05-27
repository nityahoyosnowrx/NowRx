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

<main id="main" class="main-class" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">




    <article class="article-block location-item">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            // the_content(); ?>
            <div class="map-searchbar">
                <div class="box">
                    <label for="pac-input" class="enter">Please enter your address below.</label>
                    <input id="pac-input" class="controls" type="text" placeholder="e.g. 123 Baker St, Sunnyvale CA">
                    <div class="results-map"></div>
                </div>
            </div>
            <div class="map-block">
                <div class="map-tem">



                    <div id="map"></div>
                </div>
                <div class="map-locations">
                    <!-- item -->
                    <div class="location-item">
                        <h2 class="sec-title">NowRx - Mesa, AZ</h2>
                        <span class="desc-item">
                            <b>ePrescribe:</b> NowRx MtnV (NCPDP: 0364252)
                        </span>
                        <span class="desc-item">
                            <b>Phone:</b> (408) 597-3580
                        </span>
                        <span class="desc-item">
                            <b>Fax:</b> (480) 597-3274
                        </span>
                    </div>


                </div>
            </div>


        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->



    <?php include('section-visitblock.php'); ?>


    <!-- faq -->
    <section class="faq-section">
        <div class="container">
            <div class="content">
                <div class="titleblock">
                    <div class="rvl">
                        <span class="sub-headline">
                        NowRx Pharmacy Delivery
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


    <?php include('section-visitfaq.php'); ?>



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
    height: 44px;
    margin: 0 auto 10px;
}
#pac-input::placeholder{
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
        strokeColor: '#FFd000',
        strokeOpacity: 1.0,
        strokeWeight: 4,
        fillColor: '#FFd000',
        fillOpacity: 0.35
    });

    polygon.setMap(map);

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
            if ( google.maps.geometry.poly.containsLocation(results[0].geometry.location, polygon) )  {
                console.log('The area contains the address');
                $('.results-map').html('NowRx delivers to this address. <a class="rx-btn mrb" href="http://localhost:8888/dev/how-it-works/">Get Started</a>');
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


var center = new google.maps.LatLng(33.410481, -111.884589);
var area = [
    {lat:33.457978, lng:-112.333381},   // I10 and Agua Fria
    {lat:33.538324, lng:-112.302920},   //Glendale Landfill
    {lat:33.669915, lng:-112.320130},
    {lat:33.692420, lng:-112.176308},   //Arrowhead Point
    {lat:33.710040, lng:-111.960085},
    {lat:33.647086, lng:-111.893084},   //101 and Pima
    {lat:33.625379, lng:-111.869130},   //N Thompson Peak Pkwy
    {lat:33.605021, lng:-111.851949},
    {lat:33.593955, lng:-111.833349},
    {lat:33.566222, lng:-111.828254},
    {lat:33.485470, lng:-111.752808},
    {lat:33.474591, lng:-111.683928},   //202 and N. Power
    {lat:33.451580, lng:-111.669892},
    {lat:33.425921, lng:-111.632895},
    {lat:33.296867, lng:-111.643973},   //Phoenix-Mesa Gateway Airport
    {lat:33.200262, lng:-111.755451},
    {lat:33.203518, lng:-111.900382},
    {lat:33.291610, lng:-111.989648},
    {lat:33.289047, lng:-112.132352},
    {lat:33.457978, lng:-112.333381}

];
</script>


<?php
get_footer();