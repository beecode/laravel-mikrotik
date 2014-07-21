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
            <h1 class="page-header">Hotspot Active</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-th-list"></i>
                    <strong>Detail Hotspot Active</strong>
                </div>
                <div class="panel-body">

                    @foreach($ipaddr as $ip)

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
                                <td>{{ $ip['.id']}}</td>
                            </tr>
                            <tr  class="alert alert-success">
                                <td>Server</td>
                                <td>{{ $ip['server']}}</td>
                            </tr>
                            <tr  class="alert alert-success">
                                <td>User</td>
                                <td>{{ $ip['user']}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $ip['address']}}</td>
                            </tr>
                            <tr>
                                <td>Mac Address</td>
                                <td>{{ $ip['mac-address']}}</td>
                            </tr>
                            <tr>
                                <td>Login By</td>
                                <td>{{ $ip['login-by']}}</td>
                            </tr>
                            <tr>
                                <td>Uptime</td>
                                <td>{{ $ip['uptime']}}</td>
                            </tr>
                            <tr>
                                <td>Keep Alive Timeout</td>
                                <td>{{ $ip['keepalive-timeout']}}</td>
                            </tr>
                            <tr>
                                <td>Radius</td>
                                <td>{{ $ip['radius']}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{Form::close()}}
                    @endforeach
                    <a href="{{ URL::to('active')}}"
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