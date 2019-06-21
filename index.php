<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<h2 style="text-align:center">On Sale!</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="pictures/cover.png">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="pictures/wallpaper.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    












<div class="allcontain">
  <div class="feturedsection">
    <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
  </div>
  <div class="feturedimage">
    <div class="row firstrow">
      <div class="col-lg-6 costumcol colborder1">
        <div class="row costumrow">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
            <img src="image/featurporch.jpg" alt="porsche">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
            <div class="featurecontant">
              <h1>LOREM IPSUM</h1>
              <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt </p>
              <h2>Price &euro;</h2>
              <button id="btnRM" onclick="rmtxt()">READ MORE</button>
              <div id="readmore">
                  <h1>Car Name</h1>
                  <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                  </p>
                  <button id="btnRL">READ LESS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 costumcol colborder2">
        <div class="row costumrow">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
            <img src="image/featurporch1.jpg" alt="porsche1">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
            <div class="featurecontant">
              <h1>LOREM IPSUM</h1>
              <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt </p>
              <h2>Price &euro;</h2>
              <button id="btnRM2">READ MORE</button>
              <div id="readmore2">
                  <h1>Car Name</h1>
                  <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                  sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                  <button id="btnRL2">READ LESS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





<?php
include('footer.php');
?>