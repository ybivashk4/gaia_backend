<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu', [
            'menu' => Menu::all()
        ]);
    }

    public function create()
    {
        return view('menu_create', [
            'menu' => Menu::all()
        ]);
    }

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
        return redirect('/menu');
    }

    public function edit(string $id)
    {
        return view('menu_edit', [
            'menu' => Menu::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id)
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
        $menu = Menu::all()->where('id', $id)->first();
        $menu->update($validated);
        return redirect('/menu');
    }

    public function delete(string $id)
    {
        $menu = Menu::all()->where('id', $id)->first();
        $menu->delete();
        return redirect('/menu');
    }

}
