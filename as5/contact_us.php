
<!--Student Name: Zhijun Zhou
Student#: 0728193
Topic: Responsive web page
-->
<!doctype html>
<html lang="en">
	<head>
		<title>St. Clair College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">
		<style>
            #googleMap { width: 100%; height: 400px; }
            
            @media all and (max-width: 639px) {
                #googleMap { width: 100%; height: 600px; }                
            }
        </style>
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyBkGyX_vgGgWplpkeot4vZUffY-BwfMghU"></script>	
	</head>
	<body>
	<script>
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
			document.getElementById("directions").innerHTML = "<a href='"+dir_url+"'>GET DIRECTIONS TO THE CN TOWER</a>";
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
            center:myCenter,
            zoom:zoom,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProperties);
        
        var marker = new google.maps.Marker({position: myCenter});
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
    	var myDiv = document.getElementById("currentLocation");
        switch(error.code) {
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
    }
	</script>
		<?php
		echo "<div id='container'>";
		echo "<h1>Contact Information</h1>";
        require_once("includes/header.php");
		echo "<div id='location'>";
			echo "<p>Click the button to get your coordinates.</p>
			<button onclick='getLocation();'>Show My Location</button>";
			echo "<p id='currentLocation'></p>";
			echo "<div id='googleMap'></div>";
			echo "<div id='directions'></div>";
		echo "</div>";

		echo "<div>";
		require_once("includes/footer.php");
		echo "</div>";

		echo "</div>";

		?>
		<script src="js/jquery.js"></script>
        <script src="js/main.js" defer></script>
	</body>
</html>