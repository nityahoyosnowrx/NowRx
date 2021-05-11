
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
var map;
var geocoder;
var marker;
var polygon;
var bounds;
window.onload = initMap;


<?php

$coord = '33.410481, -111.884589';

$currentLocation = '';

if(is_single('burlingame')){
    $coord = '37.59065492066287, -122.36895749879504';
    $currentLocation = "burlingame";
}
if(is_single('san-jose')){
    $coord = '37.31386495445363, -121.87610133554892';
    $currentLocation = "san-jose";
}
if(is_single('mountain-view')){
    $coord = '37.39626924351466, -122.08504573831861';
    $currentLocation = "mountain-view";
}
if(is_single('irvine')){
    $coord = '33.67015776456957, -117.77854787529476';
    $currentLocation = "irvine";
}
if(is_single('pleasanton')){
    $coord = '37.699004, -121.916914';
    $currentLocation = "pleasanton";
}
if(is_single('van-nuys')){
    $coord = '34.2150729, -118.4950994';
    $currentLocation = "van-nuys";
}
if(is_single('hayward')){
    $coord = '37.629392782800444, -122.05598271544449';
    $currentLocation = "hayward";
}
if(is_single('mesa')){
    $coord = '33.410481, -111.884589';
    $currentLocation = "mesa";
}

