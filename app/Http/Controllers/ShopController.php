<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        return view('shop', ['shop' => Shop::all()]);
    }

    public function create()
    {
        return view('shop_create', ['shops' => Shop::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $shop = new Shop($validated);
        $shop->save();
        return redirect('/shop');
    }

    public function edit(string $id)
    {
        return view('shop_edit', [
            'shop' => Shop::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $shop = Shop::all()->where('id', $id)->first();
        $shop->update($validated);
        return redirect('/shop');
    }

    public function delete(string $id)
    {
        $shop = Shop::all()->where('id', $id)->first();
        $shop->delete();
        return redirect('/shop');
    }

}
