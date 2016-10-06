<?php
/*
	Establishes database connection
*/

//session_start();
//ob_start();
$hasDB = false;
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'nen';
$con = new mysqli($server,$user,$pass,$db);
if ($con->connect_error)
{
    die('Connect Error (' . $con->connect_errno . ') '. $con->connect_error);
}

?>
