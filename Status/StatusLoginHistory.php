<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'cleangeekdb');

//cari lokasi dan value userid
$id = $_SESSION['users'];
$user_id_temp = " select User_id from usertables where Email = '$id'";
$user_id_index = mysqli_query($con, $user_id_temp);
$userid = 0;
while ($row = mysqli_fetch_array($user_id_index)) {
  $userid = $row['User_id'];
}


/*Welcome Nama*/
/*Nyiapin sql*/
$FirstName_Temp = " select First_Name from usertables where Email = '$id'";

/*Dapetin indeks row ke berapa*/
$FirstNameIndex = mysqli_query($con, $FirstName_Temp);

/*Variabel*/
$FirstName = "";

/*Retrieve Data Dapetin Row*/
while($row = mysqli_fetch_array($FirstNameIndex)) {
  $FirstName = $row['First_Name'];
}

/**/
/*Nyiapin sql in progress*/
$order_id_Temp = " select Order_id from orders where Statuss = 'Completed' and User_id= '$userid'";
$service_Temp = " select Service from orders where Statuss = 'Completed' and User_id= '$userid'";
$price_Temp = " select Price from orders where Statuss = 'Completed' and User_id= '$userid'";
$request_date_Temp = " select Date from orders where Statuss = 'Completed' and User_id= '$userid'";
$address_Temp = " select Address from orders where Statuss = 'Completed' and User_id= '$userid'";
$status_Temp = " select Statuss from orders where Statuss = 'Completed' and User_id= '$userid'";

/*dapetin indeks row ke berapa*/
$order_id_Index = mysqli_query($con, $order_id_Temp);
$service_Index = mysqli_query($con, $service_Temp);
$price_Index = mysqli_query($con, $price_Temp);
$request_date_Index = mysqli_query($con, $request_date_Temp);
$address_Index = mysqli_query($con, $address_Temp);
$status_Index = mysqli_query($con, $status_Temp);

/*Variabel*/
$order_id = array(); /*integer data kosongan kasi 0*/
$service = array();
$price = array();
$request_date = array();
$address = array();
$status = array();

$i = 0; /*increment*/

/*Retrieve Data Dapetin Row*/
while($row = mysqli_fetch_array($order_id_Index)) {
  $order_id[$i] = $row['Order_id'];
 
  $i++;
}

$i = 0;
while($row = mysqli_fetch_array($service_Index)) {
    $service[$i] = $row['Service'];
    
    $i++;
}


$i = 0;
while($row = mysqli_fetch_array($price_Index)) {
    $price[$i] = $row['Price'];
    
    $i++;
}
    
$i = 0;
while($row = mysqli_fetch_array($request_date_Index)) {
    $request_date[$i] = $row['Date'];
        
    $i++;
}

$i = 0;
while($row = mysqli_fetch_array($address_Index)) {
    $address[$i] = $row['Address'];
        
    $i++;
}

