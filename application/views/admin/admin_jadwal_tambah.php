	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>">
	
	    <div>
	    	<div id='loadingDiv'></div>
	    	<form action="" method="post" name="user_register">
	    		<div class="divide20"></div>
				<h4 style="text-align: center; font-weight: bold;">User Register</h4>
				<div class="divide20"></div>
				<div>
					<?php echo form_label('Id jadwal', 'id_jadwal'); ?>
					<?php echo form_input('id_jadwal'); ?>
				</div>
				<div>
					<?php echo form_label('Period', 'period'); ?>
					<?php echo form_input('period'); ?>
				</div>
				<div>
					<?php echo form_label('Kegiatan', 'kegiatan'); ?>
					<?php echo form_password('kegiatan'); ?>
				</div>
				<div>
					<?php echo form_label('Tanggal', 'tanggal'); ?>
					<?php echo form_password('tanggal'); ?>
				</div>
				<div>
					<?php echo form_label('Tempat', 'tempat'); ?>
					<?php echo form_password('tempat'); ?>
				</div>
				<div>
					<input type="button" class="btn blue small" value="Save" name="register" id='btn_register'>
					<input type="button" class="btn blue small" value="Close" onclick="javascript:parent.jQuery.fancybox.close();">
					<div class="divide10"></div>
				</div>
				<?php if ($msg) {
					echo '<div class="error">'. $msg .'</div>';
				} ?>
				<div class="divide10"></div>
			<?php echo form_close(); ?>
		</div>
		<script src="<?php echo site_url('assets/js/jquery.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#btn_register').click(function () {
					var username = $('input[name="user_name"]').val();
					var email = $('input[name="email"]').val();
					var password = $('input[name="user_password"]').val();
					if (username && email && password) {
						var dataString = 'user_name=' + username + '&email=' + email + '&user_password=' + password;
						$.ajax({
							type: 'post',
							data: dataString,
							url: '/user/ajax_register',
							dataType: 'json',
							async: false,
							timeout: 1000,
							beforeSend: function() {
								$('#loadingDiv').html('<img src="<?php echo site_url("assets/img/ajax_loader.gif"); ?>">');
							},
							complete: function() {
								$('#loadingDiv').hide();
							},
							success: function(result) {
								if (result === true) {
									alert('Anda telah berhasil mendaftar, cek email Anda untuk aktivasi akun');
									setTimeout(function() {
										parent.jQuery.fancybox.close();
									}, 1000);
								} else {
									alert(result);
									$('input[name="user_name"]').val('');
									$('input[name="user_password"]').val('');
									$('input[name="email"]').val('');
									$('input[name="user_name"]').focus();
									return false;
								}
							}
						});
					} else {
						alert('Semua field harus diisi');
						if (!username) {
							$('input[name="user_name"]').focus();
						} else if (!email) {
							$('input[name="email"]').focus();
						} else if (!password) {
							$('input[name="user_password"]').focus();
						}
						return false;
					}
				});
			});
		</script>