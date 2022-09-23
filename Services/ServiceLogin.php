<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="styleservice.css" rel="stylesheet">

    <title>CleanGeek</title>

    <!--CSS Gallery Lightbox (Modal)-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          <div class="logo" ><a href="../Home/HomeLogin.html"><img src="../Navbar/Logo_Clean.png" height="30px"></a></div>      
          <ul class="links">
              <li class="active"><a href="../Services/ServiceLogin.php">Services</a></li>
              <li><a href="../Location/LocationLogin.html">Locations</a></li>
              <li><a href="../Gallery/GalleryLogin.html">Gallery</a></li>
              <li><a href="../Status/StatusLogin.php">Status</a></li>
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

<!--INI MODAL LIGHTBOX-->
 <!--Container-->
 <div class="container" style="margin-top: 60px; margin-bottom: -100px"> 
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <div class="card" style="width: 420px; height: auto;">
              <img src="shoes_1.png" style="width:100%;cursor:pointer" 
                 onclick="onClick(this)" class="w3-hover-opacity">
              <div class="card-text" >
                <h3>Fast Cleaning</h3>
                <h5>30K</h5>
              </div>
            </div>
          </div>      
        </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="col">
            <div class="member">
            <div class="card" style="width: 420px; height: auto;">
              <img src="shoes_2.png" style="width:100%;cursor:pointer" 
                 onclick="onClick(this)" class="w3-hover-opacity">
              <div class="card-text">
                <h3>Deep Cleaning (Normal)</h3>
                <h5>40K</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     &#160; 
  
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <div class="card" style="width: 420px; height: 420px;">
              <img src="service_3.jpg" style="width: 420px; height: 420px;cursor:pointer" 
                 onclick="onClick(this)" class="w3-hover-opacity">
              <div class="card-text" >
                <h3>Deep Cleaning (Hard)</h3>
                    <h5>50K</h5>
              </div>
            </div>
          </div>      
        </div>  
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="col">
            <div class="member">
            <div class="card" style="width: 420px; height: 420px;">
              <img src="service_4.jpg" style="width: 420px; height: 420px;cursor:pointer" 
                 onclick="onClick(this)" class="w3-hover-opacity">
              <div class="card-text">
                <h3>Unyellowing Midsole</h3>
                <h5>50K</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     &#160;
  
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <div class="card" style="width: 420px; height: 420px;">
              <img src="service_5.jpg" style="width: 420px; height: 420px;cursor:pointer" 
                 onclick="onClick(this)" class="w3-hover-opacity">
              <div class="card-text" >
                <h3>Boost Repaint</h3>
                <h5>60K</h5>
              </div>
            </div>
          </div>      
        </div>
    </div>

  </div>

  <!-- Tampilin modal start-->
  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img id="img01" style="width:100%">
    </div>
  </div>
  <!-- Tampilin modal end-->
  
  <!-- Script Modal start-->
  <script>
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
  }
  </script>
  <!-- Script Modal end-->
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

      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center text-dark p-3 bg-light">
        © 2021 Cleangeek.
      </div>
      <!-- Copyright -->
    </footer>
</html>
