<?php
include 'baglan.php';



if (isset($_POST['insertislemi'])) {

	$password=md5($_POST['password']);

	$kaydet=$db->prepare("INSERT into bilgiler set
		name=:name,             
		surname=:surname,
		housemate=:housemate,
		telephone_num1=:telephone_num1,
		telephone_num2=:telephone_num2,
		password=:password,
		blockname=:blockname

		");


	$insert=$kaydet->execute(array(
		'name'=>$_POST['name'],
		'surname'=>$_POST['surname'],
		'housemate'=>$_POST['housemate'],
		'telephone_num1'=>$_POST['telephone_num1'],
		'telephone_num2'=>$_POST['telephone_num2'],
		'password'=>$password,
		'blockname'=>$_POST['blockname'],
		
	));
	if ($insert) {
		# code...
	

	$id = $db->lastInsertId();


	$kayıt=$db->prepare("INSERT into aidat set             
		id=:id

		");

	$ins=$kayıt->execute(array(
		'id'=>$id,


	));

	}


	if ($ins) {

		header("Location:newPage.php?durum=OK");
		exit();

	}
	else{ 
		header("Location:newPage.php?durum=NO");
		exit();



	}

	



}


if (isset($_POST['updateislemi'])) {
	$move_out=$_POST['move_out'];

	$id=$_POST['id'];

	$kaydet=$db->prepare("UPDATE bilgiler set
		name=:name,             
		surname=:surname,
		housemate=:housemate,
		telephone_num1=:telephone_num1,
		telephone_num2=:telephone_num2,
		blockname=:blockname,
		move_out=:move_out
		where id={$_POST['id']}

		");


	$insert=$kaydet->execute(array(
		'name'=>$_POST['name'],
		'surname'=>$_POST['surname'],
		'housemate'=>$_POST['housemate'],
		'telephone_num1'=>$_POST['telephone_num1'],
		'telephone_num2'=>$_POST['telephone_num2'],
		'blockname'=>$_POST['blockname'],
		'move_out'=>$_POST['move_out'],
		
	));
	 
	
	if (!empty($move_out)|| $move_out!=NULL) {
		$kayit=$db->prepare("INSERT into tasinanlar set             
			id=:id,
			name=:name,             
			surname=:surname,
			housemate=:housemate,
			telephone_num1=:telephone_num1,
			telephone_num2=:telephone_num2,
			blockname=:blockname,
			move_out=:move_out

			");
		$ins=$kayit->execute(array(
			'name'=>$_POST['name'],
			'surname'=>$_POST['surname'],
			'housemate'=>$_POST['housemate'],
			'telephone_num1'=>$_POST['telephone_num1'],
			'telephone_num2'=>$_POST['telephone_num2'],
			'blockname'=>$_POST['blockname'],
			'id'=>$id,
			'move_out'=>$move_out,

		));

		$silme=$db->prepare("DELETE from bilgiler where id=:id");
        $kont=$silme->execute(array(
        	'id'=>$id
        ));
       

		
	}
	 if ($insert) {

		header("Location:edit.php?durum=ok&id=$id");
		exit();
		# code...
	}
	else{ 
		echo "$kont
		";
		// header("Location:edit.php?durum=no&id=$id");
		// exit();


		
	}



	




}
if (isset($_POST['paydue'])) {

	$id=$_POST['id'];

	$kaydet=$db->prepare("UPDATE aidat set
		ocak=:ocak,             
		subat=:subat,
		mart=:mart,
		nisan=:nisan,
		mayis=:mayis,
		haziran=:haziran,
		temmuz=:temmuz,
		agustos=:agustos,
		eylul=:eylul,
		ekim=:ekim,
		kasim=:kasim,
		aralik=:aralik
		where id={$_POST['id']}

		");


	$insert=$kaydet->execute(array(
		'ocak'=>$_POST['ocak'],
		'subat'=>$_POST['subat'],
		'mart'=>$_POST['mart'],
		'nisan'=>$_POST['nisan'],
		'mayis'=>$_POST['mayis'],
		'haziran'=>$_POST['haziran'],
		'temmuz'=>$_POST['temmuz'],
		'agustos'=>$_POST['agustos'],
		'eylul'=>$_POST['eylul'],
		'ekim'=>$_POST['ekim'],
		'kasim'=>$_POST['kasim'],
		'aralik'=>$_POST['aralik'],
		
	));

	if ($insert) {

		header("Location:editdue.php?durum=ok&id=$id");
		exit();
		# code...
	}
	else{ 
		header("Location:editdue.php?durum=no&id=$id");
		exit();


		
	}




}
if (isset($_POST['updatebudget'])) {

	$kaydet=$db->prepare("INSERT into gelirgider set
		donem=:donem,             
		elektrik=:elektrik,
		su=:su,
		temizlik=:temizlik,
		diger=:diger

		");


	$insert=$kaydet->execute(array(
		'donem'=>$_POST['donem'],
		'elektrik'=>$_POST['elektrik'],
		'su'=>$_POST['su'],
		'temizlik'=>$_POST['temizlik'],
		'diger'=>$_POST['diger'],
		
	));

	// $id = $db->lastInsertId();


	if ($insert) {

		header("Location:budget.php?durum=ok");
		exit();

	}
	else{ 
		header("Location:budget.php?durum=no");
		exit();



	}

	



}








?>