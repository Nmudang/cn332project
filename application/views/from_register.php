
<body>
	<?php foreach ($form as $item):?>

	<?php echo validation_errors('<div class="error">', '</div>'); ?><br>
		<?= form_open('register', 'class=""'); ?>

			<?= form_label('firstname:', 'firstname'); ?>
			<?= form_input($item['firstname']) ?> <br>
			<?= form_label('lastname:', 'lastname'); ?> 
			<?= form_input($item['lastname']) ?> <br>
			<?= form_label('username:', 'username'); ?> 
			<?= form_input($item['username']) ?> <br>
			<?= form_label('email:', 'email'); ?> 
			<?= form_input($item['email']) ?> <br>
			<?= form_label('password:', 'password'); ?> 
			<?= form_input($item['password']) ?> <br>
			<?= form_label('password Confirmation:', 'password2'); ?> 
			<?= form_input($item['password2']) ?> <br>
			<br>
			<?= form_submit('submit', 'register!'); ?> <br>
	<?= form_close(); ?>
		
		
	<?php endforeach;?>


</body>


