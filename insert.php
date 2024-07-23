<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "hotel_booking"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    $query="CREATE TABLE signup(
        int ID(20),
        VARCHAR userName(220),
        VARCHAR password(220));";
    $data=mysqli_query($conn,$query);
?>
