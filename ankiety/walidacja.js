jQuery(document).ready(function() {

	var kontakt = jQuery("#kontakt");
	var email = jQuery("#email");
	var kod = jQuery("#kod");
	var wiadomosc = jQuery("#wiadomosc");
	var ch2 = jQuery("#ch2");
	var ch2info = jQuery("#ch2info");
	
	function walidacjaEmail()
	{		
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+.[a-z]{2,4}$/;
		if(filter.test(email.val()))
		{
			email.removeClass("grubo");					
			return true;
		}
		else
		{
			email.addClass("grubo");			
			return false;
		}
	}
	
	function walidacjaKod()
	{
		var filter = /^[0-9]{2}-[0-9]{3}$/;
		if(filter.test(kod.val()))
		{
			kod.removeClass("grubo");					
			return true;
		}
		else
		{
			kod.addClass("grubo");			
			return false;
		}	
	}
	
	function walidacjaWiadomosc()
	{
		if (wiadomosc.val().length<10) { wiadomosc.addClass("grubo"); return false; }
		if (wiadomosc.val().length>200) { wiadomosc.addClass("grubo"); return false; }
		wiadomosc.removeClass("grubo");
		return true;
	}
	
	function walidacjaCh()
	{		
		if (ch2.attr('checked')) { ch2info.removeClass("grubo");	return true; }
		ch2info.addClass("grubo");	
		return false;
	}
	
	
	
	jQuery(kontakt).submit(function() {
	
		if (walidacjaEmail()&walidacjaKod()&walidacjaWiadomosc()&walidacjaCh()) return true;
		return false;
	});
	
	
	
});
