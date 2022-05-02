
<!DOCTYPE html>
<?php
include("common.php");
session_start();

	if (!isset($_POST['username'], $_POST['password'])) {
		exit('Please fill the form to complete login');
	}

	if (empty($_POST['username']) || empty($_POST['password'])) {
		exit('Please fill all the fields');
	}

	$conn = sql_connect();
	createTables($conn);
	$stmt = $conn->prepare('SELECT id FROM users WHERE username = ? and pass = ?');
	$stmt->bind_param('ss', $_POST['username'], sha1($_POST['password']));
	$stmt->execute();
	$stmt->store_result();
	
	if($stmt-> num_rows > 0) {
		echo 'Successfully logged in';
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $_POST['username'];
		//header('Location: index.php');
		
	} else {
		header('Location: login_failed.php');
	}

	$conn->close();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<title>Logged In</title>
	</head>
	<body>
	<center>
		<div>
			<h1>WELCOME! </h1>
			<a class = "buttons" href="buyerdash.php">Go to buyer dashboard &#129304</a><br><br><br>
			<a  class = "buttons"href="sellerdash.php">Go to seller dashboard &#129297</a><br><br><br>
			<a  class = "buttons"href="admindash.php">Go to admin dashboard &#129488</a><br><br><br>
		</div>
	</center>
	</body>
</html>