<?php
	include '../actions/adddata.php';
	include('../actions/database_connection.php');

$id = 'S-0000001';
$query = "SELECT 
tblsales.id AS salesid,
tblproducts.id AS productid,
tblproducts.name AS name,
tblsalesitem.quantity AS quantity,
tblsalesitem.price AS price,
tblsales.vat AS Tax,
tblsales.vattablesale AS VattableSale,
tblsales.total  AS grandtotal
FROM tblsales 
INNER JOIN tblsalesitem
ON tblsalesitem.salesid=tblsales.id
INNER JOIN tblproducts
ON tblsalesitem.productid=tblproducts.id
WHERE tblsales.id = :id";



$statement  = $connect->prepare($query);
$statement->execute([
    ':id' => $id,

]);

$sales = $statement->fetchAll();

echo var_dump($sales);

 ?>