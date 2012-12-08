<?php
	if (!defined('JESTEM_W_SRODKU')) {
		echo "Próba ataku. Logowanie danych..."; die();
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
            <button id="input_18" type="submit" class="form-submit-button">
              Wyloguj
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_20">
        <label class="form-label-left" id="label_20" for="input_20"> Nazwa kierunku </label>
        <div id="cid_20" class="form-input">
          <input type="text" class="form-textbox" id="input_20" name="dodajkierunek_nazwa" size="20" />
        </div>
      </li>
      <li class="form-line" id="id_19">
        <div id="cid_19" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_19" type="submit" class="form-submit-button">
              Dodaj
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