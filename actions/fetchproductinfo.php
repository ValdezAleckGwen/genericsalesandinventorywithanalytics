<?php
require_once 'DbConnect.php';

if (isset($_POST['productid'])) {
	$datatype = $_POST['dataType'];
	
	switch ($datatype) {
		case 1:
			$inventoryid = $_POST['productid'];
			if ($inventoryid != 0) {
				$db = new DbConnect;
				$conn = $db->connect();
					
				$stmt = $conn->prepare("SELECT tblinventory.id AS inventory, tblinventory.quantity AS count, tblproducts.id AS product, tblproducts.name AS name, tblproducts.markupPrice AS price FROM tblinventory INNER JOIN tblproducts ON tblinventory.productId=tblproducts.id WHERE tblproducts.id = :inventoryid");
				$stmt->execute(['inventoryid' => $inventoryid]);
				$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($products as $product) {
					$data['name'] = $product['name'];
					$data['price'] = number_format($product['price']);
				}

				
				echo json_encode($data);
			} else {
				echo " ";
			}	

			break;
		
		case 2:
			$inventoryid = $_POST['productid'];
			if ($inventoryid != 0) {
				$db = new DbConnect;
				$conn = $db->connect();
					
				$stmt = $conn->prepare("SELECT tblinventory.id AS inventory, tblinventory.quantity AS count, tblproducts.id AS product, tblproducts.name AS name, tblproducts.price AS price FROM tblinventory INNER JOIN tblproducts ON tblinventory.productId=tblproducts.id WHERE tblproducts.id = :inventoryid");
				$stmt->execute(['inventoryid' => $inventoryid]);
				$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($products as $product) {
					$data['name'] = $product['name'];
					$data['price'] = number_format($product['price']);
				}

				
				echo json_encode($data);
			} else {
				echo " ";
			}	

			break;

		case 3:
		$poitemid = $_POST['productid'];
			if ($poitemid != 0) {
				$db = new DbConnect;
				$conn = $db->connect();
					
				$stmt = $conn->prepare("SELECT tblpurchaseorderitem.id as poitemid, tblpurchaseorderitem.productid as productid, tblpurchaseorderitem.poid as poid, tblpurchaseorderitem.total AS total, tblpurchaseorderitem.price AS price,tblpurchaseorderitem.quantity as quantity, tblproducts.name AS name FROM tblpurchaseorderitem INNER JOIN tblproducts ON tblpurchaseorderitem.productid=tblproducts.id where tblpurchaseorderitem.id = :poitemid;");
				$stmt->execute([':poitemid' => $poitemid]);
				$pos = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($pos as $po) {
					
					$data['productid'] = $po['productid'];
					$data['poid'] = $po['poid'];
					$data['total'] = number_format($po['total']);
					$data['price'] = number_format($po['price']);
					$data['quantity'] = $po['quantity'];
					$data['name'] = $po['name'];
					
				}

				
				echo json_encode($data);

			} else {
				echo " ";
			}	

			break;

		case 4:
		$id = $_POST['productid'];
			if ($id != 0) {
				$db = new DbConnect;
				$conn = $db->connect();
					
				$stmt = $conn->prepare("SELECT tbldeliveryorderitem.id AS doitemid, tbldeliveryorderitem.branchid AS branch, tbldeliveryorderitem.productid AS productid, tblproducts.name AS productname, tbldeliveryorderitem.quantity as quantity, tbldeliveryorderitem.price as price, tbldeliveryorderitem.total AS total, tbldeliveryorder.id AS doid, tbldeliveryorder.supplierid AS supplierid FROM tbldeliveryorderitem INNER JOIN tbldeliveryorder ON tbldeliveryorderitem.doid=tbldeliveryorder.id INNER JOIN tblsupplier ON tbldeliveryorder.supplierid=tblsupplier.id INNER JOIN tblproducts ON tbldeliveryorderitem.productid=tblproducts.id WHERE paid = 0 AND tbldeliveryorderitem.id = :id;");
				$stmt->execute([':id' => $id]);
				$dos = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($dos as $do) {
					
					$data['productid'] = $do['productid'];
					$data['doid'] = $do['doid'];
					$data['branch'] = $do['branch'];
					$data['total'] = number_format($do['total']);
					$data['price'] = number_format($do['price']);
					$data['quantity'] = $do['quantity'];
					$data['name'] = $do['productname'];
					
				}

				
				echo json_encode($data);

			} else {
				echo " ";
			}	

			break;



		default:
			// code...
			break;
	}


	



} else {
	echo "0";
}

 ?>


