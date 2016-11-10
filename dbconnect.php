<?php

$servername ="localhost";
$username ="chrisfotheringha";
$password ="";
$dbname ="booking";

// creates a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}


?>