
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
	</head>
	<body>
	<?php	
		echo "<div id='container'>";
		echo "<h1>Golden Retriever Introduction</h1>";
        require_once("includes/header.php");
		echo "<div><img src='img/img.jpg' class='image'></div>
        <div id='col5'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col3'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col4'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col3'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col5'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col2'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div><div id='col2'><h2>From United States</h2>
		<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></div>";
        echo "</div>";

        require_once("includes/footer.php");
		echo "</div>";
    ?>
		<script src="js/jquery.js"></script>
        <script src="js/main.js" defer></script>
	</body>
</html>