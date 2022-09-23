<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cleangeekdb');

$Email = @$_POST ['user'];
//$name = (isset($_POST['user']) ? $_POST['user'] : null);

$Password = $_POST ['password'];
$hashed = hash('sha512', $Password);

/*Transfer data Email*/
$_SESSION['users'] = $Email;


$s = " select * from usertables where Email = '$Email' && password =  '$hashed'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($Email == "admin@cleangeek.com" && $Password == "admin"){
    header('location:../AdminPage/AdminAll.php');
    }else if($num > 0 ) {
    
        header('location:../Services/ServiceLogin.php');
    
    } else
    {
        header('location:loginpage.php');
    }
    
?>