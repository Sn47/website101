<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$dbhost = "localhost";
$dbuser = "root";         
$dbpass = "";
$dbname = "soghatdb";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) ){
    die("Failed To Connect");
} 