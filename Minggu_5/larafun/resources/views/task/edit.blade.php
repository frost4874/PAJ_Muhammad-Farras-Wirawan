@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Task</h1>
    <form action="{{ url('/task/' . $tasks->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Penting untuk operasi update -->

        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $tasks->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $tasks->description }}</textarea>
        </div>
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $tasks->id}}" >
        <button type="submit" class="btn btn-primary">Edit Task</button>
        <a href="{{ url('/task') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
