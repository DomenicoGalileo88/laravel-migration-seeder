@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">{{$travel->location}}</h1>
        <p class="lead">{{$travel->description}}</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit.</p>
    </div>
</div>

<div class="container">

    <div class="card bg-light">
        <img src="{{$travel->img}}" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"><strong>Tour:</strong> {{$travel->duration}}</p>
            <p class="card-text"><strong>Person:</strong> {{$travel->number_travelers}}</p>
            <p class="card-text"><strong>Departure:</strong> {{$travel->city_departure}}</p>
            <p class="card-text"><strong>Data from:</strong> {{$travel->date_departure}}</p>
            <p class="card-text"><strong>Data to:</strong> {{$travel->date_return}}</p>
            <p class="card-text"><strong>Price:</strong> {{$travel->price}}€</p>
            <p class="card-text"><strong>Available:</strong> {{$travel->is_available}}</p>

        </div>
    </div>

</div>


@stop