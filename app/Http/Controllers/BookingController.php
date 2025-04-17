<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hall;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view('booking', [
            'booking' => Booking::all()
        ]);
    }

    public function create()
    {
        return view('booking_create', [
            'users' => User::all(),
            'halls' => Hall::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'hall_id' => 'required|integer',
            'date' => 'required|date',
            'num_uf_guests' => 'required|integer',
            'additional_service' => 'string',
            'status' => 'required|string'
        ]);
        $booking = new Booking($validated);
        $booking->save();
        return redirect('/booking');
    }

    public function edit(string $id)
    {
        return view('booking_edit', [
            'booking' => Booking::all()->where('id', $id)->first(),
            'users' => User::all(),
            'halls' => Hall::all(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'hall_id' => 'required|integer',
            'date' => 'required|date',
            'num_uf_guests' => 'required|integer',
            'additional_service' => 'string',
            'status' => 'required|string'
        ]);
        $booking = Booking::all()->where('id', $id)->first();
        $booking->user_id = $validated['user_id'];
        $booking->hall_id = $validated['hall_id'];
        $booking->date = $validated['date'];
        $booking->num_uf_guests = $validated['num_uf_guests'];
        $booking->additional_service = $validated['additional_service'];
        $booking->status = $validated['status'];
        $booking->save();
        return redirect('/booking');
    }

    public function delete(string $id)
    {
        $booking = Booking::all()->where('id', $id)->first();
        $booking->delete();
        return redirect('/booking');
    }

}
