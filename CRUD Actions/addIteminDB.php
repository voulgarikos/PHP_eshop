<?php
    //connection to database
	$link = mysqli_connect("localhost","root","","eshop1");
	//check if the connection is established correctly
	if (mysqli_connect_errno()){
		echo "<h1 style='color: red'> connection error </h1>";
		exit;
	}
	// Retrieve local variables from the POST array (previous from data)
	$id = $_POST['pid'];
	$name = $_POST['pname'];
	$q = $_POST['quantity'];
	$desc = $_POST['desc'];
	//build query of the form: insert into products value(2, 'Cheese', 50, 'Laveti Cheese')";
	$sql = "insert into products value(". $id .", ' " . $name . "', " . $q . ", '" . $desc . "')";
	// Testing statement for checking the syntax of the query: echo $sql;
	mysqli_query($link, $sql);
	header("location:home.php");
?>