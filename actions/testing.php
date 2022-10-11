<?php 
include 'adddata.php';
include('database_connection.php');



    
$id = 'PO-0000001';

$query = "SELECT 
tblpurchaseorder.id AS poid,
tblsupplier.name AS suppliername,
tblproducts.id AS productid,
tblproducts.name AS name,
tblpurchaseorderitem.quantity AS quantity,
tblpurchaseorderitem.total AS total,
tblpurchaseorderitem.price AS price,
tblpurchaseorder.date as purchasedate,
tblpurchaseorder.total  AS grandtotal

FROM tblpurchaseorder
INNER JOIN tblsupplier
ON tblpurchaseorder.supplierid=tblsupplier.id
INNER JOIN tblpurchaseorderitem
ON tblpurchaseorderitem.poid=tblpurchaseorder.id
INNER JOIN tblproducts
ON tblpurchaseorderitem.productid=tblproducts.id

WHERE tblpurchaseorder.id = :id";



$statement  = $connect->prepare($query);
$statement->execute([
    ':id' => $id,

]);

$purchases = $statement->fetchAll();
echo var_dump($purchases);







?>