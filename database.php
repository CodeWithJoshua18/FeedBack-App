<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Josh');
define('DB_PASS', '123456');
define('DB_NAME', 'feedloop');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

