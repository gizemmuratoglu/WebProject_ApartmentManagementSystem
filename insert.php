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
			hostid=:hostid,

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
			'hostid'=>$hostid,
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
	$period=date('Y-m');
	$hostid=$_GET['hostid'];
	$notpaid="NOTPAID";
	$amount=$_POST['amount'];

	
	$nRows = $db->query("SELECT count(*) FROM aidat a  where a.hostid=$hostid AND a.period='$period'  ")->fetchColumn(); 
	

	if ($nRows!=0) {

		header("Location:admin_11.php?durum=var");
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
	if ($insert) {

		header("Location:admin_11.php?sonuc=ok");
		exit();

	}
	else{ 
		header("Location:admin_11.php?sonuc=no");
		exit();


	}	
}

?>
