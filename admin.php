<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Apartment, pay due, Apartment management">
	<meta name="author" content="Gizem Nur Muratoğlu">

	<style type="text/css">
		
		body{

			background-color: lightgrey !important;
		}
		.bolum{
			padding-top: 15px;
			/*padding-left: 105px;*/
			margin-left: 300px;
			width: 40%;

		}
		

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>

<body>
	 <nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
      <div class="container py-2"> <a href="giris.php"  class="navbar-brand">EREN HOUSES</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
          <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-houses">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item px-4">
              <a href="admin.php" class="nav-link text-white ">ADMIN LOGIN</a>
            </li>
            <li class="nav-item px-4">
              <a href="project2.php" class="nav-link text-white">USER LOGIN</a>
            </li>

          </ul>
        </div>
      </div>
    </nav> <br><br><br>
	<div class="bolum">
		<div class="container" >

			<form action="adminlogin.php" method="POST">
				<div class="mb-3">
					<label >NAME</label>
					<input type="text" name="isim" class="form-control" autocomplete="off" required="" placeholder="Enter your name...">

				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1"  class="form-label">Password</label>
					<input type="password" name="şifre" required="" class="form-control" placeholder="Enter your password...">
				</div>

				<button type="submit" class="btn btn-primary" name="admingirisi">LOGIN</button> <br><br>
				

			</form>
			<br>
			<?php

				if($_GET['error']=="no"){ ?>
					<div class="alert alert-danger"> UNCORRECT ID OR PASSWORD.</div>
				<?php  }

				?>

		</div>
	</div>
	




</body>
</html>
