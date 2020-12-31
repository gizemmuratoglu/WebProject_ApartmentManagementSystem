<?php
include "baglan.php";
session_start();

if (isset($_POST['log'])) {


	if (empty($_POST['isim'])|| empty($_POST['şifre'])) {
		header("Location:project2.php?error=Bilgileri giriniz.");

	}
	else{
		$_SESSION['name']=$_POST['isim'];
		$_SESSION['password']=$_POST['şifre'];
		$name=$_POST['isim'];
		$password=md5($_POST['şifre']);
		$şif=$_POST['şifre'];
		

		
 
		$kullanıcısor=$db->prepare("SELECT * FROM bilgiler where name=:name AND password=:password  ");
		$kullanıcısor -> execute(array(
			'name'=>$name,
			'password'=>$password,
			

		));

		$bilgilerim_cek=$kullanıcısor->fetch(PDO::FETCH_ASSOC);
		$id=$bilgilerim_cek['id'];

		$say=$kullanıcısor -> rowCount();

		if (!empty($_POST['benihatırla'])){
			setcookie('isim',$name,strtotime("+1 day"));
			setcookie('şifre',$şif, strtotime("+1 day"));
			

			if ($say==1) {

				header("Location:project3.php?id=$id");
				exit();
			}

			else{
				header("Location:project2.php?error=no");
				exit();
				


			} 

		}else{
			setcookie('isim',$name,strtotime("-1 day"));
			setcookie('şifre',$şif,strtotime("-1 day"));
			if ($say==1) {

				header("Location:project3.php?id=$id");
				exit();
			}

			else{
				header("Location:project2.php?error=no");
				exit();

			} 

		}


	}
}

?>