<?php
include_once 'registerdata.php';
$mysqli = new mysqli(HOST,USER,PASSWORD,DATABASE);
include 'main.php'
function login($email, $password, $mysqli) {
	if($stmt = $mysqli->prepare("Email, myPassword") {
	$stmt->bind_param('s', $email); //bind email to parameter s
	$stmt->execute(); //execute query
	$stmt->store_result();
	
	//get variable from result
	$stmt->bind_result($email,$enteredpassword);
	$stmt->fetch();
	if($stmt->num_rows == 1) {
		if($enteredpassword == $password) {
			$user_browser = $_SERVER['HTTP_USER_AGENT'];
			$_SESSION['email'] = $email;
		return true; 
		}
		else{
		//Password was not correct
		return false;
		}
	else {
	return false; //user does not exist
	}
	
	}
	
	}
	}