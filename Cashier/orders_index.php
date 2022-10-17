<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Cashier</title>
    <link rel="stylesheet" href="../admin/assets/style.css">
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
       

        <!-- Orders-->
        <div class="item"><a href="orders_index.php"><i class="fa-regular fa-cart-shopping"></i>Orders</a></div>

        <!-- Point of sales-->
        <div class="item"><a href="pos_index.php"><i class="fa-regular fa-calculator"></i>Point of Sales</a></div>

        <!-- Logout -->
        <div class="item"><a href="../admin/login.php"><i class="fa-regular fa-arrow-right-from-bracket"></i>Logout</a></div>

        <div class="clearfix"></div>
    <br/>

        </div>
    </div>

<!-- <div class="usericon"><?php //echo displayUser(); ?> <i class="fa-regular fa-user"></i></div> -->     

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
        <h3>ORDERS</h3>
          <div align="right">
            <label><span>Search: </span><input type="text" class="input-field" name="field3" value=""/></label>
          </div>
        </div>
        <table class="table-fill">
        <thead>

        <tr>
        <th class="text-center">Order I.D.</th>
        <th class="text-center">Date</th>
        <th class="text-center">Branch</th>
        <th class="text-center">Quantity</th>
        <th class="text-left">Total (₱)</th>
        </tr>
        </thead>
        <tbody class="table-hover">

        <tr>
        <td class="text-center">1</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">1</td>
        <td class="text-right">399.00</td>
        </tr>

        <tr>
        <td class="text-center">2</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">1</td>
        <td class="text-right">250.00</td>
        </tr>

        <tr>
        <td class="text-center">3</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">1</td>
        <td class="text-right">299.00</td>
        </tr>

        <tr>
        <td class="text-center">4</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">3</td>
        <td class="text-right">500.00</td>
        </tr>

        <tr>
        <td class="text-center">5</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">2</td>
        <td class="text-right">400.00</td>
        </tr>

        <tr>
        <td class="text-center">6</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">1</td>
        <td class="text-right">350.00</td>
        </tr>

        <tr>
        <td class="text-center">7</td>
        <td class="text-center">11/01/2021</td>
        <td class="text-center">Branch 1</td>
        <td class="text-center">2</td>
        <td class="text-right">750.00</td>
        </tr>


        </tbody>
        </table><br>
     </div>
  </div>
</div>

  </body>
</html>