<?php 

include 'db.php';

	$hname = $_POST['hname'];
	$loc = $_POST['loc'];
	$dsc = $_POST['dsc'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];

	$sql = "INSERT INTO hazard (hname, loc, dsc, lat, lng) VALUES ('$hname', '$loc', '$dsc', '$lat', '$lng')";
			
	$result = mysqli_query($conn,$sql) or die ("Query Failed");
		
	if($result)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Add successfully!')
				  window.location.href='admin.php'
	              </SCRIPT>");
				  
		exit();
	}
	else 
	{
		echo " Error " . $sql . ' ' . $conn->connect_error;
	}

	$conn->close();

?>