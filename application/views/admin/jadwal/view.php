<div class="well">
	<div class="centerize"><h3>View Jadwal</h3></div>
	<?php echo form_open('admin/admjadwal/edit'); ?>
		<div>
			<?php echo form_label('Periode', 'period'); ?>
			<?php echo form_input(array('id' => 'period', 'name' => 'period', 'readonly' => 'true', 'value' => $jadwal->period, 'style' => 'width:95%', 'placeholder' => '2014/2015')); ?>
		</div>
		<div>
			<?php echo form_label('Kegiatan', 'kegiatan'); ?>
			<?php echo form_input(array('id' => 'kegiatan', 'name' => 'kegiatan', 'readonly' => 'true', 'value' => $jadwal->kegiatan, 'style' => 'width:95%', 'placeholder' => 'Kegiatan')); ?>
		</div>
		<div>
			<?php echo form_label('Tanggal', 'tanggal'); ?>
			<?php echo form_input(array('id' => 'tanggal', 'name' => 'tanggal', 'readonly' => 'true', 'value' => $jadwal->tanggal, 'style' => 'width:95%', 'placeholder' => '2013-11-01')); ?>
		</div>
		<div>
			<?php echo form_label('Tempat', 'tempat'); ?>
			<?php echo form_input(array('id' => 'tempat', 'name' => 'tempat', 'readonly' => 'true', 'value' => $jadwal->tempat, 'style' => 'width:95%', 'placeholder' => 'Tempat')); ?>
		</div>
		<div>
			<input type="hidden" name="id_jadwal" value="<?php echo $jadwal->id_jadwal; ?>">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>