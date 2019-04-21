@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>

     {!! Form::open(array('action' => 'AdminPostController@store','method' => 'POST','files' => true)) !!}
             <div class="form-group">
                 {!! Form::label('title', 'Title:') !!}
                 {!! Form::text('title' ,null,['class' => 'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('category', 'Category') !!}
                 {!! Form::select('category_id',['' => 'Options'] + $categories,null,['class' => 'form-control']) !!}
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
                 {!! Form::submit('App post',['class' => 'btn btn-primary']) !!}
             </div>
     {!! Form::close() !!}

    @include('errors.error')
@endsection