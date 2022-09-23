<?php
session_start();
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'cleangeek');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if ($dbconnect->connect_error) {
    die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}

if ( isset($_POST['uname']) && isset($_POST['psw']) ) {

    $sql_check = 
    "SELECT * FROM login WHERE uname=? AND Password=? LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $Username, $password);

    $Username = $_POST['uname'];
    $password = $_POST['psw'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {

        header('location: OrdersLogin.html');
        exit();

    } else {
        header('location: Orders.html ?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }


} else {
    header('location:Orders.html');
    exit();
}