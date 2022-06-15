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

    <div class="row row-cols-1 row-cols-md-2 gy-3">

        @forelse($tours as $tour)

        <div class="col">
            <div class="card bg-light">
                <img src="{{$tour->img}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$tour->location}}</h5>
                    <p class="card-text"><strong>Tour:</strong> {{$tour->duration}}</p>
                    <p class="card-text"><strong>Price:</strong> {{$tour->price}}</p>
                    <p class="card-text"><strong>Person:</strong> {{$tour->number_travelers}}</p>
                    <p class="card-text"><strong>Departure:</strong> {{$tour->city_departure}}</p>
                    <p class="card-text"><strong>Available:</strong> {{$tour->is_available}}</p>
                    <p class="card-text"><strong>Data from:</strong> {{$tour->date_departure}}</p>
                    <p class="card-text"><strong>Data to:</strong> {{$tour->date_return}}</p>
                    <p class="card-text"><strong>Description:</strong> {{$tour->description}}</p>

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