<!DOCTYPE html>
<html>
<head>
	<title>AddNewTerm/ERENHOUSES</title>
	<meta charset="utf-8">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		.container{
			padding-top: 51px;
			

		}
		.bolum{
			width: 50%;
			padding-left: 25px;
		}
			.wlc{ 
			padding-top: 20px;
			/*float: left;*/
			width: 100%;
			height: 71px;
			background-color: #292626;
			font-family:'Poppins', sans-serif;
		}
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
	
	<div class="wlc" >  <p style="text-align: center; font-size: 25px; color: white; "> <b>ADD NEW TERM PAYMENT</b></p> </div> 


	<div class="container">
		<div class="bolum">
			<form action="insert.php" method="POST"> 
				<?php

			if (isset($_GET['durum'])) {
				# code...

				if($_GET['durum']=="ok"){


					?>
					<div class="alert alert-success">UPDATED</div>
					<?php
				}
				else{ ?>
					<div class="alert alert-danger"> FAIL</div>
				<?php  }
			}
			?>
				<div class="mb-3" >

				<label >TERM</label>
				<input type="text" name="donem" required="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >ELECTRICITY BILL</label>
				<input type="text" name="elektrik" required="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >WATER BILL</label>
				<input type="text" name="su" required="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >CELANING EXPENSE</label>
				<input type="text" name="temizlik" required="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >OTHER EXPENSE(S)</label>
				<input type="text" name="diger"  class="form-control" autocomplete="off"  >

			</div>
			
			<button type="submit" class="btn btn-primary" name="updatebudget">UPDATE</button> <br> <br>
			

		</form> <br>
		<div style="padding-left:0;">
			<a href="admin_1.php">BACK TO ADMIN PANEL</a>
		<!-- <button style="width: 170px; text-decoration-line: underline;" type="submit" class="btn btn-warning"  name="updatebudget"> BACK TO ADMIN PANEL</button> --> </div>

	</div>

</div>

		</body>
		</html>