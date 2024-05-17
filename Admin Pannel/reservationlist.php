<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link rel="stylesheet" href="ord.css">
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
        <center><h1><u><b>ReservationList</b></u></h1></center>
    </div>
    <br><br>
    <div>
        <?php
        include 'sqlconnect.php';
        $sql= "SELECT * FROM reservation where statu='A'";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            echo '<table class="list" border="8" width="99%">';
            echo "<tr>";
            
            echo "   <th>R_id</th>";
            echo "   <th>name</th>";
            echo "   <th>people</th>";
            echo "   <th>tableno</th>";
            echo "   <th>time</th>";
            echo "   <th>date</th>";
            echo "   <th>price</th>";
            echo "   <th>statu</th>";

            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '  <td>' .$row["R_id"] . '</td>';
                echo '  <td>' .$row["name"] . '</td>';
                echo '  <td>' .$row["people"] . '</td>';
                echo '  <td>' .$row["tableno"] . '</td>';
                echo '  <td>' .$row["time"] . '</td>';
                echo '  <td>' .$row["date"] . '</td>';
                echo '  <td>' .$row["price"] . '</td>';
                echo '  <td>' .$row["statu"] . '</td>';

                echo "</tr>";
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