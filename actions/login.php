<?php
    session_start();
    ob_start();
    if(isset($_POST['email']) && isset($_POST['password'])) {

        
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "salesandinventory";

        $connection = mysqli_connect($hostName, $userName, $password, $dbName);
        if (!$connection) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM tblusers WHERE emailAddress = '" . $_POST['email'] . "' AND password  = '" . $_POST['password'] . "'";

        $result = mysqli_query($connection, $sql);
        
        if(!$result || mysqli_num_rows($result) == 0)
        { 
            echo "<h1>Invalid Credentials.</h1>";
        } 
        else 
        {
            
            while ($row = mysqli_fetch_assoc($result)) 
                      {
                        $permission = $row["permission"];
                        $_SESSION['firstname'] = $row["firstname"];
                      }
            
            if ($permission == 1) {
                header('location: ../admin/dashboard_index.php');
                exit();
            } else if ($permission == 2) {
                header('location: ../cashier/pos_index.php');
            } else {
                header('location: ../stockmanager/stock_index.php');
            }
            mysqli_close($connection);
        }
    } 

?>