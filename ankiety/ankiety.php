<?php
	include "funkcje.php";
	start();
?>
		<br/><span style="background:#234" onClick="newAnkieta()"><a href="#">Dodaj</a></span><br/><br/>
		<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			/* Define two custom functions (asc and desc) for string sorting */
			jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
				return ((x < y) ? -1 : ((x > y) ?  1 : 0));
			};
			
			jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
				return ((x < y) ?  1 : ((x > y) ? -1 : 0));
			};
			
			$(document).ready(function() {
				/* Build the DataTable with third column using our custom sort functions */
				$('#example').dataTable( {
					"aaSorting": [ [0,'desc'], [1,'asc'] ],
					"aoColumnDefs": [
						{ "sType": 'string-case', "aTargets": [ 1 ] }
					],
					"oLanguage": {
						"sLengthMenu": "Wyświetlaj _MENU_ ankiet na strone",
						"sZeroRecords": "Brak wyników",
						"sInfo": "Od _START_ do _END_ z _TOTAL_ ankiet.",
						"sInfoEmpty": "Brak ankiet",
						"sInfoFiltered": "(z _MAX_ wszystkich ankiet)",
						"sSearch": "Szukaj",
						'oPaginate': {
							'sFirst':    'Pierwsza',
							'sPrevious': 'Poprzednia',
							'sNext':     'Następna',
							'sLast':     'Ostatnia'
						}
					}
				} );
				
			
			} );
		</script>
		
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Id</th>			
			<th>nazwa</th>						
			<th>Od</th>						
			<th>Do</th>						
			<th>Kierunek</th>
			<th>Odpowiedzi</th>			
			<th>Status</th>			
		</tr>
	</thead>
	<tbody>
	<?php
	if (isLogged())
	{
		connect();		
		$result = mysql_query("select * from ankieta");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))		
		{	
		?>
		<tr class="grade<?php echo ($row['status']=="Robocza"?"F":"C");?>" style="cursor: pointer;" onClick="getAnkieta(<?php echo $row['id_ankieta'];?>)">
			<td style="text-align:center"><?php echo $row['id_ankieta'];?></td>			
			<td style="text-align:center"><?php echo $row['nazwa'];?></td>	
			<td style="text-align:center"><?php echo $row['od'];?></td>			
			<td style="text-align:center"><?php echo $row['do'];?></td>		
			<td style="text-align:center"><?php echo kierunek($row['id_kierunek']);?></td>
			<td style="text-align:center">
			<?php 
				$result2 = mysql_query("select count(*) from ankieta_odp where id_ankieta=".$row['id_ankieta']);
				$row2 = mysql_fetch_array($result2, MYSQL_BOTH);
				echo $row2[0];
			?></td>
			<td style="text-align:center"><?php echo $row['status'];?></td>
			
		</tr>
		<?php
		}	
		disconnect();
	}
?>
		
	<tfoot>
		<tr>
			<th>Id</th>			
			<th>nazwa</th>						
			<th>Od</th>						
			<th>Do</th>						
			<th>Kierunek</th>
			<th>Odpowiedzi</th>			
			<th>Status</th>						
		</tr>
	</tfoot>
</table>