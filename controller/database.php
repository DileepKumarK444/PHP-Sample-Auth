<?php
$servername = "localhost";
$database = "login_db";
$username = "root";
$password = "";

// Create connection
$mysqli = new mysqli(
    hostname: $servername, 
    username: $username, 
    password: $password,
    database: $database);

// Check connection
if ($mysqli->connect_errno) {
  die("Connection error: " . $mysqli->connect_error);
}
// echo "Connected successfully";
return $mysqli;

