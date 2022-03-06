<?php
	class TaxPayer {
		private $id;
		private $name;
		private $occupation;
		private $income;
		private $tax_office;
		
		function __construct($i, $n, $d, $p, $q){
			$this->id=$i;
			$this->name=$n;
			$this->occupation=$occ;
			$this->income=$inc;
			$this->tax_office=$taxof;
		}
		
		function printInTR($action) {
			echo "<td>" . $this->name . "</td>";
			echo "<td>" . $this->occupation . "</td>";
			echo "<td>" . $this->income . "</td>";
			//if (strcmp($action, "add")==0) {
			//echo "<form action='addProductToBasket.php?id=" . $this->id . "' method='post'>";
			//echo "<td> <input type='number' style='width:60px' name='qnty' value='1'></td>";
			//echo "<td> <input type='submit' value='Add to Basket'></td>";
			//echo "</form>";
		}
		
	}
?>