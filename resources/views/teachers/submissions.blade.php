@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Submitted Assignments</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Assignment</th>
                <th>Student</th>
                <th>Answer</th>
                <th>Submitted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $submission)
            <tr>
                <td>{{ $submission->assignment->title }}</td>
                <td>{{ $submission->student->name }}</td>
                <td>{{ $submission->answer }}</td>
                <td>{{ $submission->created_at }}</td>
                <td>
                    <a href="{{ route('submissions.show', $submission) }}" class="btn btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
