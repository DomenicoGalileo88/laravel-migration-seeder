@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Tours</h1>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, animi?</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit.</p>
    </div>
</div>

<div class="container">

    <h2 class="text-center my-4">
        Tours in Northern Europe
    </h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3">

        @forelse($tours as $travel )

        <div class="col">

            <div class="card bg-light">
                <img src="{{$travel->img}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$travel->location}}</h5>
                    <p class="card-text"><strong>Tour:</strong> {{$travel->duration}}</p>
                    <p class="card-text"><strong>Price:</strong> {{$travel->price}}€</p>
                    <p class="card-text"><strong>Person:</strong> {{$travel->number_travelers}}</p>
                    <a href="{{route('travel.show', $travel)}}">
                        <button type="button" class="btn btn-primary">Show travel</button>
                    </a>

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