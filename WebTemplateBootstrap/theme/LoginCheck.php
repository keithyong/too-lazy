<?php 
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com","keithy","hackathon","db64");
$email = $_POST["email"];
$pass = $_POST["pass"];
$result = mysqli_query($con,"SELECT myPassword FROM Users WHERE Email = $email"); //query for search,add,insert
 
	if ($pass == $result) {
	$SESSION['login'] = TRUE;
	header("Location: http://ec2-54-69-153-93.us-west-2.compute.amazonaws.com/TemplateForAboutUs/Theme/index.html");
	}
	else {
	header("Location: index.html");

	}
?>