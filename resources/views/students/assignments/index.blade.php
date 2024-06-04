@extends('layouts.main')

@section('content')
<div class="container">
    <h1>All Assignments</h1>
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
                    <a href="{{ route('submissions.create') }}?assignment_id={{ $assignment->id }}" class="btn btn-primary">Submit Answer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
