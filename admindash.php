<?php 
	session_start();
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
			<h1>Register</h1>
			<form action="addRegisteredUser.php" method="post">
				<br><br>
				<input type="text" name="fname" placeholder="First Name" id="fname" required>
				<br><br>
				<input type="text" name="lname" placeholder="Last Name" id="lname" required>
				<br><br>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<br><br>
				<input type="text" name="email" placeholder="Email" id="email" required>
				<br><br>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<br><br>
				<input type="submit" value="Register">
			</form>
		</div>
	</center>
	</body>
</html>