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
				<label>
				<input type="text" name="fname" placeholder="First Name" id="fname" required>
				</label>
				<br><br>
				<label>
				<input type="text" name="lname" placeholder="Last Name" id="lname" required>
				</label>
				<br><br>
				<label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				</label>
				<br><br>
				<label>
				<input type="text" name="email" placeholder="Email" id="email" required>
				</label>
				<br><br>
				<label>
				<input type="password" name="passwd" placeholder="Password" id="pw" required>
				</label>
				<br><br>
				<input type="submit" value="Register">
			</form>
			<a href='login.php'>Alread registered? Log in</a>
		</div>
	</center>
	</body>
</html>