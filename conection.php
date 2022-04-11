<?php

$hostname = "localhost";
$username = "root";
$password = "my";
$db = "server0";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    }
?>