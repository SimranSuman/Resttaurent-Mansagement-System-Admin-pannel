<?php
$Username = $_POST['Username'];
$email_id = $_POST['email_id'];
$dob = $_POST['dob'];
$pass = $_POST['pass'];

include "./sqlconnect.php";

$sql = "SELECT * FROM  adminlogin WHERE Username='$Username' And email_id='$email_id' AND dob='$dob' AND pass='$pass'";

$result = $con->query($sql);
if($result->num_rows>0) {

    //echo "<script>window.location.href='Index.html'</script>";
    header("Location:index.html");
} else {
       echo "login failed!";
}
$con->close();
?>