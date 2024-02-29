@extends('layouts.app')

@section('content')

<div>
    <h1>Task List</h1>
    @foreach ($tasks as $task)
        <div class="task-item">
            <strong>Name: {{ $task->name }}</strong>
            <p>Description: {{ $task->description }}</p>
            <a href="{{ url("/task/{$task->id}") }}" class="view-link">View</a>
            <a href="{{ url("/task/{$task->id}/edit") }}" class="edit-link">Edit</a>
            <!-- Tombol Delete -->
            <form action="{{ url("/task/{$task->id}") }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-link" onclick="return confirm('Apakah anda yakin untuk menghapus?')">Delete</button>
            </form>
        </div>
    @endforeach
</div>

@endsection
