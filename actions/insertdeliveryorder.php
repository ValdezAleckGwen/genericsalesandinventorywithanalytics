<?php
//minus from inventory 
include 'adddata.php';
include('database_connection.php');

if(isset($_POST["item_id"]))
{

	$deliveryorderid = createId('tbldeliveryorder');
	$branchid = $_POST['branch_id'];
	$supplierid = $_POST['supplier_id'];
	$deliveryoderid = $_POST['do_number'];
	$total = preg_replace('/[^0-9]/s', "",$_POST["total"]);
	$userid = 'U-0000001';
	$audit = 'A-0000001';

	// create a delivery order
	$deliveryorderquery = "
	INSERT INTO tbldeliveryorder (id, supplierid, branchid,  total, userid, auditid) VALUES (:deliveryorderid, :supplierid, :branchid, :total, :userid,  :audit)
	";

	$statement  = $connect->prepare($deliveryorderquery);
	$statement->execute([
		':deliveryorderid' => $deliveryorderid,
		':supplierid' => $supplierid,
		':branchid' => $branchid,
		':total' => $total,
		':userid' => $userid,
		':audit' => $audit
	]);

	

	$result = $statement->fetchAll();

	// try to consolidate in one loop 
	//create delivery order item
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

		$query = "
		INSERT INTO tbldeliveryorderitem 
        (id, doid, poid, branchid, productid, price, quantity, total) 
        VALUES (:deliveryorderitemid, :deliveryorderid, :poid, :branchid, :productid,  :price, :item_quantity, :totalprice)
		";

		$deliveryorderitemid = createId('tbldeliveryorderitem'); //incrementing delivery order item id
		$purchaseorderid = $_POST['po_id'][$count];
		$productid = $_POST["item_code"][$count];
		$price = preg_replace('/[^0-9]/s', "",$_POST["item_price"][$count]);
		$item_quantity = $_POST["item_quantity"][$count];
		$totalprice = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);
		$statement = $connect->prepare($query);
		
		$statement->execute(
			array(
				':deliveryorderitemid'	    =>	$deliveryorderitemid,
				':deliveryorderid' => $deliveryorderid,
				':poid'				=>	$purchaseorderid,
				':branchid' 		=> $branchid,
				':productid'		=>	$productid,
				':price'	        =>	$price,
				':item_quantity'    =>	$item_quantity,
				':totalprice'	    =>	$totalprice
			)
		);

	}

	$result = $statement->fetchAll();
	
	// try to consolidate in one loop 
	//remove delivered goods from purchase order
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{

	$deliveryorderquery = "
	SELECT total FROM tblpurchaseorderitem WHERE id = :purchaseorderitemid;
	";




	$itemtotal = 0;
	$purchaseorderitemid = $_POST['item_id'][$count];
	$poquantity = $_POST['po_quantity'][$count];
	$itemquantity = $_POST['item_quantity'][$count];
	$quantity =  $poquantity - $itemquantity; 

	$statement  = $connect->prepare($deliveryorderquery);
	$statement->execute([
		':purchaseorderitemid' => $purchaseorderitemid
	]);
	$pos = $statement->fetchAll();

	foreach ($pos as $po) {
		$itemtotal = $po[0];
	}
	$doitemtotal = preg_replace('/[^0-9]/s', "",$_POST["item_total"][$count]);
	$total = floatval($itemtotal) - floatval($doitemtotal) ;

	$deliveryorderquery = "
	UPDATE tblpurchaseorderitem SET quantity = :quantity, total = :total WHERE id = :purchaseorderitemid
	";

	$statement  = $connect->prepare($deliveryorderquery);


	$statement->execute([
		':purchaseorderitemid' => $purchaseorderitemid,
		':quantity' => $quantity,
		':total' => $total
	]);

	

	$result = $statement->fetchAll();



	} //end of for loop 

	// try to consolidate in one loop 

	//add delivered goods to inventory
	for($count = 0; $count < count($_POST["item_id"]); $count++)
	{




	$deliveryorderquery = "
	SELECT * FROM tblinventory WHERE tblinventory.supplierid = :supplierid AND tblinventory.branchid = :branchid AND tblinventory.productid = :productid
	";

	$statement  = $connect->prepare($deliveryorderquery);
	$productid = $_POST['item_code'][$count];
	$statement->execute([
		':supplierid' => $supplierid,
		':branchid' => $branchid,
		':productid' => $productid,
	]);

	

	$result = $statement->fetchAll();

	//compute quantity
	$poquantity = $_POST['po_quantity'][$count];
	$itemquantity = $_POST['item_quantity'][$count];
	$quantity =  (int)$poquantity - (int)$itemquantity; 
	if ($quantity < 0) {
		$quantity = 0;
	}


	if (empty($result)) {
	//create new inventory
	$query = "
	INSERT INTO tblinventory (id, productid, supplierid, branchid, quantity) VALUES (:id, :productid, :supplierid, :branchid, :quantity)
	";

	$statement  = $connect->prepare($query);
	$productid = $_POST['item_code'][$count];
	$inventoryid = createId('tblinventory');
	$quantity = $_POST['item_quantity'][$count];
	$statement->execute([
		':id' => $inventoryid,
		':productid' => $productid,
		':supplierid' => $supplierid,
		':branchid' => $branchid,
		':quantity' => $quantity
	]);


	} else {
	//update values of quantity
	$query = "
	UPDATE tblinventory SET tblinventory.quantity = :quantity WHERE tblinventory.supplierid = :supplierid AND tblinventory.branchid = :branchid AND tblinventory.productid = :productid
	";

	$statement  = $connect->prepare($query);
	$productid = $_POST['item_code'][$count];
	$statement->execute([
		':supplierid' => $supplierid,
		':branchid' => $branchid,
		':productid' => $productid,
		':quantity' => $quantity
	]);

	}


	$result = $statement->fetchAll();









	} //end of for loop 









	if(isset($result))
	{
		echo 'wow';
	}

} else {
	echo 'nyawit';
}





?>
