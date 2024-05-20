<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\Income;
use App\Models\students;
use Illuminate\Http\Request;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$income  = Income::all();
		$data["income"] = $income;

		return view('income.list',$data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$students  = students::all();
		$data['students'] = $students;

		return view('income.add',$data);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$validator = validator()->make($request->all(), [
			"category" => "required|string",
			"currency" => "required|string",
			"student_name" => "required",
			"amount" => "required|numeric",
			"class" =>"numeric"
		]);
		
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput()->with('error', 'The given data was invalid.');
		}
		$data = $validator->validated();
		$income = new Income();
        $income->create($data);

		return redirect()->back()->with('success', ' successfully saved');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncomeRequest $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        //
    }
}
