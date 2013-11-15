<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PSB ONLINE</title>
    <link rel="icon" type="image/x-icon" href="<?php echo site_url('assets/img/favicon.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('assets/img/favicon.png'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/site.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>">
</head>
<body class="blue">
	<div class="container">
	    <div class="login well">
	    	<?php echo form_open('admin/admuser/login'); ?>
				<div class="centerize"><h2>User Login</h2></div>
				<div>
					<?php echo form_label('Username', 'user_name'); ?>
					<?php echo form_input('user_name'); ?>
				</div>
				<div>
					<?php echo form_label('Password', 'user_password'); ?>
					<?php echo form_password('user_password'); ?>
				</div>
				<div>
					<input type="submit" class="btn maincolor small" value="Login" name="login">
					<input type="button" class="btn maincolor small" value="Homepage" onclick="javascript: location.href = '<?php echo site_url(); ?>'">
					<div class="divide10"></div>
				</div>
				<?php if ($msg) {
					echo '<div class="error">'. $msg .'</div>';
				} ?>
				<div class="divide10"></div>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>