@extends('layout.bootstraplogin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="row">
    <div class="col-xs-6 col-sm-3"></div>
    <div class="col-xs-6 col-sm-8">
        <!--<div class="panel-body"></div>-->
        <br/>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-plus"></i> 
                    <b>Form Login Administrator</b>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo URL::to("/login/proses"); ?>" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control " placeholder="john@doe.com">
                                <p style="color: red"> {{ $errors->first('email') }} </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <p style="color: red"> {{ $errors->first('password') }} </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-log-in"></i> Login</button>
                                <button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop