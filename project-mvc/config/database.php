<?php
function getConnection()
{
    $host = 'localhost';
    $db = 'todo_db';
    $user = 'root';
    $pass = '';

    try {
        return new PDO("mysql:host=$host;dbname=$db", $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
