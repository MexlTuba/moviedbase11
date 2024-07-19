<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        return response()->json(Actor::with('movies')->get());
    }

    public function show($id)
    {
        return response()->json(Actor::with('movies')->findOrFail($id));
    }
}
