@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Submission</h1>
    <form action="{{ route('submissions.update', $submission) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="assignment_id">Assignment</label>
            <select name="assignment_id" id="assignment_id" class="form-control">
                @foreach($assignments as $assignment)
                <option value="{{ $assignment->id }}" {{ $submission->assignment_id == $assignment->id ? 'selected' : '' }}>{{ $assignment->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control" rows="5">{{ $submission->answer }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
