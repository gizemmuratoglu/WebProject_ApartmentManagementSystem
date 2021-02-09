<?php
include 'baglan.php';
date_default_timezone_set('UTC');


if (isset($_POST['insertislemi'])) {

	$password=md5($_POST['password']);
	$year=date('Y');
	$month=date('m');
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

	$hostid=$_POST['id'];

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
			'id'=>$_POST['id'],
			'name'=>$_POST['name'],
			'surname'=>$_POST['surname'],
			'housemate'=>$_POST['housemate'],
			'telephone_num1'=>$_POST['telephone_num1'],
			'telephone_num2'=>$_POST['telephone_num2'],
			'blockname'=>$_POST['blockname'],
			'move_out'=>$move_out,

		));

		$silme=$db->prepare("DELETE from bilgiler where id=:id");
		$kont=$silme->execute(array(
			'id'=>$hostid
		));


		
	}
	if ($insert) {

		header("Location:edit.php?durum=ok&id=$hostid");
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

	$paid='PAID';
	$datetim=date('Y-m-d');

	$kaydet=$db->prepare("UPDATE aidat set             
		isPaid=:isPaid,
		datetim=:datetim
		where id={$_POST['id']} 

		");


	$insert=$kaydet->execute(array(
		'isPaid'=>$paid,
		'datetim'=>$datetim,
		
		
		
	));
	if ($insert) {

		header("Location:editdue.php?durum=ok");
		exit();

	}
	else{ 
		header("Location:editdue.php?durum=no");
		exit();



	}



	
}

if (isset($_POST['updatebudget'])) {
     $date=date('Y-m');
	$kaydet=$db->prepare("INSERT into gelirgider set
		donem=:donem,             
		exType=:exType,
		price=:price
		
		");


	$insert=$kaydet->execute(array(
		'donem'=>$date,
		'exType'=>$_POST['exType'],
		'price'=>$_POST['price'],
		
	));

	


	if ($insert) {

		header("Location:budget.php?durum=ok");
		exit();

	}
	else{ 
		header("Location:budget.php?durum=no");
		exit();



	}

	



}


if ($_GET['start']=="ok") {

	$bilgilerisor=$db->prepare("SELECT * FROM bilgiler  ");
	$bilgilerisor->execute();
	
	while ($bilgileriçek=$bilgilerisor->FETCH(PDO::FETCH_ASSOC)) {


		$period=date('Y-m');
		$hostid=$bilgileriçek['id'] ; 
		$notpaid="NOTPAID";
		$amount=$_POST['amount'];


		$nRows = $db->query("SELECT count(*) FROM aidat a  where a.hostid=$hostid AND a.period='$period'  ")->fetchColumn(); 


		if ($nRows!=0) {

			header("Location:currentdue.php?durum=var");
			exit();



		}
		else{


			$kaydet=$db->prepare("INSERT into aidat set
				hostid=:hostid,             
				period=:period,
				isPaid=:isPaid,
				amount=:amount


				");


			$insert=$kaydet->execute(array(
				'hostid'=>$hostid,
				'period'=>$period,
				'isPaid'=>$notpaid,
				'amount'=>$amount,



			));
		}
	}
	if ($insert) {

		header("Location:currentdue.php?sonuc=ok");
		exit();

	}
	else{ 
		header("Location:currentdue?sonuc=no");
		exit();



	}


	
	
}

if ($_GET['del']=="ok") {
    $id=$_GET['id'];
	$silme=$db->prepare("DELETE from report where tablo_id=:tablo_id");
	$kont=$silme->execute(array(
		'tablo_id'=>$id
	));
	
	if ($kont) {

		header("Location:report.php?sonuc=ok");
		exit();

	}
	else{ 
		header("Location:report.php?sonuc=no");
		exit();



	}



}








?>
