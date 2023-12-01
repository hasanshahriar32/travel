<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\DestinationImage;
use Illuminate\Http\Request;

class DestinationImageController extends Controller
{
    public function create()
    {
        $destinations = Destination::all();
        return view('admin.destination.uploadImages',compact('destinations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000' // Validate image files
        ]);
        //dd($request->all());
        $destinationId = $request->input('destination_id');

        // Upload and store images in destination_images table
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/destination', $imageName);

                //$image->storeAs('destination_images', $imageName);

                $destinationImage = new DestinationImage();
                $destinationImage->destination_id = $destinationId;
                $destinationImage->image_path = $imagePath;
                $destinationImage->save();
            }
        }

        return redirect()->back()->with('success', 'Images uploaded successfully!');
    }
}
