@extends('layouts.admin')
@section('content')
    <h1>Add User</h1>
{{--     {!! Form::open(array('url' => 'AdminUsersController@store' , 'method' => 'posts', 'files' => true))!!}--}}
        {!! Form::open(array('action' => 'AdminUsersController@store', 'files' => true)) !!}
             <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name' ,null, ['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::email('email',null,['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('role_id', 'Role:') !!}
                 {!! Form::select('role_id',['' => 'select Role']+$roles,null,['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('is_active', 'Status') !!}
                 {!! Form::select('is_active',['1' => 'Active', '0' => 'Not Active'],null,['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('password', 'Password:') !!}
                 {!! Form::password('password',['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('file', 'Image:') !!}
                 {!! Form::file('file',null,['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::submit('Add User', ['class' => 'btn btn-primary']) !!}
             </div>
     {!! Form::close() !!}

    @include('errors/error')
@endsection