<?php
$hostname = "localhost";
$user ="root";
$password ="";
$dbname ="trainee_table";
$conn =new mysqli($hostname,$user,$password,$dbname);
if$conn->connect_error
    die("connection Failed.".$conn->connect_error);

echo"connection successfully";


?>