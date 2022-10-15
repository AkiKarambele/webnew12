<?php


$servername = "localhost: 3307";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo 'not connect';
}?>