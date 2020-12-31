<?php
include "baglan.php";
$bilgilerim_sor=$db->prepare("SELECT * FROM aidat where id=:id");
$bilgilerim_sor -> execute(array(
	'id'=>$_GET['id']
));
$bilgilerim_cek=$bilgilerim_sor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>EditDue/ERENHOUSES</title>
	<meta charset="utf-8">
	<style type="text/css">
		.container{
			padding-top: 19px;
			width: 40%;

		}
		.bolum{
			margin-top: 10px;
			width: 60%;
			margin-left: 45px;
		}
		/*body{
			background-color: lightgrey !important;
		}*/
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
		<div class="container py-2"> <a  class="navbar-brand">EDIT DUE</a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
				<span class="navbar-toggler-icon"> </span>
			</button>



		</div>

	</nav>

	<div class="container">
		<div class="bolum">
			<form action="insert.php" method="POST">
				<?php

				if (isset($_GET['durum'])) {
				# code...

					if($_GET['durum']=="ok"){


						?>
						<div class="alert alert-success">SUCCESFULLY</div>
						<?php
					}
					else{ ?>
						<div class="alert alert-danger">AN ERROR WAS OCCURED.</div>
					<?php  }
				}
				?>
				<div class="mb-3" >
					<label >JANUARY</label>
					<input type="text" name="ocak"  class="form-control" autocomplete="off" value="<?php echo $bilgilerim_cek['ocak'] ;?>"  >

				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1"  class="form-label">FEBRUARY</label>
					<input type="text" required="" autocomplete="off" class="form-control" value="<?php echo $bilgilerim_cek['subat']; ?>" name="subat" >
				</div>
				<div class="mb-3">
					<label >MARCH</label>
					<input type="text" name="mart" class="form-control" autocomplete="off" value="<?php echo $bilgilerim_cek['mart'];?>" >

				</div>
				<div class="mb-3">
					<label >APRIL</label>
					<input type="text" name="nisan" required="" class="form-control" value="<?php echo $bilgilerim_cek['nisan'];?>" >
				</div>


				<div class="mb-3">
					<label >MAY</label>
					<input type="text" name="mayis" class="form-control" value="<?php echo $bilgilerim_cek['mayis'];?>">
				</div>

				<div class="mb-3">
					<label >JUNE</label>
					<input type="text" name="haziran"  class="form-control" value="<?php echo $bilgilerim_cek['haziran'];?>" >
				</div>
				<div class="mb-3">
					<label >JULY</label>
					<input type="text" name="temmuz"  class="form-control" value="<?php echo $bilgilerim_cek['temmuz'];?>" >
				</div>
				<div class="mb-3">
					<label >AUGUST</label>
					<input type="text" name="agustos"  class="form-control" value="<?php echo $bilgilerim_cek['agustos'];?>" >
				</div>
				<div class="mb-3">
					<label >SEMPTEMBER</label>
					<input type="text" name="eylul"  class="form-control" value="<?php echo $bilgilerim_cek['eylul'];?>" >
				</div>
				<div class="mb-3">
					<label >OCTOBER</label>
					<input type="text" name="ekim"  class="form-control" value="<?php echo $bilgilerim_cek['ekim'];?>" >
				</div>
				<div class="mb-3">
					<label >NOVEMBER</label>
					<input type="text" name="kasim"  class="form-control" value="<?php echo $bilgilerim_cek['kasim'];?>" >
				</div>
				<div class="mb-3">
					<label >DECEMBER</label>
					<input type="text" name="aralik"  class="form-control" value="<?php echo $bilgilerim_cek['aralik'];?>" >
				</div>

				<div class="mb-3">
					<input hidden="" value="<?php echo $bilgilerim_cek['id']; ?>" name="id" >
				</div>
				


				<button type="submit" class="btn btn-primary" name="paydue">EDIT</button> <br> <br>
				<div style="padding-left:0;">
			<a href="admin_1.php">BACK TO ADMIN PANEL</a>
		</div> <br><br>
				

			</form>
			<br>

		</div>
	</div>


</body>
</html>