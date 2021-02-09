<?php
include 'baglan.php';
session_start();
date_default_timezone_set('UTC');

?>
<!DOCTYPE html>
<html>
<head>
	<title>HostDetail/ERENHOUSES</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
		body{
			margin-left: 50px;
			/*background-color: #bababa !important;*/
			background-size: 100% 758px;
			 
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
		<div class="container py-2"> <a  class="navbar-brand"> Welcome <?php echo $_SESSION['name'];  ?> </a>

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
						<a href="userbudget.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">REPORT</a>
					</li>
					<li class="nav-item px-4">
						<a href="reportPage.php?id=<?php echo $_GET['id']; ?>" class="nav-link text-white ">REPORT PROBLEM&REQUEST</a>
					</li>
					<li class="nav-item px-4 ">
							<a href="out.php" class="nav-link text-white ">LOG OUT</a>
						</li>
					
				</ul>
			</div>
		</div>
	</nav>


	<br><br>
	<div class="cont">

	<?php
	$dat=date("Y-m");


	if (isset($_GET['startingDate'])) {
		$startingDate = $_GET['startingDate'];
	} else {
		$startingDate = date("Y-m", mktime(0, 0, 0, date("m") , 1));

	}

	


	
	$bilgilerisor=$db->prepare("SELECT sum(amount) AS totaidat FROM aidat   where  isPaid='PAID' AND period='$dat' ");
	$bilgilerisor->execute();
	$row = $bilgilerisor->fetch(PDO::FETCH_ASSOC);
	//echo $row['totaidat'];
	if($row['totaidat'] > 0){
		$income = $row['totaidat'];
	}else{
		$income=0;
	}


	$bilgilerisor=$db->prepare("SELECT sum(amount) AS tot FROM aidat   where  isPaid!='PAID' AND period='$dat' ");
	$bilgilerisor->execute();
	$row = $bilgilerisor->fetch(PDO::FETCH_ASSOC);
	if($row['tot'] > 0){
		$unpaiddues = $row['tot'];
	}else{
		$unpaiddues=0;
	}



	$bilgilerisor=$db->prepare("SELECT sum(price) AS totgider FROM gelirgider WHERE donem='$dat'");
	$bilgilerisor->execute();
	$row = $bilgilerisor->fetch(PDO::FETCH_ASSOC);
	if($row['totgider'] > 0){
		$expense = $row['totgider'];
	}else{
		$expense=0;
	}

	



	echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>

	<script type='text/javascript'>
    // Load google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Due Incomes'," . $income . "],
		['Expense'," . $expense . "],
		['Unpaid Dues'," . $unpaiddues . "]
		]);

      // Optional; add a title and set the width and height of the chart
		var options = {'title':'Income Expense', 'width':600, 'height':350};

      // Display the chart inside the <div> element with id='piechart'
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
	</script>";

	?>

	<div class="container col-md-10">
		<div class="row justify-content-center">

			<div id='piechart'></div>

		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="accordion mb-5">

					<div class="card">
						<div class="card-header">
							<a id="card-link" data-toggle="collapse" href="#expenseReport">
								Selected Expense Report
							</a>
						</div>

						<div class="collapse show" id="expenseReport">
							<div class="card-body">

								<table class="table table-hover table-striped">
									<thead class="thead-light">
										<tr>

											
											<th>Expense Detail</th>
											<th>Expense Date</th>
											<th>Expense Price</th>

										</thead>

										<?php
										$dat=date("Y-m");
										$bilgilerisor=$db->prepare("SELECT * FROM gelirgider WHERE donem='$dat' ");
										$bilgilerisor->execute();
										$sayı=0;
										while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) { $sayı++; ?>




											<tr>

												<td><?php echo $bilgileriçek['donem'] ; ?></td>
												<td ><?php echo $bilgileriçek['exType'] ; ?></td>
												<td ><?php echo $bilgileriçek['price'] ; ?></td>


											</tr>
										<?php } ?>
									</table>

								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<a id="card-link" data-toggle="collapse" href="#lifetime">
									All Expense Report
								</a>
							</div>

							<div class="collapse" id="lifetime">
								<div class="card-body">

									<table class="table table-hover table-striped">
										<thead class="thead-light">
											<tr>

												
												<th>Expense Detail</th>
												<th>Expense Date</th>
												<th>Expense Price</th>

											</thead>

											<?php

											$dat=date("Y-m");
											$bilgilerisor=$db->prepare("SELECT * FROM gelirgider ORDER BY donem DESC ");
											$bilgilerisor->execute();
											$sayı=0;
											while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) { $sayı++; ?>




												<tr>

													<td><?php echo $bilgileriçek['donem'] ; ?></td>
													<td ><?php echo $bilgileriçek['exType'] ; ?></td>
													<td ><?php echo $bilgileriçek['price'] ; ?></td>


												</tr>

											<?php } ?>

										</table>

									</div>
								</div>

</body>
</html>
