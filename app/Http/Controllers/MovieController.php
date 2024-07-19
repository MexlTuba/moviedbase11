<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json(Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get());
    }

    public function show($id)
    {
        return response()->json(Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id));
    }
}
