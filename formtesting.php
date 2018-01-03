<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" href="includes/css/mobile.css">
<link rel="stylesheet" href="includes/css/mobileForm.css">
<title>Book To Attend</title>
</head>
<body>
    <div class="container">
        <img src="includes/images/background.png" class="backgroundImage">
        <header>
            <button class ="dropbtn">Menu</button>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="page1.php">Games</a></li>
                        <li><a href="page1.php">Location</a></li>
                        <li><a href="bookEvent.php">Book An Event</a></li>
                        <li><a href="events/eventListings.php">Events Lists</a></li>
                        <li><a href="accessCMS.php">Access CMS</a></li>
                    </ul>
                </nav>
        </header>
    </div>
    <!-- everything after the header -->
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
                <!-- multiline textarea, to comment  -->
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="22" rows="5" placeholder="Add any comment or issues here"></textarea>
            </p>

            <p>
                <!-- date of birth  -->
                <label for="date">Date Of Birth</label>
                <input type="date" id = "date" name="date">
            </p>
            <p><input type="submit" value="Submit"></p>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy Copyright 2018</p>
        <script src="includes/js/jquery-3.2.1.js"></script>
        <script src="includes/js/main.js"></script>
    </footer>
</body>
</html>