<?php
// minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{

	//create transfer
	$salesreturnid = $_POST['salesreturnid'];
	$salesid = $_POST['salesid'];

	$audit = 'A-0000001';

	// create a sale
	$salesquery = "
	INSERT INTO tblsalesreturn (id, salesid, auditid) VALUES (:id, :salesid, :auditid)
	";

	$statement  = $connect->prepare($salesquery);
	$statement->execute([
		':id' => $salesreturnid,
		':salesid' => $salesid,
		':auditid' => $audit

	]);

	

	$result = $statement->fetchAll();

	//create salesreturn items
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tblsalesreturnitem (id, salesitemid, quantity, totalprice) 
        VALUES (:id, :salesitemid, :quantity, :totalprice)
		";

		$statement  = $connect->prepare($query);
		$id = createId('tblsalesreturnitem'); //incrementing sales item id
		$salesitemid = $_POST["item_id"][$count];
		$price = preg_replace('/[^0-9]/s', "",$_POST["item_price"][$count]);
		$quantity = $_POST["item_quantity"][$count];
		$totalprice = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);

		
		$statement->execute(
			array(
				':id'				=>	$id,
				':salesitemid'		=>	$salesitemid,
				':quantity'			=>	$quantity,
				':totalprice'		=>	$totalprice
			)
		);

	}

	$result = $statement->fetchAll();
	
	//update the salesitem

		for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		UPDATE tblsalesitem SET quantity = :quantity, total = :total WHERE tblsalesitem.id = :id
		";

		$statement  = $connect->prepare($query);
		
		$id = $_POST["item_id"][$count];
		$quantity = $_POST["item_quantity"][$count];
		$total = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);

		$statement->execute(
			array(
				':id'		=>	$id,
				':quantity'	=>	$quantity,
				':total' 	=> $total
			)
		);

	}

	$result = $statement->fetchAll();

	//get the grantotal
	$query = "SELECT SUM(total) AS grandtotal from tblsalesitem WHERE tblsalesitem.salesid = :salesid
		";

		$statement  = $connect->prepare($query);
		

	$statement->execute([
		':salesid' => $salesid
	]);

	

	$results = $statement->fetchAll();

	$grandtotal = 0;

	foreach ($results as $result) {
		$grandtotal = $result['grandtotal'];
	}

	//get tax id
	$query = "SELECT tblsales.taxid AS taxid from tblsales WHERE tblsales.id = :salesid
		";

		$statement  = $connect->prepare($query);
		

	$statement->execute([
		':salesid' => $salesid
	]);

	

	$results = $statement->fetchAll();

	$taxid = 0;
	foreach ($results as $result) {
		$taxid = $result['taxid'];
	}


	$vattablesale = 0;
	$vat = 0;
	switch ($taxid) {
		case '1':
			$vattablesale = $grandtotal * 0.88;
			$vat = $grandtotal - $vattablesale;
			break;
		case '2':
			// code...
			break;
		case '2':
			// code...
			break;
		
		default:
			// code...
			break;
	}


	//update sales table
	$query = "UPDATE tblsales SET total = :total, vat = :vat, vattablesale = :vattablesale WHERE tblsales.id = :salesid;
		";

		$statement  = $connect->prepare($query);
		

	$statement->execute([
		':salesid' => $salesid,
		':total'    => $grandtotal,
		':vat'   => $vat,
		':vattablesale' => $vattablesale
	]);

	

	$results = $statement->fetchAll();








	

	if(isset($result))
	{
		echo 'ok';
	}

} else {
	echo 'ok';
}

?>
