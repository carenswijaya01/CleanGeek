<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cleangeekdb');

$id = $_SESSION['users'];
//echo $id;

/*Nyiapin sql*/
$FirstName_Temp = " select First_Name from usertables where Email = '$id'";
$LastName_Temp = " select Last_Name from usertables where Email = '$id'";

/*Dapetin indeks row ke berapa*/
$FirstNameIndex = mysqli_query($con, $FirstName_Temp);
$LastNameIndex = mysqli_query($con, $LastName_Temp);

/*Variabel*/
$FirstName = "";
$LastName = "";

/*Retrieve Data Dapetin Row*/
while($row = mysqli_fetch_array($FirstNameIndex)) {
  $FirstName = $row['First_Name'];
}
while($row = mysqli_fetch_array($LastNameIndex)) {
  $LastName = $row['Last_Name'];
}

//echo $FirstName, $LastName;
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../Services/styleservice.css" rel="stylesheet">
    <link href="orderlogin.css" rel="stylesheet">

    <title>CleanGeek</title>
  </head>
  <body>
    <!---Bottom to Top Feature start-->
        <a href="#" class="to-top">
          <i class="fas fa-chevron-up"></i>
        </a>
        <script src="../Function/bottomtop.js"></script>
    <!---Bottom to Top Feature end-->
    
    <!--ini navbar -->
    <header>
      <nav>
          <input id="nav-toggle" type="checkbox">   
          <div class="logo" ><a href="../Home/Home.html"><img src="../Navbar/Logo_Clean.png" height="30px"></a></div>      
          <ul class="links">
              <li><a href="../Services/ServiceLogin.php">Services</a></li>
              <li><a href="../Location/LocationLogin.html">Locations</a></li>
              <li><a href="../Gallery/GalleryLogin.html">Gallery</a></li>
              <li><a href="../Status/StatusLogin.php">Status</a></li>
              <li class="active"><a href="../Order/OrdersLogin.php">Order</a></li>
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

    <!--Form-->
    <script src="orderlogin.js"></script>
    <section class="order-form my-4 mx-4">
      <form action="orderform.php" method = "post">
      <div class="container pt-4"> 
        <div class="row">
          <div class="col-12">
            <h1>CleanGeek Order Form</h1>
            <hr class="mt-1">
          </div>
          <div class="col-12">
  
            <div class="row mx-4">
              <div class="col-12 mb-2">
                <label class="order-form-label">Name</label>
              </div>
              <div class="col-12 col-sm-6">
                <input class="order-form-input" name="First_Name" value="<?php echo $FirstName;?>" style = "pointer-events: none;" >
              </div>
              <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                <input class="order-form-input" name="Last_Name" value="<?php echo $LastName;?>" style = "pointer-events: none;" >
              </div>
            </div>
  
            <div class="row mt-3 mx-4">
              <div class="col-12">
                <label class="order-form-label">Type of Service you want to order</label>
              </div>

            <div class="form-group">
              <select class="form-control" name="Service" id="opsiServis">

                <option select="selected">Select Your Service...</option>
                <option value="Fast Cleaning">Fast Cleaning</option>
                <option value="Deep Cleaning (Normal)">Deep Cleaning (Normal)</option>
                <option value="Deep Cleaning (Hard)">Deep Cleaning (Hard)</option>
                <option value="Unyellowing">Unyellowing</option>
                <option value="Boost Repaint">Boost Repaint</option>
              </select>
            </div>
            </div>
          
            <div class="row mt-3 mx-4" >
              <div class="col-12">
                <label class="order-form-label">Price</label>
              </div>
              <div class="col-12">
                <input id="cetak" name="Price" style = "pointer-events: none;" >
              </div>
            </div>
  
            <script>
              document.getElementById("opsiServis").addEventListener("change", function(e) {
                var cetakHarga = document.getElementById("cetak");
                var harga = 0;
                if (this.value == "Fast Cleaning") {
                  harga = 30;
                } else if (this.value == "Deep Cleaning (Normal)") {
                  harga = 25;
                } else if (this.value == "Deep Cleaning (Hard)") {
                  harga = 50;
                } else if (this.value == "Unyellowing") {
                  harga = 50;
                } else if (this.value == "Boost Repaint") {
                  harga = 60;
                }
                cetakHarga.value = "Rp. "+harga+".000,00";
              }, false);
            </script>

            <div class="row mt-3 mx-4">
              <div class="col-12">
                <label class="order-form-label">Date</label>
              </div>
              <div class="col-12">
                 <input id="tanggal" name="Date" style = "pointer-events: none;">

              </div>
            </div>

            <script>
            var d = new Date();
            document.getElementById("tanggal").value = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate() ;
            </script>

            <div class="row mt-3 mx-4">
              <div class="col-12">
                <label class="order-form-label">Address</label>
              </div>
              <div class="col-12">
                <input class="order-form-input" name="Address" placeholder="Street Address" required>
              </div>
  
  
            <div class="row mt-3">
              <div class="col-12">
                <button type="Submit" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </form>
    </section>
    <!--Form-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
  
  <footer class="text-center text-white bg-light">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-3">
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.instagram.com/cleangeek.id"
          role="button"
          data-mdb-ripple-color="dark"
        
         ><img src="../Footer/Logo_Instagram.png"  width="35" style="margin: 0px; " 
        ></a>

        <!-- Whatsapp -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://wa.link/h4qlkm"
          role="button"
          data-mdb-ripple-color="dark"
           ><img src="../Footer/Logo_WA.png" width="35" style="margin: 25px"
          
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://twitter.com/"
          role="button"
          data-mdb-ripple-color="dark"
         ><img src="../Footer/Logo_Twitter.png" width="35" style="margin-left: 0px" 
        ></a>
  
        <!-- Google Maps -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.google.co.id/maps/place/Ruko+Sorrento+Place/@-6.2604391,106.6285559,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fb95f59f2119:0x98d5b60c1ad18c0c!8m2!3d-6.2604444!4d106.6307446" 
          role="button"
          data-mdb-ripple-color="dark"
          ><img src="../Footer/marker_map.png" width="35" style="margin-left: 20px" 
        ></a>
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.facebook.com/marcello.evan.5/"
          role="button"
          data-mdb-ripple-color="dark"
        ><img src="../Footer/Logo_Facebook.png" width="35" style="margin-left: 20px" 
        ></a>
      </section>
      <!-- Section: Social media -->
      <section class="mb-3">
        <a class="foot-link" href="../Team/TeamLogin.html" ><font color="black"><b>Our Team</b></font></a>
      </section >
    </div>
    <!-- Grid container -->
  
<!-- Copyright -->
<div class="text-center text-dark p-3 bg-light">
  © 2021 Cleangeek.
</div>
<!-- Copyright -->
  </footer>
</html>
