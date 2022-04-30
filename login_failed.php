<!DOCTYPE html>
<?php 
	session_start();
?>
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
			<h6 class='failed'>Username or password was wrong, Please try again</h6>
			<form action="loginSuccess.php" method="post">
				<br>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<br><br>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<br><br>
				<input type="submit" value="Login">
			</form>
			<br><br>
			<a href='register.php'>Create new account</a>
		</div>
	</center>
	</body>
</html>