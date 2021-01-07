<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>HostDetail/ERENHOUSES</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			
			/*background-color: #bababa !important;*/
			background-size: 100% 758px;
			background-image: url('img4.jpg'); 
		}
		*{

			margin: 0;
			padding:0;
			box-sizing: border-box;
			font-family:'Poppins', sans-serif;
		}
		.container{
			/*float: right;

			*/
			
			padding-left: 140px !important;
			text-align: center !important;
			margin-left: 150px !important;

			padding-right: 0px !important;
			width: 84% !important;
			/*background-color: white !important;*/
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
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>HOST DETAILS</b>   </div>
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
	<div class="container">
		<table style=" width: 100%;" border="1px" class="table table-secondary table-striped table-bordered table-hover">
			<tr>
				<th>NUMBER</th>
				<th>BLOCK NAME</th>
				<th>NAME</th>
				<th>SURNAME</th>
				<th>HOUSEMATE(S)</th>
				<th>TELEPHONE1</th>
				<th>TELEPHONE2</th>
				<th>MOVE IN</th>
				<th>MOVE OUT</th>
				<th>OPERATION</th>
				

			</tr>


			<?php
			$bilgilerisor=$db->prepare("SELECT * FROM bilgiler ORDER BY move_out ");
			$bilgilerisor->execute();
			$sayı=0;
			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) { $sayı++; ?>




				<tr>
					<td><?php echo $sayı;  ?></td>
					<td><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td><?php echo $bilgileriçek['name'] ; ?></td>
					<td><?php echo $bilgileriçek['surname'] ; ?></td>
					<td><?php echo $bilgileriçek['housemate'] ; ?></td>
					<td><?php echo $bilgileriçek['telephone_num1'] ; ?></td>
					<td><?php echo $bilgileriçek['telephone_num2'] ; ?></td>
					<td><?php echo $bilgileriçek['move_in'] ; ?></td>
					<td><?php echo $bilgileriçek['move_out'] ; ?></td>
					<td align="center"> <a href="edit.php?id=<?php echo $bilgileriçek['id']?>"> <button class="btn btn-dark" >EDIT HOST</button></td></a>
					
				</tr>
			<?php } ?>
		</table>

	</div>

</body>
</html>
