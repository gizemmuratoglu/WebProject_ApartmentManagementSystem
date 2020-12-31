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
			
			padding-right: 35px;
			padding-left: 35px;
		
			
		}

		.wlc{ 
			padding-top: 20px;
			/*float: left;*/
			width: 100%;
			height: 71px;
			background-color: #292626;
			font-family:'Poppins', sans-serif;
		}
		
	</style>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>EDIT DUE&DETAILS</b> </div> 
	<a href="movedue.php"> <button style="width: 200px; height: 60px; margin-left: 670px; margin-top: 10px;" type="submit" class="btn btn-danger" ><b>CHECK MOVE OUT DUES TABLE</b> </button> </a> 
		
	<div class="cont"  >
		<table  class="table table-striped table-bordered table-hover table-secondary ">
			<thead class="thead-dark"  >
				<tr>
					<th>BLOCK NAME</th>
					<th>NAME</th>
					<th>SURNAME</th>
					<th>JANUARY </th>
					<th>FEBRUARY </th>
					<th>MARCH </th>
					<th>APRİL </th>
					<th>MAY </th>
					<th>JUNE </th>
					<th>JULY </th>
					<th>AUGUST </th>
					<th>SEPTEMBER </th>
					<th>OCTOBER </th>
					<th>NOVEMBER </th>
					<th>DECEMBER </th>
					<th>OPERATION </th>


				</tr>
			</thead>


			<?php


			$bilgilerisor=$db->prepare("SELECT * FROM  bilgiler b, aidat a  where b.id=a.id ");
			$bilgilerisor->execute();

			while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>


				<tr>

					<td align="center"><?php echo $bilgileriçek['blockname'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['name'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['surname'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['ocak'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['subat'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['mart'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['nisan'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['mayis'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['haziran'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['temmuz'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['agustos'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['eylul'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['ekim'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['kasim'] ; ?></td>
					<td align="center"><?php echo $bilgileriçek['aralik'] ; ?></td>
					<td align="center"> <a href="editdue.php?id=<?php echo $bilgileriçek['id']?>"> <button class="btn btn-dark" >EDİT DUE</button></td></a>


				</tr>
			<?php } ?>

		</table>
	</div>
	
	

</body>
</html>