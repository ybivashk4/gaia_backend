<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        return view('review', ['reviews' => Review::all()]);
    }

    public function create()
    {
        return view('review_create', [
            'reviews' => Review::all(),
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'rating' => 'required|decimal:1,2',
            'review' => 'required|string',
            'image' => 'image',
            'date' => 'required|date'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $review = new Review($validated);
        $review->save();
        return redirect('/review');
    }

    public function edit(string $id)
    {
        return view('review_edit', [
            'review' => Review::all()->where('id', $id)->first(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'user_id' => 'required|integer',
            'rating' => 'required|decimal:1,2',
            'review' => 'required|string',
            'image' => 'required|image',
            'date' => 'required|date'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }
        $review = Review::all()->where('id', $id)->first();
        $review->update($validated);
        return redirect('/review');
    }

    public function delete(string $id)
    {
        $review = Review::all()->where('id', $id)->first();
        $review->delete();
        return redirect('/review');
    }
}
