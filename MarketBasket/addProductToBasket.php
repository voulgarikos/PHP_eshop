<?php
	session_start();
	include "ProductList.php";

	$pid = $_GET['id'];
	$quantity = $_POST['qnty'];
	
	//create a list of available products
	$availableProducts = new ProductList();
	//Load available products from DB
	$availableProducts->load();
	//Find the product in the List
	$prod = $availableProducts->find($pid);
	$prod->setQuantity($quantity);
	
	//Create an empty market basket
	$marketBasket = new ProductList();
	//load the saved market basket
	if (isset($_SESSION['mybasket'])){
		$basket = $_SESSION['mybasket'];
		$marketBasket = unserialize($basket);
	
	}
	
	$marketBasket->addProduct($prod);
	$basket = serialize($marketBasket);
	$_SESSION['mybasket'] = $basket;
	
	header("location: index.php");
?>