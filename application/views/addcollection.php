<form method="post" action="<?=base_url('mycollection/addcollction');?>">
<input type="text" name="name">
<input type="hidden" name="uid" value="<?= $uid ?>">

<table style="width: 70%;">
	<?php foreach ($clothes as $item):?>
		<tr>
			<td><?= $item['Id'] ?></td>
			<td><?= $item['CollectionType'] ?></td>
			<td><?= $item['Name'] ?></td>
			<td><?= $item['Price'] ?></td>
			<td><img src="<?=base_url('public/images');?>/<?= $item['product_image'] ?>" class="img-thumbnail"></td>
			<td>
				<input class="largerCheckbox" type="checkbox" name="collection[]" value="<?= $item['Id'] ?>">	
			</td>
			
		</tr>

	<?php endforeach;?>
</table>
<input type="submit">

</form>
