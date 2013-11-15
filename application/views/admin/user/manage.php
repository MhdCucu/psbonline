<div class="well">
	<div class="centerize"><h3>Manage User</h3></div>
	<?php if (isset($msg) && !empty($msg)) {
		echo '<div class="error"><p>'. $msg .'</p></div>';
	}?>
	
	<div>
		<table border="0" width="100%" id="aturan">
			<tr class="blue">
				<th>No. </th>
				<th>Username</th>
				<th>Email</th>
				<th>Status</th>
				<th>Role</th>
				<th width="95px;">Actions</th>
			</tr>
			<?php $i=1; foreach ($users as $value) {
				$color = ($i % 2 == 0) ? 'whiteblue' : 'cyan';
				echo '<tr class="'. $color .'">';
	        	echo '<td>'. $i++ .'.</td>';
	        	echo '<td>'. $value->username .'</td>';
	        	echo '<td>'. $value->email .'</td>';
	        	echo '<td>'. $arrStatus[$value->status_user] .'</td>';
	        	echo '<td>'. $value->name .'</td>';
	        	echo '<td class="actions">'. 
	        		'<a href="'. site_url('admin/admuser/edit/'. $value->id_user) .'" title="Edit User"><img src="'. site_url('/assets/img/b_edit.png') .'"></a>'.
	        		'<a href="'. site_url('admin/admuser/delete/'. $value->id_user) .'" title="Hapus User"><img src="'. site_url('/assets/img/b_drop.png') .'"></a>'.
	        		'</td>';
	    		echo '</tr>';
			}?>
		</table>
	</div>
	<div class="divide10"></div>
</div>
