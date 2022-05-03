<?php
//echo "Entering PHP";
include("common.php");
session_start();
checkLogin();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<meta charset="utf-8">
		<title>Logged In</title>
	</head>
	<body>
	<center>
		<div>
			<h1>Welcome!</h1>
			<a href="buyerdash.php">Go to buyer dashboard</a><br>
			<a href="sellerdash.php">Go to seller dashboard</a><br>
			<a href="admindash.php">Go to admin dashboard</a><br><br>
			<a href="login.php">Log out</a><br>
		</div>
	</center>
	</body>
</html>