<?php 

include('includes/db.php');
$tableDefault = true;




if (isset($_GET['searchEvent']) && isset($_GET['searchLocation']) && isset($_GET['filterDate'])) {

    // to be used in the switch 
    $order = "";

    // wildcards used for sql
    $searchEvent = "%".$_GET['searchEvent']."%";
    $searchLocation = "%".$_GET['searchLocation']."%";
    $filterDate = $_GET['filterDate']; // user choice from dropdown

    
        switch ($filterDate) 
        {
            case 'dateAscending':
                $order .= " ORDER BY e.date ASC ";
                break;
            case 'dateDescending':
                $order .= " ORDER BY e.date DESC";
                break;
            case '""': // if no filter applied
                $order = " ORDER BY e.eventName ASC";
                break;
        }
   

    

    // to get tge event name and date from events table and order by what user has selected from the dropdown
    $sql = "SELECT e.eventName, e.date FROM events e INNER JOIN locations l ON e.locationID = l.locationID WHERE e.eventName LIKE ? AND l.locations LIKE ?" . $order;
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ss', $searchEvent, $searchLocation);
    $stmt->execute(); 
    $eventsSQL = $stmt->get_result(); // gets the result from mysqli query

    
    $sql = "SELECT  l.locations FROM locations l INNER JOIN events e ON l.locationID = e.locationID WHERE e.eventName LIKE ? AND l.locations LIKE ?" . $order;
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ss', $searchEvent, $searchLocation);
    $stmt->execute(); 
    $locationsSQL = $stmt->get_result(); // gets the result from mysqli query
    
    $tableDefault = false;


}
//otherwise display the default table
else if (isset($_GET['clear']) || $tableDefault == true) {
    
    // so that event name appears in chronological order
    // to query the event table
    $sql = "SELECT eventName, date FROM events ORDER BY eventName ASC";
    $eventsSQL = $mysqli->query($sql);

    // l and e is used to seperate clashed fieldnames and for better readability
    // only reuturn the location name back when the 2 ID matches.
    $sql = "SELECT  l.locations FROM locations l INNER JOIN events e ON l.locationID = e.locationID ORDER BY e.eventName ASC" ;
    $locationsSQL = $mysqli->query($sql);

}

?> 

<form action="" method="GET">
     <!-- search boxes for filter -->
    <p>
        <label for ="searchEvent">Search Event</label>
        <input name = "searchEvent" type="text" id="searchEvent" placeholder="Search Event">
    </p>
    <p>
        <label for ="searchLocation">Search Location</label>
        <input name = "searchLocation" type="text" id="searchLocation" placeholder="Search Location">
    </p>
    <p>
        <label for="filterDate">Filter Date By</label>
        <select name="filterDate" id="filterDate">
            <option value="">Select Below</option>
            <option value="dateAscending">Date Ascending</option>
            <option value="dateDescending">Date Descending</option>            
        </select>
    </p>
    <p>
        <input type="submit" name="submit" value="Search">
        <input type="submit" name ="clear" value="ResetTable">
    </p>
</form>

<table>
    <tr>
        <th>Event Name</th>
        <th>Location Name</th>
        <th>Date</th>            
    </tr>
    <?php
    // while loop for the event columns 
    while ($row = $eventsSQL->fetch_assoc()) {
        echo "<tr>";
        $ukDate = date('d-m-Y', strtotime($row['date']));
        echo "<td>{$row['eventName']}</td>";

        // while loop for location
        while ($row = $locationsSQL->fetch_assoc() ) {
            echo "<td>{$row['locations']}</td>";
            break;
        } 
        echo "<td>$ukDate</td>";

        echo "</tr>";
    }
    ?>
</table>