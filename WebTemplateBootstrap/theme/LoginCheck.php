<?php 
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com","keithy","hackathon","db64");
$email = $_POST["email"];
$pass = $_POST["pass"];

$result = "SELECT myPassword FROM Users WHERE Email = $email";
	if ($pass == $result) {
	header("Location:login3000.php");
	echo "Valid Username";
	}
	else {
	header("Location: index.html");
	echo "Invalid Username and password";
	}
?>