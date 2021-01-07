<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>BudgetTable/ERENHOUSES</title>
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			margin-left: 50px;
			/*background-color: #bababa !important;*/
			background-size: 100% 758px;
			background-image: url('img4.jpg'); 
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
	</style>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>INCOME-EXPENSE TABLE</b>   </div>
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
   <a href="budget.php"> <button style="width: 180px; height: 55px; margin-left: 670px; margin-top: 10px;" type="submit" class="btn btn-danger" ><b>ADD NEW TERM</b> </button> </a><br> 


	
	<div class="cont">
		<table style=" width: 100%;" border="1px" class="table table-secondary table-striped table-bordered table-hover">
			<tr>

				<th >TERM</th>
				<th style="text-align: center;">ELECTRICITY BILL</th>
				<th style="text-align: center;">WATER BILL</th>
				<th style="text-align: center;">CLEANING EXPENSE</th>
				<th style="text-align: center;">OTHER EXPENSE(S)</th>
				<th style="text-align: center;">ENTERED TIME</th>
				
				
				

			</tr>


			<?php
			$bilgilerisor=$db->prepare("SELECT * FROM gelirgider ORDER BY tim ");
			$bilgilerisor->execute();
			$sayı=0;
			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) { $sayı++; ?>




				<tr>
					
					<td><?php echo $bilgileriçek['donem'] ; ?></td>
					<td style="text-align: center;"><?php echo $bilgileriçek['elektrik'] ; ?></td>
					<td style="text-align: center;"><?php echo $bilgileriçek['su'] ; ?></td>
					<td style="text-align: center;"><?php echo $bilgileriçek['temizlik'] ; ?></td>
					<td style="text-align: center;"><?php echo $bilgileriçek['diger'] ; ?></td>
					<td style="text-align: center;"><?php echo $bilgileriçek['tim'] ; ?></td>
					
					
				</tr>
			<?php } ?>
		</table>

	</div>

</body>
</html>

