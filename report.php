<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Problem&Request/ERENHOUSES</title>
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			

			background-image: url('img4.jpg') !important; 
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
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>CHECK PROBLEM&REQUEST</b>   </div>

	<br><br><br><br>
	<div class="container">
		<table width="85%" class="table table-secondary table-hover table-bordered table-striped " >
			<tr>
				<th>BLOCK NAME</th>
				<th>NAME</th>
				<th>SURNAME</th>
				<th>PROBLEM & REQUEST </th>
				<th>REPORTING DATE </th>


			</tr>


			<?php


			$bilgilerisor=$db->prepare("SELECT * FROM  report  ORDER BY time DESC   ");
			$bilgilerisor->execute();

			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {   ?>


				<tr>

					<td><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td><?php echo $bilgileriçek['name'] ; ?></td>
					<td><?php echo $bilgileriçek['surname'] ; ?></td>
					<td><?php echo $bilgileriçek['reporting'] ; ?></td>
					<td><?php echo $bilgileriçek['time'] ; ?></td>


				</tr>
			<?php } ?>
		</table>
	</div>

	

</body>
</html>