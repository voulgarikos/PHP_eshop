<?php
	class Product {
		private $id;
		private $name;
		private $description;
		private $price;
		private $quantity;
		
		function __construct($i, $n, $d, $p, $q){
			$this->id=$i;
			$this->name=$n;
			$this->description=$d;
			$this->price=$p;
			$this->quantity=$q;
		}
		
		function printInTR($action) {
			echo "<td>" . $this->name . "</td>";
			echo "<td>" . $this->description . "</td>";
			echo "<td>" . $this->price . "</td>";
			if (strcmp($action, "add")==0) {
			echo "<form action='addProductToBasket.php?id=" . $this->id . "' method='post'>";
			echo "<td> <input type='number' style='width:60px' name='qnty' value='1'></td>";
			echo "<td> <input type='submit' value='Add to Basket'></td>";
			echo "</form>";
		}
		if (strcmp($action, "remove")==0) {
			echo "<td> " . $this->quantity . "</td>";				
				echo "<form action='removeProductToBasket.php?id=" . $this->id . "' method='post'>";
				echo "<td> <input type='submit' value='Delete Basket'> </td>";
				echo "</form>";
		}
		}
		function getID() {
			return $this->id;
		}
		function getCost() {
			return $this->price * $this->quantity;
		}
		function setQuantity($q) {
			$this->quantity = $q;
		}
		function getQuantity() {
			return $this->quantity;
		}
		
		function addQuantity($q1) {
			$this->quantity = $this->quantity + $q1;
		}
	}