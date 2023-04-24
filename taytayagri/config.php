<?php
// Set the database hostname, username, password, and name
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "taytaydb";

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());