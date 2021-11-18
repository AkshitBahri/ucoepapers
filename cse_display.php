<?php
include_once("connect.php");
session_start();
$crs = $_GET["crs"];

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $crs?> display</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">	
  
   <script src="js/angular.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/ucoelogo.jfif" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>

    body{
        display:flex;
        flex-direction:column;
        min-height:100vh;
    }
</style>
<script type="text/javascript">
       $(document).ready(function() {
              // alert();
            loadFunctions();
             
            function loadFunctions() {

                
                $.getJSON("fetch_subjects.php?crs=<?php echo $crs ?>", function(jsonAry) {

                    // alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].subjects;
                        item.value = jsonAry[i].subjects;
                        document.getElementById("subjects").append(item);
                        // alert();
                    }
                });
            }

               $("#subjects").change(function() {
                var selFunction = $("#subjects").val();

                $.getJSON("json-fetch-subjects.php?subjects=" + selFunction + "&crs=<?php echo $crs ?>", function(jsonAry) {
                    //alert(JSON.stringify(jsonAry));
                    //alert(jsonAry[0].services);
                  var i;
                      document.getElementById("year").options.length = 0;
                    for (i = 0; i < jsonAry.length; i++) {
                         // $("year").empty();
                        var item = document.createElement("option");
                        //alert(ary[i]);
                        item.text = jsonAry[i].year;
                        item.value = jsonAry[i].year;
                        document.getElementById("year").append(item);
                    }


                });

            });
        });

