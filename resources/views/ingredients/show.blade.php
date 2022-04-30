@extends('layouts.app')

@section('content')
    <h1>View Ingredient</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Ingredient Name: </h5>
        <p class="fw-bold">{{$ingredient->name}}</p>

        <br>

        <h5 class="text-warning">Brand: </h5>
        <p class="fw-bold">{{$ingredient->brand}}</p>

        <br>

        <h5 class="text-warning">Supplier: </h5>
        <p class="fw-bold">{{$ingredient->supplier}}</p>

        <br>

        <h5 class="text-warning">Price: </h5>
        <p class="fw-bold">{{$ingredient->price}}</p>

    </div>
@endsection


