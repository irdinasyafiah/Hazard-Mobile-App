<?php

include ("db.php");

?>

<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="pin2.png">

<title>HAZARD REPORT</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("pic4.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.column {
  float: left;
  padding: 10px;
  padding-left: 90px;
}
.column.side {
  width: 50%;
}
.column.middle {
  width: 35%;
  padding-top: 60px;
}
.column.middle a{
   color: pink;
}

.column.middle a:hover{
   color: #555;
}

.col:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: right;
  padding: 10px;
  padding-right: 50px;
}
.column1.side {
  width: 45%;
}
.column1.middle {
  width: 45%;
  padding-top: 70px;
  
}
.column1.middle a{
   color: pink;
}

.column1.middle a:hover{
   color: #555;
}

.col1:after {
  content: "";
  display: table;
  clear: both;
}

form{
    padding: 10px;
}

.form-control{
   border-radius: 0;
   border: solid 0.5px #d3d3d3 ;

}

::placeholder{
   color: gray;

}

.button {
  background-color: #000000; 
  border: solid 0.5px white;
  color: black;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #ff999a;
  margin-top: 20px;
}
.button {
  background-color: #000000; 
  border: solid 0.5px #fff;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #99FF00;
}

h6 {
  font-size:1em; 
  font-weight: 100;
  line-height:1em;
  text-align: center;
  color: #FFFFFF;
}


h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1.27em;
  text-align: left;
  color: #ABADF8;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 0 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

