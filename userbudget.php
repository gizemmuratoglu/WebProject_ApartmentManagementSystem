<?php

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
	<?php  include "navbar.php";?>

	<br><br>
	<div class="cont">

	<?php


	if (isset($_GET['startingDate'])) {
		$startingDate = $_GET['startingDate'];
	} else {
		$startingDate = date("Y-m", mktime(0, 0, 0, date("m") , 1));

	}

	


	$dat=date("Y-m");
	$bilgilerisor=$db->prepare("SELECT sum(amount) AS totaidat FROM aidat   where  isPaid='PAID' AND period='$startingDate' ");
	$bilgilerisor->execute();
	$row = $bilgilerisor->fetch(PDO::FETCH_ASSOC);
	//echo $row['totaidat'];
	if($row['totaidat'] > 0){
		$income = $row['totaidat'];
	}else{
		$income=0;
	}


	$bilgilerisor=$db->prepare("SELECT sum(amount) AS tot FROM aidat   where  isPaid!='PAID' AND period='$startingDate' ");
	$bilgilerisor->execute();
	$row = $bilgilerisor->fetch(PDO::FETCH_ASSOC);
	if($row['tot'] > 0){
		$unpaiddues = $row['tot'];
	}else{
		$unpaiddues=0;
	}



	$bilgilerisor=$db->prepare("SELECT sum(price) AS totgider FROM gelirgider WHERE donem='$startingDate'");
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


		<div class="row justify-content-center" style="width: 450px; height: 160px;">
			<form class="form-inline py-3" method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

				<div class="form-group mx-5">
					<label for="startingDate" style="margin-left: 8px;">ENTER PERIOD: </label>
					<input class="form-control mx-2" type="text" name="startingDate" id="startingDate" value="<?php echo date("Y-m", strtotime($startingDate));   ?>">
					

						<small style="margin-left: 8px;">Format: 2021-01</small><br> 
						<input style="margin-left: 8px;" class="btn btn-primary" type="submit" value=Show>

				</div> 


			</form>

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
										$bilgilerisor=$db->prepare("SELECT * FROM gelirgider WHERE donem='$startingDate' ");
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
