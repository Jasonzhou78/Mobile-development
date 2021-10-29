
<!--Student Name: Zhijun Zhou
Student#: 0728193
Topic: Responsive web page
-->
<!doctype html>
<html lang="en">
	<head>
		<title>St. Clair College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./css/main.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">
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
		}
	</script>
		<?php
		echo "<div id='container'>";
		echo "<h1>Contact Information</h1>";
        require_once("includes/header.php");
		echo "<div class='location'>";
			echo "<p>Click the button to get your coordinates.</p>
			<button onclick='getLocation();'>Show My Location</button>";
			echo "<div id='currentLocation'></div>";
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