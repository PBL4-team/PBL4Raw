<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect('localhost', 'root', '', 'onlineshop2', 3306);
$db = new PDO('mysql:host=localhost; port=3306;dbname=onlineshop', 'root', '');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
