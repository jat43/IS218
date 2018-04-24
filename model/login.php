<?php 

function check_user($email) {
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

function enter_user($email, $password) {
	global $db;
	$query = 'SELECT * FROM accounts
		WHERE email = :email
		AND password = :password';
	$statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $count = $statement->rowCount();
    $statement->closeCursor();

	if($count == 1){  
		header("location: ../item_list");
	} else {
		if (check_user($email) > 0)
		$error = "Password is wrong but the Email is okay";
        include('../errors/error.php');
	}
}

?>

