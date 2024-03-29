@extends('layouts.main')

@section('title', 'Create Post')

@section('content')
    <div class="container">
    <h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST" class="w-50 mx-auto">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="3" required>{{ old('body') }}</textarea>
    </div>
    <div class="form-group mb-3">
        <label for="user_id">Publisher</label>
        <select class="form-control" id="user_id" name="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection
