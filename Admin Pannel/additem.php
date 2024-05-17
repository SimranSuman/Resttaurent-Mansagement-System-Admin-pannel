<?php
$img = $_POST['img'];
$item_name = $_POST['item_name'];
$descrip = $_POST['descrip'];
$price = $_POST['price'];

include "./sqlconnect.php";

$sql = "INSERT INTO add_items(img,item_name,descrip,price) VALUES ('$img','$item_name','$descrip','$price')";

if($con->query($sql)==true) {
    echo "Add item sucessfully!"; 
} else {
    echo $con->error;
}

$con->close();
?>