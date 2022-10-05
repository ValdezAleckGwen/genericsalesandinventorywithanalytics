<?php
//minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{

	$invenadjustmentid = $_POST['ia_number'];
	$branchid = $_POST['branch_id'];
	$audit = 'A-0000001';

	// create a delivery order
	$deliveryorderquery = "
	INSERT INTO tblinventoryadjustment (id, branchid, auditid) VALUES (:id, :branchid,  :audit)
	";

	$statement  = $connect->prepare($deliveryorderquery);
	$statement->execute([
		':id' => $invenadjustmentid,
		':branchid' => $branchid,
		':audit' => $audit
	]);

	

	$result = $statement->fetchAll();

	// try to consolidate in one loop 
	//create delivery order item
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tblinventoryadjustmentitem 
        (id, invadjid, productid,  quantity) 
        VALUES (:id, :invenadjustmentid, :productid, :quantity)
		";

		$id = createId('tbldeliveryorderitem'); //incrementing delivery order item id
		$inventoryid = $_POST["item_id"][$count];
		$productid = $_POST["item_code"][$count];
		$availablequantity = $_POST["item_quantity"][$count];
		$adjustmentquantity = $_POST["adjustment_quantity"][$count];
		$quantity = $availablequantity - $adjustmentquantity;
		if ($quantity < 0) {
			$quantity = 0;
		}
		$statement = $connect->prepare($query);
		
		$statement->execute(
			array(
				':id'	    	=>	$id,
				':invadjid' 	=>  $invenadjustmentid,
				':productid'	=>	$productid,
				':quantity'     =>	$quantity
			)
		);

	}

	$result = $statement->fetchAll();
	


	if(isset($result))
	{
		echo 'wow';
	}

} else {
	echo 'nyawit';
}





?>
