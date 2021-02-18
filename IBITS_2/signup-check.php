<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['studentnumber'])  && isset($_POST['password1']) && isset($_POST['password2'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$snumber = validate($_POST['studentnumber']);
	$pass = validate($_POST['password1']);
	$cpass = validate($_POST['password2']);

	$user_data = 'studentnumber='. $snumber ;



	if($pass !== $cpass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM tbl_accounts WHERE account_StudentNumber='$snumber' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The studentnumber is taken try another&$user_data");
	        exit();
		}
		else {
           $sql2 = "INSERT INTO `tbl_accounts`(`account_StudentNumber`, `account_LastName`, `account_FirstName`, `account_MiddleName`, `account_Section`, `account_Year`, `account_Email`, `account_ContactNumber`, `account_Address`, `account_Birthday`, `account_Age`, `account_Password`) 
			VALUES ('$_POST[studentnumber]','$_POST[lastname]','$_POST[firstname]','$_POST[middlename]','$_POST[section]','$_POST[year]','$_POST[email]','$_POST[contactnumber]' ,'$_POST[address]','$_POST[birthday]' ,'$_POST[age]' ,'$_POST[password1]')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}