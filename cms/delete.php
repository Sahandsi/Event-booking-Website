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

<h1>Delete Event ID <?php echo $row['eventID']; ?></h1>
<form action="action/deletedb.php" method="POST">

    <input name="eventID" type="hidden" value= "<?php echo $row['eventID']; ?>">
    <input type="submit" value="Delete">
</form>