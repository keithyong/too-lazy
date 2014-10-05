
<?php 
// Check connection
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com","keithy","hackathon","db64");
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	
	mysqli_query($con, "INSERT INTO Users(Email, myPassword)
		VALUES ('$email', '$pass')");
	$result = mysqli_query($con,"SELECT * FROM Users");
	echo $result;
	//while($row = mysqli_fetch_array($result)) {
	  //echo $row['Email'] . " " . $row['myPassword'];
	  //echo "<br>";
	}	
	?>
	
<?php

