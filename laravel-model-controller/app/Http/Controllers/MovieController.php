<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    //
    public function index () {
        // $newMovie = new Movie();
    
        // return view('welcome');
        // $newMovie->save();
        $data = [
            "movies" => Movie::all()
        ];
        return view("welcome", $data);

      
    }


   
}
