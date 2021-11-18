<?php

include_once("connect.php");

$year=$_POST["year"];
$course=$_POST["course"];
$subjects =$_POST["subjects"]; 




$pdf=$_FILES["ppic"]["name"];
	//$size=$_FILES["ppic"]["size"];
	$temp_name=$_FILES["ppic"]["tmp_name"];
	
	move_uploaded_file($temp_name,'uploads/'.$pdf);
	//echo "<h2>File Uploaded..</h2>";


    $btn=$_POST["btn"];
    




  if ($course == "cse") {
    $query="insert into upload_pdf_cse values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

	 if ($course == "civil") {
    $query="insert into upload_pdf_civil values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }	

		 if ($course == "ee") {
    $query="insert into upload_pdf_ee values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

		 if ($course == "me") {
    $query="insert into upload_pdf_me values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

		 if ($course == "elec") {
    $query="insert into upload_pdf_elec values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

		 if ($course == "ae") {
    $query="insert into upload_pdf_ae values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

		 if ($course == "instru") {
    $query="insert into upload_pdf_instru values('$course','$subjects','$year','$pdf')";
    	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
    {		// echo "Record Saved....,.,.,.,.,.";
    	header("location:index.php");}
	else
			echo $msg1;  }

?>
