<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpensesRequest;
use App\Http\Requests\UpdateExpensesRequest;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$expenses  = Expenses::all();
		$data["expenses"] = $expenses;

		return view('expenses.list',$data);

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
		$validator = validator()->make($request->all(), [
			"category" => "required|string",
			"currency" => "required|string",
			"description" => "required|string",
			"amount" => "required|numeric",
			"date" =>"date"
		]);
		
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput()->with('error', 'The given data was invalid.');
		}
		$data = $validator->validated();
		$expenses = new Expenses();
        $expenses->create($data);

		return redirect()->back()->with('success', ' successfully saved');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpensesRequest $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
