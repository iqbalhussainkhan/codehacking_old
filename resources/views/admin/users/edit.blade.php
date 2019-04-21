@extends('layouts.admin')
@section('content')
    <h1>Edit User</h1>

    <div class="col-sm-3">
        <img src="{{asset($user->image ? $user->image->file : '/images/noimage.jpg')}}" alt="user image" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-6">
        {!! Form::model($user,array('method' => 'PATCH','action' => ['AdminUsersController@update',$user->id], 'files' => true)) !!}
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
            {!! Form::select('role_id',$roles,null,['class' => 'form-control']) !!}
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
            {!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>
        {!! Form::close() !!}


        {!! Form::open(array('action' => ['AdminUsersController@destroy',$user->id],'method' => 'DELETE')) !!}
            <div class="form-group">
                {!! Form::submit('Delete User',['class' => 'btn btn-danger col-sm-6']) !!}
            </div>
        {!! Form::close() !!}

    </div>


    <div class="col-sm-12">
        @include('errors/error')
    </div>

@endsection