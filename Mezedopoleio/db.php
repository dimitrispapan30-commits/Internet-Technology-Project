<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mezedopoleio_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("Η σύνδεση απέτυχε");
}

?>