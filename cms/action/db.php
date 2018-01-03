<!-- connection file here. check for any errors --> 
<?php
    $hostname = "localhost";
    $username = "b5038121";
    $password = "Sami1369";
    $database = "b5038121_db1";
    $mysqli = new mysqli($hostname, $username, $password, $database);
    // %s is a placeholder for mysqli_connect_error()
    // if the database doesnt connect, return the error
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit(); // to prevent other code from executing
    }
    
?>