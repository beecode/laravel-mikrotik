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
                    <i class="glyphicon glyphicon-th-list">
                        <strong>    Detail Mikrotik</strong>
                    </i>
                </div>
                <div class="panel-body">
                    <table class='table  table-hover table-bordered'>
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="alert alert-info">
                                <td>ID</td>
                                <td>{{ $mikrotik->id}}</td>
                            </tr>
                            <tr  class="alert alert-success">
                                <td>Connect</td>
                                <td>{{ $mikrotik->connect}}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $mikrotik->username}}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>{{ $mikrotik->password}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ URL::to('mikrotik')}}"
                       class="btn btn-primary">
                        <i class="glyphicon glyphicon-backward"></i>
                        Back
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
@stop

