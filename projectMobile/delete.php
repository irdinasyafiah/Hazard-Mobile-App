<?php 
 
include('db.php');

$delete_id=$_GET['id'];
$query = "DELETE FROM hazard WHERE id='$delete_id'"; 
$result = mysqli_query($conn,$query) or die("Query failed");

if($result)
{

 echo("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Delete successfully!')
				  window.location.href='admin.php'
	              </SCRIPT>");
	 
	                exit();
}
else
{
	echo("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Delete error')
				  window.location.href='admin.php'
	              </SCRIPT>");
	 
	                exit();
}

mysqli_close($conn);


?>