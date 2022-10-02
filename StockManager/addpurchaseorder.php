<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARCI - New Purchase Order</title>
    <link rel="stylesheet" href="../../admin/assets/styleDRPRSR.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
  </head>
  <body>

<!-- Start of sidebar -->
    <div class="side-bar">

<!-- Start of Menu Proper -->
      <div class="menu">

        <!-- Inventory-->
        <div class="item"><a href="inventory_index.php"><i class="fa-regular fa-warehouse"></i>Inventory</a></div>

        <!-- Purchase Order -->
        <div class="item"><a href="purchase_index.php"><i class="fa-regular fa-file-invoice"></i>Purchase Order</a></div>

        <!-- Delivery Order-->
        <div class="item"><a href="delivery_index.php"><i class="fa-regular fa-truck"></i>Delivery Order</a></div>

        <!-- Logout -->
        <div class="item"><a href="../admin/login.php"><i class="fa-regular fa-arrow-right-from-bracket"></i>Logout</a></div>

      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });
    });

    </script>
    
<div class="main">
    <div class="flex-container">
       <div class="flex-items">
         <div class="table-title">
          <h5 style="font-size: 16px;display: inline-block; float: right; color: #363636;"><b>PURCHASE ORDER REPORT</b><br><u>04/10/2022</u> - <u>04/17/2022</u><br>By: Admin</h5>
          <div class="form-style-2">
          <div class="form-style-2-heading">NEW PURCHASE ORDER</div>
          <form action="" method="post">
          <table class="table-fill2">
            <tr>
              <thead>
                <th class="text-center">SUPPLIER</th>
                <th class="text-center">DELVIERY ADDRESS</th>
                <th class="text-center">REQUEST DATE</th>                
              </thead>
              <tbody>
              <tr>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value=""  maxlength="99" size="20" style="text-align: center;"/></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value="Mercedes, Pasig"  maxlength="99" size="20" style="text-align: center;" readonly/></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value="10/26/2022"  maxlength="99" size="15" style="text-align: center;" readonly/></label></td>        
              </tr>
            </table><br>

            <table class="table-fill">
              <thead>
                <th class="text-center">PRODUCT CODE</th>
                <th class="text-center">ITEM NAME</th>
                <th class="text-center">QUANTITY</th>
                <th class="text-center">ITEM PRICE</th> 
                <th class="text-center">TOTAL</th>                   
              </thead>
              <tbody class="table-hover">
              <tr>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value=""  maxlength="99" size="5" style="text-align: center;"/></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value=""  maxlength="99" size="20" style="text-align: center;" /></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value=""  maxlength="99" size="4" style="text-align: center;"/></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value="399.00"  maxlength="99" size="5" style="text-align: center;" readonly/></label></td>
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value="1596.00"  maxlength="99" size="5" style="text-align: center;" readonly/></label></td>
              </tr>                   
            </table><br>
              <button type="button" class="btn btn-dark" style="display: inline; font-size: 16px; font-weight: 700;"><i class="fa-solid fa-print"></i> Print</button>
              <button type="button" class="btn btn-success" style="display: inline; font-size: 16px; font-weight: 700;"><i class="fa-regular fa-circle-check"></i> Save</button>  
              <button type="button" class="btn btn-primary" style="float: right;font-size: 16px; font-weight: 700;"><i class="fa-solid fa-circle-plus"></i> New Row</button><br>          
          </div>
          </form>

          </div>
       </div>
    </div>
</div>    


  </body>
</html>
