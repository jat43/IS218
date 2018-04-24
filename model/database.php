<?php
    $dsn = 'mysql:host=sql.njit.edu;dbname=jat43';
    $username = 'jat43';
    $password = 'deploy97';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>