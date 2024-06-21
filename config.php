<?php

session_start();

$server = "localhost";
$user = "root";
$pass = "";
$database = "user_list";


// Create connection
$conn = new mysqli($server, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>