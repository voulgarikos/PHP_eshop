<?php
    //connection to database
	$link = mysqli_connect("localhost","root","","eshop1");
	//check if the connection is established correctly
	if (mysqli_connect_errno()){
		echo "<h1 style='color: red'> connection error </h1>";
		exit;
	}
	// Retrieve local variables from the GET array (previous from data)
	$id = $_GET['pid'];
	
	//build query of the form: 
	//update products set id=4, name = 'Leffe', quantity=8, description='Leffe Brown' where id=3
	$sql = "Select * from products where id=". $id; 
	// Testing statement for checking the syntax of the query: echo $sql;
	mysqli_query($link, $sql);
	
	$results = mysqli_query($link, $sql);
	
	//Fetch the details of the product
	$row=mysqli_fetch_assoc($results);
	$name = $row['Name'];
	$q = $row['Quantity'];
	$desc = $row['Description'];
?>
<html>
	<head>
		<title> Update Product </title>
	</head>
	<body>
	<!-- create a form for sending Data to updateItem.php (responsible for storing in the DB) -->
		<form action='updateProduct.php?id_old=<?php echo $id;?>' method='POST'>
			<table>
				<tr>
					<th> ID </th>
					<th> Name </th>
					<th> Quantity </th>
					<th> Description </th>
				</tr>
			<tr>
				<td> <input type='number' name='id' id='id' value='<?php echo $id;?>' /></td>
				<td> <input type='text' name='name' id='name' value='<?php echo $name;?>' /></td>
				<td> <input type='number' name='quantity' id='quantity' value='<?php echo $q;?>' /></td>
				<td> <input type='text' name='desc' id='desc' value='<?php echo $desc;?>' /></td>
			</tr>
			<tr>
				<td colspan='4'> <input type='submit' value='Update Product'> </td>
			</tr>
		</table>
		</form>
	</body>
</html>