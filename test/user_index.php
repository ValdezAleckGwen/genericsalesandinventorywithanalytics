<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARCI - Users</title>
    <link rel="stylesheet" href="../admin/assets/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
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

    
    <div class="usericon">Admin <i class="fa-regular fa-user"></i></div>
    
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
        <h3>USERS</h3>
          <div style="display: inline;">
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal"> Add</button>
            <button type="button" class="btn btn-success" style="font-size: 16px; font-weight: 700;"><i class="fa-regular fa-circle-check"></i> Save</button>
          </div>
          <div style="float: right;">
            <label><span>Search: </span><input type="text" name="search_box" id="search_box" value=""/></label>
          </div>
        </div>
        
        <div class="table-responsive" id="dynamic_content">
          

        </div>

     </div>
  </div>
</div>


<div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="saveStudent">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">ID</label>
                    <input type="text" name="id" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">FIRST NAME</label>
                    <input type="text" name="firstname" class="form-control" />
                </div>

                 <div class="mb-3">
                    <label for="">LAST NAME</label>
                    <input type="text" name="lastname" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">EMAIL ADDRESS</label>
                    <input type="text" name="email" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">PASSWORD</label>
                    <input type="text" name="password" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">PERMISSION</label>
                    <input type="text" name="permission" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">BRANCH</label>
                    <input type="text" name="branch" class="form-control" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Student</button>
            </div>
        </form>
        </div>
    </div>
</div>



  </body>
</html>
<script>
  $(document).ready(function(){
    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"../actions/fetchuser.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });

          $(document).on('submit', '#saveStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);

            $.ajax({
                type: "POST",
                url: "../actions/adduser.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });
</script>