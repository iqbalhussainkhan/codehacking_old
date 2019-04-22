@extends('layouts.blogPost')
@section('content')

    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffforhumans()}}</p>

    <hr>

    <img class="img-responsive" src="{{$post->image->file}}" alt="Post image">

    <hr>

    <!-- Post Content -->
    <p>{{$post->body}}</p>
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    @include('messages.flash_message')
    <div class="well">
        <h4>Leave a Comment:</h4>
        {!! Form::open(array('action' => 'PostCommentsController@store','method' => 'post')) !!}
                    {!! Form::hidden('post_id',$post->id) !!}
                <div class="form-group">
                    {!! Form::textarea('body',null,['class' => 'form-control','rows' => 3]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Post Comment',['class' => 'btn btn-primary']) !!}
                </div>
        {!! Form::close() !!}
    </div>

    <hr>


    <!-- Posted Comments -->
    @if(Auth::check())
        @if(count($data) > 0)
            @foreach($data as $comment)
        <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img height="66" width="66" class="media-object" src="{{$comment->photo}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ucfirst($comment->author)}}
                            <small>{{$comment->created_at->diffforhumans()}}</small>
                        </h4>
                        {{$comment->body}}
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        @endif
    @endif

@endsection