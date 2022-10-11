<?php
	
require_once '../actions/database_connection.php';

		$query = "
		SELECT tblinventory.id AS inventory FROM tblinventory WHERE tblinventory.productid = :productid
		";
		$statement  = $connect->prepare($query);
		//incrementing sales item id
		$productid = 'P-00000';

		
		$statement->execute(
			array(
				':productid'	=>	$productid,

			)
		);


		$result = $statement->fetchAll();

		if (empty($result)) {
			echo "shing";
		} else {
			echo "shong";
		}



 ?>