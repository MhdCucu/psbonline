<div class="well">
	<div class="centerize"><h3>Add Pendaftar</h3></div>
	<?php echo form_open('admin/admpendaftar/add'); ?>
		<!--<div>
			<?php echo form_label('No Pendaftaran', 'kode_pendaftar'); ?>
			<?php echo form_input(array('id' => 'kode_pendaftar', 'name' => 'kode_pendaftar', 'style' => 'width:95%', 'placeholder' => 'No Pendaftaran')); ?>
		</div>-->
		<div>
			<?php echo form_label('Nama Lengkap', 'nama_siswa'); ?>
			<?php echo form_input(array('id' => 'nama_siswa', 'name' => 'nama_siswa', 'style' => 'width:95%', 'placeholder' => 'Nama Lengkap')); ?>
		</div>
		<div>
			<?php echo form_label('Nama Panggilan', 'nama_panggilan'); ?>
			<?php echo form_input(array('id' => 'nama_panggilan', 'name' => 'nama_panggilan', 'style' => 'width:95%', 'placeholder' => 'Nama Panggilan')); ?>
		</div>
		<div>
			<?php echo form_label('Tempat Lahir', 'tempat_lahir'); ?>
			<?php echo form_input(array('id' => 'tempat_lahir', 'name' => 'tempat_lahir', 'style' => 'width:95%', 'placeholder' => 'Tempat Lahir')); ?>
		</div>
		<div>
			<?php echo form_label('Tanggal Lahir', 'tanggal_lahir'); ?>
			<?php echo form_input(array('id' => 'tanggal_lahir', 'name' => 'tanggal_lahir', 'style' => 'width:95%', 'placeholder' => 'Tanggal Lahir')); ?>
		</div>
		<div>
			<?php echo form_label('Jenis Kelamin', 'jenis_kelamin'); ?>
			<?php echo form_input(array('id' => 'jenis_kelamin', 'name' => 'jenis_kelamin', 'style' => 'width:95%', 'placeholder' => 'Jenis Kelamin')); ?>
		</div>
		<div>
			<?php echo form_label('Agama', 'agama'); ?>
			<?php echo form_input(array('id' => 'agama', 'name' => 'agama', 'style' => 'width:95%', 'placeholder' => 'Agama')); ?>
		</div>
		<div>
			<?php echo form_label('Golongan Darah', 'gol_darah'); ?>
			<?php echo form_input(array('id' => 'gol_darah', 'name' => 'gol_darah', 'style' => 'width:95%', 'placeholder' => 'Golongan Darah')); ?>
		</div>
		<div>
			<?php echo form_label('Alamat Lengkap', 'alamat'); ?>
			<?php echo form_input(array('id' => 'alamat', 'name' => 'alamat', 'style' => 'width:95%', 'placeholder' => 'Alamat Lengkap')); ?>
		</div>
		<div>
			<?php echo form_label('No Telepon', 'no_telepon'); ?>
			<?php echo form_input(array('id' => 'no_telepon', 'name' => 'no_telepon', 'style' => 'width:95%', 'placeholder' => 'No Telepon')); ?>
		</div>
		<div>
			<?php echo form_label('Email', 'email'); ?>
			<?php echo form_input(array('id' => 'email', 'name' => 'email', 'style' => 'width:95%', 'placeholder' => 'Email')); ?>
		</div>
		<div>
			<?php echo form_label('Pihak yang dihubungi', 'pihak_wali'); ?>
			<?php echo form_input(array('id' => 'pihak_wali', 'name' => 'pihak_wali', 'style' => 'width:95%', 'placeholder' => 'Pihak yang dihubungi')); ?>
		</div>
		<div>
			<?php echo form_label('Nama Orangtua', 'nama_ortu'); ?>
			<?php echo form_input(array('id' => 'nama_ortu', 'name' => 'nama_ortu', 'style' => 'width:95%', 'placeholder' => 'Nama Orangtua')); ?>
		</div>
		<div>
			<?php echo form_label('Alamat Orangtua', 'alamat_ortu'); ?>
			<?php echo form_input(array('id' => 'alamat_ortu', 'name' => 'alamat_ortu', 'style' => 'width:95%', 'placeholder' => 'Alamat Orangtua')); ?>
		</div>
		<div>
			<?php echo form_label('Agama Orangtua', 'agama_ortu'); ?>
			<?php echo form_input(array('id' => 'agama_ortu', 'name' => 'agama_ortu', 'style' => 'width:95%', 'placeholder' => 'Agama Orangtua')); ?>
		</div>
		<div>
			<?php echo form_label('Pilihan ke-1', 'pilihan_1'); ?>
			<?php echo form_input(array('id' => 'pilihan_1', 'name' => 'pilihan_1', 'style' => 'width:95%', 'placeholder' => 'Pilihan ke-1')); ?>
		</div>
		<div>
			<?php echo form_label('Pilihan ke-2', 'pilihan_2'); ?>
			<?php echo form_input(array('id' => 'pilihan_2', 'name' => 'pilihan_2', 'style' => 'width:95%', 'placeholder' => 'Pilihan ke-2')); ?>
		</div>
		<div>
			<?php echo form_label('Asal Sekolah', 'smp'); ?>
			<?php echo form_input(array('id' => 'smp', 'name' => 'smp', 'style' => 'width:95%', 'placeholder' => 'Asal Sekolah')); ?>
		</div>
		<div>
			<?php echo form_label('Lama Belajar', 'lama_belajar'); ?>
			<?php echo form_input(array('id' => 'lama_belajar', 'name' => 'lama_belajar', 'style' => 'width:95%', 'placeholder' => 'Lama Belajar')); ?>
		</div>
		<div>
			<?php echo form_label('Nilai SKHUN', 'nilai_skhun'); ?>
			<?php echo form_input(array('id' => 'nilai_skhun', 'name' => 'nilai_skhun', 'style' => 'width:95%', 'placeholder' => 'Nilai SKHUN')); ?>
		</div>
		
		
		<div>
			<input type="submit" class="btn small" value="Save" name="save">
			<input type="button" class="btn small" value="Back" onclick="self.history.back();">
			<div class="divide10"></div>
		</div>
	<?php echo form_close(); ?>
</div>