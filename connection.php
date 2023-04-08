<?php
 // Connect to the database
$server = "localhost"; 
$username = "root";
$password = "";
$db = "contactusdb";
$connect = mysqli_connect($server, $username, $password, $db);
if($connect == false){
    die("Database conenction failed due to ".mysqli_connect_error());
}
?>