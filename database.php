<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=dy89';
    $username = 'dy89';
    $password = 'dOYwhngu';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
