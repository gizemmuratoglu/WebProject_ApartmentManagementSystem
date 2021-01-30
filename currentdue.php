<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>DueDetail/ERENHOUSES</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			background-size: 100% 758px;
			background-image: url('img4.jpg');
			/*background-color:#bababa !important;*/
		}
		.cont{
			
			/*background-color: grey;*/
			padding-top: 18px;
			width: 79%;
			
			margin-left: 282px;

			
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

		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="wlc" style="text-align: center; font-size: 25px; color: white; padding-left: 195px; "> <b>EDIT DUE&DETAILS</b> </div> 
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
		
		<br>
			<br>
			<div style="width: 66%; height: 100px;  margin-left: 380px;">
				<br><br>

				<form class="form-inline" action="insert.php?start=ok" method="POST"  style="float: right; margin-right: 265px; ">

			<label class="sr-only" for="inlineFormInputName2">Name</label>
			<input type="text" style="width: 355px;" name="amount" required="" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="ENTER DUE OF NEW MONTH">

			<button type="submit" class="btn btn-primary mb-2">Send Due</button> </form> 

			</div>
			

				<div class="cont"  >
					<?php

			if($_GET['durum']=="var"){ ?>
				<div class="alert alert-danger " style="text-align: center;">
					<a href="currentdue.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Warning!</strong> This period already created .
				</div>
			<?php  } ?>
			<?php 

           if($_GET['sonuc']=="ok"){ ?>
				<div class="alert alert-success " style="text-align: center;">
					<a href="currentdue.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> This period created .
				</div>
			<?php  } 
			 ?>



					<div class="accordion">

						<div class="card">
							<div class="card-header">
								<a id="card-link" data-toggle="collapse" href="#res">
									#UNPAID
								</a>
							</div>

							<div class="collapse show" id="res">
								<div class="card-body">

									<table class="table table-hover table-striped">
										<thead class="thead-light">
											<tr>
												<th style="text-align: center;">BLOCK NAME</th>
												<th style="text-align: center;">PERIOD </th>
												<th style="text-align: center;">AMOUNT </th>
												<th style="text-align: center;">NAME</th>
												<th style="text-align: center;">SURNAME</th>
												<th style="text-align: center;">OPERATION </th> 
											</tr>
										</thead>
										<?php


										$bilgilerisor=$db->prepare("SELECT * FROM  bilgiler b, aidat a  where b.id=a.hostid AND a.isPaid!='PAID' ORDER BY period");
										$bilgilerisor->execute();

										while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>


											<tr>

												<td align="center"><?php echo $bilgileriçek['blockname'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['period'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['amount'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['name'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['surname'] ; ?></td>
												<td align="center"> <a href="editdue.php?hostid=<?php echo $bilgileriçek['hostid']?>"> <button class="btn btn-dark" >PAY DUE</button></td></a> 

											</tr>
											<?php 



										} ?>

									</table>
									


								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<a id="card-link" data-toggle="collapse" href="#residents">
									#PAID
								</a>
							</div>

							<div class="collapse show" id="residents">
								<div class="card-body">

									<table class="table table-hover table-striped">
										<thead class="thead-light">
											<tr>
												<th style="text-align: center;">BLOCK NAME</th>
												<th style="text-align: center;">PERIOD </th>
												<th style="text-align: center;">PAYMENT </th>
												<th style="text-align: center;">PAYMENT DATE</th> 
												<th style="text-align: center;">NAME</th>
												<th style="text-align: center;">SURNAME</th>
											</tr>
										</thead>
										<?php


										$bilgilerisor=$db->prepare("SELECT * FROM  bilgiler b, aidat a  where b.id=a.hostid AND a.isPaid='PAID' ORDER BY period");
										$bilgilerisor->execute();

										while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>


											<tr>

												<td align="center"><?php echo $bilgileriçek['blockname'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['period'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['amount'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['datetim'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['name'] ; ?></td>
												<td align="center"><?php echo $bilgileriçek['surname'] ; ?></td>
												

											</tr>
											<?php 



										} ?>

									</table>


								</div>
							</div>
						</div>
					</div>
				</div> <br>
				<div class="kolon" style="margin-left: 730px;">
					<a href="movedue.php"> <button  type="submit" class="btn btn-danger" ><b>CHECK MOVE OUT DUES TABLE</b> </button> </a> </div>
					<br><br>


					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

				</body>
				</html>
