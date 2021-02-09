<?php  date_default_timezone_set('UTC');
 ?>
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
		.cont{
			
			/*background-color: grey;*/
			padding-top: 18px;
			width: 79%;
			
			margin-left: 282px;

			
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
			.cont{
			
			/*background-color: grey;*/
			padding-top: 18px;
			width: 80%;
			
			margin-left: 360px;


			
		}
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
	
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; padding-left: 195px; "> <b>ENTER EXPENSES</b> </div> 
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
						<a href="see.php">
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
		<div class="bolum">
			<form action="insert.php" method="POST"> 
				<?php

			if (isset($_GET['durum'])) {
				# code...

				if($_GET['durum']=="ok"){


					?>
					<div class="alert alert-success">ADDED</div>
					<?php
				}
				else{ ?>
					<div class="alert alert-danger"> FAIL</div>
				<?php  }
			}
			?>
				<div class="mb-3" >

				<label >TERM</label>
				<input type="text" name="donem" value="<?php echo date('Y-m'); ?>" disabled="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >EXPENSE DETAIL</label>
				<input type="text" name="exType" required="" class="form-control" autocomplete="off"  >

			</div>
			<div class="mb-3" >

				<label >EXPENSE PRICE</label>
				<input type="text" name="price" required="" class="form-control" autocomplete="off"  >

			</div>
			
			
			<button type="submit" class="btn btn-primary" name="updatebudget">ADD</button> <br> <br>
			

		</form> <br>
		

	</div>

</div>

		</body>
		</html>
