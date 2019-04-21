@extends('layouts.admin')
@section('content')
    <h1>Edit Post</h1>

    {!! Form::model($post,['method' => 'PATCH','action' =>[ 'AdminPostController@update',$post->id],'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title' ,null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category_id',$categories,null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Photo') !!}
        {!! Form::file('file',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description') !!}
        {!! Form::textarea('body',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update post',['class' => 'btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}

    @include('errors.error')
@endsection