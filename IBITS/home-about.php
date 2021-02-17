<?php 
session_start();

if (isset($_SESSION['account_StudentNumber']) && isset($_SESSION['account_Email'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/page-icon.ico" type="image/x-icon">
	<title>IBITS | About</title>
	<link rel= "stylesheet" href= "style-about.css">
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

	<div class = "hero">
		<h1> Creator of this Page </h1>
		<div class="container">
			<div class="indicator">
				<span class="btn active"></span>
				<span class="btn"></span>
				<span class="btn"></span>
				<span class="btn"></span>
				<span class="btn"></span>
			</div>
		<div class= "testimonial">
		<div class = "slide-row" id="slide">
			<div class= "slide-col">
				<div class= "user-text">
					<p>John Dexter Satsatin, 3rd year in BS Information Technology of
						Polytechnic University of the Philippines Biñan Campus.</p>
						<h3>Satsatin</h3>
						<p>IBITS</p>
				</div>
				<div class= "user-img">
					<img src= "images/about/1.jpg">
				</div>
			</div>

			<div class= "slide-col">
				<div class= "user-text">
					<p>Miguel Carlos Gellaco, 3rd year in BS Information Technology of
						Polytechnic University of the Philippines Biñan Campus.</p>
						<h3>Gellaco</h3>
						<p>IBITS</p>
				</div>
				<div class= "user-img">
					<img src= "images/about/2.jpg">
				</div>
			</div>

			<div class= "slide-col">
				<div class= "user-text">
					<p>Christian Ace Lumagui, 3rd year in BS Information Technology of
						Polytechnic University of the Philippines Biñan Campus.</p>
						<h3>Lumagui</h3>
						<p>IBITS</p>
				</div>
				<div class= "user-img">
					<img src= "images/about/Aceh.jpg">
				</div>
			</div>

			<div class= "slide-col">
				<div class= "user-text">
					<p>Vincent Seguera, 3rd year in BS Information Technology of
						Polytechnic University of the Philippines Biñan Campus.</p>
						<h3>Seguera</h3>
						<p>IBITS</p>
				</div>
				<div class= "user-img">
					<img src= "images/about/4.jpg">
				</div>
			</div>

			<div class= "slide-col">
				<div class= "user-text">
					<p>Christian Desquitado, 3rd year in BS Information Technology of
						Polytechnic University of the Philippines Biñan Campus.</p>
						<h3>Desquitado</h3>
						<p>IBITS</p>
				</div>
				<div class= "user-img">
					<img src= "images/about/5.jpg">
				</div>
			</div>
		</div>
		</div>
		</div>
	</div>

	<script>
		var btn = document.getElementsByClassName("btn");
		var slide = document.getElementById("slide");

		btn[0].onclick = function(){
			slide.style.transform = "translateX(0px)";
			for(i=0;i<5;i++){
				btn[i].classList.remove("active");
			}
			this.classList.add("active");
		}
		btn[1].onclick = function(){
			slide.style.transform = "translateX(-800px)";
			for(i=0;i<5;i++){
				btn[i].classList.remove("active");
			}
			this.classList.add("active");
		}
		btn[2].onclick = function(){
			slide.style.transform = "translateX(-1600px)";
			for(i=0;i<5;i++){
				btn[i].classList.remove("active");
			}
			this.classList.add("active");
		}
		btn[3].onclick = function(){
			slide.style.transform = "translateX(-2400px)";
			for(i=0;i<5;i++){
				btn[i].classList.remove("active");
			}
			this.classList.add("active");
		}
		btn[4].onclick = function(){
			slide.style.transform = "translateX(-3200px)";
			for(i=0;i<5;i++){
				btn[i].classList.remove("active");
			}
			this.classList.add("active");
		}
	</script>

</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>