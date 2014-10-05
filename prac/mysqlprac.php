<?php
$con=mysqli_connect("mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com", "keithy", "hackathon", "my_db");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO Persons (Email, Pass)
	VALUES ('sample@google.com', '123')");

mysqli_query($con,"INSERT INTO Persons (Email, Pass)
	VALUES ('hello@google.com', 'abc')");

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result)) {
  echo $row['Email'];
  echo $row['Pass'];
  echo "<br>";
}
mysqli_close($con);
?>