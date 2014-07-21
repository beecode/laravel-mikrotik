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
                <div class="panel-heading text-center">
                    Detail IP Address
                </div>

                <table class='table table-striped table-hover table-bordered text-center'>

                    <tbody>

                        @foreach($ipaddr as $ip)

                        {{ Form::open(array('url' => 'ipaddr/' , 'class' => 'pull-right')) }}
                    <pre> .id               = {{ $ip['.id'] }}</pre>
                    <pre> Address           = {{ $ip['address'] }}</pre>
                    <pre> Network           = {{ $ip['network'] }}</pre>
                    <pre> Interface         = {{ $ip['interface'] }}</pre>
                    <pre> Actual-Interface  = {{ $ip['actual-interface'] }}</pre>
                    <pre> Invalid           = {{ $ip['invalid'] }}</pre>
                    <pre> Dynamic           = {{ $ip['dynamic'] }}</pre>


                    @stop
                    {{Form::close()}}
                    @endforeach

            </div>
        </div>
    </div>
</div>