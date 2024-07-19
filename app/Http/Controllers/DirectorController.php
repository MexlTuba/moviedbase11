<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        return response()->json(Director::with('movies')->get());
    }

    public function show($id)
    {
        return response()->json(Director::with('movies')->findOrFail($id));
    }
}
