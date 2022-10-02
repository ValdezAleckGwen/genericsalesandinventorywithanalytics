<?php 
include 'adddata.php';
include('database_connection.php');



	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

	$poquantity = $_POST['po_quantity'][$count];
	$itemquantity = $_POST['item_quantity'][$count];

	echo $itemquantity;
	echo "\n";
	echo $poquantity;
	echo "\n";
	$quantity = $itemquantity - $poquantity;
	echo $quantity;
	echo "\n";

	

	



	}





?>