<?php
	if (!isset($_SESSION)) {		
		session_start();
	}

	define ("JESTEM_W_SRODKU",1);
	include_once("funkcje.php");	
	
	if (isset($_POST['login'])&&isset($_POST['haslo']))
	{		
		pol();
		$login = mysql_real_escape_string($_POST['login']);
		$haslo = mysql_real_escape_string($_POST['haslo']);
			
			$result = mysql_query("select count(*) from uzytkownik where login='$login' and haslo=MD5('$haslo')");
			$row = @mysql_fetch_array($result, MYSQL_BOTH);
			
			if ($row[0]>0) 
			{	
				$_SESSION['admin']='tak'; 								
			} 
		zam();
	}
	










	if ($_SESSION['admin']=='tak')
	{
	

	
	if (isset($_POST['wyloguj']))
	{
		@session_unset();
		@session_destroy();				
	}				
	
	// kierunki
	else if (isset($_POST['dodajkierunek']))
	{
		include("dodaj.kierunek.php");
		die();
	}
	else if (isset($_POST['dodajkierunek_nazwa']))
	{
		$nazwa = $_POST['dodajkierunek_nazwa'];
		pol();		
			@mysql_query("INSERT INTO kierunek (nazwa) VALUES ('$nazwa')");						
		zam();
	} else if (isset($_POST['usun_kierunek']))
	{
		$id_kierunek = (int)$_POST['usun_kierunek'];
		pol();		
			@mysql_query("DELETE FROM kierunek WHERE id_kierunek=$id_kierunek");						
		zam();
	}
	
	// przedmioty
	else if (isset($_POST['dodajprzedmiot']))
	{
		include("dodaj.przedmiot.php");
		die();
	}
	else if (isset($_POST['dodajprzedmiot_nazwa']))
	{
		$nazwa = $_POST['dodajprzedmiot_nazwa'];
		pol();		
			@mysql_query("INSERT INTO przedmiot (nazwa) VALUES ('$nazwa')");						
		zam();
	} else if (isset($_POST['usun_przedmiot']))
	{
		$id_przedmiot = (int)$_POST['usun_przedmiot'];
		pol();		
			@mysql_query("DELETE FROM przedmiot WHERE id_przedmiot=$id_przedmiot");						
		zam();
	}
	
	
	// wykladowcy
	else if (isset($_POST['dodajwykladowca']))
	{
		include("dodaj.wykladowca.php");
		die();
	}
	else if (isset($_POST['dodajwykladowca_nazwa']))
	{
		$nazwa = $_POST['dodajwykladowca_nazwa'];
		pol();		
			@mysql_query("INSERT INTO wykladowca (nazwa) VALUES ('$nazwa')");						
		zam();
	} else if (isset($_POST['usun_wykladowca']))
	{
		$id_wykladowca = (int)$_POST['usun_wykladowca'];
		pol();		
			@mysql_query("DELETE FROM wykladowca WHERE id_wykladowca=$id_wykladowca");						
		zam();
	}
	
	
	
	
	// tak ma zostać
		include("admin.admin.php"); die();
	}
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Form</title>
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
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:rgb(82, 75, 58);
    }

</style>

</head>
<body>
<form class="jotform-form" action="admin.php" method="post" accept-charset="utf-8">
  <div class="form-all">
    <ul class="form-section">
      <li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_1" class="form-header">
            System przeprowadza ankiet - administracja
          </h2>
        </div>
      </li>
      <li class="form-line" id="id_3">
        <label class="form-label-left" id="label_3" for="input_3"> Login </label>
        <div id="cid_3" class="form-input">
          <input type="text" class="form-textbox" id="input_3" name="login" size="30" />
        </div>
      </li>
      <li class="form-line" id="id_4">
        <label class="form-label-left" id="label_4" for="input_4"> Hasło </label>
        <div id="cid_4" class="form-input">
          <input type="text" class="form-textbox" id="input_4" name="haslo" size="30" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Prześlij
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="21374797525362" />
  
</form></body>
</html>
<?php die(); ?>