@extends('layouts.admin')
@section('content')
    <h1>Category</h1>

    <div class="col-sm-6">

        {!! Form::model($category,array('action' => ['AdminCategoriesController@update',$category->id],'method' => 'PATCH')) !!}
        <div class="form-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name',null,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Category' , ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

         {!! Form::open(array('action' => ['AdminCategoriesController@destroy',$category->id],'method' => 'DELETE')) !!}
             <div class="form-group">
                 {!! Form::submit('Delete Category',['class' => 'btn btn-danger col-sm-6']) !!}
             </div>
         {!! Form::close() !!}

    </div>

    <div class="col-sm-6">

    </div>
@endsection