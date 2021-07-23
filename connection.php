<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vdp_solutions";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn) {
	//echo "Connection Established";
}
else {
	echo "Connection Failed".mysqli_connect_error();
}

?>