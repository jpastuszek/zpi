<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="skrypty.js"></script>
	<div id="wrapper" class="panel">
			
			<aside>
			<section id="menu" class="ramka" style="margin-top: 10px; margin-right:10px;" >
				
					<a onClick="ankiety()">Ankiety</a> 
					<?php
						
							echo '| <a onClick="users()"><b>Użytkownicy</b></a> ';					
							echo '| <a onClick="teachers()"><b>Wykładowcy</b></a> ';					
							echo '| <a onClick="przedmioty()"><b>Przedmioty</b></a> ';	
							echo '| <a onClick="kierunki()"><b>Kierunki</b></a> ';
							echo '| <a onClick="mails()"><b>Maile</b></a> ';							
						
					?>| <a onClick="logout()">Wyloguj</a>
				
			</section>
			<section id="zawartosc">
				<?php   
				
					echo "<script>ankiety();</script>";

				?>								
			</section>										
			</aside>
	</div>
<?php
}
else 
{
echo "dupa";	
}
?>
		
			
			
			
	