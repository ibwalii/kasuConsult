<?php 

$database_name = "consult";
$user ="root";
$pass = "";
$host = "localhost";

$consult= mysql_connect($host, $user, $pass) or die("Here");

$selectdb = mysql_select_db($database_name, $consult) or die(mysql_error);

// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

?>