</script>
<!-- <script src="js/bootstrap.js" type="text/javascript"></script> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->

  <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {
            $scope.doFetchAll = function() {
                $scope.jsonAry;
                $http.get("angular_fetch_cse.php?crs=<?php echo $crs ?>").then(fine, notfine);

                function fine(response) {
                    //alert(JSON.stringify(response));
                    //alert(JSON.stringify(response.data)); //== jsonAry
                    $scope.jsonAry = response.data;
                    //console.log(JSON.stringify(response)); 

                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }

              $scope.search = function(){
                $scope.jsonAry;
                var subjects=$("#subjects").val();
                var year=$("#year").val();
                // alert(year);
                // alert(subjects);
                 $http.get("single_search.php?subjects=" + subjects + "&year="+year + "&crs=<?php echo $crs ?>").then(fine, notfine);
                     
                     // alert();
                  function fine(response) {
                   // alert(JSON.stringify(response.data));
                    $scope.jsonAry = response.data;
                    $("#close2").click();
                    
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
                
            }
        });
        </script>

</head>
<body ng-app="mymodule" ng-controller="mycontroller">
    <!--  -->
     <!--   <div class="modal fade ssa5" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content haed">
                <div class="modal-header " style="background-color:gold">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:red;"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close2">
                        <span class="clsbtn" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body sds" id="sds" style="background-color:gold">
                    
            <br>
            <center>
                <h3>
                    <font face="Comic Sans MS">Search Accordingly</font>
                </h3>
            </center>
         
                <font face="Comic Sans MS" color="black"> Subject:</font>
                <center>

                    <select name="subjects" id="subjects" class="form-control">
                        <option value="select">select</option>
                    </select><br>

                </center>
             
                <font face="Comic Sans MS" color="black">Nomenclature:</font>
                <center>

                    <select name="year" id="year" class="form-control">
                        <option value="select">select</option>
                        <option value="2007">2007</option>
                        <option value="2012">2012</option>
                        <option value="2017">2017</option>
                        <option value="2022">2022</option>

                    </select>
                </center><br>
             
                <center>
                    <br>
                    <div class="form-group">
                        <input type="button" class="btn btn-dark btn-block" value="submit" id="button" name="button" ng-click="search();">
                    </div>


                </center>
     
        </div>
                </div>

            </div>
       
    </div> -->
    <!--  -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand" href="#"><p1 style="font-size:30px;color:#00446a;"><b>UCOE Papers</b></p1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse a1" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto a2">
     
     <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li> 
      
<li class="nav-item">
        <a class="nav-link active" href="http://punjabiuniversity.ac.in/syllabi/index.php">Download Syllabus </a>
      </li>
     

      <!--  <li class="nav-item">
            <a class="nav-link active" href="#">
                    <font style=" color:orange;cursor:pointer" data-toggle="modal" data-target="#search" class="xxx"><b>Search</b></font></a>
                  

                
        </li> -->
    </ul>


  </div>
</nav>
 

	 <div class = "container  ssa1" >
       <div class="form-row ssa2">
        
        <div class="form-group col-md-12 ssa3" ng-init="doFetchAll();" style="">
            <br>
            <div class="form-group col-md-12 ssa4">
             <center> <img style=""src="images/tenor.gif" height="50px" width="130px;"><br></center>

               <!-- <center><a href=""><p1><font style=" color:blue;cursor:pointer" data-toggle="modal" data-target="#search"><b>Choose What you find</b></font></a> <span style="color:red;font-size: 30px;"><b>?</b></span></p1></center> -->
           
                



            <div class="form-group mb-3 col-md-12 abc12">
              <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
               <select name="subjects" id="subjects" class="form-control">
                  <option value="select">Select</option>
               </select>
            </div>
          <div class=" form-group mb-3 col-md-12">
          <label for="exampleFormControlInput1" class="form-label">Nomenclature</label>
        <select name="year" id="year" class="form-control">
                        <option value="select">Select</option>
                       <!--  <option value="2007">2007</option>
                        <option value="2012">2012</option>
                        <option value="2017">2017</option>
                        <option value="2022">2022</option> -->

                    </select>
            </div>
            <!-- <center><button class="btn btn-success btn-sm  submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button></center> -->
              <center>
                    <br>
                    <div class="form-group col-md-12">
                        <input type="button" class="btn btn-dark" value="Search" id="button" name="button" ng-click="search();">
                    </div>


                </center>
              <br><br>

</div>








            
                <div class="row mt-3">
                    <div class="col-md-3 " ng-repeat="oneObj in jsonAry | filter:google">
                        <div class="card border border-primary"  style="height: 300px; margin: 20px">
                            <!-- <iframe [attr.src]="uploads/{{oneObj.pdf}}" class="card-img-top" alt="..."></iframe> -->
                            <center><img src="images/pdf_pic.jpg" style="height: 70px; width: 70px;"></center>
                            <div class="card-body">
                                <h5 class="card-title">{{oneObj.subjects}}</h5>
                                <p class="card-text"><span class="text-danger"> Course:</span>{{oneObj.course}}</p>
                                <p class="card-text"><span class="text-danger"> Nomenclature:</span>{{oneObj.year}}</p>
                                   <!-- <p class="card-text"><span class="text-danger"> name:</span>{{oneObj.pdf}}</p> -->
                                <p class="card-text" style="font-size: 10px;"><span class="text-danger"> press button for download/Preview</span></p>
                                


                                <a   href="uploads/{{oneObj.pdf}}" class="" ><div class="btn btn-primary btn-block" style="margin: 3px;">Preview</div></a>

                                <a   href="uploads/{{oneObj.pdf}}" class="" download="{{oneObj.pdf}}" ><div class="btn btn-primary btn-block" style="margin: 3px;">DOWNLOAD</div></a>
                            </div>
                        </div>
                    </div>
                

            </div>
        </div>
    </div>
    </div><br><br>
    <nav class="navbar position-sticky-bottom navb1" style="bottom:0px;color:white;margin-top:auto;text-align:center;display:flex;justify-content:center;background-color:black" id="navb1">
        <div class="footer-bottom">
            &copy;<a href="http://www.punjabiuniversity.ac.in/">Punjabi University, Patiala</a> | University College Of Engineering | UCOE Papers
        </div>
    </nav>
</body>
</html>