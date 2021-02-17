<?php

$sname= "localhost:3308";
$unmae= "root";
$password = "";

$db_name = "db_ibits";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}