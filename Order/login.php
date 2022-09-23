<?php 
session_start();
include_once('conn.php');
$database = new database();
 
if(isset($_SESSION['is_login']))
{
    header('location: OrdersLogin.html');
} 
 
if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location: OrdersLogin.html');
}
 
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($username,$password,$remember))
    {
      header('location: OrdersLogin.html');
    }
}
?>