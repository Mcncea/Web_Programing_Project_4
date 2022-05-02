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
	</head>
	<body>
	<div class="properties-list">
		<?php
			$conn = sql_connect();
			createTables($conn);
			$sql = "SELECT * FROM properties WHERE OwnerID = ".$_SESSION['userID']."";
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
				echo 'No properties registered! Add your first one by clicking the +';
			}
			
			$conn->close();
		?>
	</div>
	<a href="addProperty.php"><button class="add-property">+</button></a>
	</body>
</html>