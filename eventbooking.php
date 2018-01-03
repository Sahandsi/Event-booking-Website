<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" href="includes/css/mobile.css">
<link rel="stylesheet" href="includes/css/desktop.css">
<link rel="stylesheet" href="includes/css/main.css">
<link rel="stylesheet" href="includes/css/form.css">
<link rel="stylesheet" href="includes/css/nav.css">
<link rel="stylesheet" href="includes/css/imagetext.css">
<link rel="stylesheet" href="includes/css/jquery-ui.css">



<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
        <li><a href="index.php" class="active">Home</a> </li>
        <li><a href="#!">About</a></li>
        <li><a href="#!">Pricing</a></li>
        <li><a href="#!">Events</a><ul class="nav-dropdown">
          <li><a href="#!">Edinburgh</a></li>
            <li><a href="eventbooking.php">London</a></li>
              <li><a href="#!">Manchester</a></li></ul></li>
        <li><a href="contact.php">Contact</a></li></ul>
    </nav>
  </div>
</section>
    
    
   <!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
   <!-- Button to open the modal -->
   <button onclick="document.getElementById('id02').style.display='block'">login</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="/Action.php">
    <!-- <div class="container">



<div class="container">
        <!-- where the text will go -->
        <h2 class="formHeader">Form Details Below</h2>
        <form action="Action.php" method="POST">
        <div class="text">
            <p>
                <!-- forename -->
                <label for ="forename">Forename</label>
                <input type="text" name =forename id="forename" placeholder="Add Forename">
            </p>
            <p>
                <!-- surname -->
                <label for ="surname">Surname</label>
                <input type="text" name =surname id="surname" placeholder="Add Surname">
            </p>
            <p> 
                <!-- gender -->
                <label for="gender">Gender</label>
                <input type="text" name =gender id="gender" placeholder="Add gender">
            </p>
            <p>
                <!-- email -->
                <label for ="email">Email</label>
                <input type="email" name =email id="email" placeholder="Add Email">
            </p>
            <p>
                <!-- telephone -->
                <label for ="telephone">Telephone</label>
                <input type="tel" name =telephone id="telephone" placeholder="Add Telephone Number">
            </p>
            <p>
                <!-- date of birth  -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<p>Date Of Birth: <input type="text" id="datepicker"></p>






      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>

<!-- The Modal (contains the Login form) -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
    <footer>
        <p>&copy Copyright 2018</p>
        <!-- <script src="includes/js/jquery-3.2.1.js"></script> -->
        <script src="includes/js/main.js"></script>
        <script src="includes/js/form.js"></script>
        <script src="includes/js/signup.js"></script>
        <script src="includes/js/jquery-1.12.4.js"></script>
        <script src="includes/js/jquery-ui.js"></script>
        

        
        
    </footer>
</body>
</html>