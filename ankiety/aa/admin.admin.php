<?php
	if (!defined('JESTEM_W_SRODKU')) {
		echo "Próba ataku. Logowanie danych..."; die();
	}
	
	if ($_SESSION['admin']!='tak')
	{
		include("admin.php"); die();
	}
	
	pol();
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

<script src="http://max.jotfor.ms/min/g=jotform?3.0.3584" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init();
</script>
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
      <li class="form-line" id="id_18">
        <div id="cid_18" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_18" type="submit" name="wyloguj" class="form-submit-button">
              Wyloguj
            </button>
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_5">
      <li id="cid_5" class="form-input-wide">
        <div class="form-collapse-table" id="collapse_5"><span class="form-collapse-mid" id="collapse-text_5">Przeglądaj ankiety</span><span class="form-collapse-right form-collapse-right-hide">&nbsp;</span>
        </div>
      </li>
      <li class="form-line" id="id_14">
        <div id="cid_14" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_14" type="submit" class="form-submit-button">
              Dodaj ankiete
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-top" id="label_9" for="input_9"> Spis ankiet </label>
        <div id="cid_9" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
            <tr>              
              <th class="form-matrix-column-headers" style="width:27%">
                Nazwa
              </th>
              <th class="form-matrix-column-headers" style="width:27%">
                Status
              </th>
              <th class="form-matrix-column-headers" style="width:27%">
                Dodający
              </th>
              <th class="form-matrix-column-headers" style="width:27%">
                Opcje
              </th>
			  <th style="border:none">
                Id ankiety
              </th>
            </tr>
<?php	
// będziemy ustawiali ankiety
$result = mysql_query("select nazwa,status,uzytkownik.login as login, id_ankieta from ankieta, uzytkownik where ankieta.id_uzytkownik=uzytkownik.id_uzytkownik");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
  
?>
            <tr>
              <th align="left" class="form-matrix-row-headers" nowrap="nowrap">
                <?php echo $row['nazwa']; ?>
              </th>
              <td align="center" class="form-matrix-values">
                <?php echo $row['status']; ?>
              </td>
              <td align="center" class="form-matrix-values">
                <?php echo $row['login']; ?>
              </td>
              <td align="center" class="form-matrix-values">
                EDIT/DEL
              </td>
              <td align="center" class="form-matrix-values">
                <?php echo $row['id_ankieta']; ?>
              </td>
            </tr>
<?php
}
mysql_free_result($result);
?>			
            
          </table>
        </div>
      </li>
    </ul>
    <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_6">
      <li id="cid_6" class="form-input-wide">
        <div class="form-collapse-table" id="collapse_6"><span class="form-collapse-mid" id="collapse-text_6">Wykładowcy</span><span class="form-collapse-right form-collapse-right-hide">&nbsp;</span>
        </div>
      </li>
      <li class="form-line" id="id_15">
        <div id="cid_15" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_15" type="submit" class="form-submit-button" name="dodajwykladowca">
              Dodaj wykładowce
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_10">
        <label class="form-label-top" id="label_10" for="input_10"> Spis wykładowców</label>
        <div id="cid_10" class="form-input-wide">
          <table summary="" cellpadding="2" cellspacing="0" class="form-matrix-table">
            <tr>
			<th style="border:none; width:90%">
                Tytuł Imię Nazwisko
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                ID
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                Opcje
              </th>
            </tr>
<?php	
// będziemy ustawiali wykladowców
$result = mysql_query("select nazwa,id_wykladowca from wykladowca");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
  
?>            

			<tr>
              <th align="left" class="form-matrix-row-headers" nowrap="nowrap">
                <?php echo $row['nazwa']; ?>
              </th>
              <td align="center" class="form-matrix-values">
                <?php echo $row['id_wykladowca']; ?>
              </td>
              <td align="center" class="form-matrix-values">
                <button id="input_16" type="submit" class="form-submit-button" name="usun_wykladowca" value="<?php echo $row['id_wykladowca']; ?>">
					Usuń
				</button>
              </td>              
            </tr>
 
