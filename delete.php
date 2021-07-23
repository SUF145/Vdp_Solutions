<?php
include("connection.php");
error_reporting(0);

$phone = $_GET['ph'];
$query = "DELETE FROM CONTACT_US WHERE PHONE_NO = '$phone'";

$data = mysqli_query($conn,$query);

if($data){
	echo "Record deleted from the database";
}
else{
	echo "Failed to delete the record from the database";
}

?>