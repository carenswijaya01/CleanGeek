<?php
    require('conn.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $addrres = $_POST['address'];
        $query    = "INSERT into register VALUES ('', '$username', '" . md5($password) . "', '$addrres')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Orders.html'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="address" placeholder="address">
        <input type="submit" name="submit" value="Register" class="login-button">
       
    </form>
<?php
    }
?>