<div class="well">
	<div class="centerize"><h3>ATURAN</h3></div>

	<?php if (isset($msg) && !empty($msg)) :?>
		<div class="error">
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>
	
	<div class="search">
		<form action="<?php echo site_url('admin/admaturan/'); ?>" method="post">
			<?php echo form_dropdown('keyword_aturan', $options); ?>
			<?php echo form_input(array('id' => 'search_key_aturan', 'name' => 'search_key_aturan', 'style' => 'width:71%', 'placeholder' => 'Search keyword')); ?>
			<div>
				<input type="submit" class="btn small" value="Search" name="search">
			</div>
		</form>
	</div>
	<div>
		<table border="0" width="100%" id="aturan">
			<tr class="blue">
				<th>No. </th>
				<th>Periode</th>
				<th>Isi Aturan </th>
				<th>Status</th>
				<th width="95px;">Actions</th>
			</tr>
			<?php 
				if (!empty($aturan)) {
					$i=1;
					foreach ($aturan as $value) {
						$color = ($i % 2 == 0) ? 'whiteblue' : 'cyan';
						echo '<tr class="'. $color .'">';
			        	echo '<td>'. $i++ .'.</td>';
			        	echo '<td>'. $value->period .'</td>';
			        	echo '<td>'. ucwords($value->aturan) .'</td>';
			        	echo '<td>'. $value->status .'</td>';
			        	echo '<td class="actions">'. 
			        		'<a href="'. site_url('admin/admaturan/view/'. $value->id_aturan) .'" title="View Aturan"><img src="'. site_url('/assets/img/b_browse.png') .'"></a>'.
			        		'<a href="'. site_url('admin/admaturan/edit/'. $value->id_aturan) .'" title="Edit Aturan"><img src="'. site_url('/assets/img/b_edit.png') .'"></a>'.
			        		'<a href="'. site_url('admin/admaturan/delete/'. $value->id_aturan) .'" title="Hapus Aturan"><img src="'. site_url('/assets/img/b_drop.png') .'"></a>'.
			        		'</td>';
			    		echo '</tr>';
					}		
				} else {
					echo '<tr><td colspan="5" class="centerize">'. $msg .'</td></tr>';
				}
			?>
		</table>
	</div>
	<div>
		<a href="<?php echo site_url('admin/admaturan/add'); ?>" class="btn small">Add</a>
	</div>
	<div class="divide10"></div>
</div>
