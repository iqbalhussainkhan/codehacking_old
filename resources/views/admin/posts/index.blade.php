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
            @if($data)
                @foreach($data as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img width="50" height="50" src="{{$post->image->file}}" alt=""></td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category->name}}</td>
                        <td><a href="{{asset('/post/'.$post->id)}}">{{$post->title}}</a></td>
                        <td>{{str_limit($post->body,30)}}</td>
                        <td>{{$post->created_at->diffforhumans()}}</td>
                        <td>{{$post->updated_at->diffforhumans()}}</td>
                        <td><a href={{asset('/admin/posts/'.$post->id.'/edit')}}>Edit Post</a></td>
                        <td><a href={{asset('/posts/comments/'.$post->id)}}>Post Comments</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection