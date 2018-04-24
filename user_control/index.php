<?php 
session_start();

require('../model/database.php');
require('../model/login.php');
require('../model/signup.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'signin';
    }
}

if ($action == 'signin') {
    include('signin.php');

} else if ($action == 'login') {
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $_SESSION["fname"] = $fname;
    $_SESSION["lname"] = $lname;
    $_SESSION["email"] = $email;
	enter_user($email, $password);

} else if ($action == 'register') {
	include('register.php');

} elseif ($action == 'signup') {
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
	$number = filter_input(INPUT_POST, 'number');
	$bdate = filter_input(INPUT_POST, 'date');
	$gender = filter_input(INPUT_POST, 'gender');
	$pword = filter_input(INPUT_POST, 'password');

	if(check_email($email) > 0) { 
	    header("Location: index.php?action=register");
	} else {
		add_user($fname, $lname, $email, $number, $bdate, $gender, $pword); 
		header("location: ../item_list");
	}
}

?>