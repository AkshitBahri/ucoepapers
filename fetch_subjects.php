<?php
include_once("connect.php");
session_start();
$crs = $_GET["crs"];
if($crs == "cse")
{
     $query="select distinct subjects from upload_pdf_cse where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "civil")
{
     $query="select distinct subjects from upload_pdf_civil where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "instru")
{
     $query="select distinct subjects from upload_pdf_instru where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "me")
{
     $query="select distinct subjects from upload_pdf_me where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "elec")
{
     $query="select distinct subjects from upload_pdf_elec where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "ee")
{
     $query="select distinct subjects from upload_pdf_ee where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}

if($crs == "ae")
{
     $query="select distinct subjects from upload_pdf_ae where course='$crs'";
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
}
?>