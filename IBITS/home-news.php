<?php 
session_start();

if (isset($_SESSION['account_StudentNumber']) && isset($_SESSION['account_Email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/page-icon.ico" type="image/x-icon">
	<title>IBITS | News </title>
	<link rel="stylesheet" type="text/css" href="style-news.css">
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
	
	</div>
	<section>
		<div class = "leftBox">
			<div class = "content">
				<h1>IBITS News Bits</h1>
				<p>Here are some news bits related to Institute of Bachelors
				in Information Technology Studies and also to our Polytechnic
				University of the Philippines! </p>
			</div>
		</div>
		<div class = "news">
			<ul>
				<li>
					<div class = "time">
						<h2>08<br><span>February</span></h2>
					</div>
					<div class="details">
						<h3>Art for others’ sake</h3>
						<p>Antonitte Jane Magsombol, an Information Technology student from the Polytechnic University of the Philippines (PUP) in Binan, Laguna, thought of opening art commissions to help her fellow students....</p>
						<a href="https://mb.com.ph/2021/02/08/art-for-others-sake/"> View Details</a>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class = "time">
						<h2>06<br><span>February</span></h2>
					</div>
					<div class="details">
						<h3>OVPAA ADVISORY 1 S. 2021</h3>
						<p>Following the petition filed by the Student Council Assembly and the Office of the Student Regent to extend the submission of the requirements and instructional materials... </p>
						<a href="https://www.facebook.com/OSRPUP/photos/a.136820234444196/275706763888875/"> View Details</a>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class = "time">
						<h2>20<br><span>January</span></h2>
					</div>
					<div class="details">
						<h3>Protest erupts in PUP after Duterte Youth calls to scrap DND-PUP accord</h3>
						<p>A protest erupted on Wednesday at the Polytechnic University of the Philippines (PUP) campus..</p>
						<a href="https://newsinfo.inquirer.net/1386103/watch-protest-erupts-in-pup-after-duterte-youth-calls-to-scrap-dnd-pup-accord"> View Details</a>
					</div>
					<div style="clear: both;"></div>
				</li>
			</ul>
		</div>			
	</section>

</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>