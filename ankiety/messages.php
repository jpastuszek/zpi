<?php
	include "funkcje.php";
	start();
?>

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
					"aaSorting": [ [2,'desc'], [1,'asc'] ],
					"aoColumnDefs": [
						{ "sType": 'string-case', "aTargets": [ 2 ] }
					],
					"oLanguage": {
						"sLengthMenu": "Wyświetlaj _MENU_ wiadomości na strone",
						"sZeroRecords": "Brak wyników",
						"sInfo": "Od _START_ do _END_ z _TOTAL_ stron",
						"sInfoEmpty": "Brak wiadomości",
						"sInfoFiltered": "(z _MAX_ wszystkich wiadomości)",
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
			<th>Od</th>
			<th>Do</th>
			<th>Tytuł</th>
			<th>Data</th>			
		</tr>
	</thead>
	<tbody>
	<?php
	if (isLogged()&&isAdmin())
	{
		connect();		
		$result = mysql_query("select u2.email, u.email, m.type, m.title, m.timestamp, m.id_sender, m.id_messages from messages m, users u, users u2 where m.id_reciver=u.id_users and m.id_sender=u2.id_users order by timestamp DESC");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))		
		{	
		?>
		<tr class="grade<?php echo $row['type'] == 1 ? "A": "B"; ?>" style="cursor: pointer;" onClick="getMessage(<?php echo $row['id_messages'];?>)">
			<td><?php echo $row[0];?></td>
			<td><?php echo $row['email'];?></td>
			<td style="width:200px; "><div style="width:200px; word-wrap: break-word;"><?php echo $row['title'];?></div></td>
			<td><?php echo $row['timestamp'];?></td>			
		</tr>
		<?php
		}	
		disconnect();
	}
?>
		
	<tfoot>
		<tr>
			<th>Od</th>
			<th>Do</th>
			<th>Tytuł</th>
			<th>Data</th>	
		</tr>
	</tfoot>
</table>