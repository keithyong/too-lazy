<?php

	$con=mysqli_connect(
		"mydbinstance.czuwmj0nklpa.us-west-2.rds.amazonaws.com",
		"keithy",
	"	hackathon",
		"innodb"
		);
	
	function Login2()
		{
			if(empty($_POST["email"])) {
				$this->HandleError("UserName is empty!");
			return false;
			}
			if(empty($_POST['pass']))
		{
			$this->HandleError("Password is empty!");
			return false;
		}
		
		$username = trim($_POST["email"]);
		$password = trim($_POST["password"]);
     
		if(!$this->CheckLoginInDB($username,$password))
		{
			return false;
		}
     
		session_start();
     
		$_SESSION[$this->GetLoginSessionVar()] = $username;
     
		return true;
	}