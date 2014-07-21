@extends('layout.index')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading text-center">
        IP Address
    </div>
    <div class="panel-body ">

        <?php // print_r($ipaddr); ?>

        <table class='table table-striped table-hover table-bordered text-center'>
            <thead>
                <tr>
                    <th class="text-center"> .Id </th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Network</th>
                    <th class="text-center">Interface</th>
                    <th class="text-center">Actual-Interface</th>
                    <th class="text-center">Disable</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ipaddr as $ip)
                <tr>
                    {{ Form::open(array('url' => 'ipaddr/' , 'class' => 'pull-right')) }}
                    <td>{{ $ip['.id'] }}</td>
                    <td>{{ $ip['address'] }}</td>
                    <td>{{ $ip['network'] }}</td>
                    <td>{{ $ip['interface'] }}</td>
                    <td>{{ $ip['actual-interface'] }}</td>
                    <td>{{ $ip['disabled'] }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL ::to('ipaddr/deleteipaddr/')}}/{{ $ip['.id'] }}"
                               <a class="btn btn-sm btn-danger" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                <a href="{{ URL ::to('ipaddr/updateipaddr/')}}/{{$ip['.id']}}"
                                   <a class="btn btn-sm btn-primary" title="Update">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ URL ::to('ipaddr/disableipaddr/')}}/{{ $ip['.id'] }}"
                                       <a class="btn btn-sm btn-warning" title="Disable">
                                            <span class="glyphicon glyphicon-upload"></span>
                                        </a>

                                        <a href="{{URL::to('ipaddr/enableipaddr/')}}/{{$ip['.id']}}"
                                           <a class="btn btn-sm btn-warning" title="Enable">
                                                <span class="glyphicon glyphicon-download"></span>
                                            </a>

                                            <a href="{{ URL::to('ipaddr/detailipaddr/')}}/{{$ip['.id']}}"
                                               <a class="btn btn-sm btn-info" title="Detail" >
                                                    <span class="glyphicon glyphicon-asterisk"></span>
                                                </a>

                                                </div>
                                                {{Form::close()}}
                                                </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                </table>

                                                <button class="btn-group">
                                                    <a href="{{ URL::to('ipaddr/addipaddr') }}"
                                                       class="btn btn-sm btn-group-justified ">
                                                        <span class="glyphicon glyphicon-plus"> Add Address</span>
                                                    </a>
                                                </button>


                                                </div>
                                                </div>

                                                @stop
