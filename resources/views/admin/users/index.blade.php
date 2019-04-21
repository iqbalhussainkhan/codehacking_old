@extends('layouts.admin')
@section('content')
    <h1>All Registered Users</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created Time</th>
            <th>Updated Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>
                    <img height="50" width="50" src="{{$user->image  ? $user->image->file : '/images/noimage.jpg'}}"></td>
                <td><a href="{{asset('/admin/users/'.$user->id.'/edit')}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                    <label class="{{$user->is_active == 1 ? 'user_active' : 'user_not_active'}}">
                        {{$user->is_active == 1 ? 'Active' : 'Not Active'}}
                    </label>
                </td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection