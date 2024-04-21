<?php
// This is the php file to connect the database to the for website - Past Procratinating

// In php $ is used to declare and reference variables. 
// Its mandatory at the beginning of all variable names.

// Not right - throws error
//include '../../createDatabase.sql';

// variable called $servername and test is the assigned value

$servername = "test";
//$servername = "localhost";
$username = "username";
$password = "password";
//***$confirmPassword = "confirmPassword";
//$dbName = "database";
$dbName = "clients";

echo "In datbaseConnection.php";


//$dbname = '?';
//$username = '?';
//$password = '?';

//***$email = 'email';

//$task1name = '?';
//$task2name = '?';
//$task3name = '?';

/*
// might need to have function to call - actionDB()
function actionDB(){
	//global $host, $username, $password, $dbName???;
	
	$dsn = 'mysql:host=test;dbname=clients';
	
	$db = new PDO($dsn, $username, $password ?: 'default_password');

	$mysqli = mysqli_connect($host, $username, $password, $dbName);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	} 
}

// Create a new connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/


//21.04.2024
/*To connect to your SQLite database and execute queries on it with PHP, use your text editor to create an
 example script named sqlite.php in the htdocs subdirectory of your XAMPP installation directory and fill it with
 the following code:*/
 /*
 //  The first line of code creates a new SQLite3 object, using the mydb.sq3 database file you created earlier.
 $db = new SQLite3('mydb.sq3');
 //$sql = "SELECT * FROM items WHERE price < 3.00";
 $sql = (SELECT *);
 
 // the object’s query() method is used to execute a SELECT query on the database,
 $clients = $db->query($sql);
 // the result object’s
 //fetchArray() method is used to iterate over the result set. Adding the SQLITE3_ASSOC parameter to the
 //fetchArray() method tells PHP to return the results as an associative array, making it easy to access individual
 //fields of the result/clients set and display them on a Web page
 while ($row = $clients->fetchArray(SQLITE3_ASSOC)){
  //echo $row['username'] . ': $' . $row['price'] . '<br/>';
  echo $row['username'] . ': Password is ' . $row['password'] . '<br/>';
 }
 unset($db);
*/
/* Once done, save your changes and ensure that your Apache server is running. Then, browse to
 http://localhost/sqlite.php to execute the script.*/
 
 // TIP: To find out more about SQLite’s powerful features, read the SQLite documentation - 
 
 //From SQLite Documentation - SGLite C Interface - Opening a new Connection
 /* 
int salite3 open(
	// Database filename (UTF-8)
	cont char *filename,
	// OUT; SQLite db handle
	sqlite3 **ppDb
); 
*/
echo "In datbaseConnection.php... going to connect to database";

// Create a new database connection
//$conn = new mysqli($host, $user, $password, $dbname);
// servername == serverhost
$conn = new mysqli($servername, $username, $password, $dbName);

echo "In datbaseConnection.php... going to check if connection failed";

// Check the connection
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/
// Get user input from the HTML form
//$username = $_POST['username'];
//$password = $_POST['password'];

echo "In datbaseConnection.php... Just above register function";

function register(){
	// Get user input from the HTML form
	$username = $_POST['username'];
	$password = $_POST['password'];
		
	// Execute the query
	if ($conn->query($sql) === TRUE) {
		echo "New user created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	// Close database connection
	$conn->close();
}
echo "In datbaseConnection.php... Just above logIn function";

function logIn(){
	// Get user input from the HTML form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Query the database for the user
	$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
	$result = $conn->query($sql);

	// Check if the user exists
	if ($result->num_rows > 0) {
		echo "User logged in successfully";
	} else {
		echo "Invalid username or password";
	}
	
	// Close database connection
	$conn->close();
}

// Close database connection
//$conn->close();
 
?>