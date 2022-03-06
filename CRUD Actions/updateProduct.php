<?php
    //connection to database
	$link = mysqli_connect("localhost","root","","eshop1");
	//check if the connection is established correctly
	if (mysqli_connect_errno()){
		echo "<h1 style='color: red'> connection error </h1>";
		exit;
	}
	// Retrieve local variables from the POST and GET array (previous from data)
	$old_id = $_GET['pid_old'];
	$id = $_POST['pid'];
	$name = $_POST['pname'];
	$q = $_POST['quantity'];
	$desc = $_POST['desc'];
	//build query of the form:
	//update products set id=4, name=Leffe, quantity=8, description='Leffe Brown' where id=3
	$sql = "update products set id=" . $id . ", name='" . $name . "', quantity=" . $q . ", description='". $desc . "' where id=" . $old_id;
	// Testing statement for checking the syntax of the query: 
	//echo $sql;
	mysqli_query($link, $sql);
	header("location:home.php");
?>