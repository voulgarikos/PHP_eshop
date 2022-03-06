<?php
	session_start();
	$name = $_SESSION["name"];
	
	if (isset($_SESSION["name"]) == false) {
		header("location:index.php");
	}
?>
<html>
	<head> 
	<title> eShop - Welcome Page </title>
	</head>
	<body>
		<h1> Welcome <?php echo $name;?>, <a href='logout.php'> Logout </h1>
		<table>
			<tr>
				<th> ID </th>
				<th> Name </th>
				<th> Quantity </th>
				<th> Description </th>
			</tr>
			<?php
			//connection to database
				$link = mysqli_connect("localhost","root","","eshop1");
				//check if the connection is established correctly
				if (mysqli_connect_errno()){
					echo "<h1 style='color: red'> connection error </h1>";
					exit;
				}
				// Set the read query from table products
				$sql = "Select * from products";
				// Execute the query
				$results = mysqli_query($link, $sql);
				
				//Fetch the rows one by one
				while ($row=mysqli_fetch_assoc($results)) {
					$id = $row['ID'];
					$name = $row['Name'];
					$q = $row['Quantity'];
					$desc = $row['Description'];
					
					//Print each row to HTML table
				echo "<tr>";
					echo "<td>" . $id . "</td>";
					echo "<td>" . $name . "</td>";
					echo "<td>" . $q . "</td>";
					echo "<td>" . $desc . "</td>";
					echo "<td> <a href='deleteItem.php?id=" . $id ."' > Delete </a> </td>";
					echo "<td> <a href='updateItem.php?id=" . $id . "'> Update </a> </td>";
				echo "</tr>";
				}
				?>
				
		</table>
		<!-- A link that opens a new form for creating a product -->
		<a href='createItem.php'> Add Product </a>
	</body>
</html>