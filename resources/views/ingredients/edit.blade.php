@extends('layouts.app')

@section('content')

<h1>Edit Ingredient</h1>
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

<form action="{{route('ingredients.update', $ingredient->id)}}" method="ingredient">
    @csrf
    @method('put')
    <input type="text" name="name"  placeholder="Ingredient Name" value="{{$ingredient->name}}"/>
    <input type="text" name="brand"  placeholder="Brand" value="{{$ingredient->brand}}"/>
    <input type="text" name="supplier"  placeholder="Supplier" value="{{$ingredient->supplier}}"/>
    <input type="number" name="cost"  placeholder="Actual Cost" value="{{$ingredient->cost}}"/>

    <button><a class="btn btn-primary float-end px-5" type="submit" action="/ingredients.index">Save Ingredient</a></button>
</form>

@endsection