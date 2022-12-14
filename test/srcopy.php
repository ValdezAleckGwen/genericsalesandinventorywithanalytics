<?php
	
//index.php	
include '../actions/adddata.php';
include '../actions/database_connection.php';

function fill_unit_select_box_sales($connect)
{
	$output = '';

	$query = "SELECT id AS salesid from tblsales";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$output .= '<option value="'.$row["salesid"].'">'.$row["salesid"] . '</option>';
	}

	return $output;
}		

//remove this if cookie is configured

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SALES ADJUSTMENT</title>
		<link rel="stylesheet" href="../admin/assets/style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		<!-- Start of sidebar -->
    <div class="side-bar">
      
<!-- Start of Menu Proper -->
      <div class="menu">

    <!-- Inventory-->
        <div class="item"><a href="inventory_index.php"><i class="fa-regular fa-warehouse"></i>Inventory</a></div>
       

        <!-- Orders-->
        <div class="item"><a href="orders_index.php"><i class="fa-regular fa-cart-shopping"></i>Orders</a></div>


        <!-- Point of salesv2-->
        <div class="item"><a href="posv2_index.php"><i class="fa-regular fa-calculator"></i>Point of Salesv2</a></div>

        <!-- Logout -->
        <div class="item"><a href="../admin/login.php"><i class="fa-regular fa-arrow-right-from-bracket"></i>Logout</a></div>

        <div class="clearfix"></div>
    <br/>

        </div>
    </div>
		<div class="usericon">Cashier <i class="fa-regular fa-user"></i></div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });
    });
    </script>
    <div class="main">

  
    <h3 style="margin-top: 40px;">SALES ADJUSTMENT</h3><br>
		<div class="container">
			<br />
			<div class="card">
				<div class="card-header">Enter Item Details</div>
				<div class="card-body">
					<form method="post" id="insert_form">
						<div class="table-repsonsive">
							<span id="error"></span>
							<div class="float-end">
								<label for="salesreturnid">Sales #:</label>
								<input type="text" name="salesreturnid" class="input-field" value="<?php echo createId('tblsalesreturn'); ?>" id="salesreturnid" readonly>
							</div>
							<div class="container m-1">
								<label for="salesid">Sales ID</h5>
								<select name="salesid" class="p-2 col col-sm-2 form-control selectpicker salesid" id="salesid" data-live-search="true"><option value="">Select Sales</option><?php echo fill_unit_select_box_sales($connect); ?></select>
							</div>
							<!--remove this if cookie is configured-->

							<table class="table table-bordered" id="item_table" style="max-height: 150px; overflow-y: scroll !important;">
								<thead style=" display: block; ">
								<tr>
									<th width="23%">Sales ID</th>
									<th width="16.3%">Product ID</th>
									<th width="19.5%">Product Name</th>
									<th width="10.8%">Price</th>
									<th width="10%">Quantity</th>
									<th width="15%">Total Price</th>
									<th><button type="button" name="add" class="btn btn-success btn-sm add"><i class="fas fa-plus"></i></button></th>
								</tr>
								</thead>
								<tbody id="add-row" style="display: block; height: 500px;overflow-y: auto;overflow-x: hidden;">
							<tr>
									
								</tr>
							</tbody>
							<footer>
							<div class="row">
							
							</footer>
							
							</table>
								<div class="col-sm-6" style="float: left">
									<input type="submit" name="submit" id="submit_button" class="btn btn-primary" value="Insert" />
								</div>
								<div class="col-sm-5" style="float: right">
									<div class="input-group mb-3">
									  <span class="input-group-text" id="basic-addon3">Total</span>
									  <input type="text" name="total" id="total" class="form-control total" readonly/>
									</div>
								</div>					
							</div>
						</div>
					</form>
				</div>
								
			</div>
		</div>
	</body>
</html>
<script>