$i = 0;
while($row = mysqli_fetch_array($status_Index)) {
    $status[$i] = $row['Statuss'];
        
    $i++;
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="stylestatus.css" rel="stylesheet">

  <title>CleanGeek</title>
</head>

<body>
  <!---Bottom to Top Feature start-->
  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <script src="../Function/bottomtop.js"></script>
  <!---Bottom to Top Feature end-->

  <!--ini navbar-->
  <header>
    <nav>
      <input id="nav-toggle" type="checkbox">
      <div class="logo"><a href="../Home/HomeLogin.html"><img src="../Navbar/Logo_Clean.png" height="30px"></a></div>
      <ul class="links">
        <li><a href="../Services/ServiceLogin.php">Services</a></li>
        <li><a href="../Location/LocationLogin.html">Locations</a></li>
        <li><a href="../Gallery/GalleryLogin.html">Gallery</a></li>
        <li class="active"><a href="../Status/StatusLogin.php">Status</a></li>
        <li><a href="../Order/OrdersLogin.php">Order</a></li>
        <div class="button">
          <a href="../Order/login.html">
            <button style="background-color: black; padding: 10px 30px; color:white">Logout</button>
          </a>
        </div>
      </ul>
      <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </label>
    </nav>
  </header>

  <div id="all-order" style="margin-bottom: 50px; margin-top: 50px;">
    <!--<div containeradminsearch class="container" style="margin-top: 50px;">
          <div class="input-group">
          <input type="text" id="mySearch" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                  <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
              </span>
          </div>
      </div>-->

    <!--Ini Nyoba Search-->
    <script>
      function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("div");

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("div")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    </script>
    
    <!--Ini Welcome-->
    <div class="container">
      <h2 style="padding-top:20px">Welcome, <span id="names"></span></h2>
    </div>

    <script>
      let namadepan = "<?php echo $FirstName;?>";
      document.getElementById("names").innerHTML = namadepan;
    </script>
    
    <br>
    <div containerorderstatus class="container" style="padding-bottom: 13px;">
      <div class="grid-container">
        <div class="grid-header">Order ID</div>
        <div class="grid-header">Service Name</div>
        <div class="grid-header">Request Date</div>
        <div class="grid-header">Price</div>
        <div class="grid-header">Address</div>
        <div class="grid-header">Status</div>
      </div>
    </div>

    <!--<div containerorderstatus class="container">
        <div class="grid-container-item">
            <div class="grid-item">1</div>
            <div class="grid-item">YTellowing</div>
        </div>              
    </div>-->
  </div>

  <br>

  <script>
    var targetid = document.getElementById('all-order');

    var banyakData = <?php echo $i; ?>;
    //window.alert (banyakData);

    var orderid = <?php echo json_encode($order_id); ?>;
    var service = <?php echo json_encode($service); ?>;
    var date = <?php echo json_encode($request_date); ?>;
    var price = <?php echo json_encode($price); ?>;
    var address = <?php echo json_encode($address); ?>;
    var status = <?php echo '["' . implode('", "', $status) . '"]' ?>;

    for (var i = 0; i < banyakData; i++) {
        targetid.innerHTML += '<div containerorderstatus class="container"><div class="grid-container-item"><div class="grid-item" id="myMenu">' + orderid[i] + '</div><div class="grid-item">' + service[i] + '</div><div class="grid-item">' + date[i] + '</div><div class="grid-item">' + "Rp. "+(price[i]/1000)+".000,00" + '</div><div class="grid-item">' + address[i] + '</div><div class="grid-item">' + status[i] + '</div></div></div>';
    };
  </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <div style="text-align: center; padding-bottom: 30px">
            <a href="../Status/StatusLogin.php"><button style="background-color:black; color:white; padding: 10px 20px" >In Progress</button></a>
        </div>

</body>

<!---Footer-->
<footer class="text-center text-white bg-light">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-3">
      <!-- Instagram -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/cleangeek.id" role="button" data-mdb-ripple-color="dark"><img src="../Footer/Logo_Instagram.png" width="35" style="margin: 0px; "></a>

      <!-- Whatsapp -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://wa.link/h4qlkm" role="button" data-mdb-ripple-color="dark"><img src="../Footer/Logo_WA.png" width="35" style="margin: 25px"></a>

      <!-- Twitter -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://twitter.com/" role="button" data-mdb-ripple-color="dark"><img src="../Footer/Logo_Twitter.png" width="35" style="margin-left: 0px"></a>

      <!-- Google Maps -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.google.co.id/maps/place/Ruko+Sorrento+Place/@-6.2604391,106.6285559,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fb95f59f2119:0x98d5b60c1ad18c0c!8m2!3d-6.2604444!4d106.6307446" role="button" data-mdb-ripple-color="dark"><img src="../Footer/marker_map.png" width="35" style="margin-left: 20px"></a>
      <!-- Facebook -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/marcello.evan.5/" role="button" data-mdb-ripple-color="dark"><img src="../Footer/Logo_Facebook.png" width="35" style="margin-left: 20px"></a>
    </section>
    <!-- Section: Social media -->
    <section class="mb-3">
      <a class="foot-link" href="../Team/TeamLogin.html">
        <font color="black"><b>Our Team</b></font>
      </a>
    </section>
  </div>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3 bg-light">
    © 2021 Cleangeek.
  </div>
  <!-- Copyright -->

</html>