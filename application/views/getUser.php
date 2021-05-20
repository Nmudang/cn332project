<table>
	<?php foreach ($clothes as $item):?>
		<tr>
			<td><?= $item['Id'] ?></td>
			<td><?= $item['CollectionType'] ?></td>
			<td><?= $item['Name'] ?></td>
			<td><?= $item['Price'] ?></td>
			
		</tr>
	<?php endforeach;?>
</table>



