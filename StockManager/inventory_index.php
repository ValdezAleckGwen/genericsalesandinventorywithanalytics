<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
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

        <!-- Purchase Order -->
        <div class="item"><a href="purchase_index.php"><i class="fa-regular fa-file-invoice"></i>Purchase Order</a></div>

        <!-- Delivery Order-->
        <div class="item"><a href="delivery_index.php"><i class="fa-regular fa-truck"></i>Delivery Order</a></div>

        <!-- Stock Transfer-->
        <div class="item"><a href="stock_index.php"><i class="fa-solid fa-arrow-trend-up"></i>Stock Transfer</a></div>

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
        <h3>INVENTORY</h3>
          <div style="display: inline;">
            <button type="button" class="btn btn-dark" style="font-size: 16px; font-weight: 700;"><i class="fa-solid fa-print"></i> Print</button>
          <div style="float: right;">
            <label><span>Search: </span><input type="text" class="input-field" name="field3" value=""/></label>
          </div>
        </div>
        <table class="table-fill">
        <thead>
        <tr>
        <th class="text-center">Product ID</th>
        <th class="text-center">Branch</th>
        <th class="text-center">Product Name</th>
        <th class="text-center">Category</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Status</th>
        </tr>
        </thead>
        <tbody class="table-hover">

        <tr>
        <td class="text-center">SW01</td>
        <td class="text-center">Branch 1</td>
        <td class="text-left">Basic Sweatpants</td>
        <td class="text-left">Bottoms</td>
        <td class="text-center">0</td>
        <td class="text-center"><span class="badge badge-pill badge-danger" style="width: 90px;">Out of Stock</span>
        </tr>

        <tr>
        <td class="text-center">SW02</td>
        <td class="text-center">Branch 1</td>
        <td class="text-left">Fluzzy Flare Sweatpants</td>
        <td class="text-left">Bottoms</td>
        <td class="text-center">22</td>
        <td class="text-center"><span class="badge badge-pill badge-success" style="width: 90px;">In Stock</span>

        </tr>

        <tr>
        <td class="text-center">SW03</td>
        <td class="text-center">Branch 1</td>
        <td class="text-left">Tie Dye Sweatpants</td>
        <td class="text-left">Bottoms</td>
        <td class="text-center">19</td>
        <td class="text-center"><span class="badge badge-pill badge-success" style="width: 90px;">In Stock</span>
        </tr>      

        <tr>
        <td class="text-center">SS01</td>
        <td class="text-center">Branch 2</td>
        <td class="text-left">Basic Sweatshorts</td>
        <td class="text-left">Bottoms</td>
        <td class="text-center">13</td>
        <td class="text-center"><span class="badge badge-pill badge-success" style="width: 90px;">In Stock</span>
        </tr>   

        <tr>
        <td class="text-center">C01</td>
        <td class="text-center">Branch 2</td>
        <td class="text-left">Dianne Coordinates</td>
        <td class="text-left">Coords</td>
        <td class="text-center">2</td>
        <td class="text-center"><span class="badge badge-pill badge-warning" style="width: 90px;">Reorder</span>
        </tr>

        <tr>
        <td class="text-center">T01</td>
        <td class="text-center">Branch 2</td>
        <td class="text-left">Reese Crop Polo</td>
        <td class="text-left">Tops</td>
        <td class="text-center">27</td>
        <td class="text-center"><span class="badge badge-pill badge-success" style="width: 90px;">In Stock</span>
        </tr>

        <tr>
        <td class="text-center">B01</td>
        <td class="text-center">Branch 2</td>
        <td class="text-left">Chunky Chain Medium</td>
        <td class="text-left">Bags</td>
        <td class="text-center">5</td>
        <td class="text-center"><span class="badge badge-pill badge-warning" style="width: 90px;">Reorder</span>
        </tr>            

        </tbody>
        </table><br>
     </div>
  </div>
</div>  


  </body>
</html>
