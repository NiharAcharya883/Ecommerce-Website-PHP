<?php
$server = "localhost";
$username = "root";
$password ="";
$database = "project";
$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){

    die("failed".mysqli_error());
}

?>