<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to('/users'); ?>"><i class="glyphicon glyphicon-home"></i> Kegiatan Mahasiswa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> User <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/users/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add User</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/users/view'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-asterisk"></i> Kegiatan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/kegiatan/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Kegiatan</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/kegiatan/view'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Profile <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/profile/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/profile/view'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i> 
                    <?php
                    if (Auth::check()) {
                        $user = Auth::user();
                        echo $user->username;
                    }
                    ?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>