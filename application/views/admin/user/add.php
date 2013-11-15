<div class="well">
	<div class="centerize"><h3>Add New User</h3></div>
	<?php if (isset($msg) && !empty($msg)) {
		echo '<div class="error"><p>'. $msg .'</p></div>';
	}?>
	<?php echo form_open('admin/admuser/add'); ?>
		<div>
			<?php echo form_label('Username', 'username'); ?>
			<?php echo form_input(array('id' => 'username', 'name' => 'username', 'style' => 'width:95%', 'placeholder' => 'Your Username')); ?>
		</div>
		<div>
			<?php echo form_label('Email', 'email'); ?>
			<?php echo form_input(array('id' => 'email', 'name' => 'email', 'style' => 'width:95%', 'placeholder' => 'you@example.com')); ?>
		</div>
		<div>
			<?php echo form_label('Password', 'password'); ?>
			<?php echo form_password(array('id' => 'password', 'name' => 'password', 'style' => 'width:95%')); ?>
		</div>
		<div>
			<?php echo form_label('Retype Password', 'repassword'); ?>
			<?php echo form_password(array('id' => 'repassword', 'name' => 'password', 'style' => 'width:95%')); ?>
		</div>
		<div>
			<?php echo form_label('Status', 'status_user'); ?>
			<?php echo form_dropdown('status_user', $status, 1); ?>
		</div>
		<div>
			<?php echo form_label('Role', 'role_id'); ?>
			<?php echo form_dropdown('role_id', $roles, 3); ?>
		</div>
		<div>
			<input type="submit" class="btn small" value="Save" name="save">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>