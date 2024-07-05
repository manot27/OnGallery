<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
 <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCOHEST-COMMITMENT-TO-SUCCESS</title>        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"><!-- comment -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-7tMzX3A9SiGY84BkqWXJY28PEnzJlYvKT7Em+jzXfWqvfyXfYo8z3lDY/BbJtUz/Yxj" crossorigin="anonymous">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <style>
       
        .navbar-brand {
            margin-right: 0;
        }
        .navbar-brand img {
            width: 80px;
        }
        @media screen and (min-width: 768px) {
            .navbar-brand img {
                width: 100px;
            }
            .navbar .container-fluid {
                flex-direction: column;
            }
            .navbar .navbar-nav .nav-item {
                padding: 0.5em 1em;
            }
            .navbar-nav {
                border-bottom: 2px solid #fff;
            }
        }

        .navbar .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.1em;
        }
        .navbar .navbar-nav {
            border-top: 2px solid #fff;
            margin-top: 0.5em;
        }
        .d-block{
            height: 55vh;
        }
        
        .social-media-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media-icon {
            margin: 0 10px;
            color: #333;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-media-icon:hover {
            color: #4CAF50;
        }
        
        .container {
  display: flex;
  width: 100%;
  padding: 4% 2%;
  box-sizing: border-box;
  height: 100vh;
}

.box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}

.box > img {
  width: 200%;
  height: calc(100% - 10vh);
  object-fit: cover; 
  transition: .5s;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 10vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 50%; }
.box:hover > img {
  width: 100%;
  height: 100%;
}
body {
  background-color: orange;
  padding: 20px;
  font-family: Arial;
}
 
    </style>

    <body>
        
         <nav class="navbar navbar-expand-md navbar-dark" style="background-color:orange">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/dand3.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/PALM4A.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="./images/PALM6A.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/PALM5A.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev btn-warning" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn-warning" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 bg-white">
    <img
      src="./images/imma2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="./images/imma2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0 bg-white">
    <img
      src="./images/imma2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="./images/imma2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

    <div class="col-lg-4 mb-4 mb-lg-0 bg-white">
        <img
            src="./images/imma2.jpg"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Waves at Sea"
            />

        <img
            src="./images/imma2.jpg"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Yosemite National Park"
    />
  </div>
</div>

        
        <div class="social-media-icons">
            <a href="https://wa.me/1234567890" target="_blank" class="social-media-icon whatsapp-icon">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/username/" target="_blank" class="social-media-icon instagram-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/username" target="_blank" class="social-media-icon twitter-icon">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        
  <div class="row">
    <div class="col-md-4 bg-white">
      <div class="thumbnail">
          <img src="./images/imma10.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <h6>FRONT FACE</h6>
            <p class="gallery-price"><b>Price </b>$199.99</p>
                  <button  class=" btn-primary col-md-2" style="font-size:8pt">Apply</button>

          </div>
                <hr>
      </div>
    </div>
    <div class="col-md-4 bg-white">
      <div class="thumbnail">
          <img src="./images/imma10.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <h6>FRONT FACE</h6>
            <p class="gallery-price"><b>Price </b>$199.99</p>
                  <button  class=" btn-primary col-md-2" style="font-size:8pt">Apply</button>

            <hr>

          </div>
      </div>
    </div>
      
      
   <div class="col-md-4 bg-white">
      <div class="thumbnail">
          <img src="./images/imma10.jpg" alt="Nature" style="width:100%; height: 50%">
          <div class="caption">
            <h6>FRONT FACE</h6>
            <p class="gallery-price"><b>Price </b>$199.99</p>
                  <button  class=" btn-primary col-md-2" style="font-size:8pt">Apply</button>

          </div>
                <hr>
      </div>
    </div>

  </div>
              <?php include_once './gallery1.php';?>
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="../js/bootstrap.bundle.js"></script>
    </body>
</html>
