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
            <h1 class="page-header">Manajemen Mikrotik</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-list-alt">
                    <strong>    Mikrotik</strong>
                    </i>
                </div>
                <div class="panel-body ">

                    <table class='table table-striped table-hover table-bordered text-center'>
                        <thead>
                            <tr>

                                <th class="text-center">ID</th>
                                <th class="text-center">Connect</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mikrotik as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->connect}}</td>
                                <td>{{ $value->username}}</td>
                                <td>{{ $value->password}}</td>
                                <td>


                                    <!-- Delete Mikrotik -->
                                    <a href="{{ URL::to('mikrotik/delete/' . $value->id) }}"
                                       <a class="btn btn-sm btn-danger" title="Delete Mikrotik">
                                            <span class="glyphicon glyphicon-trash">  Delete</span>
                                        </a>
                                        <a href="{{ URL::to('mikrotik/detail/' . $value->id) }}"
                                           <a class="btn btn-sm btn-info" title="Detail Mikrotik">
                                                <span class="glyphicon glyphicon-asterisk">  Detail </span>
                                            </a>

                                            </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <a class="btn btn-small btn-group-justified" href="{{ URL::to('mikrotik/add') }}">Add</a>
                                            @stop
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>


