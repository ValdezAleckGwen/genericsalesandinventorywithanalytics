<?php
require 'DbConnect.php';


if (isset($_POST['id'])) {
	$output = '';

			
			$supplierid = $_POST['id'];
			$db = new DbConnect;
			$conn = $db->connect();

			$stmt = $conn->prepare("SELECT tbldeliveryorderitem.id AS doitemid, tbldeliveryorder.id AS doid, tbldeliveryorder.supplierid AS supplierid FROM tbldeliveryorderitem INNER JOIN tbldeliveryorder ON tbldeliveryorderitem.doid=tbldeliveryorder.id INNER JOIN tblsupplier ON tbldeliveryorder.supplierid=tblsupplier.id WHERE supplierid = :supplierid AND paid = 0");
			$stmt->execute([':supplierid' => $supplierid]);
			$doitems = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$output = '';
				$output .= '<tr>';

				$output .= '<td><select name="item_id[]" class="col col-sm-2 form-control selectpicker item_id" data-live-search="true"><option value="">Select Unit</option>';;
				foreach ($doitems as $doitem) {
				$output .= '<option value="'. $doitem['doitemid'] .'">'. $doitem['doitemid'] .'</option>';
				}
				$output .= '</select></td>';
				$output .= '<td><input type="text" name="do_id[]" class="col col-sm-5 form-control do_id" readonly/></td>';
				
				$output .= '<td><input type="text" name="item_branch[]" class="col col-sm-5 form-control item_branch" readonly/></td>';	
				$output .= '<td><input type="text" name="item_code[]" class="col col-sm-5 form-control item_code" readonly/></td>';

				// $output .= '<td><input type="text" name="item_name[]" class="col col-sm-2 form-control item_name" readonly/></td>';

				$output .= '<td><input type="text" name="item_price[]" class="col col-sm-1 form-control item_price" readonly/></td>';

				$output .= '<td><input type="number" name="item_quantity[]" class="col col-sm-2 form-control item_quantity" readonly/></td>';

				$output .= '<td><input type="text" name="item_total[]" class="col col-sm-2 form-control item_total" readonly/></td>';
			
				$output .= '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button></td>';


} else {
	$output = 'alert("no data available")';
}

echo $output;


?>
