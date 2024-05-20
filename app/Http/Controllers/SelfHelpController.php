<?php

namespace App\Http\Controllers;

use App\Models\SelfHelp;
use Illuminate\Http\Request;

class SelfHelpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$responses = SelfHelp::all();
        return view('site.index', ['responses' => $responses]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
		$response = SelfHelp::where('id', $id)->first();
        
        if ($response) {
            return response()->json(['response' => $response->response]);
        } else {
            return response()->json(['response' => 'Invalid Option'], 404);
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SelfHelp $selfHelp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SelfHelp $selfHelp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SelfHelp $selfHelp)
    {
        //
    }
}
