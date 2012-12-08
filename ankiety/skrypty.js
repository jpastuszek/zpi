	function login()
		{
			jQuery.post("ajax_login.php", {login: jQuery("#email").val(), password: jQuery("#password").val()}, function(data)
			{				
				if (data==1)
				{
					jQuery("#srodek").load("zalogowany.php");										
				} else alert("Nieprawidłowe dane logowania");
			});
		}
		
		function logout()
		{
			jQuery.post("ajax_logout.php", function(data)
			{
				jQuery("#srodek").load("default.php");				
			});
		}

		
		function users()
		{			
			jQuery("#zawartosc").load("users.php");		
		}
		
		
		function getUser(id_user)
		{
			jQuery.post("get_user.php", {id_users: id_user}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function saveUser(id_user)
		{
			jQuery.post("save_user.php", {id_uzytkownik: id_user,login: jQuery("#login").val(), password: jQuery("#password").val()}, function(data)
			{
				if (data==-1) alert("Nieporawny login");
				else if (data==1) users();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newUser()
		{			
			jQuery("#zawartosc").load("new_user.php");						
		}
		
		function addUser()
		{
			jQuery.post("add_user.php", {login: jQuery("#login").val(), password: jQuery("#password").val()}, function(data)
			{				
				if (data==-1) alert("Nieporawny login");
				else if (data==1) users();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		
		
		
		
		
		
		function teachers()
		{			
			jQuery("#zawartosc").load("teachers.php");		
		}
		
		
		function getTeacher(id)
		{
			jQuery.post("get_teacher.php", {id_wykladowca: id}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function saveTeacher(id)
		{
			jQuery.post("save_teacher.php", {id_wykladowca: id, nazwa: jQuery("#nazwa").val()}, function(data)
			{
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) teachers();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newTeacher()
		{			
			jQuery("#zawartosc").load("new_teacher.php");						
		}
		
		function addTeacher()
		{
			jQuery.post("add_teacher.php", {nazwa: jQuery("#nazwa").val()}, function(data)
			{				
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) teachers();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		
		
		
		function przedmioty()
		{			
			jQuery("#zawartosc").load("przedmioty.php");		
		}
		
		
		function getPrzedmiot(id)
		{
			jQuery.post("get_przedmiot.php", {id_przedmiot: id}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function savePrzedmiot(id)
		{
			jQuery.post("save_przedmiot.php", {id_przedmiot: id, nazwa: jQuery("#nazwa").val()}, function(data)
			{
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) przedmioty();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newPrzedmiot()
		{			
			jQuery("#zawartosc").load("new_przedmiot.php");						
		}
		
		function addPrzedmiot()
		{
			jQuery.post("add_przedmiot.php", {nazwa: jQuery("#nazwa").val()}, function(data)
			{				
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) przedmioty();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
	
	
	
	
		function kierunki()
		{			
			jQuery("#zawartosc").load("kierunki.php");		
		}
		
		
		function getKierunek(id)
		{
			jQuery.post("get_kierunek.php", {id_kierunek: id}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function saveKierunek(id)
		{
			jQuery.post("save_kierunek.php", {id_kierunek: id, nazwa: jQuery("#nazwa").val()}, function(data)
			{
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) kierunki();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newKierunek()
		{			
			jQuery("#zawartosc").load("new_kierunek.php");						
		}
		
		function addKierunek()
		{
			jQuery.post("add_kierunek.php", {nazwa: jQuery("#nazwa").val()}, function(data)
			{				
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) kierunki();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
	
	
	
	
	
	function mails()
		{			
			jQuery("#zawartosc").load("mails.php");		
		}
		
		
		function getMail(id)
		{
			jQuery.post("get_mail.php", {id_mail: id}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function saveMail(id)
		{
			jQuery.post("save_mail.php", {id_mail: id, id_kierunek: jQuery("#id_kierunek").val(), mail: jQuery("#mail").val()}, function(data)
			{
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) mails();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newMail()
		{			
			jQuery("#zawartosc").load("new_mail.php");						
		}
		
		function addMail()
		{
			jQuery.post("add_mail.php", {id_kierunek: jQuery("#id_kierunek").val(), mail: jQuery("#mail").val()}, function(data)
			{				
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) mails();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
	
	
	
	
	
		function ankiety()
		{			
			jQuery("#zawartosc").load("ankiety.php");		
		}
		
		
		function getAnkieta(id)
		{
			jQuery.post("get_ankieta.php", {id_ankieta: id}, function(data)
			{								
				jQuery("#zawartosc").html(data);						
			});				
		}
		
		function saveAnkieta(id)
		{
			jQuery.post("save_ankieta.php", 
				{
					id_ankieta: id, 
					nazwa: jQuery("#nazwa").val(), 
					od: jQuery("#od").val(),
					do: jQuery("#do").val(),
					id_kierunek: jQuery("#id_kierunek").val(),
					p1: jQuery("input[name=p1]:checked").val(),
					p2: jQuery("input[name=p2]:checked").val(),
					p3: jQuery("input[name=p3]:checked").val(),
					p4: jQuery("input[name=p4]:checked").val(),
					p5: jQuery("input[name=p5]:checked").val(),
					p6: jQuery("input[name=p6]:checked").val(),
					pt1: jQuery("#pt1").val(),
					pt2: jQuery("#pt2").val(),
					pt3: jQuery("#pt3").val(),
					pt4: jQuery("#pt4").val(),
					pt5: jQuery("#pt5").val(),
					pt6: jQuery("#pt6").val()
				
				},function(data)
			{
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) ankiety();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}
		
		function newAnkieta()
		{	
			jQuery.post("new_ankieta.php",{}, function(data) {
				if (data==1) jQuery("#zawartosc").load("ankiety.php");						
			});
		}
		
		function runAnkieta(id)
		{
			jQuery.post("run_ankieta.php", {id_ankieta: id}, function(data)
			{				
				if (data==-1) alert("Nieporawna nazwa");
				else if (data==1) ankiety();
				else alert("Coś się zepsuło w bazie :(");	
			});		
		}