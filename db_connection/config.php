<?php
$mysqli = new mysqli("localhost", "root", "Vaibhav123", "student");

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the charset to avoid issues with special characters
$mysqli->set_charset("utf8");
?>
