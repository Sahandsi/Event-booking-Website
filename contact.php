<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" href="includes/css/mobile.css">
<link rel="stylesheet" href="includes/css/desktop.css">
<link rel="stylesheet" href="includes/css/main.css">
<link rel="stylesheet" href="includes/css/nav.css">



<title>Contact Us</title>

  </head>
  <body>
</div> -->
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
    <a href="index.php"><img src="includes/images/logo.png" alt="logo" /></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="index.php"><span></span></a></div>
      <ul class="nav-list">
        <li><a href="index.php">Home</a> </li>
        <li><a href="#!">About</a></li>
        <li><a href="#!">Pricing</a></li>
        <li><a href="#!">Events</a><ul class="nav-dropdown"><li><a href="booking.php">Web Design</a></li>
            <li><a href="#!">London</a></li>
              <li><a href="#!">Manchester</a></li></ul></li>
        <li><a href="contact.php">Contact</a></li></ul>
    </nav>
  </div>
</section>

<!-- 
<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p> -->

<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <!-- <div class="col-25">
        <label for="fname">First Name</label>
      </div> -->
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-25">
        <label for="lname">Last Name</label>
      </div> -->
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-25">
        <label for="country">Country</label>
      </div> -->
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-25">
        <label for="subject">Subject</label>
      </div> -->
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClrPQzFA0YsRJqD1hBRRcJVKCc8dbpSow&callback=initMap">
    </script>

<script src="includes/js/jquery-3.2.1.js"></script>
<script src="includes/js/main.js"></script>
<script src="includes/js/map.js"></script>
<script src="includes/js/nav.js"></script>

  </body>
</html>