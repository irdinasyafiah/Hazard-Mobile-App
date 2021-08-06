<?php 

$host = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($conn, "project1"); //db name : project1

// check connection
if(!$conn)
	{
	die("connection failed : " . mysqli_connect_error());
	} 
	else 
	{
	//echo "Successfully Connected";
	}

?>