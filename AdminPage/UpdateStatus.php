<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cleangeekdb');


$id=$_GET['id'];

$s = " update orders set Statuss = 'Completed' where Order_id = '$id'";

//$result = mysqli_query($con, $s);
//$num = mysqli_num_rows($result);

if(mysqli_query($con, $s)) {
        
        header('location:../AdminPage/AdminAll.php');
    } 
?>
?>