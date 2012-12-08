<?php
	include "funkcje.php";
	start();
?>
		<br/><span style="background:#234" onClick="newTeacher()"><a href="#">Dodaj</a></span><br/><br/>
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
						"sLengthMenu": "Wyświetlaj _MENU_ nauczycieli na strone",
						"sZeroRecords": "Brak wyników",
						"sInfo": "Od _START_ do _END_ z _TOTAL_ nauczycieli.",
						"sInfoEmpty": "Brak nauczycieli",
						"sInfoFiltered": "(z _MAX_ wszystkich nauczycieli)",
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
			<th>Wykładowca</th>						
		</tr>
	</thead>
	<tbody>
	<?php
	if (isLogged())
	{
		connect();		
		$result = mysql_query("select * from wykladowca");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))		
		{	
		?>
		<tr class="gradeB" style="cursor: pointer;" onClick="getTeacher(<?php echo $row['id_wykladowca'];?>)">
			<td style="text-align:center"><?php echo $row['id_wykladowca'];?></td>			
			<td style="text-align:center"><?php echo $row['nazwa'];?></td>				
		</tr>
		<?php
		}	
		disconnect();
	}
?>
		
	<tfoot>
		<tr>
			<th>Id</th>			
			<th>Wykładowca</th>											
		</tr>
	</tfoot>
</table>