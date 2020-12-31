<!DOCTYPE html>
<html>
<head>
	<title>AddHost/ERENHOUSES</title>
	<meta charset="utf-8">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');

		.container{
			padding-top: 11px;
			

		}
		.bolum{
			width: 50%;
			padding-left: 25px;
		}
		.wlc{
			padding-top: 20px;
			float: left;
			width: 100%;
			height: 71px;
			background-color: #292626;
			font-family:'Poppins', sans-serif;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>ADD NEW HOST</b>   </div>
	<br><br><br><br>


	<div class="container">
		<div class="bolum">
			<form action="insert.php" method="POST"> 
				<?php

				if (isset($_GET['durum'])) {
				# code...

					if($_GET['durum']=="NO"){


						?>
						<div class="alert alert-danger"> BLOCKNAME ARE NOT USABLE.</div>
						<?php
					}
					else{ ?>
						<div class="alert alert-success"> NEW HOST HAS BEEN ADDED</div>
						<?php 
					}

				}

				?>
				<div class="mb-3" >

					<label >NAME</label>
					<input type="text" name="name" required="" class="form-control" autocomplete="off"  placeholder="Enter your name...">

				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1"  class="form-label">SURNAME</label>
					<input type="text" required="" name="surname" autocomplete="off" class="form-control" placeholder="Enter your surname...">
				</div>
				<div class="mb-3">
					<label >HOUSEMATE(S)</label>
					<input type="text" name="housemate" class="form-control" autocomplete="off" >

				</div>
				<div class="mb-3">
					<label >TELEPHONE1</label>
					<input type="text" name="telephone_num1" required="" class="form-control" placeholder="Enter your telephone number..">
				</div>
				<div class="mb-3">
					<label >TELEPHONE2</label>
					<input type="text" name="telephone_num2" class="form-control">
				</div>

				<div class="mb-3">
					<label >PASSWORD</label>
					<input type="password" name="password"  class="form-control" required="" placeholder="Enter your password...">
				</div>
				<div class="mb-3">
					<label >BLOCKNAME</label>
					<select name="blockname" id="block">
						<option value="block1"> BLOCK 1</option>
						<option value="block2"> BLOCK 2</option> 
						<option value="block2"> BLOCK 3</option> 
						<option value="block2"> BLOCK 4</option> 
						<option  value="block2">BLOCK 5</option>
					</select>
				</div>
				<br>



				<button type="submit" class="btn btn-primary" name="insertislemi">CREATE ACCOUNT</button> <br> <br>
				<div style="padding-left:0;">
					<a href="admin_1.php">BACK TO ADMIN PANEL</a> <br><br><br>
				</div>


			</form>


		</div>

	</div>

</body>
</html>