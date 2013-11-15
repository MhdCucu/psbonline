<div class="well">
	<div class="centerize"><h3>PENDAFTAR</h3></div>

	<?php if (isset($msg) && !empty($msg)) :?>
		<div class="error">
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>
	
	<div class="search">
		<form action="<?php echo site_url('admin/admpendaftar/'); ?>" method="post">
			<?php echo form_dropdown('keyword', $options); ?>
			<?php echo form_input(array('id' => 'search_key', 'name' => 'search_key', 'style' => 'width:71%', 'placeholder' => 'Search keyword')); ?>
			<div>
				<input type="submit" class="btn small" value="Search" name="search">
			</div>
		</form>
	</div>
	<div>
		<table border="0" width="100%" id="aturan">
			<tr class="blue">
				<th>No. </th>
				<th>No Pendaftaran</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Asal Sekolah</th>
				<th width="95px;">Actions</th>
			</tr>
			<?php $i=1; foreach ($pendaftar as $value) {
				$color = ($i % 2 == 0) ? 'whiteblue' : 'cyan';
				echo '<tr class="'. $color .'">';
	        	echo '<td>'. $i++ .'.</td>';
	        	echo '<td>'. $value->kode_pendaftar .'</td>';
	        	echo '<td>'. $value->nama_siswa .'</td>';
	        	echo '<td>'. $value->tempat_lahir .'</td>';
	        	echo '<td>'. $value->tanggal_lahir .'</td>';
	        	echo '<td>'. $value->jenis_kelamin .'</td>';
	        	echo '<td>'. $value->agama .'</td>';
	        	echo '<td>'. $value->smp .'</td>';
	        	echo '<td class="actions">'. 
	        		'<a href="'. site_url('admin/admpendaftar/view/'. $value->kode_pendaftar) .'" title="View Pendaftar"><img src="'. site_url('/assets/img/b_browse.png') .'"></a>'.
	        		'<a href="'. site_url('admin/admpendaftar/edit/'. $value->kode_pendaftar) .'" title="Edit Pendaftar"><img src="'. site_url('/assets/img/b_edit.png') .'"></a>'.
	        		'<a href="'. site_url('admin/admpendaftar/delete/'. $value->kode_pendaftar) .'" title="Hapus Pendaftar"><img src="'. site_url('/assets/img/b_drop.png') .'"></a>'.
	        		'</td>';
	    		echo '</tr>';
			}?>
		</table>
	</div>
	<div>
		<a href="<?php echo site_url('admin/admpendaftar/add'); ?>" class="btn small">Add</a>
	</div>
	<div class="divide10"></div>
</div>
