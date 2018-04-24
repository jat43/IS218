<?php 
session_start();
require('../model/database.php');
require('../model/list_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_lists';
    }
}


if ($action == 'show_lists') {
	$fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
	$email = $_SESSION["email"];
    $incomp_results = get_incomplete($email);
    $comp_results = get_complete($email);
    include('mylist.php');

} else if ($action == 'add') {
	$email = $_SESSION["email"];
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	include('add.php');

} else if ($action == 'add_item') {
	$email = filter_input(INPUT_POST, 'email');
	$duedate = filter_input(INPUT_POST, 'duedate');
	$message = filter_input(INPUT_POST, 'message');
	add_item($email, $duedate, $message);
	header('location: .?action=show_lists');

} else if ($action == 'edit') {
	$email = filter_input(INPUT_POST, 'email');
	$createddate = filter_input(INPUT_POST, 'creatD');
	$duedate = filter_input(INPUT_POST, 'duedate');
	$message = filter_input(INPUT_POST, 'message');
	include('edit.php');

} else if ($action == 'edit_item') {
	$email = filter_input(INPUT_POST, 'email');
	$createddate = filter_input(INPUT_POST, 'creatD');
	$duedate = filter_input(INPUT_POST, 'duedate');
	$message = filter_input(INPUT_POST, 'message');
	edit_item($email, $createddate, $duedate, $message);
	header('location: .?action=show_lists');

} else if ($action == 'delete') {
	$email = filter_input(INPUT_POST, 'email');
	$createddate = filter_input(INPUT_POST, 'creatD');
	delete_item($email, $createddate);
	header('location: .?action=show_lists');

} else if ($action == 'done') {
	$email = filter_input(INPUT_POST, 'email');
	$createddate = filter_input(INPUT_POST, 'creatD');
	now_complete($email, $createddate);
	header('location: .?action=show_lists');
}

?>
<p><a href="../model/logout.php">Log Out</a></p>