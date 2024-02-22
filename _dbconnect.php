<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "mypolicy";

$conn = mysqli_connect($server , $username , $password , $database);

if(!$conn){
    die("not connect").mysqli_connect_errno();
}

?>