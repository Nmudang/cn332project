<!-- CONTENT -->
<main class="site-main">

	<h2>Login</h2>
	<?php echo validation_errors('<div class="error">', '</div>'); ?>

	<?= form_open('login', 'class=""'); ?>
	<div>
		<?php
		echo form_label('Username: ', 'username');
		$data = ['name' => 'username', 'id' => 'username'];
		echo form_input($data);
		?>
	</div>
	<div>
		<?php
		echo form_label('Password: ', 'password');
		$data = ['name' => 'password', 'id' => 'password'];
		echo form_password($data);
		?>
	</div>
	<div>
		<?= form_submit('submit', 'Login'); ?>
		<?= form_reset('reset', 'Reset'); ?>
	</div>
	<?= form_close(); ?>

</main>
<!-- /CONTENT -->

