<?php

include ('db.php');

if(isset($_POST['updatedata']))
{
	$id = $_POST['id'];

	$hname = $_POST['hname'];
	$loc = $_POST['loc'];
	$dsc = $_POST['dsc'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	$query = "UPDATE hazard SET hname='$hname', loc='$loc', dsc='$dsc', lat='$lat', lng='$lng' WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);
	
	if($query_run)
	{
		echo '<script> alert("Data Updated"); </script>';
		header("Location:admin.php");
	}
	else
	{
		echo '<script> alert("Data Not Updated"); </script>';
	}
}
?>