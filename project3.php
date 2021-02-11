<?php

session_start();
include "navbar.php";
if(!$_SESSION['id']){
	header("Location:project2.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage/ERENHOUSES</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Apartment, pay due, Apartment management">
	<meta name="author" content="Gizem Nur Muratoğlu">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<style type="text/css">
		.bg{
			
			padding-bottom: 60px;
			background-color: #db9430 !important;
			width: 100%;
			height: 200px;
		}
		body{
			background-size: 100% 758px;
			background-image: url('houses2.jpg') ;
		}
		/*.duyurular{
			background-color: #db9430 !important;
			}*/

		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	</head>

	<body>
		<section class="duyurular py-5">
			<div class="duyurular text-center ">

				<h1 style="color: white; text-decoration: underline;" >ANNOUNCEMENTS</h1>
			</div>
		</section>

		<section class="bg py-3">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

				<div class="carousel-inner text-center" style="padding-top: 45px;">

					<div class="carousel-item active ">
						<h1 >WELCOME TO EREN HOUSES</h1>
					</div>
					<?php


					$bilgilerisor=$db->prepare("SELECT * FROM  duyurular   ORDER BY id DESC LIMIT 3");
					$bilgilerisor->execute();
					$sayi=0;
					$active='active';

					while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {  ?>


						<div class="carousel-item " >
							<h1> <?php echo $bilgileriçek['duyuru'] ; ?> </h1>
						</div>
						<?php 



						$sayı++;} ?>

					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</a>
				</div>
			</section>

			
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		</body>
		</html>
		
