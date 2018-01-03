<?php 
require('../includes/db.php');


$sql= "SELECT * FROM events WHERE eventID = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_GET['eventID']);
$stmt->execute();

$result = $stmt->get_result();
// puts the row in an associate array 
$row = $result->fetch_assoc();
?>
    <form action="action/editdb.php" method="POST">
        <p>
            <!-- need it so that we can process the query -->
            <input name="eventID" type="hidden" value= "<?php echo $row['eventID']; ?>">
        </p>
        <p>
            <!-- name -->
            <label for ="locationID">Location ID</label>
            <input type="text" name ="locationID" id="locationID" value = "<?php echo $row['locationID']; ?>">
        </p>
        <p> 
            <!-- game to play -->
            <label for="singerID">Singer ID</label>
            <input type="text" name ="singerID" id="singerID" value = "<?php echo $row['singerID']; ?>"> 
        </p>
        <p>
            <!-- venue ID -->
            <label for ="eventName">Event Name</label>
            <input type="text" name ="eventName" id="eventName" value = "<?php echo $row["eventName"]; ?>">
        </p>
        <p>
            <!-- Start Date -->
            <label for ="date">Date</label>
            <input type="text" name ="date" id="date" value = "<?php echo $row['date']; ?>">
        </p>
        <p><input type="submit" value="Submit"></p>
    </form>
