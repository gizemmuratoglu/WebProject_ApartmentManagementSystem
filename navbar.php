<?php

session_start();
include "baglan.php";

if(!$_SESSION['id']){
?>


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

<?php  }

else{ ?>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
		<div class="container py-2"> <a  class="navbar-brand"> Welcome <?php echo $_SESSION['name'];  ?> </a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
				<span class="navbar-toggler-icon"> </span>
			</button>

			<div class="collapse navbar-collapse" id="navbar-houses">
				<ul class="navbar-nav ">
					<li class="nav-item px-4">
						<a href="project3.php" class="nav-link text-white">HOMEPAGE</a>
					</li>
					<li class="nav-item px-4">
						<a href="details.php" class="nav-link text-white">DUE DETAILS</a>
					</li>
					<li class="nav-item px-4">
						<a href="userbudget.php" class="nav-link text-white ">REPORT</a>
					</li>
					<li class="nav-item px-4">
						<a href="reportPage.php" class="nav-link text-white ">REPORT PROBLEM&REQUEST</a>
					</li>
					<li class="nav-item px-4 ">
							<a href="out.php" class="nav-link text-white ">LOG OUT</a>
						</li>
					
				</ul>
			</div>
		</div>
	</nav>


<?php }


 ?>


