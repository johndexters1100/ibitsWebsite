<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/icon.png" type="image/x-icon">
	<title>IBITS | Homepage</title>
	<link rel= "stylesheet" href= "loginstyle.css">
	<link rel= "stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "dropdown">
		<nav>
			<a href="index.php"><img class= "logo" src="images/logo.png"></a>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Account <i class= "fas fa-caret-down"></i></a>
				<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				</ul>
			</li>
			</ul>
		</nav>
	</div>

	<div class = "header">
		<h2>Login</h2>
	</div>
	
	<form method= "post">
		<div class = "input-group">
			<label>Email</label>
			<input type= "text" name= "email">
		</div>

		<div class = "input-group">
			<label>Password</label>
			<input type= "password" name= "password1">
		</div>
		<div class = "input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>Don't have an account yet? <a href="register.php">Register Now</a></p>

	</form>

</body>
</html>