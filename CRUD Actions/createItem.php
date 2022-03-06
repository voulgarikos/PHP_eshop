<html>
	<head>
		<title> Create Product </title>
	</head>
	<body>
	<!-- create a form for sending Data to addIteminDB.php (responsible for storing in the DB) -->
		<form action='addIteminDB.php' method='POST'>
			<table>
				<tr>
					<th> ID </th>
					<th> Name </th>
					<th> Quantity </th>
					<th> Description </th>
				</tr>
			<tr>
				<td> <input type='number' name='pid' id='pid' /></td>
				<td> <input type='text' name='pname' id='pname' /></td>
				<td> <input type='number' name='quantity' id='quantity' /></td>
				<td> <input type='text' name='desc' id='desc' /></td>
			</tr>
			<tr>
				<td colspan='4'> <input type='submit' value='Add Product'> </td>
			</tr>
		</table>
		</form>
	</body>
</html>