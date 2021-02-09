<!DOCTYPE html>
<html>
<head>
	<title>AddHost/ERENHOUSES</title>
	<meta charset="utf-8">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');

		body{
			background-size: 100% 758px;
			/*background-image: url('img4.jpg');*/

			/*background-color:#bababa !important;*/
		}
		.cont{
			
			/*background-color: grey;*/
			padding-top: 18px;
			width: 70%;
			
			margin-left: 360px;


			
		}
		.kolon{
			display: inline-block;
			border:1px  padding:10px; margin:10px; 
			text-align: center;
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

			}.navigation ul{
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

		<div class="wlc" style="text-align: center; font-size: 25px; color: white; padding-left: 195px; "> <b>ADD NEW HOST</b>   </div>
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
						<a href="deneme.php">
							<span class="title">REPORT</span>
						</a>
					</li>
					<li>
						<a href="report.php">
							<span class="title">CHECK PROBLEM&REQUEST</span>
						</a>
					</li>
					<li>
						<a href="budget.php">
							<span class="title">EXPENSES</span>
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
		<br><br><br><br>


		<div class="cont">
			<div >
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
							<option value="block3"> BLOCK 3</option> 
							<option value="block4"> BLOCK 4</option> 
							<option  value="block5">BLOCK 5</option>
						</select>
					</div>
					<br>



					<button type="submit" class="btn btn-primary" name="insertislemi">CREATE ACCOUNT</button> <br> <br>
					


				</form>


			</div>

		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
	</html>
