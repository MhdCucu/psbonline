		<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>">
		<div>
			<div id='loadingDiv'></div>
	    	<form action="" method="post" name="user_login">
	    		<div class="divide20"></div>
				<h4 style="text-align: center; font-weight: bold;">User Login</h4>
				<div class="divide40"></div>
				<div>
					<?php echo form_label('Username', 'user_name'); ?>
					<?php echo form_input('user_name'); ?>
				</div>
				<div>
					<?php echo form_label('Password', 'user_password'); ?>
					<?php echo form_password('user_password'); ?>
				</div>
				<div>
					<input type="button" class="btn blue small" value="Login" name="login" id="btn_login">
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
				$('#btn_login').click(function () {
					var username = $('input[name="user_name"]').val();
					var password = $('input[name="user_password"]').val();
					if (username && password) {
						var dataString = 'user_name=' + username + '&user_password=' + password;
						$.ajax({
							type: 'post',
							data: dataString,
							url: '/user/ajax_login',
							dataType: 'json',
							beforeSend: function() {
								$('#loadingDiv').html('<img src="<?php echo site_url("assets/img/ajax_loader.gif"); ?>">');
							},
							complete: function() {
								$('#loadingDiv').hide();
							},
							success: function(result) {
								if (result && result === true) {
									parent.location.href = '/user';
									setTimeout(function() {
										parent.jQuery.fancybox.close();
									}, 2000);
								} else {
									alert(result);
									$('input[name="user_name"]').val('');
									$('input[name="user_password"]').val('');
									$('input[name="user_name"]').focus();
									return false;
								}
							}
						});
					} else {
						alert('username dan password terisi');
						if (!username) {
							$('input[name="user_name"]').focus();
						} else if (!password) {
							$('input[name="user_password"]').focus();
						}
						return false;
					}
				});
			});
		</script>