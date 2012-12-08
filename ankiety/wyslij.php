<?php
$email = @mysql_real_escape_string($_POST['email']);
$kod  = @mysql_real_escape_string($_POST['kod']);
$sprawa = @mysql_real_escape_string($_POST['sprawa']);
$ch1 = @(int)$_POST['ch1'];
$ch2 = @(int)$_POST['ch2'];
$wiadomosc = @mysql_real_escape_string($_POST['wiadomosc']);
$odp =0;


if ($odp!=-1)
{
	mysql_connect("localhost","root","");
	mysql_select_db("test");
	$row = mysql_query("select count(*) from wiadomosci where email='$email' and data!=now()");
	$r=mysql_fetch_array($row);
	if ($r[0] >0) 
	{
		$odp = 2;
	}
	else
	{
		mysql_query("insert into wiadomosci(email,kod,sprawa,ch1,ch2,wiadomosc,data) values ('$email','$kod','$sprawa',$ch1,$ch2,'$wiadomosc',now())");
		$odp = 1;
	}
	mysql_close();
}
echo $odp;

header("Location: /kontakt.php?odp=$odp");
?>
