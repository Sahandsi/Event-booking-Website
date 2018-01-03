
<?php
ini_set("display_errors", 1);
require('../includes/db.php');

$sql = "SELECT * FROM events";
$stmt = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>CMS</title>
          
</head>
<body>
<a href="insert.php">Add Event</a>
<table>
    <tr>
        <th>Event ID</th>
        <th>Location ID</th>
        <th>Singer ID</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php
while($row =$stmt->fetch_assoc())
{
    
    // display the uk date in dd-mm-YYYY
    $ukDate = date('d-m-Y', strtotime($row['date']));
    echo "<td Event ID>{$row['eventID']}<td>";
    echo "<td Location ID>{$row['locationID']}<td>";
    echo "<td Singer ID>{$row['singerID']}<td>";
    echo "<td Event Name>{$row['eventName']}<td>";
    echo "<td Date>{$ukDate}<td>";
    echo "<td><a href=\"edit.php?eventID={$row['eventID']}\">Edit</a></td>";
    echo "<td><a href=\"delete.php?eventID={$row['eventID']}\">Delete</a></td>";
    echo "<tr></tr>";
}?>
</table>

<footer>
      <div class="container">
        <p class="text-muted">&copy 2018</p>
      </div>
</footer>
</body>
</html>
