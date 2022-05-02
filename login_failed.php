<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
	<center>
		<div class = "form">
			<h1>LOGIN</h1>
      <h6 class='failed'>Username or password was wrong, Please try again</h6>
			<form action="login.php" method="post">
				<br><br>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<br><br>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<br><br>
				<input class = "buttons" type="submit" value="Login">
        	<br><br>
			</form>
			<br><br>
			Don't have an account? <a href='register.php'>Create new account</a>
		</div>
	</center>
	</body>
</html>