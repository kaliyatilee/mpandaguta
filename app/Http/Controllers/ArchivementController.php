<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArchivementRequest;
use App\Http\Requests\UpdateArchivementRequest;
use App\Models\Archivement;
use Illuminate\Http\Request;
use App\Models\SelfHelp;

class ArchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$archivements = Archivement::get();
        return view('archivements.list', compact('archivements'));
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
		// Validate the request
		$request->validate([
			'title' => 'required',
			'description' => 'required',
			'date' => 'required|date',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);
	
		// Handle the image upload
		$imageName = time().'.'.$request->image->extension();  
		$request->image->move(public_path('images'), $imageName);
		$imageUrl = '/images/' . $imageName; // Assuming images are stored in the public/images directory
	
		// Create a new Archivement instance and store data
		$archivement = new Archivement();
		$archivement->title = $request->title;
		$archivement->description = $request->description;
		$archivement->date = $request->date;
		$archivement->category=$request->category;
		$archivement->img_url = $imageUrl; // Assuming your database table has a column named 'image_url'
		
		// Save the Archivement instance
		if ($archivement->save()) {
			return redirect()->back()->with('success', 'Record successfully saved');
		} else {
			return redirect()->back()->with('error', 'Error saving the record');
		}
	}

	public function site_index(){
		$archivement = Archivement::get();
		$responses = SelfHelp::all();
        return view('site.archivements', compact('archivement','responses'));
		
	}
	
    /**
     * Display the specified resource.
     */
    public function show(Archivement $archivement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archivement $archivement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArchivementRequest $request, Archivement $archivement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archivement $archivement)
    {
        //
    }
}
