
<!--Student Name: Zhijun Zhou
Student#: 0728193
Topic: Responsive web page
-->
<!doctype html>
<html lang="en">
	<head>
		<title>St. Clair College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	<?php	

		echo "<div id='container'>";
        require_once("includes/header.php");
		echo "<h1>About Golden Retriever</h1>";
		echo "<div><img src='img/img.jpg' class='image'></div>".
		"<div id='col6'></div><div id='col3'></div><div id='col3'></div>";
        require_once("includes/footer.php");
		echo "</div>";
    ?>
	</body>
</html>