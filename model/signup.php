<?php 

function check_email($email) {
	global $db;
	$query = 'SELECT * FROM accounts
		WHERE email = :email';
		$statement = $db->prepare($query);
	    $statement->bindValue(":email", $email);
	    $statement->execute();
	    $count = $statement->rowCount();
	    $statement->closeCursor();
	    return $count;
}

function add_user($fname, $lname, $email, $number, $date, $gender, $password) {
	global $db;
	$query = 'INSERT INTO accounts 
			(email, fname, lname, phone, birthday, gender, password) 
			VALUES 
			(:email, :fname, :lname, :num, :Ddate, :gender, :password)';
	$statement = $db->prepare($query);
	$statement->bindValue(":email", $email);
	$statement->bindValue(":fname", $fname);
	$statement->bindValue(":lname", $lname);
	$statement->bindValue(":num", $number);
	$statement->bindValue(":Ddate", $date);
	$statement->bindValue(":gender", $gender);
	$statement->bindValue(":password", $password);
    $statement->execute();
    $statement->closeCursor();
}

?>