<?php 

include('db.php');
$sql = "DELETE FROM events WHERE eventID = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_POST['eventID']);
$stmt->execute();
$stmt->close();
header("Location: ../cms.php");
exit;
?>