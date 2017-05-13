<?php

$PageTitle=null; // Custom page title

include_once('header.php');

function customPageHeader(){?>
    <!-- Page specific header HTML here -->
<?php } ?>

<main>
    <!-- Dropdown Structure 1 -->
    <ul id='dropdown1' class='dropdown-content'>
        <li><p id="filter_title">Filters</p></li>
        <li class="divider"></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="vegetarian">Vegetarian<i class="material-icons right hide">done</i></a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="full_meal">Full Meal<i class="material-icons right hide">done</i></a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="gluten_free">Gluten Free<i class="material-icons right">done</i></a></li>
        <li><a href="#!" class="dropdown_item waves-effect" id="untouched">"Untouched"<i class="material-icons right hide">done</i></a></li>
    </ul>

    <!-- Dropdown Structure 2 -->
    <ul id='dropdown2' class=''>
        <li><p id="giveFood_title">Give Food</p></li>
        <li class="divider"></li>
        <li><input type="text" class="giveFoodItem waves-effect" placeholder="Enter a brief name for your food" id="foodName"></li>
        <li><input type="text" class="giveFoodItem waves-effect" placeholder="How many people can it serve?" id="foodAmount"></li>
        <li><input type="text" class="giveFoodItem waves-effect" placeholder="When can people pick up your food until?" id="foodAmount"></li>
        <li><input type="text" class="giveFoodItem waves-effect" placeholder="Tell us more about your food" id="foodDescription"></li>
        <li><input type="text" class="giveFoodItem waves-effect" placeholder="Any special dietary considerations?" id="foodDietary"></li>
        <li><input type="submit" class="btn blue" name="submit"  id="newFood"></li>


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
                    <a target="_blank" href="https://www.google.com.au/maps/dir/-27.4767196,153.0273185/2+George+St,+Brisbane+City+QLD+4000/@-27.476608,153.0256562,17z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x6b915a105a45e513:0x58d37277a0e6c581!2m2!1d153.0283712!2d-27.4776064!3e2" class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">navigation</i></a>\
                    </div><div class="card-content"><p>' + foodDistance + ' away by ' + foodGiver + '</p><p>' +
                        foodDescription + '</p>Diet Info: ' + dietInfo + '<p>Valid Until: ' + foodExpire
                    + '</p>' + foodAddress + '</p><i class="material-icons report_icon right">report_problem</i></div></div>';

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