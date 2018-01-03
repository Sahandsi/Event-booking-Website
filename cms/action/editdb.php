<?php 
// include('../../includes/db.php');


include('db.php');


$date = $_POST['date'];
$sqlDate = date("Y-m-d", strtotime($date));
$sql = "UPDATE events SET locationID = ?, singerID = ?, eventName = ?, date = ? WHERE eventID = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('iissi',  $_POST['locationID'], 
                            $_POST['singerID'], 
                            $_POST['eventName'], 
                            $sqlDate, 
                            $_POST['eventID']);
$stmt->execute();
$stmt->close();

header("Location: ../cms.php"); // go back to the cms
exit; // stops other code being executed
?>