<?php

function get_incomplete($owner) {
    global $db;
    $query = 'SELECT *
            FROM todos
            WHERE isdone = 0 
            AND owneremail = :owner
            ORDER BY createddate';
    $statement = $db->prepare($query);
    $statement->bindValue(":owner", $owner);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}

function get_complete($owner) {
    global $db;
    $query = 'SELECT *
            FROM todos
            WHERE isdone = 1 
            AND owneremail = :owner
            ORDER BY createddate';
    $statement = $db->prepare($query);
    $statement->bindValue(":owner", $owner);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}

function add_item($owner, $duedate, $message) {
    global $db;
    $createDate = date('Y-m-d h:m:s');
    $query = 'INSERT INTO todos (owneremail, createddate, duedate, message, isdone)
            VALUES (:owner, :createddate, :duedate, :message, 0)';
    $statement = $db->prepare($query);
    $statement->bindValue(':owner', $owner);
    $statement->bindValue(':createddate', $createDate);
    $statement->bindValue(':duedate', $duedate);
    $statement->bindValue(':message', $message);
    $statement->execute();
    $statement->closeCursor();
}

function edit_item($owner, $createddate, $duedate, $message) {
    global $db;
    $query = 'UPDATE todos 
            SET duedate = :duedate, message = :message 
            WHERE owneremail = :owner
            AND createddate = :createddate';
    $statement = $db->prepare($query);
    $statement->bindValue(':owner', $owner);
    $statement->bindValue(':createddate', $createddate);
    $statement->bindValue(':duedate', $duedate);
    $statement->bindValue(':message', $message);
    $statement->execute();
    $statement->closeCursor();
}

function delete_item($owner, $createddate) {
    global $db;
    $query = 'DELETE FROM todos 
            WHERE owneremail = :owner 
            AND createddate = :createddate';
    $statement = $db->prepare($query);
    $statement->bindValue(':owner', $owner);
    $statement->bindValue(':createddate', $createddate);
    $statement->execute();
    $statement->closeCursor();
}

function now_complete($owner, $createddate) {
    global $db;
    $query = 'UPDATE todos
            SET isdone = 1 
            WHERE owneremail = :owner 
            AND createddate = :createddate';
    $statement = $db->prepare($query);
    $statement->bindValue(':owner', $owner);
    $statement->bindValue(':createddate', $createddate);
    $statement->execute();
    $statement->closeCursor();
}

?>