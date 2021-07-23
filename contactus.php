<?php
error_reporting(0);
include("connection.php");
include("contactus.html");
include('path to file');
if (isset($_POST['submit'])){
	$nm=$_POST['namehere'];
	$ph=$_POST['phoneno'];
	$em=$_POST['email'];
	$msg=$_POST['messagehere'];

	if($nm!="" && $ph!="" && $em!="" && $msg!=""){
		$query = "INSERT INTO CONTACT_US VALUES ('$nm','$ph','$em','$msg')";
		$data = mysqli_query($conn,$query);

	if($data) {
		//echo "Data inserted into the database";
		}
	}
	else {
		echo "Failed to insert the data into the database";
	}
}

?>