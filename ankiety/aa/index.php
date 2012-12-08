<?php
	include("funkcje.php");
	
	if (!isset($_SESSION)) {
		@session_start();
	}
	if (isset($_POST['wyloguj']))
	{
		@session_unset();
		@session_destroy();
		include("logowanie.php");
	}
	if (isset($_POST['kod']))
		{		
			pol();

			$kod = mysql_real_escape_string($_POST['kod']);
			
			$result = mysql_query("select id_ankieta from hash where hash LIKE '$kod'");
			$row = mysql_fetch_array($result, MYSQL_BOTH);
			
			if ($row[0]>0) 
			{	
				$_SESSION['zalogowany']='tak'; 
				$_SESSION['id_ankieta']=$row[0];
				$_SESSION['hash']=$kod;
			} else include("logowanie.php");
			
			zam();			
		}
		
	if(isset($_POST['submit']))
    {	
		// jeżeli przesłany kod
		pol();
		
		$id_ankieta = (int)$_SESSION['id_ankieta']; // pobierane z sesji
		
		
		// pobieranie liczby pytań z ankiety
		$result = mysql_query("select count(*) from ankieta_element where id_ankieta=$id_ankieta");
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		$ankieta_pytan = $row[0]; 
		
		
		$tablica_numerow = array();
		$tablica_odpowiedzi = array();
		
		foreach($_POST as $key => $value)
		{
			$id_ankieta_element = (int)$key;
			
			// odebralem wszystkie dane i są poprawne, mogę wysyłać do bazy
			if ($id_ankieta_element==0)
			{
				if (count($tablica_numerow)<=$ankieta_pytan)
				{
					for($i=0; $i<count($tablica_numerow); $i++)
					{
						@mysql_query("INSERT INTO ankieta_odp(id_ankieta,id_ankieta_element,odp) VALUES ($id_ankieta,$tablica_numerow[$i],'$tablica_odpowiedzi[$i]')");						
					}
					
					@mysql_query("DELETE FROM hash where hash LIKE '".$_SESSION['hash']."'");
					zam();
					@session_unset();
					session_destroy();
					include("dzieki.php");
				}
				else
				{
					zam();
					
				}
			}
			// sprawdzam czy odpowiedz znajduje się we wcześniejszych odpowiedziach, jeżeli tak to zgłaszam błąd
			else if ((!in_array($id_ankieta_element,$tablica_numerow))&&($id_ankieta_element>0))
			{
				$tablica_numerow[]=$id_ankieta_element;						// dodaję numer elementu do tablicy numerów
				$tablica_odpowiedzi[]=mysql_real_escape_string($value);		// dodaję odpowiedź do tablicy odpowiedzi					
			}
			else 
			{
				echo "OSZUST - dwa razy się odpowiada na to samo pytanie ?";
				zam();
				die();
			}
		}
		echo "ok";
		zam();
		die();
	}

// to tyle jeżeli chodzi o posta	





// zaczynamy normalne oddwrzanie


if ($_SESSION['zalogowany']!='tak') include('logowanie.php'); 

pol();

$result = mysql_query("select ankieta_element.pytanie,REPLACE(REPLACE(element.kod ,'XXXXX',ankieta_element.id_ankieta_element),'YYYYY',ankieta_element.wartosc)
						from ankieta_element, element 
						where ankieta_element.id_element=element.id_element 
						and ankieta_element.id_ankieta=1");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Autocomplete - Default functionality</title>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.7.2.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.autocomplete.js"></script>
	<script src="wykladowcy.php"></script>
	<script src="przedmioty.php"></script>
	<link href="http://max.jotfor.ms/min/g=formCss?3.0.3584" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="http://jotformeu.com/css/styles/pastel.css?3.0.3584" />
	<style type="text/css">
    .form-label{
        width:150px !important;
    }
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:url("http://jotformeu.com/images/noises/noise.png") repeat scroll 0% 0% rgb(207, 204, 200);
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:650px;
        background:url("http://jotformeu.com/images/noises/noise.png") repeat scroll 0% 0% rgb(207, 204, 200);
        color:rgb(82, 75, 58) !important;
        font-family:'Tahoma';
        font-size:13px;
    }
</style>
</head>
<body>

<form class="jotform-form" action="index.php" method="post" accept-charset="utf-8">
<div class="form-all">
		<li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_1" class="form-header">
            Wypełniasz ankiete nr: <?php echo $_SESSION['id_ankieta']; ?>
          </h2>
        </div>
      </li>
    <ul class="form-section">     
<?php
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
     printf ("<li class='form-line' id='id_3'><div>%s</div>%s</li>", $row[0], $row[1]);  
}
zam();
?>


</ul>
		<li class="form-line form-line-column" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:0px" class="form-buttons-wrapper">
            <button type="submit" class="form-submit-button" name="submit">
              Prześlij
            </button>
			<button type="submit" class="form-submit-button" name="wyloguj">
              Uzupełnij później
            </button>
          </div>
        </div>
      </li>
</div>	
</form>
</body>
</html>

	
