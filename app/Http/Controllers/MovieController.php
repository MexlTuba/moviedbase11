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

    public function movieGenres()
    {
        return response()->json(Movie::with(['genres'])->get());
    }
    
    public function movieRatingsRater()
    {
        return response()->json(Movie::with(['ratings.reviewer'])->get());
    }
}
