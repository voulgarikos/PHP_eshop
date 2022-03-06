<?php
	session_start();
	include "ProductList.php"; //include class ProductList
	
	//Create a list of available products
	$availableProducts = new ProductList();
	//Load available products from DB
	$availableProducts->load();
	//Show the table in HTML
	echo "<h2> Available Products </h2>";
	$availableProducts->show("add");
	
	//Create an empty market basket
	$marketBasket = new ProductList();
	//load the saved market basket
	if (isset($_SESSION['mybasket'])){
		$basket = $_SESSION['mybasket'];
		$marketBasket = unserialize($basket);
	}
	//show the market basket in HTML
	echo "<h2> Market Basket </h2>";
	$marketBasket->show("remove");
	





?>