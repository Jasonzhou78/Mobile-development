< script >
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("currentLocation").innerHTML = "Geolocation is not supported by this browser.";
        }
    }

function showPosition(position) {

    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    document.getElementById("currentLocation").innerHTML = "Latitude: " + lat +
        "<br>Longitude: " + lon;
    document.getElementById("directions").innerHTML = "<a href='" + dir_url + "'>GET DIRECTIONS TO THE CN TOWER</a>";
    showMap(position);
}

function showMap(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    var zoom = 12;

    if (window.innerWidth > 639) {
        zoom = 3;
    } else {
        zoom = 18;
    }

    const myCenter = { lat: lat, lng: lon };

    var mapProperties = {
        center: myCenter,
        zoom: zoom,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProperties);

    var marker = new google.maps.Marker({ position: myCenter });
    marker.setMap(map);

    google.maps.event.addDomListener(window, "resize", function() {
        if (window.innerWidth > 639) {
            map.setZoom(12);
        } else {
            map.setZoom(18);
        }
    });
}

function showError(error) {
    var myDiv = document.getElementById("location");
    switch (error.code) {
        case error.PERMISSION_DENIED:
            myDiv.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            myDiv.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            myDiv.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            myDiv.innerHTML = "An unknown error occurred."
            break;
    }
} < /script>