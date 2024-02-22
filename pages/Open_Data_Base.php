<?php
#Connection Values
$servername = "millard";
$username = "root";
$password = "123456"; 
$dbname = "Team_4_DB"

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, );

// Test connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    $conn->query("use."$dbname)
}
?>
