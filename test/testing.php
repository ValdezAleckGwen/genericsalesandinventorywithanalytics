<?php
require_once '../actions/DbConnect.php';
require_once '../actions/database_connection.php';
$db = new DbConnect;
					$conn = $db->connect();
					$salesitemid = 'SI-0000001';
					$query = "SELECT tblsalesitem.id AS salesitemid, tblsalesitem.productid AS productid, tblsalesitem.price AS price, tblsalesitem.quantity AS quantity, tblsalesitem.total AS total, tblproducts.name AS productname FROM tblsalesitem INNER JOIN tblproducts ON tblproducts.id=tblsalesitem.productid WHERE tblsalesitem.id = :salesitemid";

					$stmt = $conn->prepare($query);
					$stmt->execute([':salesitemid' => $salesitemid]);
					$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
					
					foreach ($products as $product) {
						$data['productid'] = $product['productid'];
						$data['name'] = $product['productname'];
						$data['price'] = $product['price'];
						$data['quantity'] = $product['quantity'];
						$data['total'] = $product['total'];
					}

					var_dump($data)




 ?>