<?php


$servername = "localhost";
$username =  "root";
$password = "";
$database = "soliguen_756_1";

$conn = new mysqli($servername, $username, $password, $database);

if($conn -> connect_error){
        die("Connection Failed: " .$conn -> connection_error);
}

?>