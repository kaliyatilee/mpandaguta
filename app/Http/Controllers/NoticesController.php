<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenoticesRequest;
use App\Http\Requests\UpdatenoticesRequest;
use App\Models\notices;
use App\Models\SelfHelp;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
		$notices = notices::get();
        return view('notices.notice', compact('notices'));
        //
    }

	public function site_index(){
		$notices = notices::get();
		$responses = SelfHelp::all();
        return view('site.notices', compact('notices','responses'));
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
		$title = request('title');
        $description = request('description');
		$notices = new notices();
		$notices->title = $title;
		$notices->description = $description;
		if($notices->save()){
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
    public function show(notices $notices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notices $notices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenoticesRequest $request, notices $notices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notices $notices)
    {
        //
    }
}
