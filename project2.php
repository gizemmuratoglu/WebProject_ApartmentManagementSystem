<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UserLogin</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Apartment, pay due, Apartment management">
	<meta name="author" content="Gizem Nur Muratoğlu">

	<style type="text/css">
		
		body{

			background-color: lightgrey !important;
		}
		.bolum{
			padding-top: 85px;
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
    </nav>
		
			
			<div class="bolum">
				<?php

				if($_GET['error']=="no"){ ?>
					<div class="alert alert-danger"> UNCORRECT ID OR PASSWORD.</div>
				<?php  }

				?>
				<div class="container">
					<form action="login.php" method="POST">
						<div class="mb-3">
							<label >NAME</label>
							<input type="text" name="isim" class="form-control" value="<?php if(isset($_COOKIE["isim"])) { echo $_COOKIE["isim"]; } ?>" placeholder="Enter your name...">

						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1"  class="form-label">Password</label>
							<input type="password" class="form-control" value="<?php if(isset($_COOKIE["şifre"])) { echo $_COOKIE["şifre"]; } ?>" name="şifre" placeholder="Enter your password...">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" name="benihatırla" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label"  for="exampleCheck1">Remember me</label>
						</div >

						<button type="submit" class="btn btn-primary" name="log">LOGIN</button>

					</form>
					<br>
					
				</div>

			</div>

		

	</body>



</body>
</html>
