<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response(Hall::limit($request->perpage ?? 5)->offset(
            ($request->perpage ?? 5) * ($request->page ?? 0)
        )->get());
    }

    public function total()
    {
        return response(Hall::all()->count());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $menu = new Hall($validated);
        $menu->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response(Hall::find($id));
    }
    public function get_picture(string $name)
    {
        return [
            'image_mime_type' => mime_content_type(asset($name)),
            'image' => base64_encode(file_get_contents(asset($name))),
        ];
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
