<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
	<title>Strona zajęcia: 1</title>

	<link rel="stylesheet" href="strona.css" type="text/css" media="screen"/>

	<script type="text/javascript" charset="utf-8" src="jquery.js"></script>
	<script type="text/javascript">
     var $j = jQuery.noConflict();
	</script>
	<script type="text/javascript" charset="utf-8" src="walidacja.js"></script>	
	
	
</head>

<body>

	<header>
		<h1><a href="index.html">w.poczta.gilon.pl</a></h1>	
	</header>
	
	<aside id="links">
		Postaw na profesjonalizm....
	</aside>
	
	<div style="height:10px;"></div>		
	
	
	<aside id="srodek">		
	<div id="wrapper">

			<section id="opcje" class="ramka">
				<form enctype="text/plain" action="loguj.php" method="post">
					<p><label>E-mail: </label><input type="email" name="email" placeholder="demo@gilon.pl" required/></p>					
					<p><label>Hasło: </label><input type="password" name="password" placeholder="Podaj hasło" required/></p>					
					<button id="loguj">Zaloguj</button>
				</form>
			</section>
			
			<section id="zawartosc">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae felis eros, nec malesuada tellus. Sed vel erat diam, eu pretium lacus. Vivamus faucibus sapien lorem. Aliquam erat volutpat. Duis commodo arcu in enim condimentum a porta nulla consequat. </p>
				<br/>
				<p>
				<?php 
					$odp = "";
					switch((int)@$_GET['odp'])
					{
						case 1 : $odp = "<font color='red'><b>Wszystko OK. Twoja wiadomość została wysłana</b></font>"; break;
						case 2 : $odp = "<font color='red'><b>Ten użytkownik wysłał już dzisiaj wiadomość.</b></font>"; break;
					}
					echo $odp;
				?>
				<form id="kontakt" action="wyslij.php" method="post">				
					<div style="margin:40px 0px 20px 0px; height:390px;" class="ramka">
					<p><label style="float:left;width:140px;">E-mail: </label><input id="email" type="text" name="email" placeholder="Podaj e-mail" style="width:140px;"/></p>	
					<br/>
					<p><label style="float:left;width:140px;">Kod pocztowy:</label><input id="kod" type="text" name="kod" placeholder="__-___" style="width:140px;"/></p>	
					<br/>
					<p><label style="float:left;width:140px;">Kontakt w sprawie: </label>
					<select style="width:225px;" name="sprawa" id="sprawa">
						<option>Zapomniałem hasła</option>
						<option>Moje konto jest zablokowane</option>
						<option>Chcę zgłosić awarię</option>
						<option>Mam pomysł</option>
						<option>Propozycja wspólpracy</option>						
					</select>		
					</p>	
					<br/>
					<p><input type="checkbox" id="ch1" name="ch1" value="1"><label>Chcę być informowany o zmianach:</label></p>
					<br/>
					
					<p><label style="display:block">Widomość: (od 10 do 200 znaków)</label><textarea id="wiadomosc" name="wiadomosc" placeholder="Treść wiadomości" style="width:570px; height:200px"></textarea></p>	
					<p><input type="checkbox" name="ch2" id="ch2" value="1"><label id="ch2info" >Zgadzam się z regulaminem.</label></p>
					<br/>
					<input type="submit" id="wyslij" value="Wyślij">
					</div>					
					
					
				</form>				
			</section>																
	</div>
	</aside>	

	<footer>
		<a href="http://www.gilon.pl">&copy; gilon.pl</a>
		<a href="http://www.gilon.pl">Pomoc</a>
		<a href="kontakt.html">Kontakt</a>
	</footer>

</body>
</html>
