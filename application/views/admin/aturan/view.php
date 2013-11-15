<div class="well">
	<div class="centerize"><h3>View Aturan</h3></div>
	<?php echo form_open('admin/admaturan/edit'); ?>
		<div>
			<?php echo form_label('Periode', 'period'); ?>
			<?php echo form_input(array('id' => 'period', 'name' => 'period', 'readonly' => 'true', 'value' => $aturan->period, 'style' => 'width:95%', 'placeholder' => '2014/2015')); ?>
		</div>
		<div>
			<?php echo form_label('Isi aturan', 'aturan'); ?>
			<?php echo form_input(array('id' => 'aturan', 'name' => 'aturan', 'readonly' => 'true', 'value' => $aturan->aturan, 'style' => 'width:95%', 'placeholder' => 'Isi aturan')); ?>
		</div>
		<div>
			<?php echo form_label('Status', 'status'); ?>
			<?php echo form_input(array('id' => 'status', 'name' => 'status', 'readonly' => 'true', 'value' => $aturan->status, 'style' => 'width:95%', 'placeholder' => 'Status')); ?>
		</div>
		<div>
			<input type="hidden" name="id_aturan" value="<?php echo $aturan->id_aturan; ?>">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>