<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_ankieta = (int)$_POST['id_ankieta'];
	$id_kierunek = (int)$_POST['id_kierunek'];
	$nazwa = addslashes($_POST['nazwa']);
	$od = addslashes($_POST['od']);
	$do = addslashes($_POST['do']);
	
	$pt1 = addslashes($_POST['pt1']);
	$pt2 = addslashes($_POST['pt2']);
	$pt3 = addslashes($_POST['pt3']);
	$pt4 = addslashes($_POST['pt4']);
	$pt5 = addslashes($_POST['pt5']);
	$pt6 = addslashes($_POST['pt6']);
	
	$p1 = (int)($_POST['p1']);
	$p2 = (int)($_POST['p2']);
	$p3 = (int)($_POST['p3']);
	$p4 = (int)($_POST['p4']);
	$p5 = (int)($_POST['p5']);
	$p6 = (int)($_POST['p6']);
	
	
	connect();				
	mysql_query("update ankieta set nazwa='$nazwa', od='$od', do='$do', pt1='$pt1', pt2='$pt2', pt3='$pt3', pt4='$pt4', pt5='$pt5', pt6='$pt6', p1=$p1, p2=$p2, p3=$p3, p4=$p4, p5=$p5, p6=$p6, id_kierunek=$id_kierunek where id_ankieta=".$id_ankieta);
	disconnect();	
	echo 1;
}
?>
