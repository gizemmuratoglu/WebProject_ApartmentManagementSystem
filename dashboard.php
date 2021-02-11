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
	<div class="con">
			<div class="navigation">
				<ul>
					<li>
						<a >

							<span class="baslık" style="text-decoration-line: none;"><b>DASHBOARD</b> </span>
						</a>
					</li>
					<<li>
						<a href="admin_11.php" >

							<span class="title" > HOST DETAILS&EDIT</span>
						</a>
					</li>
					<li>
						<a href="newPage.php">
							<span class="title">ADD NEW HOST</span>
						</a>
					</li>
					<li>
						<a href="currentdue.php">
							<span class="title">EDIT DUE&DETAILS</span>
						</a>
					</li>
					<li>
						<a href="deneme.php">
							<span class="title">REPORT</span>
						</a>
					</li>
					<li>
						<a href="report.php">
							<span class="title">CHECK PROBLEM&REQUEST</span>
						</a>
					</li>
					<li>
						<a href="budget.php">
							<span class="title">EXPENSES</span>
						</a>
					</li>
					<li>
						<a href="adminout.php">
							<span class="title">LOG OUT</span>
						</a>
					</li>
				</ul>
			</div>
		</div>


<?php }


 ?>

