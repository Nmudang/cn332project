
<table>
	<?php foreach ($user as $item):?>
		<tr>
			<td><?= $item['id'] ?></td>
			<td><?= $item['firstname'] ?></td>
			<td><?= $item['lastname'] ?></td>
			<td><?= $item['email'] ?></td>
			
		</tr>
	<?php endforeach;?>
</table>



