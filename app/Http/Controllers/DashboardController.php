<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;
use App\Models\dashboard;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	public function index()
    {
        $id = Auth::id();
        $greeting = $this->getGreeting();
        
        return view('dashboard', compact('greeting'));
    }
    private function getGreeting()
    {
        $currentTime = now();
        $currentHour = $currentTime->hour;

        if ($currentHour >= 5 && $currentHour < 12) {
            return 'Good morning';
        } elseif ($currentHour >= 12 && $currentHour < 18) {
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
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
    public function store(StoredashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedashboardRequest $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
