@extends('layouts.admin')
@section('content')

    <h1>Edit Post</h1>

    <div class="col-sm-3">
        <img src="{{$post->image->file}}" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-6">

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
            {!! Form::submit('Update post',['class' => 'btn btn-warning col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(array('action' => ['AdminPostController@destroy',$post->id],'method' => 'DELETE')) !!}
        <div class="form-group">
            {!! Form::submit('Delete Post' ,['class' => 'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

    </div>



    @include('errors.error')
@endsection