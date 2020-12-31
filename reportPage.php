<!DOCTYPE html>
<html>
<head>
	<title>ReportPage/ERENHOUSES</title>
	<meta charset="utf-8">
	<script >
		function formKontrol()
		{
			var reporting= document.getElementById("reporting").value;
			

			if (reporting.length ==0 || reporting.length == null){
				
				alert("EMPTY PROBLEM OR REQUEST.");
			}
			else
			{
              alert("YOUR MESSAGE HAS BEEN RECEIVED.");
				
			}
		}
	</script>
	<style type="text/css">
		/*.formm{
			width: 35%;
			height:40%;
			margin-top: 20px;

			border-style: double;
			margin-left: 300px;
			
			background-color: grey;
			padding-top: 40px;
			padding-left: 100px;
			padding-bottom: 40px;
		}*/
		body{
			
			background: url("rpt.jpg") no-repeat;
			background-size: 100% 770px;

			
		}
		/*#head{
			margin-left: 30px;
			padding-left: 10px;
			padding-top: 25px;
			font-size: 30px;
			font-family: Arial, Helvetica, sans-serif;
			font-style: italic;

		}
		*/


	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
		<div class="container py-2"> <a  class="navbar-brand"> EREN HOUSES </a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
				<span class="navbar-toggler-icon"> </span>
			</button>

			<div class="collapse navbar-collapse " id="navbar-houses">
				<ul class="navbar-nav ">
					<li class="nav-item px-4">
						<a href="project3.php?id=<?php echo $_GET['id'];?>" class="nav-link text-white">HOMEPAGE</a>
					</li>
					<li class="nav-item px-4">
						<a href="details.php?id=<?php echo $_GET['id'];?>" class="nav-link text-white">DUE DETAILS</a>
					</li>
					<li class="nav-item px-4">
						<a href="userbudget.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">INCOME-EXPENSE TABLE</a>
					</li>
					<li class="nav-item px-4">
						<a href="reportPage.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">REPORT PROBLEM&REQUEST</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<br> 
		
	
	<div class="cont" style="  text-align: center; width: 44%; height: 410px; margin-left: 820px;">
		
		<form action="editreport.php?id=<?php echo $_GET['id']; ?>" method="POST">
			<br> 
			
			<label for="fname" style="color: white; text-decoration-line: underline; font-size: 20px;" ><b> COMPLAINT & REQUEST: </b> </label>
			<br><br>
			<textarea name="reporting" id="reporting" required="" rows="10 " cols="69" ></textarea> <br><br>
			
			
			
			<button name="reportsubmit" onclick="formKontrol()"  style="background-color: yellow; font-size: 19px;">SUBMIT</button>

			
		


		</div>


		<!-- <script >
			function isValid()
		{
			var reporting= document.getElementById("reporting").value;
			

			if (reporting.value ==""|| report ){
				
				alert("PLEASE EMPTY THIS FORM");
			}
			else
			{
              alert("YOUR MESSAGE HAS BEEN RECEIVED SUCCESSFULLY.");
				
			}
		}
		</script> -->



	</body>
	</html>