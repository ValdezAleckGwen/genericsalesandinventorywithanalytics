<?php
// minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{



	$purchaseorderid = $_POST['po_number'];
	$branchid = $_POST['branch_id'];
	$supplierid = $_POST['supplier_id'];
	$total = preg_replace('/[^0-9]/s', "",$_POST["total"]);
	$userid = 'U-0000001';
	$branchid = $_POST['branch_id'];
	$audit = 'A-0000001';

	// create a sale
	$salesquery = "
	INSERT INTO tblpurchaseorder (id, supplierid, branchid, total, userid, auditid) VALUES (:purchaseorderid, :supplierid, :branchid, :total, :userid,  :audit)
	";

	$statement  = $connect->prepare($salesquery);
	$statement->execute([
		':purchaseorderid' => $purchaseorderid,
		':supplierid' => $supplierid,
		':branchid' => $branchid,
		':total' => $total,
		':userid' => $userid,
		':audit' => $audit
		 
	]);

	

	$result = $statement->fetchAll();

	//create purchase order item
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tblpurchaseorderitem 
        (id, poid, productid, branchid, price, quantity, total) 
        VALUES (:purchaseorderitemid, :poid, :productid, :branchid, :price, :item_quantity, :totalprice)
		";

		$purchaseorderitemid = createId('tblpurchaseorderitem'); //incrementing sales item id
		$price = preg_replace('/[^0-9]/s', "",$_POST["item_price"][$count]);
		$totalprice = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);
		$productid = $_POST["item_id"][$count];
		$item_quantity = $_POST["item_quantity"][$count];
		$statement = $connect->prepare($query);
		
		$statement->execute(
			array(
				':purchaseorderitemid'	    =>	$purchaseorderitemid,
				':poid'				=>	$purchaseorderid,
				':productid'		=>	$productid,
				':branchid' 		=> $branchid,
				':price'	        =>	$price,
				':item_quantity'    =>	$item_quantity,
				':totalprice'	    =>	$totalprice
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
