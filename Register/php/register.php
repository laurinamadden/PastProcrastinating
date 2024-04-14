<?php

// Author: Laurina Madden x20200765
// This wil be the php server-side to register for website - Past Procratinating
// The user won't be able to access this file because it is in its own folder 
 
// To connect to the database and not have to rewrite the code from that file
include 'databaseConnection.php';

	// collect form data
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	// Insert data into the database
	$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->execute();

	// Redirect the user to the login page
	header('Location: ..../LogIn/index.html');



$conn->close();

?>