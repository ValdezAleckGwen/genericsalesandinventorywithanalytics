<?php
	include '../actions/adddata.php';
	include('../actions/database_connection.php');


	$deliveryorderquery = "
	SELECT total FROM tblpurchaseorderitem WHERE id = :purchaseorderitemid;
	";




	$itemtotal = 0;
	$purchaseorderitemid = 'PI-0000001';


	$statement  = $connect->prepare($deliveryorderquery);
	$statement->execute([
		':purchaseorderitemid' => $purchaseorderitemid
	]);
	$pos = $statement->fetchAll();

	foreach ($pos as $po) {
		$itemtotal = $po[0];
	}

	echo $itemtotal;

 ?>