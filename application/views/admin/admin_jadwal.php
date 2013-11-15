<div class="well">
	<div class="centerize"><h3>JADWAL</h3></div>

	<?php if (isset($msg) && !empty($msg)) :?>
		<div class="error">
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>
	
	<div class="search">
		<form action="<?php echo site_url('admin/admjadwal/'); ?>" method="post">
			<?php echo form_dropdown('keyword', $options); ?>
			<?php echo form_input(array('id' => 'search_key', 'name' => 'search_key', 'style' => 'width:71%', 'placeholder' => 'Search keyword')); ?>
			<div>
				<input type="submit" class="btn small" value="Search" name="search">
			</div>
		</form>
	</div>
	<div>
		<table border="0" width="100%" id="jadwal">
			<tr class="blue">
				<th>No. </th>
				<th>Periode</th>
				<th>Kegiatan</th>
				<th>Tanggal</th>
				<th>Tempat</th>
				<th>Actions</th>
			</tr>
			<?php $i=1; foreach ($jadwal as $value) {
				$color = ($i % 2 == 0) ? 'whiteblue' : 'cyan';
				echo '<tr class="'. $color .'">';
	        	echo '<td>'. $i++ .'.</td>';
	        	echo '<td>'. $value->period .'</td>';
	        	echo '<td>'. $value->kegiatan .'</td>';
	        	echo '<td>'. $value->tanggal .'</td>';
	        	echo '<td>'. $value->tempat .'</td>';
	        	echo '<td class="actions">'. 
	        		'<a href="'. site_url('admin/admjadwal/view/'. $value->id_jadwal) .'" title="View Jadwal"><img src="'. site_url('/assets/img/b_browse.png') .'"></a>'.
	        		'<a href="'. site_url('admin/admjadwal/edit/'. $value->id_jadwal) .'" title="Edit Jadwal"><img src="'. site_url('/assets/img/b_edit.png') .'"></a>'.
	        		'<a href="'. site_url('admin/admjadwal/delete/'. $value->id_jadwal) .'" title="Hapus Jadwal"><img src="'. site_url('/assets/img/b_drop.png') .'"></a>'.
	        		'</td>';
	    		echo '</tr>';
			}?>
		</table>
	</div>
	<div>
		<a href="<?php echo site_url('admin/admjadwal/add'); ?>" class="btn small">Add</a>
	</div>
	<div class="divide10"></div>
</div>
