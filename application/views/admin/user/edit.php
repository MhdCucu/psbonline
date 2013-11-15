<div class="well">
	<div class="centerize"><h3>Add New User</h3></div>
	<?php if (isset($msg) && !empty($msg)) {
		echo '<div class="error"><p>'. $msg .'</p></div>';
	}?>
	<?php echo form_open('admin/admuser/edit'); ?>
		<div>
			<?php echo form_label('Username', 'username'); ?>
			<?php echo form_input(array('id' => 'username', 'name' => 'username', 'style' => 'width:95%', 'value' => $arrUser->username)); ?>
		</div>
		<div>
			<?php echo form_label('Email', 'email'); ?>
			<?php echo form_input(array('id' => 'email', 'name' => 'email', 'style' => 'width:95%', 'value' => $arrUser->email)); ?>
		</div>
		<div>
			<?php echo form_label('Status', 'status_user'); ?>
			<?php echo form_dropdown('status_user', $status, $status[$arrUser->status_user]); ?>
		</div>
		<div>
			<?php echo form_label('Role', 'role_id'); ?>
			<?php echo form_dropdown('role_id', $roles, $roles[$arrUser->role_id]); ?>
		</div>
		<div>
			<input type="hidden" value="<?php echo $arrUser->id_user; ?>" name="id_user">
			<input type="submit" class="btn small" value="Save" name="save">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>