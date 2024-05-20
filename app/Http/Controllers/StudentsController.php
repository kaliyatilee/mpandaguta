<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
		$students = students::get();
        return view('students.student', compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$firstname = request('firstname');
        $lastname = request('lastname');
		$birth_certificate_number = request('birth_certificate_number');
        $class = request('class');
		$grade = request('grade');
        $guardian_phone = request('guardian_phone');
		$guardian_name = request('guardian_name');
        $relationship = request('relationship');
		$home_address = request('home_address');
        $gender = request('gender');
		$title = request('title');
        $description = request('description');


		$students = new students();
		$students->firstname = $firstname;
		$students->lastname = $lastname;
		$students->birth_certificate_number = $birth_certificate_number;
		$students->class = $class;
		$students->grade = $grade;
		$students->guardian_phone = $guardian_phone;
		$students->guardian_name = $guardian_name;
		$students->relationship = $relationship;

		$students->home_address = $home_address;
		$students->gender = $gender;
		$students->relationship = $relationship;

		if($students->save()){
			return redirect()->back()->with('success', ' successfully saved');
		}
		else{
			return redirect()->back()->with('error', ' Error saving the record');
		}
        //
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentsRequest $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(students $students)
    {
        //
    }
}
