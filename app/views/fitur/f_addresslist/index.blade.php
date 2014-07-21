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
            <h1 class="page-header">Address List</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-list-alt">
                        <strong>Firewall Address List</strong>
                    </i>
                </div>
                <div class="panel-body ">

                    <?php // print_r($ipaddr); ?>

                    <table class='table table-striped table-hover table-bordered text-center'>
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">List</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Disable</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ipaddr as $ip)
                            <tr>
                                {{ Form::open(array('url' => 'ipaddr/' , 'class' => 'pull-right')) }}
                                <td>{{ $ip['.id'] }}</td>
                                <td>{{ $ip['list'] }}</td>
                                <td>{{ $ip['address'] }}</td>
                                <td>{{ $ip['disabled'] }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ URL ::to('ipaddr/deletelist/')}}/{{ $ip['.id'] }}"
                                           <a class="btn btn-sm btn-danger" title="Delete">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>

                                            <a href="{{ URL ::to('ipaddr/disablelist/')}}/{{ $ip['.id'] }}"
                                               <a class="btn btn-sm btn-warning" title="Disable">
                                                    <span class="glyphicon glyphicon-upload"></span>
                                                </a>

                                                <a href="{{URL::to('ipaddr/enablelist/')}}/{{$ip['.id']}}"
                                                   <a class="btn btn-sm btn-warning" title="Enable">
                                                        <span class="glyphicon glyphicon-download"></span>
                                                    </a>

                                                    <a href="{{ URL::to('ipaddr/detaillist/')}}/{{$ip['.id']}}"
                                                       <a class="btn btn-sm btn-info" title="Detail">
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                        </a>

                                                        {{Form::close()}}
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        </table>

                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        @stop