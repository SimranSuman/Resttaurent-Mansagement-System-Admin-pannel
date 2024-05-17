<?php

$img = $row['img'];
$item_name = $row['item_name'];
$Description = $row['Description'];
$price = $row['price'];

include 'sqlconnect.php';

if(isset($_POST['submit'])) {
    $sql= "UPDATE add_items set img='$img , item_name= $item_name , Description= $Description , price= $price";
    if($con->query($sql)==true) {
        echo "Data update sucessfully!";

    } else {
         echo $con->error;
    }
}