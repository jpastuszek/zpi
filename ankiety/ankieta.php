<?php
 
 
 include_once "funkcje.php";
 start();  
 
 $hash = addslashes($_POST['kod']);
 
 connect();
 
 if (isset($_POST['hash']))
 {
	$hash = addslashes($_POST['hash']);
	$result = mysql_query("select * from hash where hash='".$hash."'");
	$row = mysql_fetch_array($result, MYSQL_BOTH);	
 
	if ($row)
	{
		$id_ankieta = $row['id_ankieta'];
		mysql_query("delete from hash where id_hash=".$row['id_hash']);
		
		$p1 = (int)$_POST['p1'];
		$p2 = (int)$_POST['p2'];
		$p3 = (int)$_POST['p3'];
		$p4 = (int)$_POST['p4'];
		$p5 = (int)$_POST['p5'];
		$p6 = (int)$_POST['p6'];
		
		mysql_query("insert into ankieta_odp (id_ankieta,p1,p2,p3,p4,p5,p6) values ($id_ankieta,$p1,$p2,$p3,$p4,$p5,$p6)");
		
		disconnect();
		
		echo "Dziękuję za wypełnienie ankiety. Możesz zamknąć to okno.";
		die();
		
	}
 }
 $result = mysql_query("select * from hash where hash='".$hash."'");
 $row = mysql_fetch_array($result, MYSQL_BOTH);	
 
 if ($row)
 {
	$id_ankieta = $row['id_ankieta'];
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
	<title>Ankieta</title>
	<link rel="stylesheet" href="strona.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="skrypty.js"></script>
		
</head>

<body>

	<header>
		<h1><a href="index.php">Ankieta</a></h1>	
	</header>
	
	<aside id="links">
		Postaw na profesjonalizm....		
	</aside>
	
	<div style="height:10px;"></div>		
	<aside id="srodek">
	
	<form action="" method="post">
	
	<?php
	
	$result = mysql_query("select * from ankieta where id_ankieta=".$id_ankieta);
	$row = mysql_fetch_array($result, MYSQL_BOTH);	
	echo $row['nazwa'].'<br/><br/>';
	echo '<table>';	
	for($i=1; $i<7; $i++)
	{
		echo '<tr><td>'.$row['pt'.$i].'</td><td>'; 
		switch ($row['p'.$i])
		{
			case 1 : echo '<select name="p'.$i.'">'; przedmioty(); echo '</select>'; break;
			case 2 : echo '<select name="p'.$i.'">'; wykladowcy(); echo '</select>'; break;
			case 3 : echo '<input type="radio" name="p'.$i.'" value="1"><input type="radio" name="p'.$i.'" value="2"><input type="radio" name="p'.$i.'" value="3"><input type="radio" name="p'.$i.'" value="4"><input type="radio" name="p'.$i.'" value="5">'; break;
		}
		echo'</td></tr>';
	}
	echo '</table>';
	?>
	<br/><br/><br/>
	<input type="hidden" name="hash" value="<?php echo $hash;?>">	
	<input type="submit" value="Wyślij">
	</form>
	</aside>
	
	

	<footer>
		<a href="http://www.gilon.pl">&copy;&nbsp;gilon.pl</a>
	</footer>
    

	

</body>
</html>
<?php
			
	disconnect();
	
	}
	else 
	{
		echo "Nie kombinuj!";	
	}

?>