<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class destinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $destinations = destination::latest();

        if (!empty($request->get('keyword'))) {
            $destinations = $destinations->where('Name', 'like', '%' . $request->get('keyword') . '%');
        }
        $destinations = $destinations->paginate(6);
        return view('admin.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'Name' => 'required',
            'District' => 'required',
            'Duration' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Image' => 'required|max:10000',
            // Ensure the file is an image
            'Number' => 'required',
        ]);
        $destination = new Destination();
        // Store the uploaded image in the specified directory
        $image = $request->file('Image');

        $imageName = time() . '_' . $image->getClientOriginalName();

        $imagePath = $image->storeAs('public/destination', $imageName);


        // Create a new destination instance with the form data

        $destination->Name = $request->input('Name');

        $destination->District = $request->input('District');

        $destination->Duration = $request->input('Duration');
        $destination->Price = $request->input('Price');
        $destination->Description = nl2br($request->input('Description') );
        $destination->image = $imagePath; // Assign the image path
        $destination->number = $request->input('Number');

        $destination->save(); // Save the data to the database
        //dd($destination);
        return redirect()->route('destination.index')->with('success', 'Destination stored successfully');
    }





    /**
     * Display the specified resource.
     */
    public function show(destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = destination::findorfail($id);
        return view('admin.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required',
            'District' => 'required',
            'Duration' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Image' => 'required|max:10000',
            // Ensure the file is an image
            'Number' => 'required',
        ]);

        $destination = destination::find($id);
        $image = $request->file('Image');

        $imageName = time() . '_' . $image->getClientOriginalName();

        $imagePath = $image->storeAs('public/destination', $imageName);
        $destination->name = $request->input('Name');
        $destination->District = $request->input('District');
        $destination->Duration = $request->input('Duration');
        $destination->Price = $request->input('Price');
        $destination->Description = $request->input('Description');
        $destination->image = $imagePath; // Assign the image path
        $destination->number = $request->input('Number');
        $destination->save(); // Save the data to the database
        return redirect()->route('destination.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = destination::findorfail($id);
        $destination->delete();

        return redirect()->route('destination.index')
            ->with('success', 'Destination deleted successfully');
    }


}
