<html>
<body>
<?php 
// Check connection
$con=mysqli_connect(
	"mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com",
	"keithy",
	"hackathon",
	"db3"
	);
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	
	mysqli_query($con, "INSERT INTO Persons(Email, myPassword)
		VALUES ('$email', '$pass')");
	$result = mysqli_query($con,"SELECT * FROM Users");

	while($row = mysqli_fetch_array($result)) {
	  echo $row['Email'] . " " . $row['myPassword'];
	  echo "<br>";
	}	
	?>
	</body>
	</html>