?>

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 10,
        scaleControl: true
    });

    geocoder = new google.maps.Geocoder();
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
    polygonplntCoordsd = new google.maps.Polygon({
        path: plntCoords,
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
    polygonMesa = new google.maps.Polygon({
        path: mesaCoords,
        geodesic: true,
        strokeColor: '#038ed8',
        strokeOpacity: 1.0,
        strokeWeight: 4,
        fillColor: '#038ed8',
        fillOpacity: 0.35
    });

    if ('<?= $currentLocation; ?>' == 'burlingame') {

        polygon.setMap(map);

    } else if ('<?= $currentLocation; ?>' == 'mountain-view') {

        polygon2.setMap(map);
    } else if ('<?= $currentLocation; ?>' == 'san-jose') {

        polygon3.setMap(map);
    } else if ('<?= $currentLocation; ?>' == 'irvine') {

        polygonoc.setMap(map);
    } else if ('<?= $currentLocation; ?>' == 'pleasanton') {

        polygonplntCoordsd.setMap(map);

    } else if ('<?= $currentLocation; ?>' == 'van-nuys') {

        polygonvnysCoords.setMap(map);

    } else if ('<?= $currentLocation; ?>' == 'hayward') {


        polygonhwrdCoords.setMap(map);

    } else if ('<?= $currentLocation; ?>' == 'mesa') {


        polygonMesa.setMap(map);

    }

    marker.setMap(map);

    var input = document.getElementById('pac-input');

    // var types = document.getElementById('type-selector');
    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        marker.setMap(null);

        var place = autocomplete.getPlace();
        var newBounds = new google.maps.LatLngBounds(bounds.getSouthWest(), bounds.getNorthEast()); //Changed

        // removed newBounds = bounds;
        // if (!place.geometry) {
        geocodeAddress(input.value);
        // window.alert("Autocomplete's returned place contains no geometry");
        // return;
        // };

        marker.setPosition(place.geometry.location);
        marker.setMap(map);

        newBounds.extend(place.geometry.location);

        map.fitBounds(newBounds);


        // if (google.maps.geometry.poly.containsLocation(place.geometry.location, polygon)) {
        console.log('The area contains the address');

        // } else {
        //     console.log('The address is outside of the area.');
        // }

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
                    'NowRx delivers to this address. <a class="rx-btn mrb" href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">Get Started</a>'
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





var center = new google.maps.LatLng(<?= $coord; ?>);
var currentLoc = '<?= $currentLocation; ?>';

// burlingame
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

// mountain-view
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

// san-jose
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

// irvine
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

// mesa
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



//   pleasanton
var plntCoords = [{
        lat: 37.718984,
        lng: -121.696681
    }, //Altamont Pass Rd
    {
        lat: 37.665259,
        lng: -121.696628
    }, //Greenville Rd
    {
        lat: 37.646371,
        lng: -121.754199
    }, //Holdener Park
    {
        lat: 37.626547,
        lng: -121.804920
    }, //CA-84
    {
        lat: 37.622889,
        lng: -121.880342
    }, //Verona
    {
        lat: 37.628665,
        lng: -121.895776
    }, //Castlewood Country Club
    {
        lat: 37.647128,
        lng: -121.914731
    }, //Longview Ln
    {
        lat: 37.681444,
        lng: -121.937066
    }, //Moller Ranch Bench
    {
        lat: 37.699922,
        lng: -121.987665
    }, //580-Castro Valley
    {
        lat: 37.754333,
        lng: -122.004854
    }, //Norris Canyon Rd
    {
        lat: 37.771550,
        lng: -122.001759
    }, //Crow Canyon Rd
    {
        lat: 37.828422,
        lng: -122.026914
    }, //Danville NW
    {
        lat: 37.806274,
        lng: -122.113567
    }, //Rancho Laguna Park
    {
        lat: 37.822317,
        lng: -122.137824
    }, //Valle Vista Staging Area
    {
        lat: 37.867345,
        lng: -122.201177
    }, //Knickerbocker, Orinda
    {
        lat: 37.883935,
        lng: -122.220545
    }, //Seaview Trail, Orinda
    {
        lat: 37.8995667,
        lng: -122.2151531
    }, //Orinda Connector Staging Area
    {
        lat: 37.924711,
        lng: -122.197338
    }, //Black Hill
    {
        lat: 37.910014,
        lng: -122.141103
    }, //Mariposa Trail
    {
        lat: 37.916613,
        lng: -122.120943
    }, //Briones Trail Head
    {
        lat: 37.972927,
        lng: -122.149856
    }, //Alhambra Valley
    {
        lat: 38.035870,
        lng: -122.150062
    }, //Carquinez Strait
    {
        lat: 38.068054,
        lng: -122.034360
    }, //Suisun Bay
    {
        lat: 37.967214,
        lng: -121.926879
    }, //Kirker Pass
    {
        lat: 37.948636,
        lng: -121.906645
    }, //Black Diamond Trail
    {
        lat: 37.919543,
        lng: -121.897617
    }, //Marsh Creek Rd
    {
        lat: 37.821902,
        lng: -121.921483
    }, //Blackhawk Rd
    {
        lat: 37.799766,
        lng: -121.896387
    }, //Danville E
    {
        lat: 37.749441,
        lng: -121.871704
    }, //Camino Tassajara
    {
        lat: 37.745313,
        lng: -121.850462
    }, //Tassajara Hills
    {
        lat: 37.740961,
        lng: -121.723154
    }, //N. Vasco Rd
    {
        lat: 37.718984,
        lng: -121.696681
    }
];


//   van nuys
var vnysCoords = [{
        lat: 34.278744,
        lng: -118.630395
    }, // Indian Springs
    {
        lat: 34.304726,
        lng: -118.585203
    }, // Porter Ranch
    {
        lat: 34.324734,
        lng: -118.502170
    }, // I5 Sylmar
    {
        lat: 34.337815,
        lng: -118.400452
    }, // San Fernando Valley East
    {
        lat: 34.274613,
        lng: -118.331774
    }, // Sunland-Tujunga
    {
        lat: 34.219675,
        lng: -118.326811
    }, // Verdugo Mountain Park
    {
        lat: 34.185278,
        lng: -118.257726
    }, // Las Flores Mtwy
    {
        lat: 34.154781,
        lng: -118.282457
    }, // John Ferraro Fields
    {
        lat: 34.1186458,
        lng: -118.3486866
    }, // Jerome Daniel Overlook
    {
        lat: 34.1205728,
        lng: -118.364706
    }, // Runyon Canyon
    {
        lat: 34.1233107,
        lng: -118.3744618
    }, // Fitzpatrick Leland House
    {
        lat: 34.1229152,
        lng: -118.3952553
    }, // Barbara Fine Overlook
    {
        lat: 34.127134,
        lng: -118.417854
    }, // Mrca Open Space
    {
        lat: 34.1287722,
        lng: -118.4327943
    }, // Charles Lotte Overlook
    {
        lat: 34.126340,
        lng: -118.475647
    }, // Mulholland and 405
    {
        lat: 34.1305408,
        lng: -118.5442992
    }, // Mulholland Gateway Park
    {
        lat: 34.1302433,
        lng: -118.6125792
    }, // Summit Valley Park
    {
        lat: 34.1253714,
        lng: -118.6579469
    }, // Mountain Park Calabasas
    {
        lat: 34.125206,
        lng: -118.691430
    }, // Calabasas South
    {
        lat: 34.278744,
        lng: -118.630395
    }
];

// hayward

var hwrdCoords = [{
        lat: 37.726379,
        lng: -122.201422
    }, //San Leandro North
    {
        lat: 37.612943,
        lng: -122.173916
    }, // San Mateo Bridge
    {
        lat: 37.526175,
        lng: -122.098461
    }, //Dumbarton Bridge
    {
        lat: 37.460650,
        lng: -121.924623
    }, //W. Milpitas
    {
        lat: 37.467054,
        lng: -121.902307
    }, //N. Milpitas
    {
        lat: 37.530674,
        lng: -121.909613
    }, //Ohlone College
    {
        lat: 37.587940,
        lng: -121.959870
    }, //Niles Canyon
    {
        lat: 37.723137,
        lng: -122.017688
    }, //Castro Valley E
    {
        lat: 37.737617,
        lng: -122.060895
    }, //Columbia Trail
    {
        lat: 37.743026,
        lng: -122.145975
    }, //580, San Leandro NE
    {
        lat: 37.726379,
        lng: -122.201422
    } //San Leandro North
];
</script>