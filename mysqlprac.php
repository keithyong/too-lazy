<?php
// Create connection
$con=mysqli_connect(
	"mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com",
	"keithy",
	"hackathon",
	"mydbinstance"
	);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>