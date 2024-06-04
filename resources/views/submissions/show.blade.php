@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Submission Details</h1>
    <p><strong>Assignment:</strong> {{ $submission->assignment->title }}</p>
    <p><strong>Answer:</strong> {{ $submission->answer }}</p>
    <a href="{{ route('submissions.edit', $submission) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('submissions.destroy', $submission) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
