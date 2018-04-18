<!DOCTYPE html>
<html>
<head>
	<title>BooKing Customer Sign Up</title>
</head>
<body>

<p style="text-align:center;">
	<a href="http://localhost/myfiles/loginboot/index2.php" target="_blank">
	<img src="booking1.png" alt="Logo"
    style="width:500px;height:300px;">
</a>
</p>

	BooKing Customer Sign Up
<form action="includes/signup.inc.php" method="post">
	<input type="text" name="first" placeholder="Firstname">
	<br>
	<input type="text" name="last" placeholder="Lastname">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="uid" placeholder="Username">
	<br>
	<input type="password" name="pwd" placeholder="Password">
	<br>
	<button type="submit" name="submit">Sign up</button>
</form>
		

</body>
</html>
