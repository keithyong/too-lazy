<html>
<body>
<?php
ini_set("display_errors",1);
error_reporting(-1);
$db_host = "mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com";
$db_user = "keithy";
$db_password = "hackathon";
$db_name = "Persons";
$mysqli = new mysqli($db_host,$db_user,$password,$db_name);
$name = $_POST['email'];
$pass = $_POST['pass'];
@mysql_connect("$db_host","$db_user","$db_password") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name")
echo "Successful Connection";
mysqli_query($con, "INSERT INTO Persons (Email, myPassword)
		VALUES ('$email', '$pass')");
		
		$result = mysqli_query($mysqli,"SELECT * FROM $db_name");

	while($row = mysqli_fetch_array($result)) {
	  echo $row['Email'] . " " . $row['myPassword'];
	  echo "<br>";
	}	
	?>
</body>
</html>
	




