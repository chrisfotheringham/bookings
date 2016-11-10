<!DOCTYPE html>
<head>
    <title>My Bookings</title>
    
    
</head>
<body>
    <h1>My Restaurant</h1>
    <!--This is the booking form-->
    <form method="POST" action="book.php">
        
        <label>Name</label>
        <input type="text" name="namebox" required>
        <lable>Date</lable>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <!--Allows to check what type of form was used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
         
    </form>
    
    
    
    
    <h2>Book a Table</h2>
    <!--this searches for a booking-->
    
</body>
</htmk>

<?php

?>