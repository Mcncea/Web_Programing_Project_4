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
		<title>Registered Properties</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
		// Begin modified code from https://www.w3schools.com/js/js_ajax_database.asp
		function showCustomer(str) {
		  if (str == "") {
			document.getElementById("properties").innerHTML = "";
			return;
		  }
		  const xhttp = new XMLHttpRequest();
		  xhttp.onload = function() {
			document.getElementById("properties").innerHTML = this.responseText;
		  }
		  xhttp.open("GET", "showProperties.php?q="+str);
		  xhttp.send();
		}
		// End modified code from https://www.w3schools.com/js/js_ajax_database.asp
		</script>
	</head>
	<body>
	<form>
	Search for properties: <input type="text" id="search" onkeyup="showProperties(this.value)">
	</form>
	<div id="properties"></div>
	</body>
</html>