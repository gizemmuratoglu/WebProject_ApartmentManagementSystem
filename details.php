<?php
	include 'baglan.php';
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>DueDetails/ERENHOUSES</title>
	<style >
		body{
			/*background-color: lightgrey !important;*/
			/*background-color: #db9430 !important;*/

			background-size: 100% 758px;
			background-image: url('dt.jpg'); 
			/*background-color: #bababa !important;*/

		}
		/*.container{
            margin-top: 80px;
			
		}*/
		.cont{
			margin-top: 30px;
			background-color: grey;
			padding-top: 70px;
			padding-bottom: 70px;
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


<br><br><br> <br>
<div class="cont">

	<table   style="height: 130px; width: 90%; margin-left: 70px;"  class="table table-striped  table-bordered table-secondary ">
		<tr style="height: 60px;">
	    
	    
		<th>JANUARY</th>
		<th>FEBRURY</th>
		<th>MARCH</th>
		<th>APRIL</th>
		<th>MAY</th>
		<th>JUNE</th>
		<th>JULY</th>
		<th>AUGUST</th>
		<th>SEPTEMBER</th>
		<th>OCTOBER</th>
		<th>NOVEMBER</th>
		<th>DECEMBER</th>

		</tr>


<?php
	$bilgilerim_sor=$db->prepare("SELECT * FROM  aidat where id=:id ");
$bilgilerim_sor -> execute(array(
'id'=>$_GET['id']
));
$bilgileriçek=$bilgilerim_sor->fetch(PDO::FETCH_ASSOC);

	?>



		<tr>
			
			<td align="center"><?php echo $bilgileriçek['ocak'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['subat'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['mart'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['nisan'] ; ?></td>
			<td align="center" ><?php echo $bilgileriçek['mayis'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['haziran'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['temmuz'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['agustos'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['eylul'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['ekim'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['kasim'] ; ?></td>
			<td align="center"><?php echo $bilgileriçek['aralik'] ; ?></td>
			
		</tr>
      
	</table>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>