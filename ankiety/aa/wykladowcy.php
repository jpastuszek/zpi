$(function() {
		var availableTags = [
<?php

	include("funkcje.php");
	
	pol();	
	$result = mysql_query("select nazwa from wykladowca");
	
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
  
		echo '"'.$row[0].'",';
	}
	mysql_free_result($result);
	zam();
?>	
		""];
		$( "#wykladowca_autocomplete" ).autocomplete({
			source: availableTags
		});
	});