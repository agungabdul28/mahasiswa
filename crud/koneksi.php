<?php
$host = "localhost"; 
$username = "root";
$password = "";
$database = "mahasiswa";

$pdo = new PDO ('mysql:host='.$host.';dbname='.$database, $username, $password);
?>