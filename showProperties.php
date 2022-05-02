<?php 
	// Code modified from https://www.w3schools.com/js/js_ajax_database.asp
	include("common.php");
	session_start();
	checkLogin();
	
	$conn = sql_connect();
	createTables($conn);

	$sql = "SELECT *
	FROM customers ";
	$sql .= "WHERE OwnerID = ?";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
	$stmt->fetch();
	$stmt->close();

	$result = $conn->query($sql);
	
	if($result->num_rows > 0) {
		

		// Begin modified code from https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo
		while ($row = $result->fetch_assoc()) {
			echo "<div class='property'>";
			echo "<img class='property-img' src='".$row["image"]."'>";
			echo "<table><tr><th>Location</th>
				<tr><th>Price</th>
				<tr><th>Floor Plan</th>
				<tr><th>Age</th>
				<tr><th>Bedrooms</th>
				<tr><th>Facilities</th>
				<tr><th>Garden?</th>
				<tr><th>Parking</th>
				<tr><th>Proximity</th>
				<tr><th>Tax</th></tr>";
			echo "<tr><td>".$row["location"]."</td>
				<td>".$row["price"]."</td>
				<td>".$row["floorplans"]."</td>
				<td>".$row["age"]."</td>
				<td>".$row["bedrooms"]."</td>
				<td>".$row["facilities"]."</td>
				<td>".$row["garden"]."</td>
				<td>".$row["parking"]."</td>
				<td>".$row["proximity"]."</td>
				<td>".$row["tax"]."</td></tr><br>";
			echo "</table>"; 
			echo "</div>";
		}
		// End modified code from https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo
		 
		 
	}
	else {
		echo 'No properties found. Too bad!';
	}
	
	
	
	
	
	
	
	$conn->close();
?>