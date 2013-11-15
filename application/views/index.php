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

    <?php $this->view('template/css_loader'); ?>
</head>

<body class="boxedlayout blue bg1">

    <section class="boxed-wrapper">
        <?php $this->view('template/responsive_menu'); ?>
        <header class="header">
            <?php (isset($user_social)) ? $this->view($user_social) : $this->view('template/social'); ?>    
            <?php (isset($user_header)) ? $this->view($user_header) : $this->view('template/header'); ?>
        </header>

        <section class="maincontent">
            <?php $this->view($content); ?>
        </section>

        <footer>
            <?php $this->view('template/footer'); ?>
        </footer>
    </section>

    <?php $this->view('template/js_loader'); ?>
</body>
</html>