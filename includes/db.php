<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "doglover";
$connection = mysqli_connect($host,$user,$password,$database);

if(!$connection){
    die("An error has occured");
}