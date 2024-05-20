<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretestimonialsRequest;
use App\Http\Requests\UpdatetestimonialsRequest;
use App\Models\testimonials;
use App\Models\SelfHelp;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$testimonials = testimonials::get();
        return view('testimonies.testimonies', compact('testimonials'));
        //
        //
    } 
	public function site_index(){
		$testimonials = testimonials::get();
		$responses = SelfHelp::all();
        return view('site.testimonials', compact('testimonials','responses'));
		
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
		$message = request('message');
        $fullname = request('fullname');
		$testimonials = new testimonials();
		$testimonials->message = $message;
		$testimonials->fullname = $fullname;
		if($testimonials->save()){
			return redirect()->back()->with('success', ' successfully saved');
		}
		else{
			return redirect()->back()->with('error', ' Error saving the record');
		}
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetestimonialsRequest $request, testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimonials $testimonials)
    {
        //
    }
}
