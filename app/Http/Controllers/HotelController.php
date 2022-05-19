<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotels.index', ['hotels' => Hotel::get()]);
    }
}
