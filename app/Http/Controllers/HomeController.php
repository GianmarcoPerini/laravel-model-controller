<?php

namespace App\Http\Controllers;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $films = Movie::all();
        return view('land', compact('films'));
    }
}
