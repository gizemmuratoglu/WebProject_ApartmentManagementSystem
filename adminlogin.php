<?php
include "baglan.php";


if (isset($_POST['admingirisi'])) {


	if (empty($_POST['isim'])|| empty($_POST['şifre'])) {
		header("Location:project2.php?error=Bilgileri giriniz.");

	}
	else{
		
		$name=$_POST['isim'];
		$password=md5($_POST['şifre']);
		// $şif=$_POST['şifre'];
		

		
 
		$kullanıcısor=$db->prepare("SELECT * FROM admin where name=:name AND password=:password  ");
		$kullanıcısor -> execute(array(
			'name'=>$name,
			'password'=>$password,
			

		));

		$bilgilerim_cek=$kullanıcısor->fetch(PDO::FETCH_ASSOC);

		$say=$kullanıcısor -> rowCount();

	

			if ($say==1) {

				header("Location:admin_1.php");
				exit();
			}

			else{
				header("Location:admin.php?error=no");
				exit();
				


			} 

		


	}
}

?>