<?php
$item_name = null;
$img = null;
$descrip = null;
$price = null;
$search_value = null;
if (isset($_POST['search'])) {
    $search_value = $_POST['search_value'];

    include 'sqlconnect.php';
    $sql = "select * from add_items Where  item_name='$search_value'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $img = $row['img'];
        $item_name = $row['item_name'];
        $descrip = $row['descrip'];
        $price = $row['price'];
    }
}

if (isset($_POST['submit'])) {
    $search_value = $_POST['search_value'];
    $img = $_POST['img'];
    $item_name = $_POST['item_name'];
    $descrip = $_POST['descrip'];
    $price = $_POST['price'];
    include 'sqlconnect.php';
    $sql = "UPDATE add_items set img='$img',item_name= '$item_name',descrip= '$descrip'
     , price= '$price' where item_name='$search_value'";
    if ($con->query($sql) == true) {
        echo "Data Update Sucessfully!";
    } else {
        echo $con->error;
    }
} elseif (isset($_POST['delete'])) {
    $search_value = $_POST['search_value'];
    include_once 'sqlconnect.php';
    $sql ="DELETE FROM add_items where item_name='$search_value'";
    if($con->query($sql)== true) {
        echo "Data Delete Sucessfully!";
    }else {
        echo $con->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Items</title>
    <link rel="stylesheet" href="edit.css">
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
    <!--------------------------------edit_item---------------------------------------------------->
    <div class="content">
        <center><h1><u><b>EditItems</b></u></h1></center>
    </div>
    <br><br>
    <form action="" method="post" class="column-flex">
    <div class="left-column"> 
        <div class="input-row">

            <div class="input-group">
                <b><label>Search</label></b>
                <input type="search" placeholder="search" name="search_value" id="search_value" value="<?= $search_value ?>" required>
                <br>
                <button type="submit" class="btn" name="search">search</button>

                <div class="input-group">
              <b><label>Image</label></b>
               <div class="box">
                <img src="#">
             </div>
             <input type="file" placeholder="img" name="img" id="img" value="<?= $img ?>"><br><br>
              <center><button type="submit" class="submit-btn" name="submit">EDIT ITEM</button></center>
              </div>
            </div>
    </form>

    <div class="right-column">
    <div class="input-group">
        <b><label>Item_Name</label></b>
        <br>
        <input type="text" placeholder="item_name" name="item_name" id="item_name" value="<?= $item_name ?>">
    </div>
    <br>
    <div class="input-group">
        <b><label>Description</label></b>
        <br>
        <!--<input row="5"  placeholder="write something" name="Description" required>-->
        <input type="textarea" width="5" placeholder="description" name="descrip" id="descrip" value="<?=$descrip ?>">
        <!--<textarea  rows="5" placeholder="write something" name="descrip"  id="descrip" value="<?=$descrip ?>"></textarea>-->
    </div>
    <br>
    <div class="input-group">
        <b><label>Price</label></b>
        <br>
        <input type="number" placeholder="price" name="price" id="price" value="<?= $price ?>">
        <br><br>
        <center><button type="submit" class="submit-btn" name="delete">DELETE ITEM</button></center> 
    </div>
    </div>
    <center><button type="submit" class="del-btn" name="cancle">CANCLE ITEM</button></center>
    </div>
     </div>
    </form>

    
    <div class="outer-footer">
        <center> @Copyright 2022 :- All Right Reserved</center>
     </div>
</body>
</html>