<?php
}
mysql_free_result($result);
?>	


 
          </table>
        </div>
      </li>
    </ul>
    <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_7">
      <li id="cid_7" class="form-input-wide">
        <div class="form-collapse-table" id="collapse_7"><span class="form-collapse-mid" id="collapse-text_7">Przedmioty</span><span class="form-collapse-right form-collapse-right-hide">&nbsp;</span>
        </div>
      </li>
      <li class="form-line" id="id_16">
        <div id="cid_16" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_16" type="submit" class="form-submit-button" name="dodajprzedmiot">
              Dodaj przedmiot
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_12">
        <label class="form-label-top" id="label_12" for="input_12"> Spis przedmiotów</label>
        <div id="cid_12" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
            <tr>             			  
			  <th style="border:none; width:90%">
                Nazwa przedmiotu
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                ID
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                Opcje
              </th>
            </tr>
			
<?php	
// będziemy ustawiali przedmioty
$result = mysql_query("select nazwa,id_przedmiot from przedmiot");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
  
?>   			
			
			
			
			
            <tr>
              <th align="left" class="form-matrix-row-headers" nowrap="nowrap">
                <?php echo $row['nazwa']; ?>
              </th>
              <td align="center" class="form-matrix-values">
                <?php echo $row['id_przedmiot']; ?>
              </td>
              <td align="center" class="form-matrix-values">
                <button id="input_16" type="submit" class="form-submit-button" name="usun_przedmiot" value="<?php echo $row['id_przedmiot']; ?>">
					Usuń
				</button>
              </td>              
            </tr>
			
<?php
}
mysql_free_result($result);
?>			
			
			
          </table>
        </div>
      </li>
    </ul>
	<ul class="form-section-closed" style="height: 60px;clear:both;" id="section_19">
      <li id="cid_19" class="form-input-wide">
        <div class="form-collapse-table" id="collapse_19"><span class="form-collapse-mid" id="collapse-text_19">Kierunki</span><span class="form-collapse-right form-collapse-right-hide">&nbsp;</span>
        </div>
      </li>
      <li class="form-line" id="id_21">
        <div id="cid_21" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_21" type="submit" class="form-submit-button" name="dodajkierunek">
              Dodaj kierunek
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_20">
        <label class="form-label-top" id="label_20" for="input_20"> Spis kierunków </label>
        <div id="cid_20" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
            <tr>
              <th style="border:none; width:70%;">
                Nazwa kierunku
              </th>
			  <th class="form-matrix-column-headers" style="width:20%">
                Ilość maili
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                ID
              </th>
              <th class="form-matrix-column-headers" style="width:20%">
                Opcje
              </th>            
            </tr>
			
<?php	
// będziemy ustawiali przedmioty
$result = mysql_query("select nazwa,id_kierunek as kier,(select count(*) from mail where mail.id_kierunek=kierunek.id_kierunek) as c from kierunek");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
  
?>  			
			
			
            <tr>
              <th align="left" class="form-matrix-row-headers" nowrap="nowrap">
                <?php echo $row['nazwa']; ?>
              </th>
              <td align="center" class="form-matrix-values">
                <?php echo $row['c']; ?>
              </td>
			  <td align="center" class="form-matrix-values">
 				<?php echo $row['kier']; ?>               
              </td>  
              <td align="center" class="form-matrix-values">
                <button id="input_16" type="submit" class="form-submit-button" name="usun_kierunek" value="<?php echo $row['kier']; ?>">
					Usuń
				</button>
              </td>              
            </tr>
           
		   
<?php
}
mysql_free_result($result);
?>			
			   
		   
          </table>
        </div>
      </li>
    </ul>
	
    <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_8">
      <li id="cid_8" class="form-input-wide">
        <div class="form-collapse-table" id="collapse_8"><span class="form-collapse-mid" id="collapse-text_8">Maile</span><span class="form-collapse-right form-collapse-right-hide">&nbsp;</span>
        </div>
      </li>
      <li class="form-line" id="id_22">
        <div id="cid_22" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_22" type="submit" class="form-submit-button">
              Zarządzaj mailami
            </button>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_17">
        <div id="cid_17" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_17" type="submit" class="form-submit-button">
              Dodaj mail
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
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "21374797525362-21374797525362";
  </script>
</form></body>
</html>