<!DOCTYPE html>
<html>
<head>
	<title>UCOE papers</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">	
    <link rel="stylesheet" href="progbar.css">
  
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

   <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    body{
        display:flex;
        flex-direction:column;
        min-height:100vh;
    }
</style>
  <script type="text/javascript">
  	var arrce = ["Theory Of Computation","Datawarehouse & Data Mining","Information Security & cyber law","Digital Electronics","Operating System","Cloud Computing","Java Programming","Computer assembly & maintainance","Data Communication & networks","Progrramming using c","Operating System","Computer Networks","Programming in Vb.net","RDBMS","Data Structure Using C (D.S.U.C)","Software Engineering","Nicroprocessor & Programming","Multimedia Applications","Internet Technologies (I.T)","Programming using Java","Computer Organization","Wireless Communication & Mobile Computing","Information Security & Cyber law","Datawarehousing & Data mining","GSED(Generic Skills & Enterpneurship develop.)","Basic of Management(B.O.M),Computer Graphics","Open Source Software","Cloud Computing","web Prog.","Android Programming","Installing & Troubleshooting of Computer Networks","Digital System & Applications","Advance Programming in C language","Data Communication & Computer Networks","Web Programming","Computer Organization & Archietecture (COA)","Computer Hardware & Peripherals","Cyber Security","Graphics & Animation","Python Programming","Internet Of Things(IOT)","Linux OS"];

  	var arrcivil = ["survey","soil engineering","fluid mechanics","Applied mechanics","Surveying-I","Construction Material","Building Construction","Building Drawing","Concrete Technology","Water Supply & Waste water Engg.","Surveying-II","Structural mechanics","Public Health& Engg. Drawing","Basic of Management & Enterpneurship development","RCC Design","RCC Drawing & Detailing","Highway Engg.","Quantity Survey","Earthquake Resistent building construction","Generic Skills & Enterpneurship Devlop.","Steel Structure Design & Drawing" ,"Construction Management & accounts","Railway bridges & Tunnel","Bridges tunnel and airport engg.","Prestressed Concretete","Environmental Engg.","Reapair and maintainance of buildings","Irrigation Engineering","Design & Drawing","Basics of Electrical & Electronics Engineering","Green buildings & Services"];

  	var arrme = ["Applied mechanics", "Electrical Technology","Thermal Engineering-I","Manufacturing Technology –I","Machine Drawing -1","Hydraulics & Pneumatics","Strength of material", "Material Science", "Thermal Engineering -II","Manufacturing  Technology-II","Machine Drawing","Theory of Machine","Automobile Engineering","Machine Design","Production Planing & Control","Manufacturing process 3","Welding Tech.","Tool Engineering", "Heat Treatment", "Product Design & development","Foundary Technology","Mechatronics","Genric skills & Enterpneurship Develop.","Basic of Management", "Refrigration and air conditioning","Metrology & Instrumentation","CNC Machines & Automation","Matrology & Instrumentation","Manufacturing Technology -III","Power Plant engineering","Mechatronics"];

  	var arrelec=["Fundamental of Electrical Engineering","EDC (Electriocs Device & Circuit-1)","Computer prog. & Application(CPA)","Electrical Machine-I","Electrical And Electronic Engg Material","Electrical Engg Design And Drawing","EDC-II","Digital Electronics","Generic Skills","Electrical Power-I","Electrical and Electronics Measuring instruments","Microprocessor and microcontroller","Power Electronics","Electrical Machine -II","Electrical Power-II","Non-Convential Engineering Resources","Fundamental of Communication Engineering","Medical Electronics","BOM","Energy Management","PLC's And its Application","Personal Compuuter Organization","Electrical MAchine -III","Electrical Power-III"]

  	function abc(){
  		var crs = document.getElementById("course");
  		var sind = crs.options[crs.selectedIndex];
  		var txt = sind.text;
  		// alert(txt);
  		// var crs = document.getElementById("course").selectedIndex;
  		// alert(crs.innerHtml);
  		// alert(crs);
  		if(sind.value == "cse")
  		{
  			$("#subjects").empty();
  			$.each(arrce, function(i, p){
  				$('#subjects').append($('<option></option>').val(p).html(p));
  			});
  		}

  		if(sind.value == "civil")
  		{
  			$("#subjects").empty();
  			$.each(arrcivil, function(i, p){
  				$('#subjects').append($('<option></option>').val(p).html(p));
  			});
  		}

  		if(sind.value == "me")
  		{
  			$("#subjects").empty();
  			$.each(arrme, function(i, p){
  				$('#subjects').append($('<option></option>').val(p).html(p));
  			});
  		}

  		

  		if(sind.value == "elec")
  		{
  			$("#subjects").empty();
  			$.each(arrelec, function(i, p){
  				$('#subjects').append($('<option></option>').val(p).html(p));
  			});
  		}

  		
  	


  	}

