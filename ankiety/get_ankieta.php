<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_ankieta = (int)$_POST['id_ankieta'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from ankieta where id_ankieta=$id_ankieta");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
			<aside> 
				<p><span>Nazwa:</span><input id="nazwa" type="text" size=80 value="<?php echo $row['nazwa'];?>" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>></p>
				<p><span>Od:</span><input id="od" type="date" size=20 value="<?php echo $row['od'];?>" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>></p>
				<p><span>Do:</span><input id="do" type="date" size=20 value="<?php echo $row['do'];?>" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>></p>
				<p><span>Kierunek: </span><select id="id_kierunek" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>><?php kierunki((int)$row['id_kierunek']); ?></select></p>
				
				<br/>
				<?php
					for ($i=1;$i<7; $i++)
					{
						echo '<p><span>Pytanie '.$i.':</span><input name="p'.$i.'" type="radio" value="0"'.($row['p'.$i]==0?"checked":"").'><input name="p'.$i.'" type="radio" value="1"'.($row['p'.$i]==1?"checked":"").'><input name="p'.$i.'" type="radio" value="2"'.($row['p'.$i]==2?"checked":"").'><input name="p'.$i.'" type="radio" value="3"'.($row['p'.$i]==3?"checked":"").'>&nbsp;&nbsp;&nbsp;<input type="text" id="pt'.$i.'" size=60 value="'.$row['pt'.$i].'"></p>';				
					}
				?>

				
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<input id="send" type="submit" value="Zapisz" onClick="saveAnkieta(<?php echo $row['id_ankieta']; ?>)" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>/>				
				<input id="send" type="submit" value="Uruchom" onClick="runAnkieta(<?php echo $row['id_ankieta']; ?>)" <?php echo $row['status']=='Zbieranie'?' disabled="disabled"':''; ?>/>	Uruchomienie spowoduje rozesłanie kodów dostępu (nie można cofnąć tej operacji)
			</section>
			
			<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
			
					<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'bar'
            },
            title: {
                text: 'Statystyki ankiety'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?php echo $row['pt3'];?>', '<?php echo $row['pt4'];?>', '<?php echo $row['pt5'];?>', '<?php echo $row['pt6'];?>'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'odpowiedzi',
                    align: 'high'
                }
            },
            
            
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -100,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
			
			
			<?php
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p3=1");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p31 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p3=2");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p32 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p3=3");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p33 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p3=4");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p34 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p3=5");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p35 = $row[0];
				
				
				
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p4=1");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p41 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p4=2");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p42 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p4=3");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p43 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p4=4");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p44 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p4=5");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p45 = $row[0];
				
				
				
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p5=1");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p51 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p5=2");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p52 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p5=3");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p53 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p5=4");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p54 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p5=5");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p55 = $row[0];
				
				
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p6=1");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p61 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p6=2");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p62 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p6=3");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p63 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p6=4");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p64 = $row[0];
				
				$result = mysql_query("select count(*) from ankieta_odp where id_ankieta=$id_ankieta and p6=5");
				$row = mysql_fetch_array($result, MYSQL_BOTH); 				
				$p65 = $row[0];
			
			?>
            series: [{
                name: '1',
                data: [<?php echo $p31; ?>, <?php echo $p41; ?>, <?php echo $p51; ?>, <?php echo $p61; ?>]
            }, {
                name: '2',
                data: [<?php echo $p32; ?>, <?php echo $p42; ?>, <?php echo $p52; ?>, <?php echo $p62; ?>]
            }, {
                name: '3',
                data: [<?php echo $p33; ?>, <?php echo $p43; ?>, <?php echo $p53; ?>, <?php echo $p63; ?>]
            }, {
                name: '4',
                data: [<?php echo $p34; ?>, <?php echo $p44; ?>, <?php echo $p54; ?>, <?php echo $p64; ?>]
            }, {
                name: '5',
                data: [<?php echo $p35; ?>, <?php echo $p45; ?>, <?php echo $p55; ?>, <?php echo $p65; ?>]
            }]
        });
    });
    
});
		</script>
	
<?php
		
	
	disconnect();
	
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>