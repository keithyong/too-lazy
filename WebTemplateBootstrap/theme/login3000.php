<?php
ini_set("display_errors",1);
error_reporting(-1);
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com","keithy","hackathon","db64");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(preg_match('/[a-zA-Z0-9_]+@udel\.edu/',$_POST["email"])){
	echo 'matched';
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$passconfirm = $_POST["passconfirm"];

	mysqli_query($con, "INSERT INTO Users(Email, myPassword)
		VALUES ('$email', '$pass')");
	$result = mysqli_query($con,"SELECT * FROM Users");
	
	while($row = mysqli_fetch_array($result)) {
	  echo $row['Email'] . " " . $row['myPassword'];
	  echo "<br>";
	}	

	header('\forum.html');


}
else {
	echo "Only udel.edu emails accepted!";
	
}
?>
