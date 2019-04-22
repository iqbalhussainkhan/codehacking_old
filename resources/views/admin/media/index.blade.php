@extends('layouts.admin')
@section('content')
    <h1>All Media</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @if($data)
            @foreach($data as $media)
                <tr>
                    <td>{{$media->id}}</td>
                    <td>
                        <img height="50" width="50" src="{{$media->file  ? $media->file : '/images/noimage.jpg'}}"></td>
                    <td>{{$media->created_at->diffForHumans()}}</td>
                    <td>
                         {!! Form::open(array('action' => ['AdminMediaController@destroy',$media->id],'method' => 'DELETE')) !!}
                                 <div class="form-group">
                                     {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                                 </div>
                         {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection