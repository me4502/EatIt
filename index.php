<?php

$PageTitle=null; // Custom page title

include_once('header.php');

function customPageHeader(){?>
    <!-- Page specific header HTML here -->
<?php } ?>

<main>
    <div id="mapDiv" class="">
        <div id="map"></div>
        <script>

            function initMap() {
                var myLatLng = {lat: -27.477883, lng: 153.029223};
                var myLatLng2 = {lat: -27.477083, lng: 153.029023};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    label: "A",
                    title: "Burritos"
                });

                var marker2 = new google.maps.Marker({
                    position: myLatLng2,
                    map: map,
                    label: "B",
                    title: "Sandwiches"
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7j0r7la3KRwxHtRXqqykMozQy2UXujLs&callback=initMap">
        </script>
    </div>
</main>

<?php include_once('footer.php'); ?>