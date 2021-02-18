<?php 
session_start();

if (isset($_SESSION['account_StudentNumber']) && isset($_SESSION['account_Email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/page-icon.ico" type="image/x-icon">
	<title>IBITS | Profile</title>
	<link rel="stylesheet" type="text/css" href="style-profile.css">
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

	<div class = "welcome1">
	<h2>Welcome to the Fam, <?php echo $_SESSION['account_FirstName']; ?>!</h2>
	</div>

	<div class = "wrapper">
		
		<div class = "card">
			<div class = "ProfilePic">
			<img src ="images/sample.png" id="Profile_image">
			<input type="file" id="file">
			<label for="file" id="uploadBtn"> Choose Photo</label>
			<a href="Camera.php"> Take A Picture! </a>			
			<div class="info">
				<p><?php echo $_SESSION['account_StudentNumber']; ?></p>
				<p><?php echo $_SESSION['account_LastName']; ?>, <?php echo $_SESSION['account_FirstName']; ?> <?php echo $_SESSION['account_MiddleName']; ?></p>
				<p><?php echo $_SESSION['account_Section']; ?>  <?php echo $_SESSION['account_Year']; ?> </p>
			</div>
				</div> 
			</div>
		</div>

		<script src="profile.js"></script>





</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>