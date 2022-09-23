<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cleangeekdb');

//dapetin variabel dari orderslogin
$Service = $_POST['Service'];
$Price = (int) substr($_POST['Price'],4,3)*1000;
$Date = $_POST['Date'];
$Address = $_POST ['Address'];
$Status = "In Progress";



//cari lokasi dan value userid
$id = $_SESSION['users'];
$user_id_temp = " select User_id from usertables where Email = '$id'";
$user_id_index = mysqli_query($con, $user_id_temp);
$userid = 0;
while($row = mysqli_fetch_array($user_id_index)) {
  $userid = $row['User_id'];
}

$sql = "insert into orders values (null, '$userid', '$Service', $Price, '$Date', '$Address', '$Status')";

mysqli_query($con,$sql);

echo "<script>
alert('Your order has been created');
window.location.href='OrdersLogin.php';
</script>";

?>