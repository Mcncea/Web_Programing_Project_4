<?php 
	include("common.php");
	session_start();
	checkLogin();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<meta charset="utf-8">
		<title>Add a Property</title>
	</head>
	<body>
	<div class="form">
	<!-- Begin code from https://www.w3schools.com/php/php_file_upload.asp -->
	<form action="addPropertyToDB.php" method="post" enctype="multipart/form-data">
		  Select image to upload:
		  <input type="file" name="fileToUpload" id="fileToUpload">
	  
	<!-- End code from https://www.w3schools.com/php/php_file_upload.asp -->
		  <input type="text" name="location" placeholder="Location" required><br><br>
		  <input type="number" name="price" id="price" min="1" required>
		  <label for="price">Price (in dollars)</label><br><br>
		  <textarea name="floorplan" placeholder="Floor Plan" rows="4" cols="50" maxlength="255" required></textarea><br><br>
		  <input type="number" name="age" id="age" min="1" required>
		  <label for="age">Age (in years)</label><br><br>
		  <input type="number" name="bedrooms" id="bedrooms" min="1" required>
		  <label for="bedrooms">Number of bedrooms</label><br><br>
		  <textarea name="facilities" placeholder="Additional Facilities" rows="4" cols="50" maxlength="255" required></textarea><br><br>
		  <input type="checkbox" name="garden" id="garden" value="Garden">
		  <label for="garden">Garden available</label><br><br>
		  <textarea name="parking" placeholder="Parking Availability" rows="4" cols="50" maxlength="255" required></textarea><br><br>
		  <textarea name="proximity" placeholder="Proximity to main roads & facilities" rows="4" cols="50" maxlength="255" required></textarea><br><br>
		  <input class="buttons" type="submit" value="Submit" name="submit">
		  <br><br>
	</form>
	</div>
	</body>
</html>