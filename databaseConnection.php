<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// variable called $servername and localhost is the assigned value
$servername = "localhost";
//
$dbname = '?';
$user = '?';
$password = '?';

$email = '?';

$task1name = '?';
$task2name = '?';
$task3name = '?';

// Create a new connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>