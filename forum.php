<html>
	<head>
		<title>Forums</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/bootstrap.css" rel = "stylesheet">
	</head>
	<body>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>﻿
		<script src="js/bootstrap.js"></script>﻿
		<form class="form-inline" method="post" role="form">
			<div class="form-group">
			    <label class="sr-only" for="want">What service do you want?</label>
			    <input type="text" class="form-control" id="want" name="submission" placeholder="I'm too lazy to...">
		  	</div>
		  	<div class="form-group">
		  		<input type="text" class="form-control" id="money" name="price" placeholder="And I'm for it I am paying...">
		  	</div>
		  	<button type="submit" class="btn btn-default">Submit</button>
		  	<?php
		  		$host = "mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com";
		  		$username = "keithy";
		  		$password = "hackathon";
		  		$dbname = "db64";

		  		$con=mysqli_connect($host, $username, $password, $dbname);

		  		// Check connection
				if (mysqli_connect_errno()) {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$submission = $_POST["submission"];
				$price = (string)$_POST["price"];
				mysqli_query($con, "INSERT INTO forums (paragraph, price)
					 VALUES ('$submission', '$price')");
					 ?>
			<div class="container-fluid">
    			<div class="row-fluid">
      				<div class="span4 offset4">
						<?php
					  		$host = "mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com";
					  		$username = "keithy";
					  		$password = "hackathon";
					  		$dbname = "db64";

					  		$con=mysqli_connect($host, $username, $password, $dbname);

					  		// Check connection
							if (mysqli_connect_errno()) {
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							$result = mysqli_query($con,"SELECT * FROM forums");
							while($row = mysqli_fetch_array($result)) {
								echo $row['submission'] . " " . $row['price'];
								echo "<br>";
							}
					  	?>
		  			</div>
    			</div>
			</div>
		</form>
	</body>
</html>