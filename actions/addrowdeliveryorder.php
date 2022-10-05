<?php
require 'DbConnect.php';

 
if (isset($_POST['id'])) {
	$output = '';

			$branchid = $_POST['branchid'];
			$supplierid = $_POST['id'];
			$db = new DbConnect;
			$conn = $db->connect();

			$stmt = $conn->prepare("SELECT tblpurchaseorder.supplierid as supplierid, tblpurchaseorderitem.id as poitemid, tblpurchaseorderitem.branchid as branch, tblpurchaseorder.id as poid, tblpurchaseorderitem.quantity as quantity FROM tblpurchaseorder INNER JOIN tblpurchaseorderitem ON tblpurchaseorder.id=tblpurchaseorderitem.poid WHERE quantity > 0 AND supplierid = :supplierid AND tblpurchaseorderitem.branchid = :branchid;");
			$stmt->execute([':supplierid' => $supplierid, ':branchid' => $branchid]);
			$poitems = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$output = '';
				$output .= '<tr>';

				$output .= '<td><select name="item_id[]" class="col col-sm-2 form-control selectpicker item_id" data-live-search="true"><option value="">Select Unit</option>';;
				foreach ($poitems as $poitem) {
				$output .= '<option value="'. $poitem['poitemid'] .'">'. $poitem['poitemid'] .'</option>';
				}
				$output .= '</select></td>';
				$output .= '<td><input type="text" name="po_id[]" class="col col-sm-5 form-control po_id" readonly/></td>';
				$output .= '<td><input type="text" name="item_code[]" class="col col-sm-5 form-control item_code" readonly/></td>';

				$output .= '<td><input type="text" name="item_name[]" class="col col-sm-2 form-control item_name" readonly/></td>';

				$output .= '<td><input type="text" name="item_price[]" class="col col-sm-1 form-control item_price" readonly/></td>';

				$output .= '<td><input type="number" name="item_quantity[]" class="col col-sm-2 form-control item_quantity"/><p>quantity: </p><input type="number" name="po_quantity[]" class="quantity" readonly></td>';

				$output .= '<td><input type="text" name="item_total[]" class="col col-sm-2 form-control item_total" readonly/></td>';
			
				$output .= '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button></td>';


} else {
	$output = 'alert("no data available")';
}

echo $output;


?>
