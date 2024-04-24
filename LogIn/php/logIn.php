<?php

// Author: Laurina Madden x20200765
// This wil be the php server-side of the log in for website - Past Procratinating
// The user won't be able to access this file because it is in its own folder 
 
// To connect to the database and not have to rewrite the code from that file
include '../../databaseConnection.php';

// Call function might be needed
logIn();

// Log in - collecting data from log in form
$username = $_POST[username];
$password = $_POST[password];

// Log in - validate log in form data
if (empty($username) || empty($password)) {
  die('Please enter a username and password.');
}

// Log in - Query the database to check if the user exists
$query = "SELECT * FROM clients WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Log in - Check if the query returned a result
if (mysqli_num_rows($result) == 1) {
	// ??? Client exists, so start a session and redirect to the dashboard/Questionaires
	session_start();
	$_SESSION['username'] = $username;
	// ???
	//header('Location: dashboard.php');
	header('Location: ../../Questionaires/index.html');
} else {
	// Log in - Client doesn't exist, so display an error message
	die('Invalid username or password.');
}

//Redirect the user to the Questionaires page
	header('Location: ../../Questionaires/index.html');

// Redirect the user to the UserDashboard page
//	header('Location: ../UserDashboard/index.html');

//$conn->close();

?>