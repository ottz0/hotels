<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome', ['hotels' => Hotel::get()]);
    }
}
