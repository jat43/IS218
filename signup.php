<?php 
require_once 'db.class.php';

function isNew($email) {
	echo "checking if email ".$email." is there<br>";
	$sql = "select * 
		from accounts
		where email = '".$email."';";
	$results = runQuery($sql);
	if(count($results) > 0) {
		echo "email already used<br>";
		return true;
	} else {
		echo "email is good<br>";
		return false;
	}

}

function doSignUp($fname, $lname, $email, $number, $date, $gender, $password) {
	echo "doing Do Sign<br>";
	$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) 
			values 
			('".$email."','".$fname."','".$lname."','".$number."','".$date."','".$gender."','".$password."');";
	$results = runQuery($sql);
	if(count($results <= 0)) {		
		echo "Success<br>";		
		header("location: signin.php");
	} else {
		return "Error inserting data<br>";
	}
}

?>