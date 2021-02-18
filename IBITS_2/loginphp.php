<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password1'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password1']);

	if (empty($uname)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM tbl_accounts WHERE account_Email='$uname' AND account_Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['account_Email'] === $uname && $row['account_Password'] === $pass) {
            	$_SESSION['account_Email'] = $row['account_Email'];
            	$_SESSION['account_FirstName'] = $row['account_FirstName'];
            	$_SESSION['account_StudentNumber'] = $row['account_StudentNumber'];
            	$_SESSION['account_LastName'] = $row['account_LastName'];
            	$_SESSION['account_MiddleName'] = $row['account_MiddleName'];
            	$_SESSION['account_Section'] = $row['account_Section'];
            	$_SESSION['account_Year'] = $row['account_Year'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}