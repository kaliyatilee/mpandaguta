<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Models\SelfHelp;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$events = Events::get();
        return view('events.events', compact('events'));
        //
    }

	public function site_index(){
		$events = Events::get();
		$responses = SelfHelp::all();
        return view('site.events', compact('events','responses'));
		
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
		$date = request('date');
		$events = new Events();
		$events->title = $title;
		$events->description = $description;
		$events->date = $date;
		if($events->save()){
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
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }
}
