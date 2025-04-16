<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        return view('review', ['reviews' => Review::all()]);
    }
}
