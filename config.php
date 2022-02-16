<?php

$servername = "localhost"; // localhost
$username = "root"; // id16932912_neofrank1
$password = ""; // "Duterte_Sarah21"
$dbname = "ad_dbms"; //id16932912_records

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>