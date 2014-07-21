<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <samp class="fa fa-search"></samp>&thinsp;
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Home</a>
            </li>

            <li>
                <a href="{{URL::to('ipaddr')}}"><i class="fa fa-dashboard fa-fw"></i> Address List</a>
            </li>

            <li>
                <a href="{{URL::to('mikrotik')}}"><i class="fa fa-dashboard fa-fw"></i> Manajemen Mikrotik</a>
            </li>

            <li>
                <a href="{{URL::to('rules')}}"><i class="fa fa-dashboard fa-fw"></i> Manajemen Rules</a>
            </li>

            <li>
                <a href="{{URL::to('active')}}"><i class="fa fa-dashboard fa-fw"></i> Hotspot Active</a>
            </li>
            
            <li>
                <a href="{{URL::to('users')}}"><i class="fa fa-dashboard fa-fw"></i> Manajemen User</a>
            </li>

<!--            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manajemen User <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo URL::to('/users/add'); ?>">Add User</a>
                    </li>
                    <li>
                        <a href="<?php echo URL::to('/users/view'); ?>">View User</a>
                    </li>
                </ul>
            </li>-->

        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>