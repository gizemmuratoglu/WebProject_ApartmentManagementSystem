<?php
include "baglan.php";
session_start();
date_default_timezone_set('UTC');

if (isset($_POST['log'])) {


	if (empty($_POST['isim'])|| empty($_POST['şifre'])) {
		header("Location:project2.php?error=Bilgileri giriniz.");

	}
	

	else{
		
		$name=$_POST['isim'];
		$password=md5($_POST['şifre']);
	
		

		

		$kullanıcısor=$db->prepare("SELECT * FROM bilgiler where name=:name AND password=:password  ");
		$kullanıcısor -> execute(array(
			'name'=>$name,
			'password'=>$password,
			

		));

		$say=$kullanıcısor -> rowCount();

		$bilgilerim_cek=$kullanıcısor->fetch(PDO::FETCH_ASSOC);




		if ($say==1){

			if(!empty($_POST['benihatırla'])){
				setcookie('isim',$name,strtotime("+1 day"));
				setcookie('şifre',$şif, strtotime("+1 day"));



			}
			else{
				setcookie('isim',$name,strtotime("-1 day"));
				setcookie('şifre',$şif,strtotime("-1 day"));


			}
		

			$_SESSION['id']=$bilgilerim_cek['id'];
			$_SESSION['name']=$bilgilerim_cek['name'];

			echo $_SESSION['id'];
			header("Location:project3.php");


		}
		else{
			header("Location:project2.php?error=no");
		}
		

  }
}

?>
