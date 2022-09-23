<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cleangeekdb');

$Email = @$_POST ['user'];
//$name = (isset($_POST['user']) ? $_POST['user'] : null);
$First_Name = @$_POST ['first'];
$Last_Name = @$_POST ['last'];
$Password = $_POST ['password'];

$s = " select * from usertables where Email = '$Email'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$hashed = hash('sha512', $Password);

if($num > 0 ) {
	$message = 'This is a message.';

    echo "<script>
		alert('Email Already Registered');
		window.location.href='registerpage.php';
		</script>";

} else
{
    $reg= " insert into usertables(Email,First_Name,Last_Name,Password) values('$Email' , '$First_Name' , '$Last_Name' , '$hashed')";
        mysqli_query($con, $reg);

		echo "<script>
		alert('Registration Successful');
		window.location.href='loginpage.php';
		</script>";
		
}

 ?>