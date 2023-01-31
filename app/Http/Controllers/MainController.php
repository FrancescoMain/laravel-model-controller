<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Movie;

class MainController extends Controller
{
    public function home() {




        return view('pages.home');
    }
}
