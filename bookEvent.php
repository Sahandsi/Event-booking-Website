<?php 
include('includes/db.php');
$sql = "SELECT eventID, eventName, date FROM events ORDER BY eventName ASC";
$stmt = $mysqli->query($sql);
?>
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


<form action="bookEventdb.php" method="POST">
<label for="event">Select Event</label>
<select name="event" id="event">

<?php while ($row = $stmt->fetch_assoc()) {
// show events greater than today
//if ($row['date'] > date("Y-m-d")) 
    echo("<option value = '" . $row['eventID'] . "'>" . $row['eventName'] ."</option>"); 
}
?>
</select>

    <label for ="forename">Forename</label>
    <input type="text" name =forename id="forename"  required>

    <p>
        
        <label for ="surname">Surname</label>
        <input type="text" name =surname id="surname"  required>
    </p>

    <p>
        
        <label for ="email">Email</label>
        <input type="email" name =email id="email"  required>
    </p>

    <p>
        <!-- date of birth  -->
        <label for="date">DOB</label>
        <input type="text" id = "date" name="date" required>
    </p>
    <p><input type="submit" value="Submit"></p>


</form>