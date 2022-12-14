<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Delivery Order</title>
    <link rel="stylesheet" href="assets/styleDRPRSR.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
  </head>
  <body>

<!-- Start of sidebar -->
    <div class="side-bar">

<!-- Start of Menu Proper -->
      <div class="menu">
        <!-- Dashboard -->
        <div class="item"><a href="dashboard_index.php"><i class="fa-regular fa-house-blank"></i>Dashboard</a></div>

        <!-- Analytics -->
        <div class="item"><a href="analytics_index.php"><i class="fa-solid fa-chart-mixed"></i>Analytics</a></div>

        <!-- Branch -->
        <div class="item">
          <a class="sub-btn"><i class="fa-solid fa-ballot"></i>Branch<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="branch_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="addbranch_index.php" class="sub-item"><i class="fa-regular fa-circle-plus"></i>Add Branch</a>
            <a href="editbranch_index.php" class="sub-item"><i class="fa-regular fa-pen-to-square"></i>Edit Branch</a>
          </div>
        </div>      

        <!-- Products -->
        <div class="item">
          <a class="sub-btn"><i class="fa-regular fa-bag-shopping"></i>Products<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="product_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="addproduct_index.php" class="sub-item"><i class="fa-regular fa-circle-plus"></i>Add Products</a>
            <a href="editproduct_index.php" class="sub-item"><i class="fa-regular fa-pen-to-square"></i>Edit Products</a>
          </div>
        </div>

        <!-- Category -->
        <div class="item">
          <a class="sub-btn"><i class="fa-regular fa-table-cells-large"></i>Category<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="category_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="addcategory_index.php" class="sub-item"><i class="fa-regular fa-circle-plus"></i>Add Category</a>
            <a href="editcategory_index.php" class="sub-item"><i class="fa-regular fa-pen-to-square"></i>Edit Category</a>
          </div>
        </div>

        <!-- Inventory-->
        <div class="item">
         <a class="sub-btn"><i class="fa-regular fa-warehouse"></i>Inventory<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="inventoryadj_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="inventoryadjustment_index.php" class="sub-item"><i class="fa-regular fa-box-circle-check"></i>Adjustment</a>
          </div>
        </div>

        <!-- Purchase Order -->
        <div class="item"><a href="purchase_index.php"><i class="fa-regular fa-file-invoice"></i>Purchase Order</a></div>

        <!-- Delivery Order -->
        <div class="item"><a href="delivery_index.php"><i class="fa-regular fa-truck"></i>Delivery Order</a></div>

        <!-- Orders-->
        <div class="item"><a href="orders_index.php"><i class="fa-regular fa-cart-shopping"></i>Orders</a></div>

        <!-- Suppliers-->
        <div class="item">
         <a class="sub-btn"><i class="fa-regular fa-tag"></i>Suppliers<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="suppliers_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="addsuppliers_index.php" class="sub-item"><i class="fa-regular fa-circle-plus"></i>Add Suppliers</a>
            <a href="editsuppliers_index.php" class="sub-item"><i class="fa-regular fa-pen-to-square"></i>Edit Suppliers</a>
          </div>
        </div>
        
        <!-- Sales-->
        <div class="item">
         <a class="sub-btn"><i class="fa-regular fa-wallet"></i>Sales<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="sales_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="salesreturn_index.php" class="sub-item"><i class="fa-regular fa-arrow-turn-down-left"></i>Sales Return</a>
         </div>
        </div>

        <!-- Payments -->
        <div class="item"><a href="payment_index.php"><i class="fa-solid fa-basket-shopping"></i>Payments</a></div>

        <!-- Users -->
        <div class="item">
         <a class="sub-btn"><i class="fa-regular fa-user"></i>Users<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="user_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="adduser_index.php" class="sub-item"><i class="fa-regular fa-circle-plus"></i>Add Users</a>
            <a href="edituser_index.php" class="sub-item"><i class="fa-regular fa-pen-to-square"></i>Edit Users</a>
          </div>
        </div>

        <!-- Audit Logs -->
        <div class="item"><a href="audit_index.php"><i class="fa-regular fa-file-chart-pie"></i>Audit Logs</a></div>          

        <!-- Settings -->
        <div class="item">
         <a class="sub-btn"><i class="fa-regular fa-gears"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="settings_index.php" class="sub-item"><i class="fa-regular fa-house-blank"></i>Dashboard</a>
            <a href="tax_index.php" class="sub-item"><i class="fa-solid fa-percent"></i>TAX</a>
         </div>
        </div>

        <!-- Logout -->
        <div class="item"><a href="login.php"><i class="fa-regular fa-arrow-right-from-bracket"></i>Logout</a></div>

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
          <h5 style="font-size: 16px;display: inline-block; float: right; color: #363636; padding: 10px 40px;"><b>DELIVERY ORDER</b><br>DO ID: DO1101<br><u>04/10/2022</u> - <u>04/17/2022</u></h5>
          <div class="form-style-2">
          <div class="form-style-2-heading">NEW DELIVERY ORDER</div>
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
                <td><label for="field3" style="text-align: center;"><input type="text" class="input-field" name="field2" value="Mercedes, Pasig"  maxlength="99" size="20" style="text-align: center;" readonly/></label></td>  
              </tr>
            </table><br>

              <table class="table-fill">
              <thead>
                <th class="text-center">PURCHASE ORDER I.D.</th>
                <th class="text-center">PRODUCT CODE</th>
                <th class="text-center">ITEM NAME</th>
                <th class="text-center">QUANTITY</th> 
                <th class="text-center">ITEM PRICE</th>
                <th class="text-center">TOTAL</th>                  
              </thead>
              <tbody class="table-hover">
              <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-right"></td>
                <td class="text-right"></td>

              </tr>
              <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-right"></td>
                <td class="text-right"></td>
              </tr> 
              <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-right"></td>
                <td class="text-right"></td>
              </tr>                    
            </table><br>


            <table class="table-fill">
              <thead>
                <th class="text-center">PURCHASE ORDER I.D.</th>
                <th class="text-center">PRODUCT CODE</th>
                <th class="text-center">ITEM NAME</th>
                <th class="text-center">QUANTITY</th> 
                <th class="text-center">ITEM PRICE</th>
                <th class="text-center">TOTAL</th>                  
              </thead>
              <tbody class="table-hover">
              <tr>
                <td class="text-center">P1101</td>
                <td class="text-center">SW01</td>
                <td class="text-center">Basic Sweatpants</td>
                <td class="text-center">50</td>
                <td class="text-right">199.00</td>
                <td class="text-right">9950.00</td>

              </tr>
              <tr>
                <td class="text-center">P1102</td>
                <td class="text-center">SW02</td>
                <td class="text-center">Fluzzy Flare Sweatpants</td>
                <td class="text-center">50</td>
                <td class="text-right">199.00</td>
                <td class="text-right">9950.00</td>
              </tr> 
              <tr>
                <td class="text-center">P1103</td>
                <td class="text-center">B01</td>
                <td class="text-center">Chunky Chain Medium</td>
                <td class="text-center">50</td>
                <td class="text-right">199.00</td>
                <td class="text-right">9950.00</td>
              </tr>                    
            </table><br>
              <button type="button" class="btn btn-dark" style="display: inline; font-size: 16px; font-weight: 700;"><i class="fa-solid fa-print"></i> Print</button>
              <button type="button" class="btn btn-success" style="display: inline; font-size: 16px; font-weight: 700;"><i class="fa-regular fa-circle-check"></i> Save</button>         
          </div>
          </form>

          </div>
       </div>
    </div>
</div>    


  </body>
</html>
