<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">PSB Administration</a>
            
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="<?php echo site_url('admin/admuser'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('admin/adminformasi'); ?>">Informasi</a></li>
                    <li><a href="<?php echo site_url('admin/admjadwal'); ?>">Jadwal</a></li>
                    <li><a href="<?php echo site_url('admin/admaturan'); ?>">Aturan</a></li>
                    <li><a href="<?php echo site_url('admin/admpendaftar'); ?>">Pendaftar</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('admin/admuser/add'); ?>">New User</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo site_url('admin/admuser/manage'); ?>">Manage Users</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Roles <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('admin/admrole/add'); ?>">New Role</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('admin/admrole/manage'); ?>">Manage Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="btn-group pull-right">
                <a class="btn" href="<?php echo site_url('admin/admuser/profile/'); ?>"><i class="icon-user"></i> <?php echo ucwords($this->session->userdata('adm_username')); ?></a>
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/admuser/profile/'); ?>">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('admin/admuser/logout'); ?>">Logout</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>