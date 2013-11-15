<div class="well">
	<div class="centerize"><h3>INFORMASI</h3></div>
	<?php echo form_open('admin/adminformasi'); ?>
		<div>
			<?php echo form_label('Periode', 'period'); ?>
			<?php echo form_input(array('id' => 'period', 'name' => 'period', 'value' => $informasi->period, 'style' => 'width:95%')); ?>
		</div>
		<div>
			<?php echo form_label('Info Beranda', 'period'); ?>
			<?php echo form_textarea(array('id' => 'info_beranda', 'name' => 'info_beranda', 'value' => $informasi->info_beranda, 'style' => 'width:95%')); ?>
		</div>
		<!--<div>
			<?php //echo form_label('Info Sekolah', 'info_sekolah'); ?>
			<?php //echo form_textarea(array('id' => 'info_sekolah', 'name' => 'info_sekolah', 'value' => $informasi->info_sekolah, 'style' => 'width:95%')); ?>
		</div>-->
		<div>
			<input type="hidden" name="id_info" value="<?php echo $informasi->id_info; ?>">
			<input type="submit" class="btn small" value="Save" name="save">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
		<?php if (isset($msg)) {
			echo '<div class="error">'. $msg .'</div>';
		} ?>
		<div class="divide10"></div>
	<?php echo form_close(); ?>
</div>
