
@extends('layouts.main')

@section('title','index page title')

@section('content')
<table class="table table-dark text-center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td><a href="{{ route('users.show', ['id'=>$user['id']], false) }}">{{ $user['name'] }}</a></td>
            <td>{{ $user['email'] }}</td>
            <td>
                <a href="{{ route('users.edit', ['id'=>$user['id']], false) }}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection