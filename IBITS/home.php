<?php 
session_start();

if (isset($_SESSION['account_StudentNumber']) && isset($_SESSION['account_Email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel= "stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "dropdown">
		<nav>
			<a href="home-index.php"><img class= "logo" src="images/logo.png"></a>
			<ul>
			<li><a href="home-index.php">Home</a></li>
			<li><a href="home-about.php">About</a></li>
			<li><a href="home-news.php">News</a></li>
			<li><a href="home.php"><?php echo $_SESSION['account_FirstName']; ?> <i class= "fas fa-caret-down"></i></a>
				<ul>
				<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
			</ul>
		</nav>
	</div>

	<h2>Welcome to the Fam, <?php echo $_SESSION['account_FirstName']; ?>!</h2>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>