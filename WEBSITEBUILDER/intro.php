<?php
include("connection.php");
session_start();
global $conn;
$get_id=mysqli_query($conn,"SELECT * FROM pages ORDER BY ID DESC LIMIT 1");
if(mysqli_num_rows($get_id)==1){
	$row=mysqli_fetch_assoc($get_id);
}
?>
<!DOCTYPE html>

<HTML>

<HEAD>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<TITLE>Rental Service</TITLE>
	<link rel= "stylesheet" href="style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</HEAD>

<BODY style="background-color:Azure;">

<header>


		<div class="navbar">
		<a href="#" class="company"><I><B><?php echo $row['name']?></I></B></a>
		  <a href="intro.html">Home</a>
		  <a href="aboutMe.html">About Me</a>
		  <a href="form.html">Enquiry-Form</a>
		  <a href="disclaimer.html">Disclaimer</a>
		  <a href="#">Enhancements</a>
	  	<div class="dropdown">
    		<button class="dropbtn">Our-Products
      			<i class="fa fa-caret-down"></i>
    		</button>
    		<div class="dropdown-content">
     		<a href="service1.html">s1</a>
		<a href="service2.html">s2</a>
		<a href="service3.html">s3</a>
		<a href="service4.html">s4</a>

		    </div>
		  </div>
		</div>


</header>

<div class="banner">
	<div class="content">
		<h2><I><?php echo $row['heading']?></I></h2>

		<p class="para"><?php echo $row['paragraph']?></p>

		<p class="footer" style="font-weight: bold;"><?php echo $row['footer']?><B>


	</div>

	<img  src="images/Rent.jpg" class="image"/>

</div>


</BODY>

</HTML>
