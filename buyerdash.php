<?php 
	include("common.php");
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<meta charset="utf-8">
		<title>Registered Properties</title>
	</head>
	<body>
	<div class="properties-list">
		<?php
			showRegisteredProperties();
		?>
	</div>
	</body>
</html>