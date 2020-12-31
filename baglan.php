
<?php
try{
	$db=new PDO("mysql:host=localhost;dbname=apartment;charset=utf8",'root','12345678');
  //echo "BAĞLANTI BAŞARILI";
	
}
catch(PDOExpception $e){
	echo $e->getMessage();
}



?>
