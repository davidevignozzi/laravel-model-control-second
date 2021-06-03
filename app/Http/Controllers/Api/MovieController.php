<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return response()->json($movies);
    }

    public function show(Movie $movie){
        
        return response()->json($movie);
    }
}