<?php
// Ensure to connect to the database

$host = 'localhost';
$db = 'phptest';
$user = 'root';
$pass = '';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    //die('Connection failed: ' . $mysqli->connect_error);
}

?>