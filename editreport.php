<?php
include 'baglan.php';

if (isset($_POST['reportsubmit'])) {
	$id=$_GET['id'];
	$kullanıcısor=$db->prepare("SELECT * FROM bilgiler where id=:id ");
	$kullanıcısor -> execute(array(
		'id'=>$id,
	));

	$bilgilerim_cek=$kullanıcısor->fetch(PDO::FETCH_ASSOC);
	$name=$bilgilerim_cek['name'];
	$surname=$bilgilerim_cek['surname'];
	$blockname=$bilgilerim_cek['blockname'];


	$kaydet=$db->prepare("INSERT into report set             
		id=:id,
		name=:name,
		surname=:surname,
		blockname=:blockname,
		reporting=:reporting


		");
	
	$insert=$kaydet->execute(array(
		'id'=>$id,
		'name'=>$name,
		'surname'=>$surname,
		'blockname'=>$blockname,

		'reporting'=>$_POST['reporting'],
		
	));


	if ($insert) {

		header("Location:reportPage.php?id=$id");
		exit();
		# code...
	}
	else{ 
		header("Location:reportPage.php?id=$id");
		exit();


		
	}




}

?>