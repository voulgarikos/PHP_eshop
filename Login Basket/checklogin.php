<?php
	$username = $_POST["uname"]; //2 μεταβλητές usename password δέχονται τις τιμές της φορμας
	$password = $_POST["pass"];	//
	
	//echo $username . " " . $password;
	
	if ((strcmp($username, "admin")==0) && (strcmp($password, "admin")==0)) {
		header("location:homeAdmin.php");
	} else if ((strcmp($username, "customer")==0) && (strcmp($password, "customer")==0)){
		header("location:homeCustomer.php");
	} else {
		header("location:index.php?message=Wrong Login"); //μεταφέρουμε στην index μια μεταβλητή
															//message με περιεχόμενο "wrong login"
	}
	
	

?>