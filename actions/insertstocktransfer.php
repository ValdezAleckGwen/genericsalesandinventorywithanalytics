<?php
// minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{

	//create main stock transfer
	
	$stocktransferid = createId('tblstocktransfer');
	$sourcebranch = $_POST['source_branch'];
	$destinationbranch = $_POST['destination_branch'];


	$audit = 'A-0000001';

	// create a sale
	$salesquery = "
	INSERT INTO tblstocktransfer (id, source, destination, auditid) VALUES (:id, :source, :destination, :auditid)
	";

	$statement  = $connect->prepare($salesquery);
	$statement->execute([
		':id' => $stocktransferid,
		':source' => $sourcebranch,
		':destination' => $destinationbranch,
		':auditid' => $audit,

	]);

	

	$result = $statement->fetchAll();

	//create create stock transfer items
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tblsalesitem 
        (id, salesid, productid, price, quantity, total) 
        VALUES (:salesitemid, :salesid, :item_id, :item_price, :item_quantity, :item_total)
		";

		$salesitemid = createId('tblsalesitem'); //incrementing sales item id
		$price = preg_replace('/[^0-9]/s', "",$_POST["item_price"][$count]);
		$totalprice = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);
		$item_id = $_POST["item_id"][$count];
		$item_quantity = $_POST["item_quantity"][$count];
		$statement = $connect->prepare($query);
		
		$statement->execute(
			array(
				':salesitemid'	=>	$salesitemid,
				':salesid'		=>	$salesid,
				':item_id'		=>	$item_id,
				':item_price'	=>	$price,
				':item_quantity'=>	$item_quantity,
				':item_total'	=>	$totalprice
			)
		);

	}

	$result = $statement->fetchAll();
	
	//either add to inventory or create new inventory
	

	if(isset($result))
	{
		echo 'ok';
	}

} else {
	echo 'ok';
}

?>
