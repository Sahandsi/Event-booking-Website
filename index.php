<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" href="includes/css/mobile.css">
<link rel="stylesheet" href="includes/css/desktop.css">
<!-- this is breaking the responsive -->
<link rel="stylesheet" href="includes/css/slidingimg.css">

<!-- <link rel="stylesheet" href="includes/css/main.css"> -->
<link rel="stylesheet" href="includes/css/nav.css">
<!-- this is breaking the responsive -->
<!-- <link rel="stylesheet" href="includes/css/imagetext.css"> -->
<!--[if IE]><link rel="shortcut icon" href="includes/images/favicon.ico"><![endif]-->
<link rel="icon" href="includes/images/favi.png">
<!--Start Cookie Script--> <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/5a1a1bdd14a6881e8702b226f7c869f2.js"></script> <!--End Cookie Script-->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<!-- this is breaking the slider -->
<link rel="stylesheet" href="includes/css/index.css" >
<title>Welcome to Event Master!</title>
</head>
<body>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="index.php"><img src="includes/images/logo.png" alt="logo" /></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li><a href="index.php">Home</a> </li>
        <li><a href="about.php">About</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="booking.php">Book Now / Register</a></li>
        <li><a href="bookEvent.php">Book Event</a></li> 
    </nav>
  </div>
</section>
<!-- THIS IS CODE FOR THE PHOTO SLIDER -->
<style>
body {
    font-family: Arial;
    margin: 0;
    background-color: #838080a1;
  }
  </style>
<div class="w3-content" style="max-width:100%">
  <img class="mySlides" src="includes/images/4.jpg" style="width:100%">
  <img class="mySlides" src="includes/images/2.jpg" style="width:100%">
  <img class="mySlides" src="includes/images/3.jpg" style="width:100%">


  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="includes/images/4.jpg" style="width:100%" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="includes/images/2.jpg" style="width:100%" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="includes/images/3.jpg" style="width:100%" onclick="currentDiv(3)">
    </div>

  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<!-- END OF THE CODE FOR THE PHOTO SLIDER -->

<!-- Beinnignof soemthing -->
<div class="jumbotron">
    <h2>PRVATE AIR CHARTER</h2>
    <p class="lead">Private Jet is the leading jet leasing company and the way to make your travel easy and fast.</p>
    <p><a href="http://asp.net" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
</div>





<div class="social">

<!-- THIS IS FOR TWITTER INTEGRATION -->
<blockquote class="twitter-tweet"><p lang="en" 
dir="ltr">Sunsets don&#39;t get much better than this one over <a href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>.
 <a href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a> <a href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a> 
 <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5, 2014</a></blockquote> 
 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>

<div class="social">
<!-- THIS IS FOR TWITTER INTEGRATION -->
<iframe width="420" height="315"
src="https://www.youtube.com/embed/XGSy3_Czz8k">
</iframe>
<!-- FACEBOOK INTEGRATION -->
</div>

<script src="includes/js/jquery-3.2.1.js"></script>
<script src="includes/js/main.js"></script>
<script src="includes/js/slidingphoto.js"></script>
<script src="includes/js/nav.js"></script>


</body>
</html>

