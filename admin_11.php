<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>HostDetail/ERENHOUSES</title>
	
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
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>EDIT DUE&DETAILS</b> </div> 
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
							<span class="title">EDİT DUE&DETAILS</span>
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
	<br><br><br><br><br>
	<div class="cont">
		<table style="  width: 100%;" border="1px" class="table table-secondary table-striped table-bordered table-hover">
			<tr>
				
				<th>BLOCK NAME</th>
				<th>NAME</th>
				<th>SURNAME</th>
				<th>HOUSEMATE(S)</th>
				<th>TELEPHONE1</th>
				<th>TELEPHONE2</th>
				<th>MOVE IN</th>
				<th>OPERATION</th>
				<th>ADD NEW MONTH DUE</th>

				

			</tr>


			<?php
			$bilgilerisor=$db->prepare("SELECT * FROM bilgiler ORDER BY move_in ");
			$bilgilerisor->execute();
			$sayı=0;
			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>




				<tr>
					
					<td><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td><?php echo $bilgileriçek['name'] ; ?></td>
					<td><?php echo $bilgileriçek['surname'] ; ?></td>
					<td><?php echo $bilgileriçek['housemate'] ; ?></td>
					<td><?php echo $bilgileriçek['telephone_num1'] ; ?></td>
					<td><?php echo $bilgileriçek['telephone_num2'] ; ?></td>
					<td><?php echo $bilgileriçek['move_in'] ; ?></td>
					<td align="center"> 
						<a href="edit.php?id=<?php echo $bilgileriçek['id']?>"> <button class="btn btn-dark" >EDIT HOST</button> </td></a>
					
					<td align="center"> 
						<form action="insert.php?hostid=<?php echo $bilgileriçek['id']?>&start=ok" method="POST"> 
							<input type="text" name="amount" required="">

						 <button class="btn btn-danger" >START NEW MONTH</button> </td></form>
					
				</tr>
			<?php } ?>
			<?php

			if($_GET['durum']=="var"){ ?>
				<div class="alert alert-danger ">
					<a href="admin_11.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Warning!</strong> This period already created .
				</div>
			<?php  } ?>
			<?php 

           if($_GET['sonuc']=="ok"){ ?>
				<div class="alert alert-success ">
					<a href="admin_11.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> This period created .
				</div>
			<?php  } 
			 ?>
		</table>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
