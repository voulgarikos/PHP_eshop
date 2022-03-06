<?php
	$username = $_POST["uname"]; //2 μεταβλητές usename password δέχονται τις τιμές της φορμας
	$password = $_POST["pass"];	//
	
	//echo $username . " " . $password;
	
	//connection to database
	$link = mysqli_connect("localhost","root","","eshop1");
	//check if the connection is established correctly
	if (mysqli_connect_errno()){
		echo "<h1 style='color: red'> connection error </h1>";
		exit;
	}
	// Retrieve local variables from the POST array (previous from data)
	$username = $_POST["uname"]; //2 μεταβλητές usename password δέχονται τις τιμές της φορμας
	$password = $_POST["pass"];	//
	
	//build query to check if the credentials are valid
	$sql = "Select * from users where uname='" . $username ."' and pass='" . $password . "'"; 
	// Testing statement for checking the syntax of the query: echo $sql;
	
	$results = mysqli_query($link, $sql);
	$found = false;
	
	while ($row = mysqli_fetch_assoc($results)) {
		$found = true;
		$name = $row['name'];
		$type = $row['type'];
	}
	if ($found) {
		//redirects to admin homepage
		session_start();
		$_SESSION['name'] = $name;
		header("location:home.php?type=". $type);
	} 
	 else {
		//redirects to index, passing error message through GET
		header("location:index.php?message=Wrong Login"); //μεταφέρουμε στην index μια μεταβλητή
															//message με περιεχόμενο "wrong login"
	}
	
	

?>