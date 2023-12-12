<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youth360";
$port = 3306;

$mysqli = new mysqli($servername, $username, $password, $dbname, $port);



if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
?>