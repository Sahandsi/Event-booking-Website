<form action="action/insertdb.php" method="POST">
        <p>
            <!-- need it so that we can process the query -->
            <input name="eventID" type="hidden">
        </p>
        <p>
            <!-- name -->
            <label for ="locationID">Location ID</label>
            <input type="text" name ="locationID" id="locationID">
        </p>
        <p> 
            <!-- game to play -->
            <label for="singerID">Singer ID</label>
            <input type="text" name ="singerID" id="singerID"> 
        </p>
        <p>
            <!-- venue ID -->
            <label for ="eventName">Event Name</label>
            <input type="text" name ="eventName" id="eventName">
        </p>
        <p>
            <!-- Start Date -->
            <label for ="date">Date</label>
            <input type="text" name ="date" id="date">
        </p>
        <p><input type="submit" value="Submit"></p>


</form>