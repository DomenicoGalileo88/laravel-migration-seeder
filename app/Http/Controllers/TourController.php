<?php

namespace App\Http\Controllers;

use App\Tour;


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
        return view('travel.index', compact('tours'));
    }

    public function show(Tour $travel)
    {
        return view('travel.show', compact('travel'));
    }
}
