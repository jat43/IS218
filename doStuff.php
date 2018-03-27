<?php
require_once 'db.class.php'; 
require_once 'signup.php';
require_once 'login.php';

// session_start();

echo "you are in dostuff<br>";

$fname = dFilter($_POST["fname"]);
$lname = dFilter($_POST["lname"]);
$password = dFilter($_POST["password"]);
$email = dFilter($_POST["email"]);
$number = dFilter($_POST["number"]);
$bdate = dFilter($_POST["date"]);
$gender = dFilter($_POST["gender"]);

echo $email."<br>";

// $_SESSION['fname'] = $fname;
// $_SESSION['lname'] = $lname;

function dFilter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isNew($email)) { 
	$emailerror = "Email already in use use a different one";
	header("location: index.php");

} else {
	doSignUp($fname, $lname, $email, $number, $bdate, $gender, $password); 
	echo "Signup Complete<br>";
	header("location: signin.php");
	exit();
}

?>