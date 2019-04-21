@extends('layouts.admin')
@section('content')
    <h1>All Post</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img width="50" height="50" src="{{$post->image->file}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffforhumans()}}</td>
                    <td>{{$post->updated_at->diffforhumans()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection