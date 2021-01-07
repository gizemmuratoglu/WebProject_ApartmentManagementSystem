<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>DueDetail/ERENHOUSES</title>

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
			width: 70%;
			
			margin-left: 285px;
		
			
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

	<a href="movedue.php"> <button style="width: 200px; height: 60px; margin-left: 670px; margin-top: 10px;" type="submit" class="btn btn-danger" ><b>CHECK MOVE OUT DUES TABLE</b> </button> </a> 
		
	<div class="cont"  >
		<table  class="table table-striped table-bordered table-hover table-secondary ">
			<thead class="thead-dark"  >
				<tr>
					<th style="text-align: center;">BLOCK NAME</th>
					<th style="text-align: center;">YEAR </th>
					<th style="text-align: center;">MONTH </th>
					<th style="text-align: center;">PAYMENT </th>
					<th style="text-align: center;">PAYMENT DATE</th>
					<th style="text-align: center;">NAME</th>
					<th style="text-align: center;">SURNAME</th>
					
					
					<th style="text-align: center;">MOVE_IN DATE </th>
					
					<th style="text-align: center;">OPERATION </th>


				</tr>
			</thead>


			<?php


			$bilgilerisor=$db->prepare("SELECT * FROM  bilgiler b, aidat a  where b.id=a.hostid ORDER BY datetime");
			$bilgilerisor->execute();

			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>


				<tr>

					<td align="center"><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['year'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['month'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['due'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['datetime'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['name'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['surname'] ; ?></td>
					
					
					<td align="center"><?php echo $bilgileriçek['move_in'] ; ?></td>
					<td align="center"> <a href="editdue.php?id=<?php echo $bilgileriçek['id']?>"> <button class="btn btn-dark" >EDİT DUE</button></td></a>


				</tr>
			<?php } ?>

		</table>
	</div>
	
	

</body>
</html>
