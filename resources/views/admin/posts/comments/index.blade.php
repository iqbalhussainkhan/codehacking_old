@extends('layouts.admin')
@section('content')
    <h1>Posts Comments</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>email</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>View Post</th>
        </tr>
        </thead>
        <tbody>
        @if(count($data) > 0)
            @foreach($data as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at->diffforhumans()}}</td>
                    <td>{{$comment->updated_at->diffforhumans()}}</td>
                    <td><a href="{{asset('/post/'.$comment->post->id)}}">View post</a></td>
                    <td>
                    @if($comment->is_active == 0)
                     {!! Form::open(array('action' => ['PostCommentsController@update',$comment->id],'method' => 'PATCH')) !!}
                             {!! Form::hidden('is_active',1) !!}
                             <div class="form-group">
                                 {!! Form::submit('Approve',['class' => 'btn btn-success btn-sm']) !!}
                             </div>
                     {!! Form::close() !!}
                    @else
                        {!! Form::open(array('action' => ['PostCommentsController@update',$comment->id],'method' => 'PATCH')) !!}
                            {!! Form::hidden('is_active',0) !!}
                            <div class="form-group">
                                {!! Form::submit('Un-Approve',['class' => 'btn btn-warning btn-sm']) !!}
                            </div>
                        {!! Form::close() !!}
                    @endif
                    </td>
                    <td>
                        {!! Form::open(array('action' => ['PostCommentsController@destroy',$comment->id],'method' => 'DELETE')) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection