<?php
	
	$dbRef=mysqli_connect("localhost","root","","ucoepapers");
	
	if ($dbRef->connect_error) {
		die("Connection failed: " . $dbRef->connect_error);
	  }
	//   echo "Connected successfully";
	
	
?>