$(document).ready(function(){




	var count = 0;
	
	$(document).on('click', '.add', function(){

		var form_data = $('#insert_form').serialize();
		
		count++;

		$.ajax({
        url: "../actions/addrowsrcopy.php",
        method: "POST",
        data: form_data,
        success: function (data) {            
        	//$('#item_table').append(data);
			$(data).insertAfter($("#add-row > tr").eq(0));
			$('.selectpicker').selectpicker('refresh');
            }
        });


		

	});


	$(document).on('change')

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	$('#insert_form').on('submit', function(event){

		event.preventDefault();

		var error = '';

		


		count = 1;

		$('.item_quantity').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Item Quantity at Row "+count+"</li>";

			}

			count = count + 1;

		});

		count = 1;

		$("select[name='item_id[]']").each(function(){

			if($(this).val() == '')
			{

				error += "<li>Select Unit at Row "+count+"</li>";

			}

			count = count + 1;

		});





		var form_data = $(this).serialize();

		if(error == '')
		{

			$.ajax({

				url:"../actions/insertsalesreturn.php",
				// url:"../actions/testing.php",

				type:"POST",

				data:form_data,

				

				beforeSend:function()
	    		{

	    			$('#submit_button').attr('disabled', 'disabled');

	    		},

				success:function(data)
				{
					alert(data)

					if(!data)
					{
						alert("ERROR");

					} else {
						$('#item_table').find('tr:gt(0)').remove();

						$('#error').html('<div class="alert alert-success">Item Details Saved</div>');

						$('#item_table').append(add_input_field(0));

						$('.selectpicker').selectpicker('refresh');

						$('#total').val('');

						$('#tax').val('');
						
						$('vatable-sale').val('');

						$('#submit_button').attr('disabled', false);
					}

				}
			})

		}
		else
		{
			$('#error').html('<div class="alert alert-danger"><ul>'+error+'</ul></div>');
		}

	});
	 
});
</script>
<script>
	
	
$(document).ready(function(){
  
	$(document).on("change", ".item_id", function  () {
		
        
        var dataType = 6;
        var currentRow = $(this).closest("tr");
        var productid = $(this).val();
        var productcode = currentRow.find(".item_code");
        var name = currentRow.find(".item_name");
        var price = currentRow.find(".item_price");
        var quantity = currentRow.find(".item_quantity");
        var total = currentRow.find(".item_total");
        var actualPrice;
        $.ajax({
            url: "../actions/fetchproductinfo.php",
            method: "POST",
            data: {productid: productid, dataType: dataType},
            dataType: "JSON",
            success: function (data) {
                actualPrice = data.price.replace(/^/, '???');
                productcode.val(data.productid);
                name.val(data.name); 
                price.val(actualPrice);
                quantity.val(data.quantity);	
                total.val(data.total);
                
            }
        });
        return false;
    });
	//

	$(document).on("keyup", ".item_quantity", function() {
		// total_amount();
		
		var currentRow = $(this).closest("tr");
		var quantity = $(this).val();
		var price = currentRow.find(".item_price").val();
		var totalPrice = currentRow.find(".item_total");
		var tax = $('#tax').val();
		var number;
		var vatSale;
		$.ajax({
			url: "../actions/fetchtotalprice.php",
			method: "POST",
			data: {quantity: quantity, price:price },
			success	: function (totalprice) {
				totalprice = totalprice.replace(/^/, '??? ');
				totalPrice.val(totalprice);

				// number = totalprice;
				// number = number.replace(/[^a-zA-Z0-9]/g, '');
				// vatSale = number * .88;
				// number = number * .12;
				// number = parseFloat(number).toFixed(2);
				// vatSale = parseFloat(vatSale).toFixed(2);
				// $('#vat').val(number);
				// $('#vatable-sale').val(vatSale);


			}
		});


	});


	var	total_amount = function () {

		var sum = 0;
		var currency = "???"
		$('.item_total').each(function () {
			var num = $(this).val().replace(/[^a-zA-Z0-9]/g, '');
			
			// var num = $(this).val();
			console.log(num);
			if(num != 0) {
				
				sum += parseFloat(num);
				
			}

		});

		sum = sum.toLocaleString("en-US");
		sum = sum.replace(/^/, '???');
		$("#total").val(sum);
	}

	$(document).on("change", ".item_quantity", function() {
		total_amount();
	})

	
	
		
		

	




});



</script>