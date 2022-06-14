<?php

namespace App\Http\Controllers;

use App\Tour;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        //dd($tours);
        return view('home', compact('tours'));
    }
}
