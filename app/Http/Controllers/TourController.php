<?php

namespace App\Http\Controllers;

use App\Tour;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function travel()
    {
        $tours = Tour::all();
        //dd($tours);
        return view('tours.index', compact('tours'));
    }
}
