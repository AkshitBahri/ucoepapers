<?php
		include_once("connect.php");

		$crs = $_GET["crs"];
		$subjects= $_GET["subjects"];
		$year = $_GET["year"];

		if ($crs == "cse") {
		$query="select * from upload_pdf_cse where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;
			}	
			
			if ($crs == "ae") {
		$query="select * from upload_pdf_ae where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;	
			}	

			if ($crs == "civil") {
			$query="select * from upload_pdf_civil where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;	
			}	

			if ($crs == "elec") {
			$query="select * from upload_pdf_elec where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;
			}	

			if ($crs == "ee") {
			$query="select * from upload_pdf_ee where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;	
			}	

			if ($crs == "me") {
		$query="select * from upload_pdf_me where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;
}


			if ($crs == "instru") {
			$query="select * from upload_pdf_instru where subjects ='$subjects' and year='$year' and course='$crs'";
        $table=mysqli_query($dbRef,$query);
		$ary=array();
		$msg = mysqli_error($dbRef);

       if($msg =="")
          {
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
	     }	
			echo $msg;	
			}	
			?> 