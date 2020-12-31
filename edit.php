<?php
include "baglan.php";
$bilgilerim_sor=$db->prepare("SELECT * FROM bilgiler where id=:id");
$bilgilerim_sor -> execute(array(
	'id'=>$_GET['id']
));
$bilgilerim_cek=$bilgilerim_sor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>EditHost/ERENHOUSES</title>
	<meta charset="utf-8">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');

		.container{
			padding-top: 19px;
			width: 40%;

		}
		.bolum{
			margin-top: 10px;
			width: 60%;
			margin-left: 45px;
		}
		.wlc{
			padding-top: 20px;
			float: left;
			width: 100%;
			height: 71px;
			background-color: #292626;
			font-family:'Poppins', sans-serif;
		}
		/*body{
			background-color: lightgrey !important;
			}*/
		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	</head>

	<body>
		<div class="wlc" style="text-align: center; font-size: 25px; color: white; "> <b>EDIT HOST</b>   </div>
		<br><br><br>

		<div class="container">
			<div class="bolum">
				<form action="insert.php" method="POST">
					<div class="mb-3" >
						<label >NAME</label>
						<input type="text" name="name" required="" class="form-control" autocomplete="off" value="<?php echo $bilgilerim_cek['name'] ;?>"  placeholder="Enter your name...">

					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1"  class="form-label">SURNAME</label>
						<input type="text" required="" autocomplete="off" class="form-control" value="<?php echo $bilgilerim_cek['surname']; ?>" name="surname" placeholder="Enter your surname...">
					</div>
					<div class="mb-3">
						<label >HOUSEMATE(S)</label>
						<input type="text" name="housemate" class="form-control" autocomplete="off" value="<?php echo $bilgilerim_cek['housemate'];?>" >

					</div>
					<div class="mb-3">
						<label >TELEPHONE1</label>
						<input type="text" name="telephone_num1" required="" class="form-control" value="<?php echo $bilgilerim_cek['telephone_num1'];?>" placeholder="Enter your telephone number..">
					</div>


					<div class="mb-3">
						<label >TELEPHONE2</label>
						<input type="text" name="telephone_num2" class="form-control" value="<?php echo $bilgilerim_cek['telephone_num2'];?>">
					</div>

					<div class="mb-3">
						<label >MOVE OUT</label>
						<input type="date" name="move_out"  class="form-control" value="<?php echo $bilgilerim_cek['move_out'];?>" >
					</div>

					<div class="mb-3">
						<input hidden="" value="<?php echo $bilgilerim_cek['id']; ?>" name="id" >
					</div>
					<div class="mb-3">
						<input hidden="" value="<?php echo $bilgilerim_cek['blockname']; ?>" name="blockname" >
					</div>


					<button type="submit" class="btn btn-primary" name="updateislemi">EDIT</button> <br> <br>
					<?php

					if (isset($_GET['durum'])) {
				# code...

						if($_GET['durum']=="ok"){


							?>
							<div class="alert alert-success"> SUCCESFULLY</div>
							<?php
						}
						else{ ?>
							<div class="alert alert-danger"> FAIL.</div>
						<?php  }
					}
					?>

				</form>
				
				<div style="padding-left:0;">
			<a href="admin_1.php">BACK TO ADMIN PANEL</a>
		</div>

			</div>
		</div>
		


	</body>
	</html>