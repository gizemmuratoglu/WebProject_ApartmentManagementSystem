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
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>HOST DETAILS</b>   </div>

	
	<!-- <nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
		<div class="container py-2"> <a href="admin_1.php"  class="navbar-brand"> ADMIN PANEL </a>

			<div class="collapse navbar-collapse" id="navbar-houses">
				<ul class="navbar-nav ">
					<li class="nav-item px-4">
						<a href="admin_11.php" class="nav-link text-white">HOST DETAILS</a>
					</li>
					<li class="nav-item px-4">
						<a href="newPage.php" class="nav-link text-white">ADD NEW HOST</a>
					</li>
					<li class="nav-item px-4">
						<a href="reportPage.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">REPORT PROBLEM&REQUEST</a>
					</li>
					

				</ul>
			</div>
		</div>
	</nav> -->

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