@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Submissions</h1>
    <a href="{{ route('submissions.create') }}" class="btn btn-primary">Submit Assignment</a>
    <table class="table">
        <thead>
            <tr>
                <th>Assignment</th>
                <th>Answer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $submission)
            <tr>
                <td>{{ $submission->assignment->title }}</td>
                <td>{{ $submission->answer }}</td>
                <td>
                    <a href="{{ route('submissions.show', $submission) }}" class="btn btn-info">View</a>
                    <a href="{{ route('submissions.edit', $submission) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('submissions.destroy', $submission) }}" method="POST" style="display:inline-block;">
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