</script>

    <script>

		function showpreview(file,ref) 
		{
			
			
        
            var reader = new FileReader();
            reader.onload = function (e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        

    }



	
	</script>



<script type="text/javascript">
	$(document).ready(function(){
		$(function(){

         $('#uploadform').ajaxForm({
         	beforeSend:function(){
         	$(".status").css("display","none");
         	$(".progress").css("display","");
         	var percentVal="0%";
         	$(".bar").css("width".percentVal);

         },
         	
         	uploadProgress:function(event,position,total,percentComplete){
         		var percentVal =percentComplete  +"%";
         		$(".bar").css("width",percentVal);
         	},
         	complete:function(xhr){
         		$(."progress").css("display","none");
         		$(".status").css("display","");
         	
         	}

        
		});
	});
</script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand" href="#"><p1 style="font-size:30px;color:#00446a;"><b>UCOE papers</b></p1></a>
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
  
    </ul>


  </div>
</nav>



<form id="uploadform"action="upload_pdf_process.php" method="post" enctype="multipart/form-data" >
	<div class="container">
		<div class="form-row">
			
	
<div class=" form-group mb-3 col-md-12">
  <label for="exampleFormControlInput1" class="form-label">course</label>
  <select name="course" id="course" class="form-control" onchange="abc()" required>
  	<option>select</option>
  	<option value="cse">Computer Engineering</option>
  	<option value="me">Mechanical Enginering</option>
  	<option value="civil">Civil Engineering</option>
  	
  	<option value="elec">Electrical & Electronics Engineering</option>
  	 	
  </select>
</div>
<div class="form-group mb-3 col-md-12">
  <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
   <select name="subjects" id="subjects" class="form-control" required>
      <option></option>
  </select>
</div>
<div class=" form-group mb-3 col-md-12">
  <label for="exampleFormControlInput1" class="form-label">Year</label>
  <select name="year" id="year" class="form-control" required>
  	<option></option>
  <option value="2021">2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
 
  </select>
</div>





<div class="col-md-12  form-group">
							Pic: <br>
							<iframe src="" class="mt-1 mb-1 col-md-12 "  height="300" alt="" id="pic"></iframe>
							<input type="file" accept=".pdf, .doc" multiple name="ppic" id="ppic" onchange="showpreview(this,pic);" required>

						</div>
						<br>

<div class="progress">
<div class="progress-bar progess-bar-stripped progress-bar-animated bar" 
      style="animation: progress-animation 5s forwards"         role="progressbar"   aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:600px;">
</div>
</div>
<br>

						<button onclick="upload()" style="border:none;"><input  type="submit" class="btn btn-warning btn-block" name="btn" id="btn" value="submit"></button>


<div class="alert alert-success status" style="display:none;" role="alert">
	Your file is uploaded successfully !
</div>

</div>
	</div>


</form>


<script type="text/javascript">
	const upload =() =>
    {
	 const progressBar=document.querySelector('.progress-bar')
	 progressBar.setAttribute('id','play-animation')
    }
</script><br>
<nav class="navbar position-sticky-bottom navb1" style="bottom:0px;color:white;margin-top:auto;text-align:center;display:flex;justify-content:center;background-color:black" id="navb1">
        <div class="footer-bottom">
            &copy;<a href="http://www.punjabiuniversity.ac.in/">Punjabi University, Patiala</a> | University College Of Engineering | UCOE Papers
        </div>
    </nav>
</body>
</html>