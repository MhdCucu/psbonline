<div class="well">
	<div class="centerize"><h3>Add Aturan</h3></div>
	<?php echo form_open('admin/admaturan/add'); ?>
		<div>
			<?php echo form_label('Periode', 'period'); ?>
			<?php echo form_input(array('id' => 'period', 'name' => 'period', 'style' => 'width:95%', 'placeholder' => '2014/2015')); ?>
		</div>
		<div>
			<?php echo form_label('Aturan', 'aturan'); ?>
			<?php echo form_input(array('id' => 'aturan', 'name' => 'aturan', 'style' => 'width:95%', 'placeholder' => 'Aturan')); ?>
		</div>
		<div>
			<?php echo form_label('Status', 'status'); ?>
			<?php echo form_input(array('id' => 'status', 'name' => 'status', 'style' => 'width:95%', 'placeholder' => 'Status')); ?>
		</div>
		<div>
			<input type="submit" class="btn small" value="Save" name="save">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>