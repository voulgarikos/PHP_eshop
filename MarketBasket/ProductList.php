<?php
	include "Product.php";	

    class ProductList {
		var $products = array();
		
		
		function load() {
				//connection to database
				$link = mysqli_connect("localhost","root","","market1");
				//check if the connection is established correctly
				if (mysqli_connect_errno()){
					echo "<h1 style='color: red'> connection error </h1>";
					exit;
				}
				// Set the read query from table products
				$sql = "Select * from product";
				// Execute the query
				$results = mysqli_query($link, $sql);
				
				//Fetch the rows one by one
				while ($row = mysqli_fetch_assoc($results)) {
					// Get the values for each product
					$id =$row['id'];
					$name =$row['name'];
					$description =$row['description'];
					$price =$row['price'];
					$quantity =$row['quantity'];
					//Create an object of type product based on the previous values
					$p = new Product($id, $name, $description, $price, $quantity);
					// Add the object product in the array stored as an attribute
					$this->products[count($this->products)] = $p;
				}
			}
		
		function show($action) { //shows the constant table in HTML
			echo "<table border = '1'>
				<tr valign='center' height='30px'>
					<th> Name </th>
					<th> Description </th>
					<th> Price </th>
					<th> Quantity </th>
					<th> </th>
				</tr>";
				
			for ($i=0; $i<count($this->products); $i++){ //shows the products included in the table
					echo "<tr valign='center' height='30px'>";
					$this->products[$i]->printInTR($action);
					echo "</tr>";
			}
			
			echo "	</table>";
			if (strcmp($action,"remove")==0){
				echo "<h2> Total Cost: " . $this->calculateCost() . "euros </h2>";
			}
		}
		function calculateCost(){
			$cost = 0;
			for ($i=0; $i<count($this->products); $i++){
				$cost = $cost + $this->products[$i]->getCost;
			}
			return $cost;
		}	
			
			
		function find($pid) {
			for ($i=0; $i<count($this->products); $i++) {
				if ($pid == $this->products[$i]->getID()) {
					$pid = $this->products[$i];
					break;
				}
	
			}
		return $pid;
		}
		function addProduct($pr){
			$old_p = $this->find($pr->getID());
			if (isset($old_p)) {
				$pr->addQuantity($old_p->getQuantity());
				$this->removeProduct($old_p);
				$this->products[count($this->products)] = $pr;
			} else {
				$this->products[count($this->products)] = $pr;
			}
			
		}
		function removeProduct($pid){
			$temp = array();
			for ($i=0; $i<count($this->products); $i++) {
				if ($this->products[$i]->getID() != $pid) {
					$temp[count($temp)] = $this->products[$i]; 
				}
			}
			$this->products = $temp;
		}


	}
?>