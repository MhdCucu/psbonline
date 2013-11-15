<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ADMIN PSB ONLINE</title>
    <link rel="icon" type="image/x-icon" href="<?php echo site_url('assets/img/favicon.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('assets/img/favicon.png'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/site.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap-responsive.css'); ?>">

</head>

<body>
<?php $this->view('admin/admin_menu'); ?>
    <div class="container">
        <div class="row">
            <div class="span3"><?php $this->view('admin/admin_sidebar'); ?></div>
            <div class="span9"><?php $this->view($content); ?></div>
        </div>
        <hr>

        <footer class="well">
            &copy; sitiaenilwafiroh
        </footer>

    </div>

    <?php $this->view('template/js_loader'); ?>
</body>
</html>