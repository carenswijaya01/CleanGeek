<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="loginstyle.css" rel="stylesheet">

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
            <div class="logo" ><a href="../Home/Home.html"><img src="../Navbar/Logo_Clean.png" height="30px"></a></div>     
            <ul class="links">
                <li><a href="../Services/Service.html">Services</a></li>
                <li><a href="../Location/Location.html">Locations</a></li>
                <li><a href="../Gallery/Gallery.html">Gallery</a></li>
                <li><a href="../Order/login.html">Status</a></li>
                <li><a href="../Order/login.html">Order</a></li>
                <div class="button">
                <a href="../Order/loginpage.php">
                  <button style="background-color: black; padding: 10px 30px; color:white">Login</button>
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
     

    <!--Login Form--->
    <div class="container" style="width:50%; margin-top:50px">
            <div class="Login-box">
            <div class="row">
                <div class="col-md-6" >
                <h2 style="text-align: center; padding-top: 30px;" > Login Here</h2>
                <form action="validation.php" method = "post">
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user" class="form=control" required>
                    </div>

                    <div class="form-group">
                    <label>Password</label>
                    <input type="Password" name="password" class="form=control" required>
                    </div>
                    <div style="text-align:center; padding-top:20px;">
                      <button type="submit" class="btn btn-primary btn-dark">Login</button>
                      <h5 style="padding-top:20px; padding-bottom:20px;">Don't have an account? <a href="../Order/registerpage.php">Create an account</a></h5>
                    </div>
                </form>
                </div>

            </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>

  <!---Footer-->
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
        <a class="foot-link" href="../Team/Team.html" ><font color="black"><b>Our Team</b></font></a>
      </section >
    </div>
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center text-dark p-3 bg-light">
      © 2021 Cleangeek.
    </div>
    <!-- Copyright -->
  </footer>
</html>
