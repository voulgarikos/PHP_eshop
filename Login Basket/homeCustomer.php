<html>
	<head>
		<title> Select Products </title>
		<script type='text/javascript'>
		function addProduct() {
			var myBasket = document.getElementById("marketBasket");  
			var row = myBasket.insertRow(myBasket.rows.length - 1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			cell1.innerHTML="<select name='product" + (myBasket.rows.length-2) + "' id='product" + (myBasket.rows.length-2) + "'><option value='milk'> milk </option><option value='coca cola'> coca cola </option><option value='beer'> beer </option></select>";
			cell2.innerHTML="<input type='number' id='quantity" + (myBasket.rows.length-2) +  "' name='quantity" + (myBasket.rows.length-2) + "'>";
			cell3.innerHTML="<img src='./img/add.png' width='25' onclick='addProduct();'>";
			cell4.innerHTML="<img src='./img/remove.png' width='25'>";
		}
		</script>
	</head>
	<body>
	<form action='finalizeSale.php' method='post'>
		<table id='marketBasket'>
			<tr>
				<th> Product </th>
				<th> Quantity </th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>
					<select name='product1' id='product1'> <--!dropdown list-->
						<option value='milk'> milk </option>
						<option value='coca cola'> coca cola </option>
						<option value='beer'> beer </option>
					</select>
				</td>
				<td> <input type='number' id='quantity1' name='quantity1'></td>
				<td> <img src='./img/add.png' width='25' onclick="addProduct();"></td>
				<td> <img src='./img/remove.png' width='25'></td>
			</tr>
			<tr>
				<td colspan='4' align='center'>
					<input type='submit' value='Proceed to Checkout'>
				</td>
			</tr>
		</table>
	</body>
</html>
