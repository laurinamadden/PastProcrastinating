<?php

// Author: Laurina Madden x20200765
// This wil be the php server side of the website - Past Procratinating
// The user won't be able to access this file because it is in its own folder 
 
// To connect to the database and not have to rewrite the code from that file
include 'databaseConnection.php';

// Database configuration
define('DB_HOST', 'your_database_host');
define('DB_USER', 'your_database_user');
//define('DB_PASS', 'your_database_password');
define('DB_NAME', 'your_database_name');

// To connect to the database and not have to rewrite the code from that file
//include 'databaseConnection.php';

// this is in databaseConnection.php
// Create a new database connection
//$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check for errors
//if (mysqli_connect_errno()) {
//    die("Failed to connect to the database: " . mysqli_connect_error());
//}

// Not needed in config.php
//$conn->close();

?>