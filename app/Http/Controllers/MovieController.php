<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {

        $movies = Movie::all();
        
        // 1. Method
        // $tmp = [
        //     'movies' => $movies
        //  ];
        
        // 2. Method
        // ['movies' => $movies]
        
        // 3. Method
        // compact('movies');
        return view('index', compact('movies'));
    }
}
