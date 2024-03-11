<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __invoke()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
