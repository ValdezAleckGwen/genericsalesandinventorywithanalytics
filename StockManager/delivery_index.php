<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARCI - Delivery Order</title>
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
        <h3>DELIVERY ORDER</h3>
          <div style="display: inline;">
            <a href="adddeliveryorder.php"><button type="button" class="btn btn-primary" style="font-size: 16px; font-weight: 700;"><i class="fa-solid fa-circle-plus"></i> Add</button></a>
            <button type="button" class="btn btn-dark" style="font-size: 16px; font-weight: 700;"><i class="fa-solid fa-print"></i> Print</button>
            <button type="button" class="btn btn-success" style="font-size: 16px; font-weight: 700;"><i class="fa-regular fa-circle-check"></i> Save</button>            
          </div>
          <div style="float: right;">
            <label><span>Search: </span><input type="text" class="input-field" name="field3" value=""/></label>
          </div>
        </div>
        <table class="table-fill">
        <thead>
        <tr>
        <th class="text-center">Delivery Order I.D.</th>
        <th class="text-center">Purchase Order I.D.</th>
        <th class="text-center">Supplier Name</th>
        <th class="text-center">Total</th>
        <th class="text-left">Action</th>
        </tr>
        </thead>
        <tbody class="table-hover">

        <tr>
        <td class="text-center">DO001</td>
        <td class="text-center">PO001</td>
        <td class="text-left">Jon Geoffrey</td>
        <td class="text-center">0</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO002</td>
        <td class="text-center">PO002</td>
        <td class="text-left">Lesley Katelyn</td>
        <td class="text-center">22</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO003</td>
        <td class="text-center">PO003</td>
        <td class="text-left">Sofia Tranquilla</td>
        <td class="text-center">19</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO004</td>
        <td class="text-center">PO004</td>
        <td class="text-left">Shop Thrifty</td>
        <td class="text-center">13</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO005</td>
        <td class="text-center">PO005</td>
        <td class="text-left">Kirsten Clothing</td>
        <td class="text-center">31</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO006</td>
        <td class="text-center">PO006</td>
        <td class="text-left">AMARAH</td>
        <td class="text-center">27</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>

        <tr>
        <td class="text-center">DO007</td>
        <td class="text-center">PO007</td>
        <td class="text-left">Kira Monica</td>
        <td class="text-center">0</td>
        <td class="text-center"> <i class="fa-solid fa-circle-minus"></i> <i class="fa-solid fa-pen-to-square"></i></td> 
        </tr>      

        </tbody>
        </table>
     </div>
  </div>
</div>   


  </body>
</html>
