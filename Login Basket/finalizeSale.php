<?php
	$num_of_products = count($_POST) / 2;
?>

<html>
	<head>
		<title> Checkout </title>
	</head>
	<body>
		<table border='2'>
			<tr>
				<th> Product </th>
				<th> Quantity </th>
				<th> Cost </th>
			</tr>
			<?php
			$total_cost = 0;
			for ($i=1; $i<=$num_of_products; $i++){
				$p = $_POST['product'. $i];
				$q = $_POST['quantity'. $i];
			if (strcmp($p, "milk")==0) {
				$cost = 0.95 * $q;
			}
			else if (strcmp($p, "cola")==0) {
				$cost = 1.20 * $q;
			}
			else {
				$cost = 3.50 * $q;
			}
			$total_cost = $total_cost + $cost;
			echo "<tr>";
				echo "<td> " . $p. " </td>";
				echo "<td> " . $q. " </td>";
				echo "<td> " . $cost. " </td>";
			echo "</tr>";
			}
			?>
			<tr>
				<td colspan='2'> <b> Total Cost </b> </td>
				<td> <?php echo $total_cost; ?></td>
		</table>
	</body>
</html>