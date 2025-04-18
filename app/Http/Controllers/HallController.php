<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        return view('hall', [
            'hall' => Hall::all()
        ]);
    }

    public function create()
    {
        return view('hall_create', [
            'halls' => Hall::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'capacity' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $hall = new Hall($validated);
        $hall->save();
        return redirect('/hall');
    }

    public function edit(string $id)
    {
        return view('hall_edit', [
            'hall' => Hall::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'capacity' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $hall = Hall::all()->where('id', $id)->first();
        $hall->name = $validated['name'];
        $hall->capacity = $validated['capacity'];
        $hall->description = $validated['description'];
        $hall->image = $validated['image'];
        $hall->save();
        return redirect('/hall');
    }

    public function delete(string $id)
    {
        $hall = Hall::all()->where('id', $id)->first();
        $hall->delete();
        return redirect('/hall');
    }
}
