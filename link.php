<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";
/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";
*/
$link = mysqli_connect($servername, $username, $password, $database);

if(!$link){
    die("A conexão mySQL falhou!".mysqli_connect_error());
} 

?>