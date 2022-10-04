<?php
//minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{

	$invenadjustmentid = createId('tbldeliveryorder');
	$branchid = $_POST['branch_id'];
	$deliveryoderid = $_POST['do_number'];
	$total = preg_replace('/[^0-9]/s', "",$_POST["total"]);
	$userid = 'U-0000001';
	$audit = 'A-0000001';

	// create a delivery order
	$deliveryorderquery = "
	INSERT INTO tblinventoryadjustment (id, branchid, userid, auditid) VALUES (:id, :branchid, :userid,  :audit)
	";

	$statement  = $connect->prepare($deliveryorderquery);
	$statement->execute([
		':id' => $invenadjustmentid,
		':branchid' => $branchid,
		':userid' => $userid,
		':audit' => $audit
	]);

	

	$result = $statement->fetchAll();

	// try to consolidate in one loop 
	//create delivery order item
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tblinventoryadjustmentitem 
        (id, invadjid, productid, supplierid, quantity) 
        VALUES (:invadjitem, :invenadjustmentid, :productid,  :branchid, :supplierid, :quantity)
		";

		$invadjitem = createId('tbldeliveryorderitem'); //incrementing delivery order item id
		$purchaseorderid = $_POST['po_id'][$count];
		$productid = $_POST["item_code"][$count];
		$item_quantity = $_POST["item_quantity"][$count];
		$item_quantity = $_POST["available_quantity"][$count];
		$statement = $connect->prepare($query);
		
		$statement->execute(
			array(
				':invadjitem'	    =>	$invadjitem,
				':invadjid' 		=> $invenadjustmentid,
				':productid'		=>	$productid,
				':item_quantity'    =>	$item_quantity,
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
