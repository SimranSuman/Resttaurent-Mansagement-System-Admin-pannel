<?php
$email_id= null;
$pass = null;
$dob = null;

//if (isset($_POST['submit'])) {
    $email_id = $_POST['email_id'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];

    include 'sqlconnect.php';
    $sql = "UPDATE adminlogin set pass='$pass' where email_id='$email_id' and dob='$dob'";
    if ($con->query($sql) == true) {
       echo " Your Password has Reset!";
    } else {
        echo $con->error;
    }
//}
?>