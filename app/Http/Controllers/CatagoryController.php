<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
        return view('admin.catagory.index');
    }
    public function create()
    {

        return view('admin.catagory.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:catagories,name',
            'slug' => 'required|unique:catagories,slug',
        ]);
        $catagory = new Catagory();
        $catagory->name = $request->name;
        $catagory->slug = $request->slug;
        $catagory->status = $request->status;
        $catagory->save();
        return redirect()->route('admin.catagory.index');
    }
    public function edit($id)
    {
        $catagory = Catagory::find($id);
        return view('admin.catagory.edit', compact('catagory'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:catagories,name,' . $id,
            'slug' => 'required|unique:catagories,slug,' . $id,
        ]);
        $catagory = Catagory::find($id);
        $catagory->name = $request->name;
        $catagory->slug = $request->slug;
        $catagory->status = $request->status;
        $catagory->save();
        return redirect()->route('admin.catagory.index');
    }
    public function destroy($id)
    {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return redirect()->route('admin.catagory.index');
    }
}