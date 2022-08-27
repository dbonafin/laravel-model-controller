<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class HomeController extends Controller
{
    public function movies() {
        $movies = movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('homepage', $data);
    }
}
