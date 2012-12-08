<?php
	include "funkcje.php";
	start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
	<title>Strona zajęcia: 1</title>
	<link rel="stylesheet" href="strona.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="skrypty.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/modules/exporting.js"></script>

	<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
		</style>
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

						<?php if (isLogged()) include "zalogowany.php"; else include "default.php"; ?>
	
	</aside>
	
	

	<footer>
		<a href="http://www.gilon.pl">&copy;&nbsp;gilon.pl</a>
	</footer>
    

	

</body>
</html>
