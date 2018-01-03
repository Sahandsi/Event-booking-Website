<?php 
include('includes/db.php');
$sql = "SELECT eventID, eventName, date FROM events ORDER BY eventName ASC";
$stmt = $mysqli->query($sql);


?>

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