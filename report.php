<?php
include 'baglan.php';
date_default_timezone_set('UTC');

if (isset($_POST['gonder'])) {

	
	$kaydet=$db->prepare("INSERT into duyurular set
		
		duyuru=:duyuru

		");


	$insert=$kaydet->execute(array(
		
		'duyuru'=>$_POST['duyuru'],
		

		
	));
	
	}

	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Problem&Request/ERENHOUSES</title>
	<script >
		function formKontrol()
		{
			var reporting= document.getElementById("reporting").value;
			

			if (reporting.length ==0 || reporting.length == null){
				
				alert("PLEASE ENTER AN ANNOUNCEMENT.");
			}
			else
			{
              alert("YOUR ANNOUNCEMENT HAS BEEN SENT.");
				
			}
		}
	</script>
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			
			margin-left: 50px;
			/*background-color: #bababa !important;*/
			background-size: 100% 758px;
			background-image: url('img4.jpg'); 
		}
		.wlc{
			padding-top: 20px;
			float: left;
			width: 100%;
			height: 71px;
			background-color: #292626;
			font-family:'Poppins', sans-serif;
		}
		.navigation{
			position: fixed;
			width: 250px;
			height: 100%;
			background-color: #292626;
			transition: 0.5s;
			overflow: hidden;
			float: left;

		}
		.navigation ul{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;

		}
		.navigation ul li{
			position: relative;
			width: 100%;
			list-style: none;

		}
		.navigation ul li a{
			position: relative;
			display: block;
			width: 100%;
			display: flex;
			text-decoration: none;
			color: white;
		}
		.navigation ul li a .icon .fa{
			font-size: 24px;
		}
		.navigation ul li a .title{
			padding-left: 0 !important;
			font-size: 15.5px;
			color: white;
			text-decoration-line: underline;
			position: relative;
			display: block;
			padding: 0 20px;
			line-height: 60px;
			text-align: start;
			white-space: nowrap;
		}
		.navigation ul li a .title:hover{
			color: brown;
			font-size: 16px;

		}
		.navigation ul li a .baslık{
			font-size: 24px;
			color: white;
			text-decoration-line: underline;
			position: relative;
			display: block;
			padding: 0 20px;
			line-height: 60px;
			text-align: start;
			white-space: nowrap;
		}
		.container{
			/*float: right;

			*/
			
			padding-left: 170px !important;
			text-align: center !important;
			margin-left: 150px !important;

			padding-right: 0px !important;
			width: 85% !important;
			/*background-color: white !important;*/
		}
	</style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
   
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; padding-left: 195px; "> <b>CHECK PROBLEM&REQUEST</b>   </div>
	<div class="con">
		<div class="navigation">
			<ul>
				<li>
					<a >

						<span class="baslık" style="text-decoration-line: none;"><b>DASHBOARD</b> </span>
					</a>
				</li>
				<<li>
					<a href="admin_11.php" >

						<span class="title" > HOST DETAILS&EDIT</span>
					</a>
				</li>
				<li>
					<a href="newPage.php">
						<span class="title">ADD NEW HOST</span>
					</a>
				</li>
				<li>
					<a href="currentdue.php">
						<span class="title">EDIT DUE&DETAILS</span>
					</a>
				</li>
				<li>
					<a href="report.php">
						<span class="title">CHECK PROBLEM&REQUEST</span>
					</a>
				</li>
				<li>
					<a href="see.php">
						<span class="title">EDIT INCOME-EXPENSE TABLE</span>
					</a>
				</li>
				<li>
					<a href="admin.php">
						<span class="title">LOG OUT</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="container-fluid" >
		<div class="row justify-content-center" style="padding-top: 15px !important; padding-left: 180px !important; "  >

			<div class="col-lg-4 bg-secondary rounded px-4">

				<h4 class="text-center text-dark p-1">SEND ANNOUNCEMENT</h4>
				<form action="" method="POST" style="height: 93px ;">
					<div class="form-group " style="height: 47px;">
						<input type="text" id="reporting" autocomplete="off"  name="duyuru" class="form-control p-1" required="">
                     

					</div>


					<div class="form-group text-center" >
						<input type="submit" onclick="formKontrol()"  name="gonder" value="SEND" class="btn btn-dark btn-block">

					</div>

				</form>
			

			</div>
		</div>
	</div>

	<br>
	<div class="container" >
		<table width="85%" class="table table-secondary table-hover table-bordered table-striped " >
			<tr>
				<th>BLOCK NAME</th>
				<th>NAME</th>
				<th>SURNAME</th>
				<th>PROBLEM & REQUEST </th>
				<th>REPORTING DATE </th>
				<th>OPERATION </th>


			</tr>


			<?php


			$bilgilerisor=$db->prepare("SELECT * FROM  report  ORDER BY time DESC   ");
			$bilgilerisor->execute();

			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {   ?>


				<tr>

					<td><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td><?php echo $bilgileriçek['name'] ; ?></td>
					<td><?php echo $bilgileriçek['surname'] ; ?></td>
					<td><?php echo $bilgileriçek['reporting'] ; ?></td>
					<td><?php echo $bilgileriçek['time'] ; ?></td>
					<td align="center"> 
						<a href="insert.php?id=<?php echo $bilgileriçek['id']?>&del=ok"> <button onclick="return window.confirm('ARE YOU SURE ?')" class="btn btn-dark" >DELETE</button> </td></a>


					</tr>
				<?php } ?>
			</table>
		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>
