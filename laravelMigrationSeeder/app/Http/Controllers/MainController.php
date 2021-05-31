<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexView(){

        $movies = Movie::all();
        return view('pages.index', compact('movies'));
    }
}
