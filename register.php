<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/icon.png" type="image/x-icon">
	<title>IBITS | Homepage</title>
	<link rel= "stylesheet" href= "style.css">
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
				<li><a href="#">Register</a></li>
				</ul>
			</li>
			</ul>
		</nav>
	</div>

<div class = "header">
		<h2>Register</h2>
	</div>
	
	<form method= "post">
		<div class = "input-group">
			<label>Student Number</label>
			<input type= "text" name= "studentnumber">
		</div>
		<div class = "input-group">
			<label>Last Name</label>
			<input type= "text" name= "lastname">
		</div>
		<div class = "input-group">
			<label>First Name</label>
			<input type= "text" name= "firstname">
		</div>
		<div class = "input-group">
			<label>Middle Name</label>
			<input type= "text" name= "middlename">
		</div>
		<div class = "input-group">
			<label>Year Level</label>
			<input type= "text" name= "year">
		</div>
		<div class = "input-group">
			<label>Email</label>
			<input type= "email" name= "email">
		</div>
		<div class = "input-group">
			<label>Contact Number</label>
			<input type= "text" name= "contactnumber">
		</div>
		<div class = "input-group">
			<label>Address</label>
			<input type= "text" name= "address">
		</div>
		<div class = "input-group">
			<label>Birthday</label>
			<input type= "date" name= "birthday">
		</div>
		<div class = "input-group">
			<label>Age</label>
			<input type= "text" name= "age">
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type= "password" name= "password1">
		</div>
		<div class = "input-group">
			<label>Confirm Password</label>
			<input type= "password" name= "password2">
		</div>
		<div class = "input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>Already have an account? <a href="login.php">Login Now</a></p>
	</form>

	<?php
		$DBHost = "localhost:3308";
		$DBUser = "root";
		$DBPass = "";
		$DBName = "db_ibits";
		
		$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

		if(!$conn){
		die("Connection failed: " . mysqli_error());
		}

		//REGISTER BUTTON
		if(isset($_POST['register'])!=''){
		$errZip = "";
		if($_POST['password1']!== $_POST['password2']){
		$errZip = "";
		echo "Password must be the same<br>";
		}
		if($_POST['studentnumber']=="" && 
			$_POST['lastname']=="" && 
			$_POST['firstname']=="" && 
			$_POST['middlename']=="" && 
			$_POST['address']=="" && 
			$_POST['year']=="" && 
			$_POST['email']== "" && 
			$_POST['contactnumber']== "" && 
			$_POST['address']== "" && 
			$_POST['birthday']== "" && 
			$_POST['age']== "" && 
			$_POST['password1']== ""){
		$errZip = "";
		echo "Fill all the field first<br>";
		}
		else {
		$sql = "INSERT INTO `tbl_accounts`(`account_StudentNumber`, `account_LastName`, `account_FirstName`, `account_MiddleName`, `account_Year`, `account_Email`, `account_ContactNumber`, `account_Address`, `account_Birthday`, `account_Age`, `account_Password`) 
			VALUES ('$_POST[studentnumber]','$_POST[lastname]','$_POST[firstname]','$_POST[middlename]','$_POST[year]','$_POST[email]','$_POST[contactnumber]' ,'$_POST[address]','$_POST[birthday]' ,'$_POST[age]' ,'$_POST[password1]')";
		$result = mysqli_query($conn,$sql);
		echo"<br>Your data has been recorded successfully!";
		}
		}
	?>

</body>
</html>