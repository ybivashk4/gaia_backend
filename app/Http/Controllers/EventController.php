<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return view('event', ['event' => Event::all()]);
    }

    public function create()
    {
        return view('event_create', [
            'events' => Event::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }

        $event = new Event($validated);
        $event->save();
        return redirect('/event');
    }

    public function edit(string $id)
    {
        return view('event_edit', [
            'event' => Event::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $validated['image']->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image->getRealPath(), public_path('images/' . $filename));
            $validated['image'] = $filename;
        }

        $event = Event::all()->where('id', $id)->first();
        $event->title = $validated['title'];
        $event->description = $validated['description'];
        $event->date = $validated['date'];
        $event->image = $validated['image'];
        $event->save();
        return redirect('/event');
    }

    public function delete(string $id)
    {
        $event = Event::all()->where('id', $id)->first();
        $event->delete();
        return redirect('/event');
    }

}
