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

			* { box-sizing: border-box; font-family: helvetica, arial, sans-serif; }
			input[type=text], input[type=tel], textarea { font-size: 18px; }	
			button { background: #090; color: #fff; }
			button:hover { background: #333; }
			.fieldWrap { padding: 10px; flex-direction: column; flex: 0 50%; }
						
		@media screen and (max-width: 639px) {
			label { font-size: 12px; }
			input[type=text], input[type=tel] { font-size: 28px; width: 100%; padding: 10px; }
			button { width: 100%; padding: 15px; border-radius: 5px; font-size: 48px;}
			.fieldWrap { flex-direction: column; flex: 0 100%; padding: 0 10px; }			
		}
        </style>
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyBkGyX_vgGgWplpkeot4vZUffY-BwfMghU"></script>	
	</head>
	<body>
	<script>
	localStorage.setItem("message","Welcome back!");
    function getLocation() {
        if (navigator.geolocation) {
            console.log("asking for location");
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else { 
            document.getElementById("currentLocation").innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    
    function showPosition(position) {	
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;	
        
        var dir_url = "https://www.google.ca/maps/dir/"+lat+","+lon+"/Humane+Society,+1375+Provincial+Road,+Windsor,+ON+N8W+5V8/@42.2594N,82.9805W,6z";    
    	
    	document.getElementById("currentLocation").innerHTML = "Latitude: " + lat + "<br>Longitude: " + lon;  
    
        document.getElementById("directions").innerHTML = "<a href='"+dir_url+"'>GET DIRECTIONS TO Windsor Humane Society</a>";    
        
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
    	var myDiv = document.getElementById("location");
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
			echo "<p>Click the button to get your coordinates.</br></p>
			<button onclick='getLocation();'>Show My Location</button>";
			echo "<p id='currentLocation'></p>";
			echo "<div id='googleMap'></div><br>";
			echo "<div id='directions'></div><br>";
		echo "</div>";



		echo "</div>";

		?>
		<div class="form-center"></div>
		<div class="form-center">
		<form action="form-action.php" method="post" name="myform" id="myForm">
			<div class="fieldWrap">
				<label for="fname">First Name</label><br>
				<input type="text" name="fname" id="fname" value="" size="30" placeholder="Your First Name">
			</div>
			<div class="fieldWrap">
				<label for="lname">Last Name</label><br>
				<input type="text" name="lname" id="lname" value="" size="30" placeholder="Your Last Name">
			</div>
			<div class="fieldWrap">
				<label for="email">Email Address</label><br>
				<input type="text" name="email" id="email" value="" size="25" placeholder="name@domain.com">
			</div>
			<div class="fieldWrap">
				<label for="phone">Phone Number</label><br>
				<input type="text" name="phone" id="phone" value="" size="15" placeholder="888-888-8888">
			</div>
			<button type="submit" value="Send email">SUBMIT</button>
		</form>
		</div>
		<script>			
			//localStorage.clear();			
			//insert code to get data from local storage and present a message to the user
			
			let message = localStorage.getItem("message");
			let fname = localStorage.getItem("fname");
			document.getElementById("message").innerHTML = message+fname;
			// console.log(message);
		</script>
		
	</body>
</html>