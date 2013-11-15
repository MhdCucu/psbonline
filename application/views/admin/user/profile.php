<div class="well">
	<div class="centerize"><h3>PROFILE DETAIL</h3></div>
	<div>
		<p><strong>Username :</strong> <?php echo $arrUser->username; ?></p>
		<p><strong>Email :</strong> <?php echo $arrUser->email; ?></p>
		<p><strong>Status :</strong> <?php echo $arrStatus[$arrUser->status_user]; ?></p>
		<p><strong>Role :</strong> <?php echo $arrRoles->name; ?></p>
		<div class="divide10"></div>
	</div>
	<div class="change_password">
		<?php echo form_open('admin/admuser/change_password', array('id' => 'form_password')); ?>
		<h4>Change Password</h4>
		<div>
			<?php echo form_label('Current Password', 'currpassword'); ?>
			<?php echo form_password(array('id' => 'currpassword', 'name' => 'currpassword', 'style' => 'width:95%')); ?>
			<span id="curError" class="error"></span>
		</div>
		<div>
			<?php echo form_label('New Password', 'newpassword'); ?>
			<?php echo form_password(array('id' => 'newpassword', 'name' => 'newpassword', 'style' => 'width:95%')); ?>
			<span id="newError" class="error"></span>
		</div>
		<div>
			<?php echo form_label('Retype New Password', 'retpassword'); ?>
			<?php echo form_password(array('id' => 'retpassword', 'name' => 'retpassword', 'style' => 'width:95%')); ?>
			<span id="retError" class="error"></span>
		</div>
		<div>
			<input type="hidden" name="id_user" value="<?php echo $arrUser->id_user; ?>">
			<input type="button" id="btn_password" class="btn small" value="Submit New Password" name="submit">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
		<?php echo form_close(); ?>
		<?php if (isset($msg) && !empty($msg)) {
			echo '<div class="error"><p>'. $msg .'</p></div>';
		}?>
	</div>

</div>