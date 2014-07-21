@extends('layout.bootstrapadmin.index')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            @if (Session::has('message'))
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <h1 class="page-header">Manajemen User</h1>

            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>

            @endif
            <div class="jumbotron">
                <h2>Selamata Datang!</h2>
                <div class="">
                    Di halaman Administrator Kegiatan Mahasiswa 
                </div>

                @extends('layout.bootstrapadmin.index')
                @section('content')

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            @if (Session::has('message'))
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            <h1 class="page-header">Manajemen User</h1>

                            @if (Session::has('message'))
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            <div class="panel panel-default">
                                <div class="panel-heading ">
                                    <i class="glyphicon glyphicon-list-alt">
                                        <strong> User </strong>
                                    </i>
                                </div>
                                <div class="panel-body ">
                                    <div class="">
                                        <table class="table table-bordered">
                                            <tr class="panel-default">
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th style="text-align: center">Action</th>
                                            </tr>


                                            <!--//add user-->
                                            <a class="btn btn-small btn-group-justified" href="{{ URL::to('/users/add') }}">Add</a>

                                            <?php
                                            $i = 1;
                                            foreach ($users as $value) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $value['id']; ?></td>
                                                    <td><?php echo $value['username']; ?></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td style="text-align: center;">
                                                        <?php
                                                        if (Auth::check()) {
                                                            $user = Auth::user();
                                                            if ($user->username == $value['username']) {
                                                                ?>
                                                                <a class="btn btn-small btn-primary" title="Update" 
                                                                   href="{{ URL::to('/users/edit/' . $value->id) }}">
                                                                    <span class=" glyphicon glyphicon-edit"></span> </a>

                                                            <?php } else { ?>
                                                                <div class="btn btn-group">
                                                                    <a class="btn btn-small btn-danger" title="Delete" 
                                                                       href="{{ URL::to('/users/delete/' . $value->id) }}">
                                                                        <span class="glyphicon glyphicon-trash"></span> </a>

                                                                    <a class="btn btn-small btn-primary" title="Update" 
                                                                       href="{{ URL::to('/users/edit/' . $value->id) }}">
                                                                        <span class=" glyphicon glyphicon-edit"></span> </a>
                                                                </div>

                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                    </td>
                                                </tr>

                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </table>
                                        <div style="text-align: center">

                                            <?php echo $users->links(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @stop

                </div>
            </div>
        </div>
    </div>
    @stop