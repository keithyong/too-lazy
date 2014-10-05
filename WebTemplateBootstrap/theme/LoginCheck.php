<?php 
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com","keithy","hackathon","db64");
$email = $_POST["email"];
$pass = $_POST["pass"];
$result = mysqli_query($con,"SELECT myPassword FROM Users WHERE Email = $email"); //query for search,add,insert
 
	if ($pass == $result) {
	header("Location:login3000.php");
	echo "Valid Username";
	}
	else {
	header("Location: index.html");
	echo "Invalid Username and password";
	}
?>