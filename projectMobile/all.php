<?php


require_once('db.php');

//select from all of the database table
$query = "SELECT * FROM hazard";
$result = mysqli_query( $conn, $query );

//declares aray
$output = array();

//adds row to the arrays for every line
foreach ($result as $row) 
{
 array_push($output,$row);
}

// assign to json variable
$json=json_encode($output);

//declares document type to json and output json
header("Content-Type: application/json");
echo $json;

?>
