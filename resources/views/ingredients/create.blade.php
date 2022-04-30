@extends('layouts.app')

@section('content')

<h1>Add New Ingredient</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>   
</div>
@endif

<form action="{{route('ingredients.store')}}" method="ingredient">
    @csrf
    <input type="text" name="name" placeholder="Ingredient Name"/>
    <input type="text" name="brand" placeholder="Brand"/>
    <input type="text" name="supplier" placeholder="Supplier"/>
    <input type="number" name="cost" placeholder="Actual Cost"/>
    <button><a type="submit" href="{{route('ingredients.show', $ingredient->id)}}" action="/ingredients.index">Save New Ingredient</a></button>
</form>

@endsection
