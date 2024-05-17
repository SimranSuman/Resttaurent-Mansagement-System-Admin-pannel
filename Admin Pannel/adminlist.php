<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_List</title>
    <link rel="stylesheet" href="adminlist.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body id="body">
       <!-------------------------------navbar-------------------------------->
       <div class="dropdown">
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="#">RESERVATION <i class="fa-solid fa-caret-down"></i> </a>
                    <ul>
                        <li><a href="reservationlist.php">Reservation_List</a></li>
                        <li><a href="canclelist.php">Cancle_List</a></li>
                    </ul>
                </li>
                <li><a href="#">SHOW-ORDER <i class="fa-solid fa-caret-down"></i> </a>
                    <ul>
                        <li><a href="orderlist.php">Food_Order_List</a></li>
                        <li><a href="fodcancle.php">Order_Cancle_List</a></li>
                    </ul>
                </li>
                <li><a href="#">CUSTOMER <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="RegisterList.php">Register_List</a></li>
                        <!--<li><a href="customerlist.php">Customer List</a></li>-->
                        <li><a href="contactlist.php">Contact_List</a></li>
                        <li><a href="adminlist.php">Admin_List</a></li>
                    </ul>
                </li>
                <li><a href="#">MENU <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="addutem.html">Add_Items</a></li>
                        <li><a href="edit.php">Edit_Items</a></li>
                        <li><a href="showmenu.php">Show_Menu</a></li>
                    </ul>
                </li>
                <li><a href="#">PAYMENT <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#">Billing_Details</a></li>
                        <li><a href="#">Payment_Detail</a></li>
                    </ul>
                </li>
                <li><a href="loginreg.html">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
   <!------------------------------index--------------------------------------->
    <div class="contain">
        <center><h1><u><b>Adminlist</b></u></h1></center>
    </div>
    <br><br>
    <div>
        <?php
        include 'sqlconnect.php';
        $sql= "SELECT * FROM adminlogin";
        $result = $con->query($sql);
        if($result->num_rows>0) {
           // $row = $result->fetch_assoc();
            //session_start();
            //$_SESSION['img'] = $row['img'];
            //$_SESSION['item_name'] = $row['item_name'];
            //$_SESSION['Description'] = $row['Description'];
            //$_SESSION['price'] = $row['price'];

            echo '<table class="list" border="5" width="99%">';
            echo "<tr>";
            
            echo "   <th>A_id</th>";
            echo "   <th>Username</th>";
            echo "   <th>email_id</th>";
            echo "   <th>dob</th>";
            echo "   <th>pass</th>";

            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '  <td>' .$row["A_id"] . '</td>';
                echo '  <td>' .$row["Username"] . '</td>';
                echo '  <td>' .$row["email_id"] . '</td>';
                echo '  <td>' .$row["dob"] . '</td>';
                echo '  <td>' .$row["pass"] . '</td>';
                
            }
            echo "</table>";
        } else {
            echo "No data found";
        }
        $con->close();
        ?>
    </div>

     <!---------------------------------footer-use-------------------------->
    
     <div class="outer-footer">
       <center> @Copyright 2022 :- All Right Reserved</center>
    </div>
</body>
</html>