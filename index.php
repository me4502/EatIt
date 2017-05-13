<?php

$PageTitle=null; // Custom page title

include_once('header.php');

function customPageHeader(){?>
    <!-- Page specific header HTML here -->
<?php } ?>

<main>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        <li><p id="filter_title">Filters</p></li>
        <li class="divider"></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="">Vegetarian</a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="">Full Meal</a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="">Gluten Free <i class="material-icons right">done</i></a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="">"Untouched"</a></li>
    </ul>

    <div id="mapDiv" class="">
        <div id="map"></div>
        <script>

            function initMap() {
                var myLatLng = {lat: -27.477883, lng: 153.029223};
                var foodName = "Burritos";
                var foodDescription = "We have about 10 full burritos left over.";
                var foodAddress = "2 George St, Brisbane City, QLD";
                var dietInfo = "Not available.";
                var foodGiver = "Code Network";
                var foodDistance = "250m";
                var foodExpire = "8:30pm";

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    label: "A",
                    title: foodName
                });

                var contentString = '<div class="card">\
                    <div class="card-image">\
                    <img src="img/burritos.jpeg">\
                    <span class="card-title">' + foodName +
                    '</span>\
                    <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">navigation</i></a>\
                    </div><div class="card-content"><p>' + foodDistance + ' away by ' + foodGiver + '</p><p>' +
                        foodDescription + '</p>Diet Info: ' + dietInfo + '<p>Valid Until: ' + foodExpire
                    + '</p>' + foodAddress + '</p><p style="padding-top: 5px; padding-bottom:0;" class="center-align">' +
                    '<i class="material-icons">report_problem</i></p></div></div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7j0r7la3KRwxHtRXqqykMozQy2UXujLs&callback=initMap">
        </script>
    </div>
</main>

<?php include_once('footer.php'); ?>