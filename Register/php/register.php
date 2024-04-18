<?php

// Author: Laurina Madden x20200765
// This wil be the php server-side to register for website - Past Procratinating
// The user won't be able to access this file because it is in its own folder 

//Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// To connect to the database and not have to rewrite the code from that file
include 'databaseConnection.php';

//Debugging
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

	// collect form data
	$username = $_POST['username'];
	//$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//$password = $_POST['password'];

	// Validate user data
	if (empty($username) || strlen($username) < 3 || strlen($username) > 32) {
		die('Invalid username');
	}

//	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//		die('Invalid email');
//	}

	if (empty($password) || strlen($password) < 8 || strlen($password) > 32) {
		die('Invalid password');
	}
	
	
	// Insert data into the database
//	$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
	$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
	$stmt->bindParam(':username', $username);
//	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->execute();

	// Redirect the user to the login page
	header('Location: ../LogIn/index.html');
	// Or 
	//header('Location: ../Register/registrationConfirmed.html');
	// with button to bring to Log in?


$conn->close();
//exit;
?>