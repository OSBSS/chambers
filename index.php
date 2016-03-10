<!DOCTYPE HTML>
<!-- OSBSS Copyright 2016 -->
<html>

<head>
<title>Chambers Project</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://www.osbss.com/wp-content/uploads/2015/01/fav2.png"/>
<!--  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/style.css" />
<!-- JS Scripts  -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
<h2 style="text-align:center">Chambers Sensor Readings</h2>
<p style="text-align:center; color: red;"><a href="index.php?action=truncate">Clear Database</a></p>
<p style="clear:both;"></p>
<br />

<div class="container">
<div id="readings" style="margin: 0 auto;">
<div class="row">
<?php
    include 'includes/db.php'; // Connect to DB
    include 'includes/config.php';  // Import required configurations
    include 'data.php'; // Data generates from this file
   
	// Truncate tables action
	if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case 'truncate':
			for($x = 1; $x <= $chambers; $x++) {
				mysql_query("TRUNCATE TABLE chambers".$x.";");
				mysql_query("ALTER TABLE chambers".$x." AUTO_INCREMENT = 1");
				//echo "Data Cleared";
				header("Location: " . $_SERVER['REQUEST_URI']);
			}
			break;
		}
	}
 ?>
</div>
</div>
</div>
<p style="clear:both;"></p>
<br />
<footer style="text-align:center;">Copyright &copy; 2016 OSBSS - BERG Lab</footer>
<br />
<!-- This is the the end. Skyfall. -->
</body>

</html>