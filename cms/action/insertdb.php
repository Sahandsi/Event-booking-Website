<?php 
include('db.php');

$date = $_POST['date'];
$sqlDate = date("Y-m-d", strtotime($date));

$sql = "INSERT INTO events(locationID, singerID, eventName, date) VALUES(?,?,?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('iiss', $_POST['locationID'], $_POST['singerID'], $_POST['eventName'], $sqlDate);
$stmt->execute();
$stmt->close();
header("Location: ../cms.php"); 
exit; 
?>