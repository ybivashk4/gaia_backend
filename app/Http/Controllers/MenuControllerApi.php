<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuControllerApi extends Controller
{
    public function get_picture(string $name)
    {
        return [
        'image_mime_type' => mime_content_type(asset($name)),
        'image' => base64_encode(file_get_contents(asset($name))),
        ];
    }

    public function index(Request $request)
    {
        return response(Menu::limit($request->perpage ?? 5)->offset(
            ($request->perpage ?? 5) * ($request->page ?? 0)
        )->get());
    }

    public function total()
    {
        return response(Menu::all()->count());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'allergens' => 'required|string',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $menu = new Menu($validated);
        $menu->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response(Menu::find($id));
    }
    public function edit(string $id)
    {
        return view('menu_edit', [
            'menu' => Menu::all()->where('id', $id)->first(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'allergens' => 'required|string',
            'image' => 'image'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $menu = Menu::all()->where('id', $id)->first();
        $menu->update($validated);
        return redirect()->back();
    }
    public function delete(string $id) {
        $menu = Menu::all()->where('id', $id)->first();
        $menu->delete();
        return redirect()->back();
    }

}
