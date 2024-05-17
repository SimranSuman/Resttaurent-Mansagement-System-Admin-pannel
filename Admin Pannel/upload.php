<?php
if($_FILES["file"]["name"]!='')
{
    $test = explode(".",$_FILES["file"]["name"]);
    $extension = end($test);
    $name = rand(100,999).'.'.$extension;
    $locarion = './upload/'.$name;
    move_uploaded_file($_FILES["file"]["tenp_name"],$location);
    //echo '<img src="'.$location.'" h
}
?>