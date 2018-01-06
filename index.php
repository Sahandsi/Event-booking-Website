

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" href="includes/css/mobile.css">
<link rel="stylesheet" href="includes/css/desktop.css">
<link rel="stylesheet" href="includes/css/slidingimg.css">
<link rel="stylesheet" href="includes/css/nav.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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

<div class="w3-content">
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


<!-- END OF THE CODE FOR THE PHOTO SLIDER -->

<!-- Beinnignof soemthing -->
<div class="main">
    <h2>WHO ARE WE?</h2>
    <p class="lead">Great Events is the number one platform in the in market for making the concert you always desire,
     you need to register with us before making any booking but dont worry we will not keep sending you those annoying emails! </p>

</div>

<!--Start Cookie Script--> 
<script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/5a1a1bdd14a6881e8702b226f7c869f2.js"></script> 
<!--End Cookie Script-->
<script src="includes/js/jquery-3.2.1.js"></script>
<script src="includes/js/main.js"></script>
<script src="includes/js/slidingphoto.js"></script>
<script src="includes/js/nav.js"></script>
</body>
</html>

