var lat, lon;

//Get our position
function getPos() {
    //Find our error element
    var error_element = document.getElementById("geo-error");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(returnPos);

    } else {
        error_element.innerHTML = "Geolocation is not supported by this browser. Please try a manual search.";
    }
}

function returnPos(position) {
    // Find our coords element

    lat = position.coords.latitude;
    lon = position.coords.longitude;
    console.log({"lat":lat, "lon":lon});
    var status_element = document.getElementById("geo-status");
    status_element.innerHTML = "Location Saved.";
    Materialize.toast('Location Saved!', 3000) // 4000 is the duration of the toast

    return {"lat":lat, "lon":lon};
}