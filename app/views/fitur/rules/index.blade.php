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
                    <i class="glyphicon glyphicon-list-alt">
                        <strong> Rules </strong>
                    </i>
                </div>
                <div class="panel-body ">

                    <table class='table table-striped table-hover table-bordered text-center'>
                        <thead>
                            <tr>

                                <th class="text-center">ID</th>
                                <th class="text-center">Chain</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Protocol</th>
                                <th class="text-center">Address List</th>
                                <th class="text-center">Address List Timeout</th>
                                <th class="text-center">Disable</th>
                                <th class="text-center">Comment</th>
                                <th class="text-center">Actions</th>>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rules as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->chain}}</td>
                                <td>{{ $value->action }}</td>
                                <td>{{ $value->protocol }}</td>
                                <td>{{ $value->addresslist }}</td>
                                <td>{{ $value->addresslisttimeout }}</td>
                                <td>{{ $value->disable }}</td>
                                <td>{{ $value->comment }}</td>
                                <td>


                                    <div class="btn-group">
                                        <!-- delete band GET /bands/{id} -->
                                        <a href="{{ URL::to('rules/delete/' . $value->id) }}"
                                           <a class="btn btn-sm btn-danger" title="Delete">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>

                                            <!-- edit band GET /bands/{id}/edit -->
                                            <a href="{{ URL::to('rules/edit/'. $value->id) }}"
                                               <a class="btn btn-sm btn-primary" title="Update">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>

                                                <!-- details band GET /bands/{id} -->
                                                <a href="{{ URL::to('rules/detail/' . $value->id) }}"
                                                   <a class="btn btn-sm btn-info" title="Detail">
                                                        <span class="glyphicon glyphicon-asterisk"></span>
                                                    </a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <a class="btn btn-small btn-group-justified" 
                                                       href="{{ URL::to('rules/add')}}">Add</a>
                                                    </table>

                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @stop