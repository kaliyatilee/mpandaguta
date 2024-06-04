@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Assignments</h1>
    <a href="{{ route('assignments.create') }}" class="btn btn-primary">Create Assignment</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
            <tr>
                <td>{{ $assignment->title }}</td>
                <td>{{ $assignment->description }}</td>
                <td>{{ $assignment->due_date }}</td>
                <td>
                    <a href="{{ route('assignments.show', $assignment) }}" class="btn btn-info">View</a>
                    <a href="{{ route('assignments.edit', $assignment) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('assignments.destroy', $assignment) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
