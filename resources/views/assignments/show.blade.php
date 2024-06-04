@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $assignment->title }}</h1>
    <p><strong>Description:</strong> {{ $assignment->description }}</p>
    <p><strong>Due Date:</strong> {{ $assignment->due_date }}</p>
    <a href="{{ route('assignments.edit', $assignment) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('assignments.destroy', $assignment) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
