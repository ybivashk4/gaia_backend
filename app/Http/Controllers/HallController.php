<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index() {
        return view('hall', [
            'hall' => Hall::all()
        ]);
    }
}
