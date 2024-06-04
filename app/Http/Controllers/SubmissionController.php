<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::where('student_id', auth()->id())->get();
        return view('submissions.index', compact('submissions'));
    }

    public function create()
    {
        $assignments = Assignment::all();
        return view('submissions.create', compact('assignments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'answer' => 'required',
        ]);

        Submission::create([
            'assignment_id' => $request->assignment_id,
            'student_id' => auth()->id(),
            'answer' => $request->answer,
        ]);

        return redirect()->route('submissions.index');
    }

    public function show(Submission $submission)
    {
        return view('submissions.show', compact('submission'));
    }

    public function edit(Submission $submission)
    {
        $assignments = Assignment::all();
        return view('submissions.edit', compact('submission', 'assignments'));
    }

    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'answer' => 'required',
        ]);

        $submission->update($request->all());

        return redirect()->route('submissions.index');
    }

    public function destroy(Submission $submission)
    {
        $submission->delete();

        return redirect()->route('submissions.index');
    }

	public function teacherSubmissions()
    {
        // Get the authenticated teacher
        $teacher = Auth::user();

        // Get submissions for assignments created by the teacher
        $submissions = Submission::whereHas('assignment', function ($query) use ($teacher) {
            $query->where('teacher_id', $teacher->id);
        })->get();

        return view('teachers.submissions', compact('submissions'));
    }
}
