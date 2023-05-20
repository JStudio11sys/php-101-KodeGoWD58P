<?php 

$server = "localhost";
$user = "root";
$pass = "";
$name_db = "sample_db";

//Connection
$db_connect = mysqli_connect($server, $user, $pass, $name_db);
if(!$db_connect){
	die("Connection is not established!".mysqli_connect_error());
}

?>