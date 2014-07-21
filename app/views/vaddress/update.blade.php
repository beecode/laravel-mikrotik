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
            <h1 class="page-header">Dashboard</h1>
            <div class="panel panel-default">
                <div class="panel-heading text-center">Update New firewall</div>
                <div class="panel-body">
                </div>
                <form class="form-horizontal" 
                      method="post" 
                      action="{{ URL ::to('ipaddr/updateipaddr/')}}/{{ $ipaddr[0]['.id']}}">

                    <div class="form-group">
                        <label for="address" 
                               class="col-lg-4 control-label">
                            Address
                        </label>
                        <div class="col-lg-4">
                            <input type="text" name="address" value="<?php echo $ipaddr[0]['address'] ?>" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="netmask" 
                               class="col-lg-4 control-label">
                            Netmask</label>
                        <div class="col-lg-4">
                            <input type="text" name="network" value="<?php echo $ipaddr[0]['network'] ?>" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="interface" 
                               class="col-lg-4 control-label">
                            Interface</label>
                        <div class="col-lg-4">
                            <input type="text" name="interface" value="<?php echo $ipaddr[0]['interface'] ?>"
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-10">
                            <button type="submit" 
                                    class="btn btn-default">
                                Save
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop