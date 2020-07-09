<?php
$servername = "localhost";
$user = "root";
$database = "hoteldb";
$password = "";

// Create connection
$conn = new mysqli($servername, $user,$password);

$db = mysqli_select_db($conn,$database);

?>