@media (min-width:1200px){
    .card-deck span:nth-of-type(5n) {
      display: block;
      width: 100%;
    }

</style>
<body class= "w3-light-gray">

<!-----------------------------   edit popup  ---------------------------------------------->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Hazard</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  <form action="edit.php" method="POST">
	  
		<div class="modal-body">
		<div class="form-group">
		    <label> ID </label>
			<input type="text" name="id" id="id" class="form-control" placeholder="Enter ID">
		  </div>
		<div class="form-group">
		    <label> Hazard </label>
			<input type="text" name="hname" id="hname" class="form-control" placeholder="Enter hazard">
		  </div>
		  <br>
		  <div class="form-group">
		    <label> Location </label>
			<input type="text" name="loc" id="loc" class="form-control" placeholder="Enter location">
		  </div>
		  <br>
		  <div class="form-group">
		    <label> Description</label>
			<input type="text" name="dsc" id="dsc" class="form-control" placeholder="Enter description">
		  </div>
		  <br>
		  <div class="form-group">
		    <label> Latitude</label>
			<input type="decimal" name="lat" id="lat" class="form-control" placeholder="Enter latitude">
		  </div>
		  <br>
		  <div class="form-group">
		    <label> Longitude </label>
			<input type="decimal" name="lng" id="lng" class="form-control" placeholder="Enter longitude">
		  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="submit" name="updatedata" class="btn btn-primary">Save Changes</button>
		</div>
	  </form>
    </div>
  </div>
</div>
<!--------------------End Modal------------------------------------------------>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"> ABOUT  </a>
      <a href="#addhazard" class="w3-bar-item w3-button"> ADD HAZARD  </a>
      <a href="#viewhazard" class="w3-bar-item w3-button"> VIEW HAZARD</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#addhazard" onclick="w3_close()" class="w3-bar-item w3-button">ADD HAZARD</a>
  <a href="#viewhazard" onclick="w3_close()" class="w3-bar-item w3-button">VIEW HAZARD</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-sand" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Admin Hazard Reports</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Admin Hazard Reports</span><br>
    <span class="w3-large">All of the hazard report must be up-to-date with live reports!</span>
    <p><a href="#addhazard" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Lets start by adding hazard</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- Team Section -->
<div class="container pt-3" style="padding:128px 16px" id="about">
  <h2 class="w3-center">ABOUT US</h2>
  <p class="w3-center w3-large">The ones who responsible for the project</p>
  <!--<div class="w3-row-padding w3-grayscale" style="margin-top:64px"> -->
    <div class="card-deck">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card" > 
        <center><img src="fatini.png" alt="Fatini" style="width:50%"></center>
        
        <div class="w3-container">
          <center><h3>NUR FATINI ALYA</h3>
          <p class="w3-opacity">Mobile Application Developer 1</p>
          <p>Incharge in developing the mobile application for the map marker.</p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020978989</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="irdina.png" alt="Irdina" style="width:50%"></center>
        <div class="w3-container">
          <center><h3>IRDINA SYAFIAH</h3>
          <p class="w3-opacity">Mobile Application Developer 2</p>
          <p>Incharge in developing the mobile application for the map marker.<p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020957533</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="sarah.png" alt="Sarah" style="width:50%"></center>
        <div class="w3-container">
          <center><h3>SITI SARAH</h3>
          <p class="w3-opacity">Web Developer</p>
          <p>Incharge in developing the web server side to connect with app.<p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020997339</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="farisya.png" alt="Farisya" style="width:50%"></center>
        <div class="w3-container">
          <center><h3>NIK FARISYA</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Incharge in designing the admin web application interfaces</p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020981053</button></p>
        </div>
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="hani.png" alt="Hani" style="width:50%"></center>
        <div class="w3-container">
          <center><h3>HANI ARINA</h3>
          <p class="w3-opacity">Video Presenter 1</p>
          <p>Incharge in explaining the project and work done through a video presentation<p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020960555</button></p>
        </div>
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="anis3.png" alt="Anis" style="width:50%"></center>
        <div class="w3-container">
          <center><h3>NUR ANIS WAHIDA</h3>
          <p class="w3-opacity">Video Presenter 2</p>
          <p>Incharge in explaining the project and work done through a video presentation<p></center>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-id-card"></i> 2020563761</button></p>
        </div>
      </div>
    </div>

  </div>
  </div>
</div>

<!-- Work Section - "Link to github" -->
<div class="w3-container w3-gray" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
	<br><br><br><br><br><br>
      <h3>Our Mobile Application</h3>
      <br>
      <p>Below is the link to the code for mobile application.<br>Please click the link below.</p>
	  <br><br>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-mobile-phone"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="mobileapp1.jpg" alt="mobile" width="700" height="600">
    </div>
  </div>
</div>

<!-- Add Hazard Section -->
<div class="w3-container" style="padding:128px 16px" id="addhazard">
  <h2 class="w3-center">REPORT HAZARD</h2>
  
  <div class="row-padding-64" id="gallery">
  <br><br>
   <div class="col1">
   <div class="column1 side">
   <img src="pic1.jpg" class="round-image-opacity-min" alt="hazard" width="550" height="500">
   </div>

    <div class="column1 middle">
	<h2 style="font-family: 'Candara', cursive;"><center>Please fill in the form</center></h2>
	<form action="addhazard.php" method="post" class="quote">
    <div class="form-group">
    <input type="text" name="hname" id="hname" class= "form-control" placeholder=" Hazard">
    </div>
 
    <div class="form-group">
    <input type="text" name="loc" id="loc" class= "form-control" placeholder=" Location">
    </div>
 
    <div class="form-group">
    <input type="text" name="dsc" id="dsc" class= "form-control" placeholder=" Description">
    </textarea>
    </div>
	
	<div class="row">
	<div class="col-md-4">
	<div class="form-group">
    <input type="decimal" name="lat" id="lat" class= "form-control" placeholder=" Latitude">
	</div>
	</div><br>
	<div class="col-md-4">
	<div class="form-group">
    <input type="decimal" name="lng" id="lng" class= "form-control" placeholder=" Longitude">
    </div>
	</div>
	</div>
	<br><br>
	<button type= "submit" class= "button">Submit</button>
	</form><br>
    </div>
    </div>
	</div>
</div>
 
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- View Hazard Section -->
<div class="w3-container w3-center w3-gray" style="padding:128px 8px" id="viewhazard">
  <h2>VIEW HAZARD</h2>

	<table class="container">
	<thead>
		<tr>
			<th><h1><center>ID </center></h1></th>
			<th><h1><center>Hazard </center></h1></th>
			<th><h1><center>Location</center></h1></th>
			<th><h1><center>Description</center></h1></th>
			<th><h1><center>Latitude</center></h1></th>
			<th><h1><center>Longitude</center></h1></th>
			<th><h1><center>Action</center></h1></th>
		</tr>
	</thead>
	<tbody>
	<?php

	$sql = "SELECT * FROM hazard;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result))
	{
	?>

	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><h6><?php echo $row['hname'] ?></h6></td>
		<td><h6><?php echo $row['loc'] ?></h6></td>
		<td><h6><?php echo $row['dsc'] ?></h6></td>
		<td><h6><?php echo $row['lat'] ?></h6></td>
		<td><h6><?php echo $row['lng'] ?></h6></td>
		<td>
		 <button type="button" class="btn btn-success editbtn">Edit</button>
          <a href="delete.php?id=<?php print ($row['id']);?>"><button type="button" class="btn btn-success deletebtn" name="delete">Delete</button></a>
        </td>
	</tr>

	<?php
	}
	}
	?>
	</tbody>
	</table>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="container-fluid">
    <div class="copyright float-right">
      &copy;
      <script>
       document.write(new Date().getFullYear())
      </script>, made with  <i class="  fa fa-heart-o  "></i>  by
      <a target="_blank">Fatini, Farisya, Irdina, Sarah, Hani & Anis</a>
    </div>
  </div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!--   edit popup function -->
<script>
  $(document).ready(function(){
	  $('.editbtn').on('click', function(){
		  $('#editmodal').modal('show');
		  
			$tr = $(this).closest('tr');
			
			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			
			console.log(data);
			
			$('#id').val(data[0]);
			$('#hname').val(data[1]);
			$('#loc').val(data[2]);
			$('#dsc').val(data[3]);
			$('#lat').val(data[4]);
			$('#lng').val(data[5]);
	});
  });
</script>

</body>
</html>
