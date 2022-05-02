<?php 
	session_start();
	// if (isset($_SESSION['passwd']))
	// echo 'Password: ' .$_SESSION['passwd'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
	<center>
		<div>
			<h1>Login</h1>
			<h6 id='failed'></h6>
			<form action="loginSuccess.php" method="post">
				<br><br>
				<label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				</label>
				<br><br>
				<label>
				<input type="password" name="passwd" placeholder="Password" id="pw" required>
				</label>
				<br><br>
				<input type="submit" value="Login">
			</form>
			<br><br>
			<a href='register.php'>Create new account</a>
		</div>
	</center>
	</body>
</html>