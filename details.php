<?php
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>DueDetails/ERENHOUSES</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    	<div class="container" style="width: 60% !important; " >
    	<div class="accordion">

    		<div class="card">
    			<div class="card-header">
    				<a id="card-link" data-toggle="collapse" href="#res">
    				<p style="text-align: center; font-size: 18px;" >UNPAID</p>	
    				</a>
    			</div>

    			<div class="collapse show" id="res">
    				<div class="card-body">

    					<table class="table table-hover table-striped">
    						<thead class="thead-light">
    							<tr>
    								
    								<th style="text-align: center;">PERIOD </th>
    								<th style="text-align: center;">AMOUNT </th>
    								<th style="text-align: center;"> </th>
    				
    							</tr>
    						</thead>
    						<?php


    						$bilgilerim_sor=$db->prepare("SELECT * FROM  aidat   where hostid=:id AND isPaid!='PAID' ORDER BY period ");
    						$bilgilerim_sor -> execute(array(
    							'id'=>$_GET['id']
    						));

    						while ($bilgileriçek=$bilgilerim_sor->fetch(PDO::FETCH_ASSOC)) {  ?>


    							<tr>

    								
    								<td align="center" style="color: red;"><?php echo $bilgileriçek['period'] ; ?></td>
    								<td align="center" style="color: red;"><?php echo $bilgileriçek['amount'] ; ?></td>
    								<td align="center" style="color: red;" >NOT PAID</td>
    								
    								

    							</tr>
    							<?php 



    						} ?>

    					</table>



    				</div>
    			</div>
    		</div>

    		<div class="card">
    			<div class="card-header">
    				<a id="card-link" data-toggle="collapse" href="#residents">
    					<p style="text-align: center; font-size: 18px;" >PAID</p>
    				</a>
    			</div>

    			<div class="collapse show" id="residents">
    				<div class="card-body">

    					<table class="table table-hover table-striped">
    						<thead class="thead-light">
    							<tr>
    								
    								<th style="text-align: center;">PERIOD </th>
    								<th style="text-align: center;">PAYMENT </th>
    								<th style="text-align: center;">PAYMENT DATE</th> 
    							
    							</tr>
    						</thead>
    						<?php


    						$bilgilerim_sor=$db->prepare("SELECT * FROM  aidat   where hostid=:id AND isPaid='PAID' ORDER BY period ");
    						$bilgilerim_sor -> execute(array(
    							'id'=>$_GET['id']
    						));
    						while ($bilgileriçek=$bilgilerim_sor->FETCH(PDO::FETCH_ASSOC)) {  ?>


    							<tr>

    								
    								<td align="center"><?php echo $bilgileriçek['period'] ; ?></td>
    								<td align="center"><?php echo $bilgileriçek['amount'] ; ?></td>
    								<td align="center"><?php echo $bilgileriçek['datetim'] ; ?></td>
    							


    							</tr>
    							<?php 



    						} ?>
    					</table>


    				</div>
    			</div>
    		</div>
    	</div>
</div>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    </body>
    </html>
