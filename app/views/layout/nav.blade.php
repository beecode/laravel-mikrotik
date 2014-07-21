<div class="container">
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li class="btnbtn-navbar ">
                <a class="glyphicon glyphicon-home  " href="{{URL::to('ipaddr')}}"> Home </a>
            </li>

            <li class="btnbtn-navbar">
                <a class="glyphicon glyphicon-plus-sign " href="{{ URL::to('ipaddr/mikrotiknew') }}"> Add </a>
            </li>

            <li class="btnbtn-navbar">
                <a class="glyphicon glyphicon-download-alt " href="{{ URL::to('ipaddr/filter')}}"> Rools </a>
            </li>

            <li class="btnbtn-navbar">
                <a class="glyphicon glyphicon-asterisk " href="{{URL::to('ipaddr/ipaddr')}}"> Ipaddress </a>
            </li>

            <li class="btnbtn-navbar">
                <a class="glyphicon glyphicon-asterisk " href="{{URL::to('bands')}}"> Database</a>
            </li>
           

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> User <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/users/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add User</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/users/view'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
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

    </nav>
</div>
