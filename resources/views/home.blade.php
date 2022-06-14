@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Home</h1>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, animi?</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit.</p>
    </div>
</div>

<div class="container">

    <h2 class="text-center my-4">
        Tours in Northern Europe
    </h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-3">

        @forelse($tours as $tour)

        <div class="col">
            <div class="card bg-light">
                <img src="{{$tour->img}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$tour->location}}</h5>
                    <p class="card-text">Tour: {{$tour->duration}}</p>
                    <p class="card-text">Price: {{$tour->price}}</p>
                    <a href="#" class="btn btn-primary">More info</a>
                </div>
            </div>
        </div>

        @empty

        <div class="col">
            <p>
                Nothing travel!!
            </p>
        </div>

        @endforelse

    </div>
</div>


@stop