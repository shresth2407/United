<?php

//ager localhost se connect krna cahe to ye sb krna hogaa 
$server = "localhost";
$usernsme = "root";
$password = "";
$dbname = "register";


//connection ke liye
$con = mysqli_connect($server,$usernsme,$password,$dbname);

// if con is false
if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
}
echo "Success connection to the db";

?>