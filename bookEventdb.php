<?php 
include('includes/db.php');
$date = $_POST['date'];
$sqlDate = date("Y-m-d", strtotime($date));

$sql = "INSERT INTO bookings(eventID, forename, surname, email, dateOfbirth) VALUES(?,?,?,?,?)";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param('issss', $_POST['event'], $_POST['forename'], $_POST['surname'], $_POST['email'], $sqlDate);
$stmt->execute();
$stmt->close();
header("Location: index.php");

?>

