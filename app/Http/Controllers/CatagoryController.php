<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;


class CatagoryController extends Controller
{
    public function index(Request $request )
    {
        $categories = categories::latest() ;
        if (!empty($request->get('keyword'))) {
           $categories = $categories->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $categories = $categories ->paginate(10) ;


        // Pass the data to the view and load the 'categories.index' Blade template
        //return view('categories.index', compact('categories'));
        return view('admin.catagory.catagories', compact('categories'));
    }
    public function create()
    {

        return view('admin.catagory.create');
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'max:255',
            'status' => 'in:0,1',
            // Validate that 'status' is either 0 or 1
        ]);

        // Create a new category using the validated data
        categories::create($validatedData);

        return redirect()->route('catagory.catagories')
            ->with('success', 'Category created successfully');
    }
    public function edit(string $id)
    {
        $catagory = categories::find($id);
        return view('admin.catagory.edit')->with('catagory', $catagory);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'max:255' . $id ,
            'status' => 'in:0,1',
        ]);
        $catagory = categories::findorfail($id);
        $catagory->name = $request->name;
        $catagory->slug = $request->slug;
        $catagory->status = $request->status;
        $catagory->update();
        return redirect()->route('catagory.catagories')
            ->with('success', 'Category updated successfully');
    }
    public function destroy(string $id)
    {
        $catagory = categories::findorfail($id);
        $catagory->delete();
        return redirect()->route('catagory.catagories')
            ->with('success', 'Category deleted successfully');
    }
}
