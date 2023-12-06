<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "form";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
	echo("connection terminated");
}
?>
