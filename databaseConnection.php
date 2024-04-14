<?php
// This is the php file to connect the database to the for website - Past Procratinating

// In php $ is used to declare and reference variables. 
// Its mandatory at the beginning of all variable names.

$servername = "localhost";
$username = "username";
$password = "password";
$confirmPassword = "confirmPassword";
$dbname = "database";

// variable called $servername and localhost is the assigned value
$servername = "localhost";
//
$dbname = '?';
$username = '?';
$password = '?';

$email = '?';

$task1name = '?';
$task2name = '?';
$task3name = '?';

// might need to have function to call - actionDB()
// function actionDB(){
//		global $host, $username, $password, $dbName???;

//  $mysqli = mysqli_connect($host, $username, $password, $dbName);

//  if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//  } 
//}

// Create a new connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>