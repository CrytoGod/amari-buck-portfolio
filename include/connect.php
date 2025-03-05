<?php
//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.
// $connect = new mysqli('localhost','root','','amari-portfolio');


$dsn = "mysql:host=localhost;dbname=amari-portfolio;charset=utf8mb4";
try {
$connect = new PDO($dsn, 'root', 'root');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>