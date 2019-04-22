@extends('layouts.admin')
@section('content')
    <h1>Category</h1>

    <div class="col-sm-6">

        {!! Form::open(array('action' => 'AdminCategoriesController@store','method' => 'post')) !!}
        <div class="form-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Category' , ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $categroy)
                <tr>
                    <td>{{$categroy->id}}</td>
                    <td>{{$categroy->name}}</td>
                    <td>{{$categroy->created_at ? $categroy->created_at->diffforhumans() : 'No date'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection