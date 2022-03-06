<?php
	//connection to database
	$link = mysqli_connect("localhost","root","","eshop1");
	//check if the connection is established correctly
	if (mysqli_connect_errno()){
		echo "<h1 style='color: red'> connection error </h1>";
		exit;
	}
	//retrieve id of product to be deleted from the GET array
	$id = $_GET['id'];
	
	//build query of the form: delete from products where id=1
	$sql = "delete from products where id=" . $id;
	// Testing statement for checking the syntax of the query: echo $sql;
	mysqli_query($link, $sql);
	header("location:home.php");
?>