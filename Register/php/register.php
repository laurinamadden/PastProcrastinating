<?php

// Author: Laurina Madden x20200765
// This wil be the php server-side to register for website - Past Procratinating
// The user won't be able to access this file because it is in its own folder 

//Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo ("username");


// To connect to the database and not have to rewrite the code from that file
//include 'databaseConnection.php';
//include '../databaseConnection.php';
include '../../databaseConnection.php';
//include 'C:/Users/lauri/OneDrive/Desktop/FinalProjectCode/Register/php/databaseConnection.php';
//include 'C:\Users\lauri\OneDrive\Desktop\FinalProjectCode\Register\php\databaseConnection.php';
//require_once 'databaseConnection.php';
//require_once($_SERVER['DOCUMENT_ROOT'] . '\databaseConnection.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD']!== 'POST') {
    die('Invalid request method');
}


// Call function might be needed - here or higher up
register();
	
//Debugging
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

	// collect form data
	$username = $_POST['username'];
	//$username = trim($_POST['username']);
	//$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//$password = $_POST['password'];
	//$password = trim($_POST['password']);

	// Validate user data
/*	if (empty($username) || strlen($username) < 3 || strlen($username) > 32) {
		die('Invalid username');
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die('Invalid email');
	}

	if (empty($password) || strlen($password) < 8 || strlen($password) > 32) {
		die('Invalid password');
	}
	
// Generate a longer password hash and adjust the database column accordingly
$options = [
    'cost' => 12,
];
$passwordHash = password_hash($password, PASSWORD_DEFAULT, $options);
	
	// Insert data into the database
	// Prepare and execute the SQL statement???
//	$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
	$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
	$stmt->bindParam(':username', $username);
//	$stmt->bindParam(':email', $email);
//	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':password', $passwordHash);
	$stmt->execute();
*/

	// Call function might be needed - here or higher up
	register();
	
	// Redirect the user to the login page
	header('Location: /LogIn/index.html');
	// Or 
	//header('Location: ../Register/registrationConfirmed.html');
	// with button to bring to Log in?


//$conn->close();
//exit;
?>