@extends('layout.index') 

@section('content')
<div class="col-md-5">    
    {{Form::open(array('url' => '/form/add','method' =>'POST')) }}

    <div class="form-group">
        {{Form::label('username', 'Username')}}
        {{ Form::text('Home[user]',null,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email Address')}}
        {{Form::text('Home[email]',null,['class'=>'form-control','placeholder'=>'youremail@domain.com'])}} 
    </div>

    
    {{Form::submit('TEKAN SAYA',['class'=>'btn btn-warning btn-sm']);}}                  
    
    {{ Form::close() }}

    @if(isset($data))
    @foreach ($data as $user)
    {{ $user }}
    @endforeach
    @endif
</div>
@stop()