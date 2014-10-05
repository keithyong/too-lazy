<html>
<body>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<form method="post">
	What you want: <input type="text" name="username" /><br />
	I'm paying: $<input type="text" name="price" /><br />
	<input type="submit">
	</form>
	<div class="want">
		<div class="price" style="float:right;">
			<?php
			echo "$";
			echo $_POST['price'];
			?>
		</div>
		<?php 
		echo $_POST['username'];
		?>
	</div>
	
	</body>
</html>