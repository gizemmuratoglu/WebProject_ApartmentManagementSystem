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
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>INCOME-EXPENSE TABLE</b>   </div>
   <a href="budget.php"> <button style="width: 180px; height: 55px; margin-left: 670px; margin-top: 10px;" type="submit" class="btn btn-danger" ><b>ADD NEW TERM</b> </button> </a><br> <br>


	
	<div class="container">
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
