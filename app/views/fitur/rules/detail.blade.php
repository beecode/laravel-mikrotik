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
            <h1 class="page-header">Manajemen Rules</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-th-list"></i>
                    <strong>Detail Rules</strong>
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
                                <td>{{ $rules->id}}</td>
                            </tr>
                            <tr  class="alert alert-success">
                                <td>Chain</td>
                                <td>{{ $rules->chain}}</td>
                            </tr>
                            <tr>
                                <td>Action</td>
                                <td>{{ $rules->action}}</td>
                            </tr>
                            <tr>
                                <td>Protocol</td>
                                <td>{{ $rules->protocol}}</td>
                            </tr>
                            <tr>
                                <td>Addresslist</td>
                                <td>{{ $rules->addresslist}}</td>
                            </tr>
                            <tr>
                                <td>Addresslisttimeout</td>
                                <td>{{ $rules->addresslisttimeout}}</td>
                            </tr>
                            <tr>
                                <td>disable</td>
                                <td>{{ $rules->disable}}</td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td>{{ $rules->comment}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ URL::to('rules')}}"
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
