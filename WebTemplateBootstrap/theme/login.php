<html>
<body>

<?php
$con=mysqli_connect(
	"mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com",
	"keithy",
	"hackathon",
	"innodb"
	);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

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

?>

</body>
</html>