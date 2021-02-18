<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/page-icon.ico" type="image/x-icon">
	<title>IBITS | Homepage</title>
	<link rel= "stylesheet" href= "style-register.css">
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
	
	<form action="signup-check.php" method= "post">
		<div class = "input-group">
			<label>Student Number</label>
			<?php 
			if (isset($_GET['studentnumber'])) { ?>
			<input type= "text" 
				name= "studentnumber" 
				placeholder="Student Number" 
				value="<?php echo $_GET['studentnumber']; ?>"
				required >
			 <?php }
			 else{ ?>
              <input type="text" 
                      name="studentnumber" 
                      placeholder="Student Number" required>
          <?php }	?>
		</div>
		<div class = "input-group">
			<label>Last Name</label>
			<?php 
			if (isset($_GET['lastname'])) { ?>
			<input type= "text" 
			name= "lastname" 
			required 
			placeholder="Last Name"
			value="<?php echo $_GET['lastname']; ?>">
			<?php }
			 else{ ?>
              <input type="text" 
                      name="lastname" 
                      placeholder="Last Name" required>
          <?php }	?>
		</div>
		<div class = "input-group">
			<label>First Name</label>
			<input type= "text" name= "firstname" placeholder="First Name" required>
		</div>
		<div class = "input-group">
			<label>Middle Name</label>
			<input type= "text" name= "middlename" placeholder="Middle Name" required>
		</div>
		<div class = "input-group">
			<label>Section</label>
			<input type= "text" name= "section" placeholder="Section" required>
		</div>
		<div class = "input-group">
			<label>Year Level</label>
			<input type= "text" name= "year" placeholder="Year Level" required>
		</div>
		<div class = "input-group">
			<label>Email</label>
			<input type= "email" name= "email" placeholder="Email" required>
		</div>
		<div class = "input-group">
			<label>Contact Number</label >
			<input type= "text" name= "contactnumber" placeholder="Contact Number" required>
		</div>
		<div class = "input-group">
			<label>Address</label>
			<input type= "text" name= "address" placeholder="Address" required>
		</div>
		<div class = "input-group">
			<label>Birthday</label>
			<input type= "date" name= "birthday" required> 
		</div>
		<div class = "input-group">
			<label>Age</label>
			<input type= "text" name= "age" placeholder="Age" required>
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type= "password" name= "password1" placeholder="Password" required>
		</div>
		<div class = "input-group">
			<label>Confirm Password</label>
			<input type= "password" name= "password2" placeholder="Confirm Password" required>
		</div>

		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

		<div class = "input-group">
			<button type="submit" class="btn">Register</button>
		</div>
		<p>Already have an account? <a href="login.php">Login Now</a></p>
	</form>

	

</body>
</html>