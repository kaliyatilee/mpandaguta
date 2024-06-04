@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Submit Assignment</h1>
    <form action="{{ route('submissions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="assignment_id">Assignment</label>
            <select name="assignment_id" id="assignment_id" class="form-control">
                @foreach($assignments as $assignment)
                <option value="{{ $assignment->id }}">{{ $assignment->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
