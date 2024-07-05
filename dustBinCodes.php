<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCOHEST-COMMITMENT-TO-SUCCESS</title>        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"><!-- comment -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-7tMzX3A9SiGY84BkqWXJY28PEnzJlYvKT7Em+jzXfWqvfyXfYo8z3lDY/BbJtUz/Yxj" crossorigin="anonymous">
    </head>
    <style>
        body{
            background-color: transparent;
        }
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
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .gallery-item {
            width: calc(33.333% - 20px);
            margin-bottom: 20px;
        }

        .gallery-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .gallery-info {
            text-align: center;
        }

        .gallery-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .gallery-description {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .gallery-price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 0;
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
 
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
    </style>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color:dimgray">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://codingyaar.com/wp-content/uploads/logo-1.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contact</a>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="container">
  <div class="box">
    <img src="./images/imma2.jpg">
    <span>CSS</span>
    <span>CSS</span>
    <p>CSS</p>
  </div>
  <div class="box">
    <img src="./images/imma12.jpg">
    <span>Image</span>
    <span>Image</span>
  </div>
  <div class="box">
    <img src="./images/imma16.jpg">
    <span>Hover</span>
  </div>
  <div class="box">
    <img src="./images/imma10.jpg">
    <span>Effect</span>
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
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="./images/imma6.webp" alt="Image 1" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 1 Title</h3>
                    <p class="gallery-description">This is a description of Image 1.</p>
                    <p class="gallery-price">$99.99</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="./images/imma1.jpg" alt="Image 2" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 2 Title</h3>
                    <p class="gallery-description">This is a description of Image 2.</p>
                    <p class="gallery-price"><b>Price </b>$199.99</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="./images/imma2.jpg" alt="Image 3" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 3 Title</h3>
                    <p class="gallery-description">This is a description of Image 3.</p>
                    <p class="gallery-price">$299.99</p>
                </div>
            </div>
        </div>
        
        
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="./images/imma3.webp" alt="Image 1" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 1 Title</h3>
                    <p class="gallery-description">This is a description of Image 1.</p>
                    <p class="gallery-price">$99.99</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="./images/imma4.webp" alt="Image 2" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 2 Title</h3>
                    <p class="gallery-description">This is a description of Image 2.</p>
                    <p class="gallery-price">$199.99</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="./images/imma5.jpg" alt="Image 3" class="gallery-image">
                <div class="gallery-info">
                    <h3 class="gallery-title">Image 3 Title</h3>
                    <p class="gallery-description">This is a description of Image 3.</p>
                    <p class="gallery-price">$299.99</p>
                </div>
            </div>
        </div>
        
        <!-- MAIN (Center website) -->
<div class="main">

<h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="./images/imma12.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="./images/imma16.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="./images/imma10.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="./images/imma15.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="./images/imma16.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="./images/imma13.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="./images/imma11.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="./images/imma13.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="./images/imma14.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

        
        <p class="mt-5 text-center">Get a step-by-step written explanation here: <a href="https://codingyaar.com/responsive-bootstrap-navbar-with-logo-centered-above-navbar/" target="_blank">Bootstrap Navbar With Logo Centered Above Navbar</a> </p>

        <p class="mt-5 text-center">Get a step-by-step video explanation here: <a href="https://youtu.be/PjWu3GAhgNo" target="_blank">Bootstrap Navbar With Logo Centered Above Navbar</a> </p>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="../js/bootstrap.bundle.js"></script>
    </body>
</html>
