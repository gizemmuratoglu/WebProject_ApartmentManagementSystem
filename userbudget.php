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
			margin-left: 50px;
			/*background-color: #bababa !important;*/
			background-size: 100% 758px;
			background-image: url('img4.jpg'); 
		}
		.container{
			/*float: right;
			*/padding-right: 15px;
			width: 92%;
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
	</style>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
		<div class="container py-2"> <a  class="navbar-brand"> ERENHOUSES </a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
				<span class="navbar-toggler-icon"> </span>
			</button>

			<div class="collapse navbar-collapse" id="navbar-houses">
				<ul class="navbar-nav ">
					<li class="nav-item px-4">
						<a href="project3.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white">HOMEPAGE</a>
					</li>
					<li class="nav-item px-4">
						<a href="details.php?id=<?php echo $_GET['id'];?>" class="nav-link text-white">DUE DETAILS</a>
					</li>
					<li class="nav-item px-4">
						<a href="userbudget.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">INCOME-EXPENSE TABLE</a>
					</li>
					<li class="nav-item px-4">
						<a href="reportPage.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">REPORT PROBLEM&REQUEST</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>


	<br><br>
	<div class="container">
		<table style=" width: 100%;" border="1px" class="table table-secondary table-striped table-bordered table-hover">
			<tr>

				<th >TERM</th>
				<th style="text-align: center;">ELECTRICITY BILL</th>
				<th style="text-align: center;">WATER BILL</th>
				<th style="text-align: center;">CLEANING EXPENSE</th>
				<th style="text-align: center;">OTHER EXPENSİVE(S)</th>
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