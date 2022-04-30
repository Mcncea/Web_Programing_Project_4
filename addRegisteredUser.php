<?php
include("common.php");
session_start();

	if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['fname'], $_POST['lname'])) {
		exit('Please fill the form to complete registration');
	}

	if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['fname']) || empty($_POST['lname'])) {
		exit('Please fill all the fields');
	}
	$conn = sql_connect();
	createTables($conn);
	$stmt = $conn->prepare('SELECT id, pass, firstname, lastname, email FROM users WHERE username = ?');
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	
	if($stmt-> num_rows > 0) {
		echo 'User already registered';
	} else {
		$stmt = $conn->prepare('INSERT INTO users (username, pass, firstname, lastname, email) VALUES (?, ?, ?, ?, ?)');
		$stmt->bind_param('sssss', $_POST['username'], sha1($_POST['password']), $_POST['fname'], $_POST['lname'], $_POST['email']);
		$stmt->execute();
		session_start();
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $_POST['username'];
		echo 'User successfully created!';
		header('Location: index.php');
	}
	
	$conn->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<meta charset="utf-8">
		<title>Register</title>
	</head>
	<body>
	<center>
		<div>
			<h1>Registration Successful</h1>
			<a href="buyerdash.php">Go to buyer dashboard</a><br>
			<a href="sellerdash.php">Go to seller dashboard</a><br>
			<a href="admindash.php">Go to admin dashboard</a><br>
		</div>
	</center>
	</body>
</html>