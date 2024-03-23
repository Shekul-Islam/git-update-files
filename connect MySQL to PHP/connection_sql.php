<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "my_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("connection failed".$conn);
}
echo"connection successfull";

?>