<?php

	mysqli_connect(
		"mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com",
		"keithy",
	"	hackathon",
		"innodb"
		);
	
	
// checkLogin.php

session_start(); // Start a new session
require(login.php); // Holds all of our database connection information

// Get the data passed from the form
$username = $_POST['email'];
$password = $_POST['pass'];

// Do some basic sanitizing
$username = stripslashes($username);
$password = stripslashes($password);

$sql = "select * from users where username = '$username' and password = '$password'";
$result = mysql_query($sql) or die ( mysql_error() );

$count = 0;

while ($line = mysql_fetch_assoc($result)) {
	 $count++;
}

if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: loginSuccess.php"); // This is wherever you want to redirect the user to
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: loginFailed.php"); // Wherever you want the user to go when they fail the login
}

?>
